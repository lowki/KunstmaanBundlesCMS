<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'services_resetter' shared service.

return $this->services['services_resetter'] = new \Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter(new RewindableGenerator(function () {
    if (isset($this->services['debug.stopwatch'])) {
        yield 'debug.stopwatch' => ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : null) && false ?: '_'};
    }
    if (isset($this->services['form.type.entity'])) {
        yield 'form.type.entity' => ${($_ = isset($this->services['form.type.entity']) ? $this->services['form.type.entity'] : null) && false ?: '_'};
    }
}, function () {
    return 0 + (int) (isset($this->services['debug.stopwatch'])) + (int) (isset($this->services['form.type.entity']));
}), array('debug.stopwatch' => 'reset', 'form.type.entity' => 'reset'));
