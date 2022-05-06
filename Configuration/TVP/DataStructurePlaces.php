<?php
declare(strict_types = 1);

return [
    'TVP\TvplusTestTheme\Page\DataStructure' => [
        'name' => 'TvplusTestTheme Page',
        'path' => 'EXT:tvplus_test_theme/Resources/Private/TVP/DataStructure/Page',
        'scope' => \Tvp\TemplaVoilaPlus\Domain\Model\Scope::SCOPE_PAGE,
        'loadSaveHandler' => \Tvp\TemplaVoilaPlus\Handler\LoadSave\XmlLoadSaveHandler::$identifier,
    ],
    'TVP\TvplusTestTheme\Fce\DataStructure' => [
        'name' => 'TvplusTestTheme Content',
        'path' => 'EXT:tvplus_test_theme/Resources/Private/TVP/DataStructure/Content',
        'scope' => \Tvp\TemplaVoilaPlus\Domain\Model\Scope::SCOPE_FCE,
        'loadSaveHandler' => \Tvp\TemplaVoilaPlus\Handler\LoadSave\XmlLoadSaveHandler::$identifier,
    ],
];
