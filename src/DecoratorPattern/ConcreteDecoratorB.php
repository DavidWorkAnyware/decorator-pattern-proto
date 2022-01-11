<?php

namespace Davidlane\DecoratorPatternProto\DecoratorPattern;

class ConcreteDecoratorB extends Decorator
{
    public function operation()
    {
        return "ConcreteDecoratorB(" . parent::operation() . ")";
    }
}