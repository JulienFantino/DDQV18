<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerP8ss0xz\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__ . '/ContainerP8ss0xz/appDevDebugProjectContainer.php') {
    touch(__DIR__ . '/ContainerP8ss0xz.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerP8ss0xz\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerP8ss0xz\appDevDebugProjectContainer([
    'container.build_hash' => 'P8ss0xz',
    'container.build_id' => 'cc7bafcb',
    'container.build_time' => 1623757023,
], __DIR__ . \DIRECTORY_SEPARATOR . 'ContainerP8ss0xz');