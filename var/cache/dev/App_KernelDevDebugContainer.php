<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerMTb8Ajx\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerMTb8Ajx/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerMTb8Ajx.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerMTb8Ajx\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerMTb8Ajx\App_KernelDevDebugContainer([
    'container.build_hash' => 'MTb8Ajx',
    'container.build_id' => '29ee4b8e',
    'container.build_time' => 1649662769,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerMTb8Ajx');
