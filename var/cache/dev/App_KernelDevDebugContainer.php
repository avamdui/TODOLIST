<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSQda4L2\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSQda4L2/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerSQda4L2.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerSQda4L2\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerSQda4L2\App_KernelDevDebugContainer([
    'container.build_hash' => 'SQda4L2',
    'container.build_id' => 'e1c5aefc',
    'container.build_time' => 1644916760,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerSQda4L2');
