<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Resources\Pages\Page;

class IndexCustomization extends Page
{
    protected static string $resource = UserResource::class;

    protected static string $view = 'components.Account.index';
    public bool $te = false;
    public function test(): void
    {
        $this->te = !$this->te;
    }
}
