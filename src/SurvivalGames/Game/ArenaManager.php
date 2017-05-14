<?php
namespace SurvivalGames\Game;

use SurvivalGames\SurvivalGames;

use pocketmine\Player;
use pocketmine\utils\Config;

class ArenaManager{
	
	public function __construct(){
	}
	
	public function ArenaJoin(Player $player, $match){
	//coming soon
	}
	
	public static function ArenaLeave(Player $player, $gi){
	//coming soon
	}
	
	public static function getLobbyId($lobby){
	$gameid = $this->getConfig()->get("GameId");
	foreach($gameid as $gi){
		if($config->getNested($gi.".Lobby") == $lobby){
			return $gi;
		}
	}
	return false;
	}
	
	public static function getArenaId($arena){
		$gameid = $this->getConfig()->get("GameId");
	foreach($gameid as $gi){
		if($config->getNested($gi.".Arena") == $arena){
			return $gi;
		}
	}
	return false;
	}
	
	public static function getMatchId($match){
		$gameid = $this->getConfig()->get("GameId");
	foreach($gameid as $gi){
		if($config->getNested($gi.".Match") == $match){
			return $gi;
		}
	}
	return false;
	}
}