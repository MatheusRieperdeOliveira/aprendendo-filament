<x-filament-panels::page>
    <x-filament::section>
        <x-slot name="heading">
            Categorias
        </x-slot>
        <div class="flex flex-col gap-6">
            <x-filament::input.wrapper>
                <x-filament::input
                    type="text"
                    wire:model="name"
                    placeholder="Nome"
                    required
                />
            </x-filament::input.wrapper>
            <x-filament::input.wrapper>
                <x-filament::input
                    type="text"
                    wire:model="description"
                    placeholder="Descrição"
                />
            </x-filament::input.wrapper>

            <div class="flex items-center gap-1">
                <label for="color">Escolha uma cor:</label>
                <input type="color" wire:model="color">
            </div>
            <x-filament::button wire:click="createNewCategory">
                Criar
            </x-filament::button>
        </div>
    </x-filament::section>
</x-filament-panels::page>
