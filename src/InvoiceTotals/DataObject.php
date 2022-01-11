<?php

namespace Davidlane\DecoratorPatternProto\InvoiceTotals;

/*
 * This needs to be named something more specific. It essentially holds the data needed to build the display
 */
class DataObject
{
    private $prependString;
    private $value;
    private $appendString;

    public function __construct($prependString = "", $value = 0, $appendString = "")
    {
        $this->prependString = $prependString;
        $this->value = $value;
        $this->appendString = $appendString;
    }

    public function getCompleteString()
    {
        return implode("", [$this->prependString, $this->value, $this->appendString]);
    }

    /**
     * @return mixed
     */
    public function getPrependString()
    {
        return $this->prependString;
    }

    /**
     * @param mixed $prependString
     */
    public function setPrependString($prependString)
    {
        $this->prependString = $prependString;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @return mixed
     */
    public function getAppendString()
    {
        return $this->appendString;
    }

    /**
     * @param mixed $appendString
     */
    public function setAppendString($appendString)
    {
        $this->appendString = $appendString;
    }
}