<div class="flex gap-1 p-3">
    <div class="a flex flex-col gap-4 p-3">
        @foreach($profiles as $profile)
            <div
                class="cursor-pointer flex items-center p-3 gap-1"
                wire:click="selectContact({{ $profile['id'] }})"
            >
                <x-filament::avatar
                    src="{{ $profile['photo'] }}"
                    alt="{{ $profile['name'] }}"
                    size="lg"
                />
                <p class="text-sm font-thin">
                    {{ $profile['name'] }}
                </p>
            </div>
        @endforeach
    </div>
    <div class="flex flex-col">
        <livewire:chat-header-component />
        <livewire:chat-body-component />
        <livewire:chat-footer-component />

    </div>

    <style>
        .a {
            background-color: #232323;
            width: 500px;
            border-radius: 20px 0 0 20px;
        }
    </style>
</div>
