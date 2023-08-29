<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class RoomStatus extends Enum
{
    const INACTIVE = 1;
    const ACTIVE = 2;
    const BOOKED = 3;
}
