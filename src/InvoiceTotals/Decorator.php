<?php

namespace Davidlane\DecoratorPatternProto\InvoiceTotals;

class Decorator implements CommandInterface
{
    /**
     * @var CommandInterface $command
     */
    protected $command;

    public function setCommand(CommandInterface $command)
    {
        $this->command = $command;
    }

    public function run(DataObject $dataObject, array $args = [])
    {
        if ($this->command) {
            return $this->command->run($dataObject, $args);
        }

        return $dataObject;
    }

    public function getShortcode()
    {
        return $this->command->getShortcode();
    }
}