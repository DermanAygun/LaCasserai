<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZ679PM9\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZ679PM9/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerZ679PM9.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerZ679PM9\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerZ679PM9\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'Z679PM9',
    'container.build_id' => '2625e9e4',
    'container.build_time' => 1561758613,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZ679PM9');
