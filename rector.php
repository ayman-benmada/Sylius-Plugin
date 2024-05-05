<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Doctrine\Set\DoctrineSetList;

return function (RectorConfig $rectorConfig): void {
    $rectorConfig->paths([
        # __DIR__ . '/plugin/BackofficePlugin',
        # __DIR__ . '/plugin/ExportPlugin',
        # __DIR__ . '/plugin/MediaPlugin',
        # __DIR__ . '/plugin/MultiFactorAuthenticationPlugin',
        # __DIR__ . '/plugin/TranslationPlugin',
    ]);
    $rectorConfig->sets([
        DoctrineSetList::ANNOTATIONS_TO_ATTRIBUTES,
    ]);
};
