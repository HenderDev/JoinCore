<?php

namespace JoinCore;

use pocketmine\plugin\PluginBase;  
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\utils\TextFormat;
use pocketmine\Player;
use pocketmine\entity\Effect;


class Main extends PluginBase implements Listener{

    public function onEnable(){
       $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->info("Plugin ativado!");
     }
    
    public function onJoin(PlayerJoinEvent $e){
    	$player = $e->getPlayer();
        $name = $player->getName();
          $player->sendTip("§f§lSNOW §bNETWORK §7-§cFACTIONS §4LAVA§r\n\n§6§l   SEJA BEM VINDO§e ".$name."§r\n\n     §l§6(!)§r §aDivirta-se no Servidor §6§l(!)§r\n\n\n\n");
          $player->addEffect(Effect::getEffect(1)->setDuration(100*20)->setAmplifier(5));
          $e->getPlayer()->setAllowFlight(true);
        }
    }