<?php

namespace App\Enums;

use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Filament\Support\Contracts\HasColor;

enum PostStatus: string implements HasLabel, HasColor, HasIcon
{
    case DRAFT = 'draft';
    case REVIEWING = 'reviewing';
    case PUBLISHED = 'published';
    case REJECTED = 'rejected';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::DRAFT => 'Draft',
            self::REVIEWING => 'Reviewing',
            self::PUBLISHED => 'Published',
            self::REJECTED => 'Rejected',
        };
    }

    public function getColor(): string|array|null
    {
        return match ($this) {
            self::DRAFT => 'gray',
            self::REVIEWING => 'info',
            self::PUBLISHED => 'success',
            self::REJECTED => 'danger',
        };
    }

    public function getIcon(): ?string
    {
        return match ($this) {
            self::DRAFT => 'heroicon-m-pencil',
            self::REVIEWING => 'heroicon-o-clock',
            self::PUBLISHED => 'heroicon-m-check',
            self::REJECTED => 'heroicon-o-x-circle',
        };
    }
}
