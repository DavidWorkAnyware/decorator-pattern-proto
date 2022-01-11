<?php

namespace Davidlane\DecoratorPatternProto\DecoratorPattern;

class Decorator implements Component
{
    protected $component;

    public function __construct(Component $component)
    {
        $this->component = $component;
    }

    public function operation()
    {
        return $this->component->operation();
    }
}