<?php
namespace SurvivalGames\Events;

use SurvivalGames\SurvivalGames;
use SurvivalGames\Game\ArenaManager;

use pocketmine\event\Listener;
use pocketmine\utils\Config;

use pocketmine\event\block\SignChangeEvent;

class SignCreate implements Listener{

    public function __construct(){
    }
      
    public function SignCreate(SignChangeEvent $event){
		$player = $event->getPlayer();
		if($player->isOp()){
			if($event->getLine(0) == "SurvivalGames"){
				$match = $event->getLine(1);
				if(!empty($match)){
				$config = new Config(SurvivalGames::getInstance()->getDataFolder() . "config.yml", Config::YAML);
				$match = $event->getLine(1);
				
				$event->setLine(0, SurvivalGames::PREFIX);
                $event->setLine(2, "§2Join");
                $event->setLine(3, "§e0 / ".$config->getNested($gi . ".Spieleranzahl"));
				}
			}
		}
	}
}