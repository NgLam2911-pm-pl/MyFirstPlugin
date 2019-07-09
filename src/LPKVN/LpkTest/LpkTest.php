<?php

namespace LPKVN\LpkTest;
 
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use pocketmine\Server;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
 
class LpkTest extends PluginBase 
{
	public function onEnable(): void
	{
		$this->getLogger()->info(TextFormat::GREEN . "LpkTest đã chạy");
	}
	public function onDisable(): void
	{
		$this->getLogger()->info(TextFormat::RED . "LpkTest đã dừng");
	}
    public function onCommand(CommandSender $sender, Command $command,string $label, array $args): bool
	{
         switch($command->getName())
		 {
			case "lpktest":
			$subCommand = strtolower(array_shift($args));
			switch ($subCommand)
			{
				case "hi":
					$sender->sendMessage("Hello ".$sender->getName()."!");
					$sender->sendMessage("Welcome to Server");
					break;
				case "lol":
					$sender->sendMessage("LOLOLOLOLOLOL");
					break;
				case "help":
					$sender->sendMessage("/lpktest hi");
					$sender->sendMessage("/lpktest lol");
					break;
				case "":
					$sender->sendMessage("/lpktest <args>");
					break;
				return true;
			}	 
			default:
				return false;
		 }
	}
}
