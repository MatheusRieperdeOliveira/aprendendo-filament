<x-filament-panels::page>
    <x-filament::section>
        <x-slot name="heading">
            Contas Bancárias
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

            <x-filament::input.wrapper>
                <x-filament::input
                    type="text"
                    wire:model="value"
                    placeholder="Valor na conta"
                />
            </x-filament::input.wrapper>

            <x-filament::input.wrapper>
                <x-filament::input
                    type="text"
                    wire:model="photo"
                    placeholder="Foto"
                />
            </x-filament::input.wrapper>

            <x-filament::button wire:click="createNewBankAccount">
                Criar
            </x-filament::button>
        </div>
    </x-filament::section>
</x-filament-panels::page>
