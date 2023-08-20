<?php

namespace ras;

use pocketmine\plugin\PluginBase;
use pocketmine\Server
use pocketmine\player\Player;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener;

use ras\Forms\SimpleForm;
use ras\Forms\FormUI;
use ras\Forms\Form;

class main extends PluginBase implements Listener {

    public function onEnable() : void {
        $this->getLogger()->info(tf::GREEN. "Enable Tutorial");
    }
