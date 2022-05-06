<?php
declare(strict_types = 1);

return [
    'TVP\TvplusTestTheme\Page\Template' => [
        'name' => 'TvplusTestTheme Page',
        'path' => 'EXT:tvplus_test_theme/Resources/Private/TVP/TemplateConfiguration/Page',
        'recursive' => true, // @TODO Not yet implemented
        'scope' => \Tvp\TemplaVoilaPlus\Domain\Model\Scope::SCOPE_PAGE,
        'loadSaveHandler' => \Tvp\TemplaVoilaPlus\Handler\LoadSave\YamlLoadSaveHandler::$identifier,
    ],
    'TVP\TvplusTestTheme\Content\Template' => [
        'name' => 'TvplusTestTheme Content',
        'path' => 'EXT:tvplus_test_theme/Resources/Private/TVP/TemplateConfiguration/Content',
        'recursive' => true, // @TODO Not yet implemented
        'scope' => \Tvp\TemplaVoilaPlus\Domain\Model\Scope::SCOPE_FCE,
        'loadSaveHandler' => \Tvp\TemplaVoilaPlus\Handler\LoadSave\YamlLoadSaveHandler::$identifier,
    ],
];
