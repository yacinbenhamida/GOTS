<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container5atjjqp\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container5atjjqp/appProdProjectContainer.php') {
    touch(__DIR__.'/Container5atjjqp.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\Container5atjjqp\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \Container5atjjqp\appProdProjectContainer(array(
    'container.build_hash' => '5atjjqp',
    'container.build_id' => 'eaeb3b7a',
    'container.build_time' => 1548427948,
), __DIR__.\DIRECTORY_SEPARATOR.'Container5atjjqp');