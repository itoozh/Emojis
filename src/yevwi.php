<?php

use pocketmine\event\player\PlayerChatEvent;

class yevwi extends \pocketmine\plugin\PluginBase implements \pocketmine\event\Listener
{

    public function onEnable(): void
    {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function onChat(PlayerChatEvent $event): void
    {
        $event->setMessage(str_replace([":bored:", ":panic:", ":L:", ":kiss:", ":angry:", ":cry:", ":heart:", ":broken_heart:", ":zzz:", ":paz:", ":fire:", ":frog:"], ["", "", "", "", "", "", "", "", "", "", "", ""], $event->getMessage()));
    }



}
