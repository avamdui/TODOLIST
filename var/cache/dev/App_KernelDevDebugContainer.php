<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerHCHYH8E\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerHCHYH8E/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerHCHYH8E.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerHCHYH8E\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerHCHYH8E\App_KernelDevDebugContainer([
    'container.build_hash' => 'HCHYH8E',
    'container.build_id' => 'ab5f9af4',
    'container.build_time' => 1646918869,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerHCHYH8E');
