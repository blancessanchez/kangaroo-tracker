<?php
  
namespace App\Enums;
 
enum Gender: int
{
    case Male = 1;
    case Female = 2;

    /**
     * Get the text representation of the enum
     *
     * @return string
     */
    public function text(): string
    {
        return match ($this)
        {
            self::Male => 'Male',
            self::Female => 'Female',
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
