<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerHQqqDZ8\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerHQqqDZ8/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerHQqqDZ8.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerHQqqDZ8\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerHQqqDZ8\App_KernelDevDebugContainer([
    'container.build_hash' => 'HQqqDZ8',
    'container.build_id' => '28b442b3',
    'container.build_time' => 1646141602,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerHQqqDZ8');
