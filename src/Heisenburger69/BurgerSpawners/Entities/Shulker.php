<?php

namespace Heisenburger69\BurgerSpawners\Entities;

use pocketmine\entity\{
    Entity, Monster
};
use pocketmine\item\Item;

class Shulker extends Monster {

    public const NETWORK_ID = self::SHULKER;

    public $width = 1;
    public $height = 1;

    public function getName(): string{
        return "Shulker";
    }

    public function initEntity(): void{
        $this->setMaxHealth(30);
        $this->getDataPropertyManager()->setInt(Entity::DATA_VARIANT, mt_rand(0, 15)); // TODO: Implement COLORS correctly
        parent::initEntity();
    }

    public function getDrops(): array{
        return [Item::get(Item::SHULKER_SHELL, 0, mt_rand(0, 1))];
    }

    public function knockBack(Entity $attacker, float $damage, float $x, float $z, float $base = 0.4): void{
        return;
    }
}