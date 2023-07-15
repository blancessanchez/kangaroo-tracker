<?php
  
namespace App\Enums;
 
enum Friendliness: int
{
    case Friendly = 1;
    case Independent = 2;

    /**
     * Get the text representation of the enum
     *
     * @return string
     */
    public function text(): string
    {
        return match ($this) {
            self::Friendly => 'Friendly',
            self::Independent => 'Independent',
        };
    }

    /**
     * Get the list of values
     *
     * @return array
     */
    public static function values(): array
    {
        return array_column(self::cases(), 'name', 'value');
    }
}
