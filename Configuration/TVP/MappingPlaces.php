<?php
declare(strict_types = 1);

return [
    'TVP\TvplusTestTheme\Page\Mapping' => [
        'name' => 'TvplusTestTheme Page',
        'path' => 'EXT:tvplus_test_theme/Resources/Private/TVP/MappingConfiguration/Page',
        'scope' => \Tvp\TemplaVoilaPlus\Domain\Model\Scope::SCOPE_PAGE,
        'loadSaveHandler' => \Tvp\TemplaVoilaPlus\Handler\LoadSave\YamlLoadSaveHandler::$identifier,
    ],
    'TVP\TvplusTestTheme\Fce\Mapping' => [
        'name' => 'TvplusTestTheme Content',
        'path' => 'EXT:tvplus_test_theme/Resources/Private/TVP/MappingConfiguration/Content',
        'scope' => \Tvp\TemplaVoilaPlus\Domain\Model\Scope::SCOPE_FCE,
        'loadSaveHandler' => \Tvp\TemplaVoilaPlus\Handler\LoadSave\YamlLoadSaveHandler::$identifier,
    ],
];
