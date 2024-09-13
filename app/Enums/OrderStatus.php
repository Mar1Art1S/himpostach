<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;

enum OrderStatus: string implements HasLabel, HasColor, HasIcon
{
    case NEW = 'new';
    case VIEWED = 'viewed';
    case PENDING = 'pending';
    case READY = 'ready';

    public function getLabel(): string
    {
        return match ($this) {
            self::NEW => 'Новий',
            self::VIEWED => 'Переглянуто',
            self::PENDING => 'Очікується',
            self::READY => 'Завершено',
        };
    }

    public function getColor(): string
    {
        return match ($this) {
            self::NEW => 'danger',
            self::VIEWED => 'info',
            self::PENDING => 'warning',
            self::READY => 'success',
        };
    }

    public function getIcon(): string
    {
        return match ($this) {
            self::NEW => '',
            self::VIEWED => '',
            self::PENDING => '',
            self::READY => '',
        };
    }

    public static function all(): array
    {
        return array_column(self::cases(), 'value');
    }
}
