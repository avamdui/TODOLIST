<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerLKIAEGQ\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerLKIAEGQ/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerLKIAEGQ.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerLKIAEGQ\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerLKIAEGQ\App_KernelDevDebugContainer([
    'container.build_hash' => 'LKIAEGQ',
    'container.build_id' => 'dfe28295',
    'container.build_time' => 1644932040,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerLKIAEGQ');
