<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container8qvwMZx\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container8qvwMZx/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container8qvwMZx.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container8qvwMZx\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \Container8qvwMZx\srcApp_KernelDevDebugContainer([
    'container.build_hash' => '8qvwMZx',
    'container.build_id' => '41f8daa8',
    'container.build_time' => 1583510109,
], __DIR__.\DIRECTORY_SEPARATOR.'Container8qvwMZx');
