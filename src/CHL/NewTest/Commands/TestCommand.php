<?php

namespace CHL\NewTest\Commands;

use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\player\Player;
use pocketmine\utils\TextFormat;

class TestCommand extends Command
{

    public function __construct()
    {
        parent::__construct("test", "Test command", "/test", ["tst"]);
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args)
    {
        if($sender instanceof Player) {
            if($sender->hasPermission("test.command")) {
                    $sender->getInventory()->addItem(Item::get(364,0,8);
                    $sender->sendMessage(TextFormat::RED . "Your get 8 steak!");
        } else {
            $sender->sendMessage(TextFormat::RED . "Please use this command in-game");
            }
        }
    }
 }
