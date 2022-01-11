<?php

namespace Davidlane\DecoratorPatternProto\DecoratorPattern;

class ConcreteDecoratorA extends Decorator
{
    public function operation()
    {
        return "ConcreteDecoratorA(" . parent::operation() . ")";
    }
}