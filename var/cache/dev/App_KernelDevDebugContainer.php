<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerHPEx9Rl\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerHPEx9Rl/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerHPEx9Rl.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerHPEx9Rl\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerHPEx9Rl\App_KernelDevDebugContainer([
    'container.build_hash' => 'HPEx9Rl',
    'container.build_id' => '9c1c79a1',
    'container.build_time' => 1649751731,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerHPEx9Rl');
