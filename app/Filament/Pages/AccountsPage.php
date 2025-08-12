<?php

namespace App\Filament\Pages;

use App\Models\BankAccount;
use App\Models\Category;
use Filament\Pages\Page;

class AccountsPage extends Page
{
    public ?array $bankAccounts = null;
    public ?array $categories = null;

    protected static ?string $navigationIcon = 'heroicon-o-banknotes';

    protected static string $view = 'filament.pages.accounts-page';

    public function mount(): void
    {
        $this->bankAccounts = BankAccount::all()->toArray() ?? [];
        $this->categories = Category::all()->toArray() ?? [];
    }
}
