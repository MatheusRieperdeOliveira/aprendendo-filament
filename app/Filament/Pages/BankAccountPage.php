<?php

namespace App\Filament\Pages;

use App\Models\BankAccount;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Illuminate\Contracts\View\View;

class BankAccountPage extends Page
{

    public ?string $name = null;
    public ?string $description = null;
    public ?float $value = null;
    public ?string $photo = null;

    public function createNewBankAccount(): void
    {
        try {
            BankAccount::create([
                'name' => $this->name,
                'description' => $this->description,
                'value' => $this->value,
                'photo' => $this->photo,
            ]);
            Notification::make(2)
                        ->title('Criado nova conta bancária!')
                        ->success()
                        ->send();
            return;
        } catch (\Exception $exception) {
            Notification::make(1)
                        ->title('Não foi possivel criar uma nova conta bancária!' . $exception->getMessage())
                        ->danger()
                        ->send();
        }
    }

    protected static ?string $navigationIcon = 'heroicon-o-building-library';

    protected static string $view = 'filament.pages.bank-account-page';
}
