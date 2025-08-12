<?php

namespace App\Filament\Pages;
use App\Models\Category;
use Filament\Forms\Components\ColorPicker;
use Filament\Notifications\Notification;
use Filament\Pages\Page;

class CategoriesPage extends Page
{
    public ?string $name = null;
    public ?string $description = null;
    public ?string $color = null;

    public function createNewCategory(): void
    {
        try {
            Category::create([
                "name" => $this->name,
                "description" => $this->description,
                'color' => $this->color,
            ]);

            Notification::make(1)
                        ->title('Criado nova categoria')
                        ->success()
                        ->send();
            return;
        } catch (\Exception $exception) {
            Notification::make(1)
                        ->title('Não foi possivel criar uma nova categoria.')
                        ->danger()
                        ->send();
        }
    }

    protected static ?string $navigationIcon = 'heroicon-o-swatch';

    protected static string $view = 'filament.pages.categories-page';
}
