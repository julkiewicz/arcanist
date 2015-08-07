<?php

/**
 * Very basic 'unittest.py' unit test engine wrapper.
 *
 * @group unitrun
 */
final class PyunitTestEngine extends ArcanistUnitTestEngine {

  public function run() {
    $pyunit_tmp = new TempDirectory(TRUE);
    $cmd_line = csprintf('python runtests.py --xml-output=%s discover', $pyunit_tmp);
    $future = new ExecFuture('%C', $cmd_line);
    list($stdout, $stderr) = $future->resolve();
    $files = $this->getFiles((string)$pyunit_tmp);
    return $this->getResults($files);
  }

  private function getResults($files) {
    $parser = new ArcanistXUnitTestResultParser();
    $results = array();
    foreach ($files as $file) {
      $contents = Filesystem::readFile($file);
      $res = $parser->parseTestResults($contents);
      $results = array_merge($results, $res);
    }
    return $results;
  }

  private function getFiles($dir) {
    $entries = scandir($dir);
    $files = array();
    foreach ($entries as $entry) {
      if (is_file($dir.'/'.$entry)) {
        $files[] = $dir.'/'.$entry;
      }
    }
    return $files;
  }

}
