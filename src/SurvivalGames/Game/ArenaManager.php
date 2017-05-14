<?php
namespace SurvivalGames\Game;

use SurvivalGames\SurvivalGames;

use pocketmine\Player;
use pocketmine\utils\Config;

class ArenaManager{
	
	public function __construct(){
	}
	
	/**
	* @param Player $player
	* @param $match
	*/
	
	public function ArenaJoin(Player $player, $match){
	//coming soon
	}
	
	/**
	* @param Player $player
	* @param $match
	*/
	
	public static function ArenaLeave(Player $player, $gi){
	//coming soon
	}
	
	/**
	* @param $match
	*/
	
	public static function getLobbyId($lobby){
	$gameid = SurvivalGames::getInstance()->getConfig()->get("GameId");
	foreach($gameid as $gi){
		if($config->getNested($gi.".Lobby") == $lobby){
			return $gi;
		}
	}
	return false;
	}
	
	/**
	* @param $match
	*/
	
	public static function getArenaId($arena){
		$gameid = SurvivalGames::getInstance()->getConfig()->get("GameId");
	foreach($gameid as $gi){
		if($config->getNested($gi.".Arena") == $arena){
			return $gi;
		}
	}
	return false;
	}
	
	/**
	* @param $match
	*/
	
	public static function getMatchId($match){
		$gameid = SurvivalGames::getInstance()->getConfig()->get("GameId");
	foreach($gameid as $gi){
		if($config->getNested($gi.".Match") == $match){
			return $gi;
		}
	}
	return false;
	}
}