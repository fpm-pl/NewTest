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
                $this->getLogger()->info("Memuat plugin untuk uji coba!");
        }
        public function onEnable(){
                $this->getServer()->getPluginManager()->registerEvents($this,$this);
                $this->getLogger()->info("Plugin ini dibuat untuk uji coba!");
        }
        public function onDisable(){
                $this->getLogger()->info("Plugin tidak aktif!");
        }
        public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : bool{
                if($cmd->getName() == "coba"){
                    if(!$sender instanceof Player){
                        $sender->sendMessage("Tolong gunakan perintah ini di dalam game!");
                    }else{
                        $sender->getInventory()->addItem(Item::get(364,0,8));
                        $sender->sendMessage("Kamu mendapatkan 8 steak!");
                    }
                    return true;
                }
        }
}