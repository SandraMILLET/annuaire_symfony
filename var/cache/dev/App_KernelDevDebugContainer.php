<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container6DGyaTw\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container6DGyaTw/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container6DGyaTw.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container6DGyaTw\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container6DGyaTw\App_KernelDevDebugContainer([
    'container.build_hash' => '6DGyaTw',
    'container.build_id' => '12324545',
    'container.build_time' => 1591792039,
], __DIR__.\DIRECTORY_SEPARATOR.'Container6DGyaTw');
