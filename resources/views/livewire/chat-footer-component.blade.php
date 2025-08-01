<div class="flex">
    <x-filament::input
        class="input"
        type="text"
        wire:model="message"
    />
    <x-filament::button class="button" wire:click="handleMessage">
        ->
    </x-filament::button>

    <style>
        .input{
            color: #1a1a1a;
            width: 95%;
        }
        .button{
            width: 5%;
            background-color: #1a1a1a;
            border-radius: 0 0 20px 0;
            padding: 5px;
        }
    </style>
</div>
