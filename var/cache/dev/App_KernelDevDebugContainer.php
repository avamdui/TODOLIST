<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerF1cTTNf\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerF1cTTNf/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerF1cTTNf.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerF1cTTNf\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerF1cTTNf\App_KernelDevDebugContainer([
    'container.build_hash' => 'F1cTTNf',
    'container.build_id' => '217b6593',
    'container.build_time' => 1647526423,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerF1cTTNf');
