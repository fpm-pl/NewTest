<?php

namespace CHL\NewTest;

use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use CHL\NewTest\Commands;

class Main extends PluginBase
{
    public function onEnable(): void
    {
       $this->getServer()->getCommandMap()->register("test", new TestCommand());
       $this->getLogger()->info("Plugin Enabled!");
    }
}
