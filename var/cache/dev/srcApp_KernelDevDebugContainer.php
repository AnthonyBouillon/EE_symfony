<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerLqRsE1j\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerLqRsE1j/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerLqRsE1j.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerLqRsE1j\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerLqRsE1j\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'LqRsE1j',
    'container.build_id' => 'afb6d563',
    'container.build_time' => 1570120898,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerLqRsE1j');
