<?php

namespace DisableJoinAndQuit;

use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;

class Main extends PluginBase implements Listener{
	
    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }
   
    public function onJoin(PlayerJoinEvent $event){
        $event->setJoinMessage("");
    }
   
    public function onQuit(PlayerQuitEvent $event){
        $event->setQuitMessage("");
    }
}

