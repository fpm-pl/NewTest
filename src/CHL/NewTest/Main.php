<?php

namespace CHL\NewTest;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener;{
  
    public function onEnable(){
      
      $this->getLogger()->info("NewTest Enabled!");
      
      $this->getServer()->getCommandMap()->registerAll("AllCommands", [
          new Commands\Test(name: "test", description: "Just For Test", usageMessage: "test", aliases: ["tst"])
        ]);
      
    }
}          
