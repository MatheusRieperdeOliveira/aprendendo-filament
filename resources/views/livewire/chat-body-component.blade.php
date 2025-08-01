<div class="flex flex-col container-body-message overflow-y-auto">

    @foreach($this->messages as $message)
        <div class="w-full flex {{ $message['from_me'] ? 'justify-end' : 'justify-start' }} mb-2 px-2">
            <div class="{{ $message['from_me'] ? 'from-me' : 'not-from-me' }}">
                {{ $message['message'] }}
            </div>
        </div>
    @endforeach

    <style>
        .container-body-message {
            height: 78vh;
            padding: 8px;
            background-image:
                linear-gradient(rgba(255, 255, 255, 0.5), rgba(255, 255, 255, 0.5)),
                url("https://sdmntprcentralus.oaiusercontent.com/files/00000000-b1ec-61f5-8903-8949879d2bb3/raw?se=2025-07-29T17%3A02%3A52Z&sp=r&sv=2024-08-04&sr=b&scid=15eea81c-72b4-5715-8ce4-b2bb90750598&skoid=a3412ad4-1a13-47ce-91a5-c07730964f35&sktid=a48cca56-e6da-484e-a814-9c849652bcb3&skt=2025-07-28T18%3A05%3A18Z&ske=2025-07-29T18%3A05%3A18Z&sks=b&skv=2024-08-04&sig=HmPXUgsatBPGmWGmZFeUrZc17hVwCJbrLUIhIim99UI%3D");
            background-size: cover;
            background-position: center;
        }

        .from-me, .not-from-me {
            max-width: 70%;
            padding: 10px 14px;
            border-radius: 18px;
            font-size: 14px;
            line-height: 1.3;
            word-break: break-word;
        }

        .from-me {
            background-color: #1a1a1a;
            color: white;
            border-bottom-right-radius: 4px;
        }

        .not-from-me {
            background-color: #e5e5ea;
            color: black;
            border-bottom-left-radius: 4px;
        }
    </style>
</div>
