<?php
namespace SurvivalGames\lang;

use SurvivalGames\SurvivalGames;

class Messages{

     public static $messages;

     public function __construct(){
     }

     
    public static function get(string $name, string $pfad){
       $msg = self::getString($name, $pfad);
       $msg = str_replace("{PREFIX}", SurvivalGames::PREFIX, $msg);
       $msg = str_replace("&", "§", $msg);
       
      return $msg;
    }
	 
	public static function getString(string $pfad){
		
		 
		$lang = SurvivalGames::getInstance()->getConfig()->get("language");
		
		if($lang == "german"){
		
		//German
		$de = [
			"player.join" => "{PREFIX}&7 Du hast SurvivalGames betreten!",
        ];
		
		return $de[$pfad];
		
		}else{
			//english
			$en = [
            "player.join" => "{PREFIX}&7 You have joined SurvivalGames!",
        ];
		
		return $en[$pfad];
			
		}
	}
     

	
}