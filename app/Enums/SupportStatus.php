<?php

namespace App\Enums;

enum SupportStatus: string
{
    case A =  "Open";
    case P = "Pendent";
    case C = "Close";

    public static function fromValue(string $status): string
    {
        foreach (self::cases() as $status) {
            if ($status == $status->name) {
                return $status->value;
            }
        }
    }
}
