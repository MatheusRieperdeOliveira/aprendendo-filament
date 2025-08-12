<x-filament-panels::page>
    <div class="flex justify-end">
        <x-filament::modal>
            <x-slot name="trigger">
                <x-filament::button>
                    Criar conta
                </x-filament::button>
            </x-slot>
            <div class="w-full">
                <div class="flex flex-col gap-6">
                    <x-filament::input.wrapper>
                        <x-filament::input.select wire:model="bank_account_id">
                            <option value="" selected disabled>Selecione o tipo</option>
                            <option value="earnings">Receita</option>
                            <option value="expenses">Despesa</option>
                        </x-filament::input.select>
                    </x-filament::input.wrapper>
                    <x-filament::input.wrapper>
                        <x-filament::input
                            type="text"
                            wire:model="name"
                            placeholder="Valor"
                        />
                    </x-filament::input.wrapper>
                    <x-filament::input.wrapper>
                        <x-filament::input
                            type="text"
                            wire:model="name"
                            placeholder="Descrição"
                        />
                    </x-filament::input.wrapper>
                    <x-filament::input.wrapper>
                        <x-filament::input.select wire:model="bank_account_id">
                            <option value="0">Selecione uma conta bancária</option>
                            {{--                        @foreach($bankAccounts as $bankAccount)--}}
                            {{--                            <option value="{{$bankAccount['id']}}">{{$bankAccount['name']}}</option>--}}
                            {{--                        @endforeach--}}
                        </x-filament::input.select>
                    </x-filament::input.wrapper>
                    <x-filament::input.wrapper>
                        <x-filament::input.select wire:model="category_id">
                            <option value="0">Selecione uma categoria</option>
                            {{--                        @foreach($categories as $category)--}}
                            {{--                            <option value="{{$category['id']}}">{{$category['name']}}</option>--}}
                            {{--                        @endforeach--}}
                        </x-filament::input.select>
                    </x-filament::input.wrapper>
                    <x-filament::button>
                        Criar
                    </x-filament::button>
                </div>
            </div>
        </x-filament::modal>
    </div>
</x-filament-panels::page>
