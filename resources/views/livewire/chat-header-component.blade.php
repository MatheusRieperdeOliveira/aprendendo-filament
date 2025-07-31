<div class="header-chat flex items-center justify-between p-3">
    @if($this->contact)
        <div class="flex items-center gap-1">
            <x-filament::avatar
                src="{{ $this->contact['photo'] }}"
                alt="{{ $this->contact['name'] }}"
                size="lg"
            />
            <p>
                {{$this->contact['name']}}
            </p>
        </div>
        <x-filament::icon-button
            icon="heroicon-m-cog-8-tooth"
        />

    @endif

    <style>
        .header-chat{
            width: 52vw;
            height: 49px;
            background-color: #232323;
            border-radius: 0 20px 0 0;
        }
    </style>

</div>
