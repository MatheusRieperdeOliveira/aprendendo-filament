<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class ChatMessage extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.chat-message';
    public function getTitle(): string
    {
        return ' ';
    }
}
