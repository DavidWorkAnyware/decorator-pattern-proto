<?php

namespace Davidlane\DecoratorPatternProto\InvoiceTotals;

class TotalVatCommand extends Decorator
{
    public function run(DataObject $dataObject, array $args = [])
    {
        /** @var DataObject $dataObject */
        $dataObject = parent::run($dataObject);

        $dataObject->setValue(100);
        return $dataObject;
    }

    public function getShortCode()
    {
        return "TOTAL_VAT";
    }
}