<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerUgUb7kl\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerUgUb7kl/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerUgUb7kl.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerUgUb7kl\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerUgUb7kl\App_KernelDevDebugContainer([
    'container.build_hash' => 'UgUb7kl',
    'container.build_id' => 'bfcb50d9',
    'container.build_time' => 1709666324,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerUgUb7kl');