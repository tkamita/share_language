<?php

namespace App\Enums;

use BenSampo\Enum\Enum;
use BenSampo\Enum\Contracts\LocalizedEnum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class FaceWindow extends Enum implements LocalizedEnum
{
    const EAST = 'east';
    const WEST = 'west';
    const NORTH = 'north';
    const SOUTH = 'south';
}

 
