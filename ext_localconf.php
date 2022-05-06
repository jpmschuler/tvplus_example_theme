<?php
defined('TYPO3_MODE') or die();

call_user_func(static function () {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
        'tvplus_test_theme',
        'setup',
        "@import 'EXT:tvplus_test_theme/Configuration/TypoScript/setup.typoscript'"
    );
    \Tvp\TemplaVoilaPlus\Utility\ExtensionUtility::registerExtension('tvplus_test_theme');
});
