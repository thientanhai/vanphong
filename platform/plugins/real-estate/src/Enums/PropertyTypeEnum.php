<?php

namespace Botble\RealEstate\Enums;

use Botble\Base\Supports\Enum;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\HtmlString;

/**
 * @method static PropertyTypeEnum SALE()
 * @method static PropertyTypeEnum RENT()
 */
class PropertyTypeEnum extends Enum
{
    // public const SALE = 'sale';

    public const RENT = 'Nhà phố';

    public const LEVEL_A = 'Hạng A';

    public const LEVEL_B = 'Hạng B';

    public const LEVEL_C = 'Hạng C';

    public const LEVEL_LOW_PRICE = 'Văn phòng giá rẻ';

    public const LEVEL_HOUSE_TOWN = 'Nhà phố';

    public static $langPath = 'plugins/real-estate::property.types';

    public function toHtml(): HtmlString|string|null
    {
        $color = match ($this->value) {
            // self::SALE => 'success',
            self::RENT => 'info',
            self::LEVEL_A => 'success',
            self::LEVEL_B => 'success',
            self::LEVEL_C => 'success',
            self::LEVEL_LOW_PRICE => 'info',
            self::LEVEL_HOUSE_TOWN => 'info',
            default => null,
        };

        return Blade::render(sprintf('<x-core::badge color="%s" label="%s" />', $color, $this->label()));
    }
}
