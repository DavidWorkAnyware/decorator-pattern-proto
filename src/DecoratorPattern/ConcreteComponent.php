<?php

namespace Davidlane\DecoratorPatternProto\DecoratorPattern;

class ConcreteComponent implements Component
{
    public function operation()
    {
        return "ConcreteComponent::operation()";
    }
}