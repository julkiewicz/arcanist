<?php

/**
 * PHPUnit Result Parsing utility
 *
 * For an example on how to integrate with your test engine, see
 * @{class:PhpunitTestEngine}.
 */
final class ArcanistPhpunitTestResultParser extends ArcanistTestResultParser {

  /**
   * Parse test results from phpunit json report
   *
   * @param string $path Path to test
   * @param string $test_results String containing phpunit json report
   *
   * @return array
   */
  public function parseTestResults($path, $test_results) {
    if (!$test_results) {
      $result = id(new ArcanistUnitTestResult())
        ->setName($path)
        ->setUserData($this->stderr)
        ->setResult(ArcanistUnitTestResult::RESULT_BROKEN);
      return array($result);
    }

    $report = $this->getJsonReport($test_results);

    // coverage is for all testcases in the executed $path
    $coverage = array();
    if ($this->enableCoverage !== false) {
      $coverage = $this->readCoverage();
    }

    $results = array();
    foreach ($report as $event) {
      switch (idx($event, 'event')) {
      case 'test':
        break;
      case 'testStart':
        $last_test_finished = false;
        // fall through
        default:
          continue 2; // switch + loop
      }

      $status = ArcanistUnitTestResult::RESULT_PASS;
      $user_data = '';

      if ('fail' == idx($event, 'status')) {
        $status = ArcanistUnitTestResult::RESULT_FAIL;
        $user_data  .= idx($event, 'message')."\n";
        foreach (idx($event, 'trace') as $trace) {
          $user_data .= sprintf(
            "\n%s:%s",
            idx($trace, 'file'),
            idx($trace, 'line'));
        }
      } else if ('error' == idx($event, 'status')) {
        if (strpos(idx($event, 'message'), 'Skipped Test') !== false) {
          $status = ArcanistUnitTestResult::RESULT_SKIP;
          $user_data .= idx($event, 'message');
        } else if (strpos(
            idx($event, 'message'),
            'Incomplete Test') !== false) {
          $status = ArcanistUnitTestResult::RESULT_SKIP;
          $user_data .= idx($event, 'message');
        } else {
          $status = ArcanistUnitTestResult::RESULT_BROKEN;
          $user_data  .= idx($event, 'message');
          foreach (idx($event, 'trace') as $trace) {
            $user_data .= sprintf(
              "\n%s:%s",
              idx($trace, 'file'),
              idx($trace, 'line'));
          }
        }
      }

      $name = preg_replace('/ \(.*\)/s', '', idx($event, 'test'));

      $result = new ArcanistUnitTestResult();
      $result->setName($name);
      $result->setResult($status);
      $result->setDuration(idx($event, 'time'));
      $result->setCoverage($coverage);
      $result->setUserData($user_data);

      $results[] = $result;
      $last_test_finished = true;
    }

    if (!$last_test_finished) {
      $results[] = id(new ArcanistUnitTestResult())
        ->setName(idx($event, 'test')) // use last event
        ->setUserData($this->stderr)
        ->setResult(ArcanistUnitTestResult::RESULT_BROKEN);
    }
    return $results;
  }

  /**
   * Read the coverage from phpunit generated clover report
   *
   * @return array
   */
  private function readCoverage() {
    $test_results = Filesystem::readFile($this->coverageFile);
    if (empty($test_results)) {
      return array();
    }

    $coverage_dom = new DOMDocument();
    $coverage_dom->loadXML($test_results);

    $reports = array();
    $files = $coverage_dom->getElementsByTagName('file');

    foreach ($files as $file) {
      $class_path = $file->getAttribute('name');
      if (empty($this->affectedTests[$class_path])) {
        continue;
      }
      $test_path = $this->affectedTests[$file->getAttribute('name')];
      // get total line count in file
      $line_count = count(file($class_path));

      $coverage = '';
      $start_line = 1;
      $lines = $file->getElementsByTagName('line');
      for ($ii = 0; $ii < $lines->length; $ii++) {
        $line = $lines->item($ii);
        for (; $start_line < $line->getAttribute('num'); $start_line++) {
          $coverage .= 'N';
        }

        if ($line->getAttribute('type') != 'stmt') {
          $coverage .= 'N';
        } else {
          if ((int)$line->getAttribute('count') == 0) {
            $coverage .= 'U';
          } else if ((int)$line->getAttribute('count') > 0) {
            $coverage .= 'C';
          }
        }

        $start_line++;
      }

      for (; $start_line <= $line_count; $start_line++) {
        $coverage .= 'N';
      }

      $len = strlen($this->projectRoot.DIRECTORY_SEPARATOR);
      $class_path = substr($class_path, $len);
      $reports[$class_path] = $coverage;
    }

    return $reports;
  }

  /**
   * We need this non-sense to make json generated by phpunit
   * valid.
   *
   * @param string $json String containing JSON report
   * @return array JSON decoded array
   */
  private function getJsonReport($json) {

    if (empty($json)) {
      throw new Exception(
        pht(
          'JSON report file is empty, it probably means that phpunit '.
          'failed to run tests. Try running %s with %s option and then run '.
          'generated phpunit command yourself, you might get the answer.',
          'arc unit',
          '--trace'));
    }

    $json = preg_replace('/}{\s*"/', '},{"', $json);
    $json = '['.$json.']';
    return phutil_json_decode($json);
  }

}
