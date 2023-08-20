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
        $this->getLogger()->info(tf::GREEN. "Plugin Enable");
    }
     function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : Bool {
        if($cmd->getName() === "slapperui") {
            if($sender instanceof Player) {
                $this->slapperui($sender);
            } else {
                $sender->sendMessage(tf::RED. "In-Game");
            }
            return true;
        }
     }
    public function slapperui($sender) : void {
        $form = new SimpleForm(function(Player $sender, $data){
            if($data === null){
                return true;
            }
            switch($data){
                case 0:
                $this->create($player);
                break;

                case 1:
                $this->getServer()->dispatchCommand($player, "slapper id");
                break;

                case 2:
                $this->remove($player);
                break;

                case 3:
                $this->rename($player);
                break;

                case 4:
                $this->addcommand($player);
                break;

                case 5:
                this->removecommand($player);
                break;
            }
        });
        $form->setTitle("§6» §eSlapperUI §6«§r");
        $form->addButton("EXIT", 0, "textures/blocks/barrier");
        $form->addButton("Create Slapper", 0, "textures/ui/confirm");
        $form->addButton("Get ID", 0, "textures/ui/magnifyingGlass");
        $form->addButton("ADD COMMAND", 0, "textures/items/banner_pattern");
        $form->addButton("DEL COMMAND", 0, "textures/ui/tash");
        $form->addButton("SET SCALE", 0, "textures/items/paper");
        $form->addButton("TELEPORT HERE", 0, "textures/ui/icon_import");
        $form->addButton("CHANGE NAME", 0, "textures/items/name_tag");
        $form->addButton("REMOVE", 0, "textures/ui/cancel");
        $form->sendToPlayer($sender);
    }
}
u
