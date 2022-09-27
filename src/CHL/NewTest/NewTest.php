<?php

namespace CHL\NewTest;

use pocketmine\plugin\PluginBase;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat as C;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\item\Item;

class NewTest extends PluginBase implements Listener{
        
        public function onLoad (){
                $this->getLogger()->info("Loading NewTest!");
        }
        public function onEnable(){
                $this->getServer()->getPluginManager()->registerEvents($this,$this);
                $this->getLogger()->info("Plugin Enabled!");
        }
        public function onDisable(){
                $this->getLogger()->info("Plugin Disabled!");
        }
        public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : bool{
                if($cmd->getName() == "test"){
                    if(!$sender instanceof Player){
                        $sender->sendMessage("Try it in-game please!");
                    }else{
                        $sender->getInventory()->addItem(Item::get(364,0,8));
                        $sender->sendMessage("You get 8 steak!");
                    }
                    return true;
                }
        }
}
