<?php

namespace Davidlane\DecoratorPatternProto\InvoiceTotals;

class ShortcodeParser
{
    private $commands;

    public function __construct()
    {
        $this->commands = [];
    }

    public function addCommand(CommandInterface $command)
    {
        $this->commands[$command->getShortcode()] = $command;
    }

    public function parse($string)
    {
        /*
         * This needs tidying up and breaking down into smaller functions
         */

        // could this be a class attribute?
        $commandsToRun = [];

        // this is the parsing part
        $commands = explode("|", $string);
        foreach($commands as $command) {
            if($canRunCommand = $this->commands[$command]) {
                $commandsToRun[] = $canRunCommand;
            }
        }

        /*
         * this is the start of building the command chain
         * could it be it's own function?
         */
        $currentCommand = null;

        // reverse the command list and recursively chain
        foreach(array_reverse($commandsToRun) as $command)
        {
            if (!$currentCommand) {
                $currentCommand = $command;
                continue;
            }

            $currentCommand->setCommand($command);
        }

        return $currentCommand->run(new DataObject);
    }
}