<?php
namespace SurvivalGames;

use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\event\Listener;
use pocketmine\lang\BaseLang;

#Own

use SurvivalGames\Game\ArenaManager;
use SurvivalGames\Events\SignCreate;
use SurvivalGames\Commands\CommandSg;

class SurvivalGames extends PluginBase implements Listener{
	
	const PREFIX = "§7[§2SurvivalGames§7]";
	const TITLEPREFIX = "§2SurvivalGames";
	
	private $baseLang = null;
	
	public static $instance;
	
	public function onEnable(){
		$this->getLogger()->info(self::PREFIX . " §7by §6McpeBooster§7!");
		$this->getServer()->getPluginManager()->registerEvents($this,$this);
		self::$instance = $this;
		$this->loadConfig();
		
		#Commands
		$this->getServer()->getCommandMap()->register("Sg", new CommandSg());
		
		#Events
		$this->getServer()->getPluginManager()->registerEvents(new SignCreate(), $this);
		
		new ArenaManager();
		
		$lang = $this->getConfig()->get("language", BaseLang::FALLBACK_LANGUAGE);
        $this->baseLang = new BaseLang($lang, $this->getFile() . "resources/");
	}
	
	private function loadConfig(){
		$this->saveResource("/config.yml");
		@mkdir($this->getDataFolder()."maps");
	}
	
	public static function getInstance(){
        return self::$instance;
    }
	
	 /**
     * @api
     * @return BaseLang
     */
	 
    public function getLanguage() : BaseLang {
        return $this->baseLang;
    }
	
	/**
	* @param Player $player
	* @param $line1
	* @param $line2
	*/
	
	public static function Title(Player $player, string $line1, string $line2){
		if($this->getServer()->getName() == "PocketMine-MP"){
			//PocketMine needs the addTitle() function
			$player->addTitle($line1, $line2);
			return;
		}else{
			//all Spoons needs the sendTitle() function
			$player->sendTitle($line1, $line2);
			return;
		}
	}
	
}