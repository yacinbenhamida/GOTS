<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerOaliosh\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerOaliosh/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerOaliosh.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerOaliosh\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerOaliosh\appDevDebugProjectContainer(array(
    'container.build_hash' => 'Oaliosh',
    'container.build_id' => '5fbf578b',
    'container.build_time' => 1548355583,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerOaliosh');