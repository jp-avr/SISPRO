<?php

declare(strict_types=1);

use App\User;

function user(): ?User
{
    if (auth()->check()) {
        return auth()->user();
    }

    return null;
}
