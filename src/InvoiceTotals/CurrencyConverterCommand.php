<?php

namespace Davidlane\DecoratorPatternProto\InvoiceTotals;

class CurrencyConverterCommand extends Decorator
{
    public function run(DataObject $dataObject, array $args = [])
    {
        /** @var DataObject $dataObject */
        $dataObject = parent::run($dataObject);

        $value = $dataObject->getValue() * 100;
        $dataObject->setValue($value);

        return $dataObject;
    }

    public function getShortcode()
    {
        return "IN_CURRENCY";
    }
}