<?php

namespace DisableJoinAndQuit;

use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;

class Main extends PluginBase implements Listener{
	
    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->info("DisabledJoinAndQuit mSGS")
    }
   
    public function onJoin(PlayerJoinEvent $event){
        $event->setJoinMessage(null);
    }
   
    public function onQuit(PlayerQuitEvent $event){
        $event->setQuitMessage(null);
    }
}

