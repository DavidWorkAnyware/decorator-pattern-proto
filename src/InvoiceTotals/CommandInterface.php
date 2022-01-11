<?php

namespace Davidlane\DecoratorPatternProto\InvoiceTotals;

interface CommandInterface
{
    public function getShortcode();
    public function run(DataObject $dataObject, array $args);
}