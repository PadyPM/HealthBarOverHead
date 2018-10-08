<?php

/*
* PocketMine-MP HealthOverHead Plugin
* Version 1.0
* Coding PadyPM
* API: 3.0.0 - 4.0.0+dev
* Plugin Language: Turkish
*/

namespace Pady;

use pocketmine\{Server, Player};
use pocketmine\scheduler\Task;
use pocketmine\utils\TextFormat as R;
use pocketmine\Plugin;

class HealthBar extends Task{
	
public function __construct($plugin){
		$this->plugin = $plugin;
	}
	
	public function onRun($currentTick){
		foreach($this->plugin->getServer()->getOnlinePlayers() as $p){
			$pl = $p;
			$p->setScoreTag(TF::BLUE . "[" . TF::RED . ($pl->getHealth() / $pl->getMaxHealth() * 20) . TF::BLUE . "]");
		}
	}
}
