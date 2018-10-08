<?php

/*
* PocketMine-MP HealthOverHead Plugin
* Version 1.0
* Coding PadyPM
* API: 3.0.0 - 4.0.0+dev
* Plugin Language: Turkish
*/

namespace Pady;

use pocketmine\plugin\PluginBase;
use pocketmine\{Player, Server};

class Main extends PluginBase{
	
	public function onEnable(): void{
		$this->getLogger()->info("\n§8» §aHealthOverHead plugin for Pocketmine.\n§8» §6Coding By PadyPM");
		$this->getScheduler()->scheduleRepeatingTask(new HealthBar($this), 10);
	}
}
