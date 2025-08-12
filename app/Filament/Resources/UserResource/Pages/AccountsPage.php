<?php


namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Resources\Pages\Page;
use App\Models\BankAccount;
use App\Models\Category;

class AccountsPage extends Page
{
    protected static string $resource = UserResource::class;

    // pode reaproveitar a view que você já tem
    protected static string $view = 'filament.pages.accounts-page';

    public ?array $bankAccounts = null;
    public ?array $categories = null;

    public function mount(): void
    {
        $this->bankAccounts = BankAccount::all()->toArray() ?? [];
        $this->categories = Category::all()->toArray() ?? [];
    }
}
