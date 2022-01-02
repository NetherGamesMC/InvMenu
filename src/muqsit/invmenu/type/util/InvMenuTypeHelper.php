<?php

declare(strict_types=1);

namespace muqsit\invmenu\type\util;

use pocketmine\math\Vector3;
use pocketmine\player\Player;

final class InvMenuTypeHelper{

	public static function getBlockOffset() : Vector3{
		return new Vector3(0, -2, 0);
	}
}