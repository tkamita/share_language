<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class FloorInfo extends Enum
{
    const BOTH = 'both';
    const MEN = 'men';
    const WOMEN = 'women';
}
