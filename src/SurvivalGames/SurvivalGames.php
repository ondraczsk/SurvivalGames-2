<?php
namespace SurvivalGames;

use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\event\Listener;

#Own

use SurvivalGames\Game\ArenaManager;
use SurvivalGames\Commands\CommandSg;

class SurvivalGames extends PluginBase implements Listener{
	
	const PREFIX = "§7[§2SurvivalGames§7]";
	const TITLEPREFIX = "§2SurvivalGames";
	
	public static $instance;
    public static $pfad;
	
	public function onEnable(){
		$this->getLogger()->info(self::PREFIX . " by McpeBooster!");
		$this->getServer()->getPluginManager()->registerEvents($this,$this);
		self::$instance = $this;
		$this->loadConfig();
		
		#Commands
		$this->getServer()->getCommandMap()->register("Sg", new CommandSg());
		
		new ArenaManager();
	}
	
	private function loadConfig(){
		$this->saveResource("/config.yml");
		@mkdir($this->getDataFolder()."maps");
	}
	
	public static function getInstance(){
        return self::$instance;
    }
	
}