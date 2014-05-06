<?php

/**
 * This file is automatically generated. Use 'arc liberate' to rebuild it.
 * @generated
 * @phutil-library-version 2
 */

phutil_register_library_map(array(
  '__library_version__' => 2,
  'class' =>
  array(
    'ArcanistAliasWorkflow' => 'workflow/ArcanistAliasWorkflow.php',
    'ArcanistAmendWorkflow' => 'workflow/ArcanistAmendWorkflow.php',
    'ArcanistAnoidWorkflow' => 'workflow/ArcanistAnoidWorkflow.php',
    'ArcanistArcanistLinterTestCase' => 'lint/linter/__tests__/ArcanistArcanistLinterTestCase.php',
    'ArcanistBackoutWorkflow' => 'workflow/ArcanistBackoutWorkflow.php',
    'ArcanistBaseCommitParser' => 'parser/ArcanistBaseCommitParser.php',
    'ArcanistBaseCommitParserTestCase' => 'parser/__tests__/ArcanistBaseCommitParserTestCase.php',
    'ArcanistBaseTestResultParser' => 'unit/engine/ArcanistBaseTestResultParser.php',
    'ArcanistBaseUnitTestEngine' => 'unit/engine/ArcanistBaseUnitTestEngine.php',
    'ArcanistBaseWorkflow' => 'workflow/ArcanistBaseWorkflow.php',
    'ArcanistBaseXHPASTLinter' => 'lint/linter/ArcanistBaseXHPASTLinter.php',
    'ArcanistBookmarkWorkflow' => 'workflow/ArcanistBookmarkWorkflow.php',
    'ArcanistBranchWorkflow' => 'workflow/ArcanistBranchWorkflow.php',
    'ArcanistBritishTestCase' => 'configuration/__tests__/ArcanistBritishTestCase.php',
    'ArcanistBrowseWorkflow' => 'workflow/ArcanistBrowseWorkflow.php',
    'ArcanistBundle' => 'parser/ArcanistBundle.php',
    'ArcanistBundleTestCase' => 'parser/__tests__/ArcanistBundleTestCase.php',
    'ArcanistCSSLintLinter' => 'lint/linter/ArcanistCSSLintLinter.php',
    'ArcanistCSSLintLinterTestCase' => 'lint/linter/__tests__/ArcanistCSSLintLinterTestCase.php',
    'ArcanistCSharpLinter' => 'lint/linter/ArcanistCSharpLinter.php',
    'ArcanistCallConduitWorkflow' => 'workflow/ArcanistCallConduitWorkflow.php',
    'ArcanistCapabilityNotSupportedException' => 'workflow/exception/ArcanistCapabilityNotSupportedException.php',
    'ArcanistChooseInvalidRevisionException' => 'exception/ArcanistChooseInvalidRevisionException.php',
    'ArcanistChooseNoRevisionsException' => 'exception/ArcanistChooseNoRevisionsException.php',
    'ArcanistCloseRevisionWorkflow' => 'workflow/ArcanistCloseRevisionWorkflow.php',
    'ArcanistCloseWorkflow' => 'workflow/ArcanistCloseWorkflow.php',
    'ArcanistCommentRemover' => 'parser/ArcanistCommentRemover.php',
    'ArcanistCommentRemoverTestCase' => 'parser/__tests__/ArcanistCommentRemoverTestCase.php',
    'ArcanistCommitWorkflow' => 'workflow/ArcanistCommitWorkflow.php',
    'ArcanistConduitLinter' => 'lint/linter/ArcanistConduitLinter.php',
    'ArcanistConfiguration' => 'configuration/ArcanistConfiguration.php',
    'ArcanistConfigurationDrivenLintEngine' => 'lint/engine/ArcanistConfigurationDrivenLintEngine.php',
    'ArcanistConfigurationManager' => 'configuration/ArcanistConfigurationManager.php',
    'ArcanistCoverWorkflow' => 'workflow/ArcanistCoverWorkflow.php',
    'ArcanistCppcheckLinter' => 'lint/linter/ArcanistCppcheckLinter.php',
    'ArcanistCpplintLinter' => 'lint/linter/ArcanistCpplintLinter.php',
    'ArcanistCpplintLinterTestCase' => 'lint/linter/__tests__/ArcanistCpplintLinterTestCase.php',
    'ArcanistDiffChange' => 'parser/diff/ArcanistDiffChange.php',
    'ArcanistDiffChangeType' => 'parser/diff/ArcanistDiffChangeType.php',
    'ArcanistDiffHunk' => 'parser/diff/ArcanistDiffHunk.php',
    'ArcanistDiffParser' => 'parser/ArcanistDiffParser.php',
    'ArcanistDiffParserTestCase' => 'parser/__tests__/ArcanistDiffParserTestCase.php',
    'ArcanistDiffUtils' => 'difference/ArcanistDiffUtils.php',
    'ArcanistDiffUtilsTestCase' => 'difference/__tests__/ArcanistDiffUtilsTestCase.php',
    'ArcanistDiffWorkflow' => 'workflow/ArcanistDiffWorkflow.php',
    'ArcanistDifferentialCommitMessage' => 'differential/ArcanistDifferentialCommitMessage.php',
    'ArcanistDifferentialCommitMessageParserException' => 'differential/ArcanistDifferentialCommitMessageParserException.php',
    'ArcanistDifferentialDependencyGraph' => 'differential/ArcanistDifferentialDependencyGraph.php',
    'ArcanistDifferentialRevisionHash' => 'differential/constants/ArcanistDifferentialRevisionHash.php',
    'ArcanistDifferentialRevisionStatus' => 'differential/constants/ArcanistDifferentialRevisionStatus.php',
    'ArcanistDownloadWorkflow' => 'workflow/ArcanistDownloadWorkflow.php',
    'ArcanistEventType' => 'events/constant/ArcanistEventType.php',
    'ArcanistExportWorkflow' => 'workflow/ArcanistExportWorkflow.php',
    'ArcanistExternalLinter' => 'lint/linter/ArcanistExternalLinter.php',
    'ArcanistFeatureWorkflow' => 'workflow/ArcanistFeatureWorkflow.php',
    'ArcanistFilenameLinter' => 'lint/linter/ArcanistFilenameLinter.php',
    'ArcanistFlagWorkflow' => 'workflow/ArcanistFlagWorkflow.php',
    'ArcanistFlake8Linter' => 'lint/linter/ArcanistFlake8Linter.php',
    'ArcanistFlake8LinterTestCase' => 'lint/linter/__tests__/ArcanistFlake8LinterTestCase.php',
    'ArcanistFutureLinter' => 'lint/linter/ArcanistFutureLinter.php',
    'ArcanistGeneratedLinter' => 'lint/linter/ArcanistGeneratedLinter.php',
    'ArcanistGetConfigWorkflow' => 'workflow/ArcanistGetConfigWorkflow.php',
    'ArcanistGitAPI' => 'repository/api/ArcanistGitAPI.php',
    'ArcanistGitHookPreReceiveWorkflow' => 'workflow/ArcanistGitHookPreReceiveWorkflow.php',
    'ArcanistHelpWorkflow' => 'workflow/ArcanistHelpWorkflow.php',
    'ArcanistHgClientChannel' => 'hgdaemon/ArcanistHgClientChannel.php',
    'ArcanistHgProxyClient' => 'hgdaemon/ArcanistHgProxyClient.php',
    'ArcanistHgProxyServer' => 'hgdaemon/ArcanistHgProxyServer.php',
    'ArcanistHgServerChannel' => 'hgdaemon/ArcanistHgServerChannel.php',
    'ArcanistHookAPI' => 'repository/hookapi/ArcanistHookAPI.php',
    'ArcanistInlinesWorkflow' => 'workflow/ArcanistInlinesWorkflow.php',
    'ArcanistInstallCertificateWorkflow' => 'workflow/ArcanistInstallCertificateWorkflow.php',
    'ArcanistJSHintLinter' => 'lint/linter/ArcanistJSHintLinter.php',
    'ArcanistJSHintLinterTestCase' => 'lint/linter/__tests__/ArcanistJSHintLinterTestCase.php',
    'ArcanistLandWorkflow' => 'workflow/ArcanistLandWorkflow.php',
    'ArcanistLiberateWorkflow' => 'workflow/ArcanistLiberateWorkflow.php',
    'ArcanistLintConsoleRenderer' => 'lint/renderer/ArcanistLintConsoleRenderer.php',
    'ArcanistLintEngine' => 'lint/engine/ArcanistLintEngine.php',
    'ArcanistLintJSONRenderer' => 'lint/renderer/ArcanistLintJSONRenderer.php',
    'ArcanistLintLikeCompilerRenderer' => 'lint/renderer/ArcanistLintLikeCompilerRenderer.php',
    'ArcanistLintMessage' => 'lint/ArcanistLintMessage.php',
    'ArcanistLintNoneRenderer' => 'lint/renderer/ArcanistLintNoneRenderer.php',
    'ArcanistLintPatcher' => 'lint/ArcanistLintPatcher.php',
    'ArcanistLintRenderer' => 'lint/renderer/ArcanistLintRenderer.php',
    'ArcanistLintResult' => 'lint/ArcanistLintResult.php',
    'ArcanistLintSeverity' => 'lint/ArcanistLintSeverity.php',
    'ArcanistLintSummaryRenderer' => 'lint/renderer/ArcanistLintSummaryRenderer.php',
    'ArcanistLintWorkflow' => 'workflow/ArcanistLintWorkflow.php',
    'ArcanistLinter' => 'lint/linter/ArcanistLinter.php',
    'ArcanistLinterTestCase' => 'lint/linter/__tests__/ArcanistLinterTestCase.php',
    'ArcanistListWorkflow' => 'workflow/ArcanistListWorkflow.php',
    'ArcanistMarkCommittedWorkflow' => 'workflow/ArcanistMarkCommittedWorkflow.php',
    'ArcanistMercurialAPI' => 'repository/api/ArcanistMercurialAPI.php',
    'ArcanistMercurialParser' => 'repository/parser/ArcanistMercurialParser.php',
    'ArcanistMercurialParserTestCase' => 'repository/parser/__tests__/ArcanistMercurialParserTestCase.php',
    'ArcanistMergeConflictLinter' => 'lint/linter/ArcanistMergeConflictLinter.php',
    'ArcanistNoEffectException' => 'exception/usage/ArcanistNoEffectException.php',
    'ArcanistNoEngineException' => 'exception/usage/ArcanistNoEngineException.php',
    'ArcanistNoLintLinter' => 'lint/linter/ArcanistNoLintLinter.php',
    'ArcanistNoLintTestCaseMisnamed' => 'lint/linter/__tests__/ArcanistNoLintTestCase.php',
    'ArcanistPEP8Linter' => 'lint/linter/ArcanistPEP8Linter.php',
    'ArcanistPEP8LinterTestCase' => 'lint/linter/__tests__/ArcanistPEP8LinterTestCase.php',
    'ArcanistPHPCSLinterTestCase' => 'lint/linter/__tests__/ArcanistPHPCSLinterTestCase.php',
    'ArcanistPasteWorkflow' => 'workflow/ArcanistPasteWorkflow.php',
    'ArcanistPatchWorkflow' => 'workflow/ArcanistPatchWorkflow.php',
    'ArcanistPhpcsLinter' => 'lint/linter/ArcanistPhpcsLinter.php',
    'ArcanistPhutilLibraryLinter' => 'lint/linter/ArcanistPhutilLibraryLinter.php',
    'ArcanistPhutilTestCase' => 'unit/engine/phutil/ArcanistPhutilTestCase.php',
    'ArcanistPhutilTestCaseTestCase' => 'unit/engine/phutil/testcase/ArcanistPhutilTestCaseTestCase.php',
    'ArcanistPhutilTestSkippedException' => 'unit/engine/phutil/testcase/ArcanistPhutilTestSkippedException.php',
    'ArcanistPhutilTestTerminatedException' => 'unit/engine/phutil/testcase/ArcanistPhutilTestTerminatedException.php',
    'ArcanistPhutilXHPASTLinter' => 'lint/linter/ArcanistPhutilXHPASTLinter.php',
    'ArcanistPhutilXHPASTLinterTestCase' => 'lint/linter/__tests__/ArcanistPhutilXHPASTLinterTestCase.php',
    'ArcanistPyFlakesLinter' => 'lint/linter/ArcanistPyFlakesLinter.php',
    'ArcanistPyFlakesLinterTestCase' => 'lint/linter/__tests__/ArcanistPyFlakesLinterTestCase.php',
    'ArcanistPyLintLinter' => 'lint/linter/ArcanistPyLintLinter.php',
    'ArcanistRepositoryAPI' => 'repository/api/ArcanistRepositoryAPI.php',
    'ArcanistRepositoryAPIMiscTestCase' => 'repository/api/__tests__/ArcanistRepositoryAPIMiscTestCase.php',
    'ArcanistRepositoryAPIStateTestCase' => 'repository/api/__tests__/ArcanistRepositoryAPIStateTestCase.php',
    'ArcanistRevertWorkflow' => 'workflow/ArcanistRevertWorkflow.php',
    'ArcanistRubyLinter' => 'lint/linter/ArcanistRubyLinter.php',
    'ArcanistRubyLinterTestCase' => 'lint/linter/__tests__/ArcanistRubyLinterTestCase.php',
    'ArcanistScalaSBTLinter' => 'lint/linter/ArcanistScalaSBTLinter.php',
    'ArcanistScriptAndRegexLinter' => 'lint/linter/ArcanistScriptAndRegexLinter.php',
    'ArcanistSetConfigWorkflow' => 'workflow/ArcanistSetConfigWorkflow.php',
    'ArcanistSettings' => 'configuration/ArcanistSettings.php',
    'ArcanistShellCompleteWorkflow' => 'workflow/ArcanistShellCompleteWorkflow.php',
    'ArcanistSingleLintEngine' => 'lint/engine/ArcanistSingleLintEngine.php',
    'ArcanistSpellingDefaultData' => 'lint/linter/spelling/ArcanistSpellingDefaultData.php',
    'ArcanistSpellingLinter' => 'lint/linter/ArcanistSpellingLinter.php',
    'ArcanistSpellingLinterTestCase' => 'lint/linter/__tests__/ArcanistSpellingLinterTestCase.php',
    'ArcanistSubversionAPI' => 'repository/api/ArcanistSubversionAPI.php',
    'ArcanistSubversionHookAPI' => 'repository/hookapi/ArcanistSubversionHookAPI.php',
    'ArcanistSvnHookPreCommitWorkflow' => 'workflow/ArcanistSvnHookPreCommitWorkflow.php',
    'ArcanistTasksWorkflow' => 'workflow/ArcanistTasksWorkflow.php',
    'ArcanistTestCase' => 'infrastructure/testing/ArcanistTestCase.php',
    'ArcanistTextLinter' => 'lint/linter/ArcanistTextLinter.php',
    'ArcanistTextLinterTestCase' => 'lint/linter/__tests__/ArcanistTextLinterTestCase.php',
    'ArcanistTodoWorkflow' => 'workflow/ArcanistTodoWorkflow.php',
    'ArcanistUncommittedChangesException' => 'exception/usage/ArcanistUncommittedChangesException.php',
    'ArcanistUnitConsoleRenderer' => 'unit/renderer/ArcanistUnitConsoleRenderer.php',
    'ArcanistUnitRenderer' => 'unit/renderer/ArcanistUnitRenderer.php',
    'ArcanistUnitTestResult' => 'unit/ArcanistUnitTestResult.php',
    'ArcanistUnitWorkflow' => 'workflow/ArcanistUnitWorkflow.php',
    'ArcanistUpgradeWorkflow' => 'workflow/ArcanistUpgradeWorkflow.php',
    'ArcanistUploadWorkflow' => 'workflow/ArcanistUploadWorkflow.php',
    'ArcanistUsageException' => 'exception/ArcanistUsageException.php',
    'ArcanistUserAbortException' => 'exception/usage/ArcanistUserAbortException.php',
    'ArcanistWhichWorkflow' => 'workflow/ArcanistWhichWorkflow.php',
    'ArcanistWorkingCopyIdentity' => 'workingcopyidentity/ArcanistWorkingCopyIdentity.php',
    'ArcanistXHPASTLintNamingHook' => 'lint/linter/xhpast/ArcanistXHPASTLintNamingHook.php',
    'ArcanistXHPASTLintNamingHookTestCase' => 'lint/linter/xhpast/__tests__/ArcanistXHPASTLintNamingHookTestCase.php',
    'ArcanistXHPASTLintSwitchHook' => 'lint/linter/xhpast/ArcanistXHPASTLintSwitchHook.php',
    'ArcanistXHPASTLintTestSwitchHook' => 'lint/linter/__tests__/ArcanistXHPASTLintTestSwitchHook.php',
    'ArcanistXHPASTLinter' => 'lint/linter/ArcanistXHPASTLinter.php',
    'ArcanistXHPASTLinterTestCase' => 'lint/linter/__tests__/ArcanistXHPASTLinterTestCase.php',
    'ArcanistXUnitTestResultParser' => 'unit/engine/ArcanistXUnitTestResultParser.php',
    'CSharpToolsTestEngine' => 'unit/engine/CSharpToolsTestEngine.php',
    'ComprehensiveLintEngine' => 'lint/engine/ComprehensiveLintEngine.php',
    'ExampleLintEngine' => 'lint/engine/ExampleLintEngine.php',
    'GoTestResultParser' => 'unit/engine/GoTestResultParser.php',
    'GoTestResultParserTestCase' => 'unit/engine/__tests__/GoTestResultParserTestCase.php',
    'NoseTestEngine' => 'unit/engine/NoseTestEngine.php',
    'PHPUnitTestEngineTestCase' => 'unit/engine/__tests__/PHPUnitTestEngineTestCase.php',
    'PhpunitResultParser' => 'unit/engine/PhpunitResultParser.php',
    'PhpunitTestEngine' => 'unit/engine/PhpunitTestEngine.php',
    'PhutilLintEngine' => 'lint/engine/PhutilLintEngine.php',
    'PhutilUnitTestEngine' => 'unit/engine/PhutilUnitTestEngine.php',
    'PhutilUnitTestEngineTestCase' => 'unit/engine/__tests__/PhutilUnitTestEngineTestCase.php',
    'PytestTestEngine' => 'unit/engine/PytestTestEngine.php',
    'PyunitTestEngine' => 'unit/engine/PyunitTestEngine.php',
    'UnitTestableArcanistLintEngine' => 'lint/engine/UnitTestableArcanistLintEngine.php',
    'XUnitTestEngine' => 'unit/engine/XUnitTestEngine.php',
    'XUnitTestResultParserTestCase' => 'unit/engine/__tests__/XUnitTestResultParserTestCase.php',
  ),
  'function' =>
  array(
  ),
  'xmap' =>
  array(
    'ArcanistAliasWorkflow' => 'ArcanistBaseWorkflow',
    'ArcanistAmendWorkflow' => 'ArcanistBaseWorkflow',
    'ArcanistAnoidWorkflow' => 'ArcanistBaseWorkflow',
    'ArcanistArcanistLinterTestCase' => 'ArcanistLinterTestCase',
    'ArcanistBackoutWorkflow' => 'ArcanistBaseWorkflow',
    'ArcanistBaseCommitParserTestCase' => 'ArcanistTestCase',
    'ArcanistBaseWorkflow' => 'Phobject',
    'ArcanistBaseXHPASTLinter' => 'ArcanistFutureLinter',
    'ArcanistBookmarkWorkflow' => 'ArcanistFeatureWorkflow',
    'ArcanistBranchWorkflow' => 'ArcanistFeatureWorkflow',
    'ArcanistBritishTestCase' => 'ArcanistTestCase',
    'ArcanistBrowseWorkflow' => 'ArcanistBaseWorkflow',
    'ArcanistBundleTestCase' => 'ArcanistTestCase',
    'ArcanistCSSLintLinter' => 'ArcanistExternalLinter',
    'ArcanistCSSLintLinterTestCase' => 'ArcanistArcanistLinterTestCase',
    'ArcanistCSharpLinter' => 'ArcanistLinter',
    'ArcanistCallConduitWorkflow' => 'ArcanistBaseWorkflow',
    'ArcanistCapabilityNotSupportedException' => 'Exception',
    'ArcanistChooseInvalidRevisionException' => 'Exception',
    'ArcanistChooseNoRevisionsException' => 'Exception',
    'ArcanistCloseRevisionWorkflow' => 'ArcanistBaseWorkflow',
    'ArcanistCloseWorkflow' => 'ArcanistBaseWorkflow',
    'ArcanistCommentRemoverTestCase' => 'ArcanistTestCase',
    'ArcanistCommitWorkflow' => 'ArcanistBaseWorkflow',
    'ArcanistConduitLinter' => 'ArcanistLinter',
    'ArcanistConfigurationDrivenLintEngine' => 'ArcanistLintEngine',
    'ArcanistCoverWorkflow' => 'ArcanistBaseWorkflow',
    'ArcanistCppcheckLinter' => 'ArcanistLinter',
    'ArcanistCpplintLinter' => 'ArcanistLinter',
    'ArcanistCpplintLinterTestCase' => 'ArcanistArcanistLinterTestCase',
    'ArcanistDiffParserTestCase' => 'ArcanistTestCase',
    'ArcanistDiffUtilsTestCase' => 'ArcanistTestCase',
    'ArcanistDiffWorkflow' => 'ArcanistBaseWorkflow',
    'ArcanistDifferentialCommitMessageParserException' => 'Exception',
    'ArcanistDifferentialDependencyGraph' => 'AbstractDirectedGraph',
    'ArcanistDownloadWorkflow' => 'ArcanistBaseWorkflow',
    'ArcanistEventType' => 'PhutilEventType',
    'ArcanistExportWorkflow' => 'ArcanistBaseWorkflow',
    'ArcanistExternalLinter' => 'ArcanistFutureLinter',
    'ArcanistFeatureWorkflow' => 'ArcanistBaseWorkflow',
    'ArcanistFilenameLinter' => 'ArcanistLinter',
    'ArcanistFlagWorkflow' => 'ArcanistBaseWorkflow',
    'ArcanistFlake8Linter' => 'ArcanistExternalLinter',
    'ArcanistFlake8LinterTestCase' => 'ArcanistArcanistLinterTestCase',
    'ArcanistFutureLinter' => 'ArcanistLinter',
    'ArcanistGeneratedLinter' => 'ArcanistLinter',
    'ArcanistGetConfigWorkflow' => 'ArcanistBaseWorkflow',
    'ArcanistGitAPI' => 'ArcanistRepositoryAPI',
    'ArcanistGitHookPreReceiveWorkflow' => 'ArcanistBaseWorkflow',
    'ArcanistHelpWorkflow' => 'ArcanistBaseWorkflow',
    'ArcanistHgClientChannel' => 'PhutilProtocolChannel',
    'ArcanistHgServerChannel' => 'PhutilProtocolChannel',
    'ArcanistInlinesWorkflow' => 'ArcanistBaseWorkflow',
    'ArcanistInstallCertificateWorkflow' => 'ArcanistBaseWorkflow',
    'ArcanistJSHintLinter' => 'ArcanistExternalLinter',
    'ArcanistJSHintLinterTestCase' => 'ArcanistArcanistLinterTestCase',
    'ArcanistLandWorkflow' => 'ArcanistBaseWorkflow',
    'ArcanistLiberateWorkflow' => 'ArcanistBaseWorkflow',
    'ArcanistLintConsoleRenderer' => 'ArcanistLintRenderer',
    'ArcanistLintJSONRenderer' => 'ArcanistLintRenderer',
    'ArcanistLintLikeCompilerRenderer' => 'ArcanistLintRenderer',
    'ArcanistLintNoneRenderer' => 'ArcanistLintRenderer',
    'ArcanistLintSummaryRenderer' => 'ArcanistLintRenderer',
    'ArcanistLintWorkflow' => 'ArcanistBaseWorkflow',
    'ArcanistLinterTestCase' => 'ArcanistPhutilTestCase',
    'ArcanistListWorkflow' => 'ArcanistBaseWorkflow',
    'ArcanistMarkCommittedWorkflow' => 'ArcanistBaseWorkflow',
    'ArcanistMercurialAPI' => 'ArcanistRepositoryAPI',
    'ArcanistMercurialParserTestCase' => 'ArcanistTestCase',
    'ArcanistMergeConflictLinter' => 'ArcanistLinter',
    'ArcanistNoEffectException' => 'ArcanistUsageException',
    'ArcanistNoEngineException' => 'ArcanistUsageException',
    'ArcanistNoLintLinter' => 'ArcanistLinter',
    'ArcanistNoLintTestCaseMisnamed' => 'ArcanistLinterTestCase',
    'ArcanistPEP8Linter' => 'ArcanistExternalLinter',
    'ArcanistPEP8LinterTestCase' => 'ArcanistArcanistLinterTestCase',
    'ArcanistPHPCSLinterTestCase' => 'ArcanistArcanistLinterTestCase',
    'ArcanistPasteWorkflow' => 'ArcanistBaseWorkflow',
    'ArcanistPatchWorkflow' => 'ArcanistBaseWorkflow',
    'ArcanistPhpcsLinter' => 'ArcanistExternalLinter',
    'ArcanistPhutilLibraryLinter' => 'ArcanistLinter',
    'ArcanistPhutilTestCaseTestCase' => 'ArcanistPhutilTestCase',
    'ArcanistPhutilTestSkippedException' => 'Exception',
    'ArcanistPhutilTestTerminatedException' => 'Exception',
    'ArcanistPhutilXHPASTLinter' => 'ArcanistBaseXHPASTLinter',
    'ArcanistPhutilXHPASTLinterTestCase' => 'ArcanistArcanistLinterTestCase',
    'ArcanistPyFlakesLinter' => 'ArcanistExternalLinter',
    'ArcanistPyFlakesLinterTestCase' => 'ArcanistArcanistLinterTestCase',
    'ArcanistPyLintLinter' => 'ArcanistLinter',
    'ArcanistRepositoryAPIMiscTestCase' => 'ArcanistTestCase',
    'ArcanistRepositoryAPIStateTestCase' => 'ArcanistTestCase',
    'ArcanistRevertWorkflow' => 'ArcanistBaseWorkflow',
    'ArcanistRubyLinter' => 'ArcanistExternalLinter',
    'ArcanistRubyLinterTestCase' => 'ArcanistArcanistLinterTestCase',
    'ArcanistScalaSBTLinter' => 'ArcanistLinter',
    'ArcanistScriptAndRegexLinter' => 'ArcanistLinter',
    'ArcanistSetConfigWorkflow' => 'ArcanistBaseWorkflow',
    'ArcanistShellCompleteWorkflow' => 'ArcanistBaseWorkflow',
    'ArcanistSingleLintEngine' => 'ArcanistLintEngine',
    'ArcanistSpellingLinter' => 'ArcanistLinter',
    'ArcanistSpellingLinterTestCase' => 'ArcanistArcanistLinterTestCase',
    'ArcanistSubversionAPI' => 'ArcanistRepositoryAPI',
    'ArcanistSubversionHookAPI' => 'ArcanistHookAPI',
    'ArcanistSvnHookPreCommitWorkflow' => 'ArcanistBaseWorkflow',
    'ArcanistTasksWorkflow' => 'ArcanistBaseWorkflow',
    'ArcanistTestCase' => 'ArcanistPhutilTestCase',
    'ArcanistTextLinter' => 'ArcanistLinter',
    'ArcanistTextLinterTestCase' => 'ArcanistArcanistLinterTestCase',
    'ArcanistTodoWorkflow' => 'ArcanistBaseWorkflow',
    'ArcanistUncommittedChangesException' => 'ArcanistUsageException',
    'ArcanistUnitConsoleRenderer' => 'ArcanistUnitRenderer',
    'ArcanistUnitWorkflow' => 'ArcanistBaseWorkflow',
    'ArcanistUpgradeWorkflow' => 'ArcanistBaseWorkflow',
    'ArcanistUploadWorkflow' => 'ArcanistBaseWorkflow',
    'ArcanistUsageException' => 'Exception',
    'ArcanistUserAbortException' => 'ArcanistUsageException',
    'ArcanistWhichWorkflow' => 'ArcanistBaseWorkflow',
    'ArcanistXHPASTLintNamingHookTestCase' => 'ArcanistTestCase',
    'ArcanistXHPASTLintTestSwitchHook' => 'ArcanistXHPASTLintSwitchHook',
    'ArcanistXHPASTLinter' => 'ArcanistBaseXHPASTLinter',
    'ArcanistXHPASTLinterTestCase' => 'ArcanistArcanistLinterTestCase',
    'CSharpToolsTestEngine' => 'XUnitTestEngine',
    'ComprehensiveLintEngine' => 'ArcanistLintEngine',
    'ExampleLintEngine' => 'ArcanistLintEngine',
    'GoTestResultParser' => 'ArcanistBaseTestResultParser',
    'GoTestResultParserTestCase' => 'ArcanistTestCase',
    'NoseTestEngine' => 'ArcanistBaseUnitTestEngine',
    'PHPUnitTestEngineTestCase' => 'ArcanistTestCase',
    'PhpunitResultParser' => 'ArcanistBaseTestResultParser',
    'PhpunitTestEngine' => 'ArcanistBaseUnitTestEngine',
    'PhutilLintEngine' => 'ArcanistLintEngine',
    'PhutilUnitTestEngine' => 'ArcanistBaseUnitTestEngine',
    'PhutilUnitTestEngineTestCase' => 'ArcanistTestCase',
    'PytestTestEngine' => 'ArcanistBaseUnitTestEngine',
    'PyunitTestEngine' => 'ArcanistBaseUnitTestEngine',
    'UnitTestableArcanistLintEngine' => 'ArcanistLintEngine',
    'XUnitTestEngine' => 'ArcanistBaseUnitTestEngine',
    'XUnitTestResultParserTestCase' => 'ArcanistTestCase',
  ),
));
