<?php
namespace SurvivalGames\Commands;

use SurvivalGames\SurvivalGames;

use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\utils\Config;

class CommandSg extends Command{

  public function __construct(){
      parent::__construct("sg", "", null);
  }
  
  public function execute(CommandSender $sender, $label, array $args){
	if($sender instanceof Player){
		$player = $sender;
	}
	$sender->sendMessage(SurvivalGames::PREFIX." §7by §6McpeBooster§7!");
	$msg = SurvivalGames::getInstance()->getLanguage()->get("test");
	$sender->sendMessage($msg);
  }
}   