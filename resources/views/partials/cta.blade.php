@php
    $mainMenu = [
        [
            'icon' => 'buy-comics-digital-comics.png',
            'text' => 'digital comics',
        ],
        [
            'icon' => 'buy-comics-merchandise.png',
            'text' => 'dc merchandise',
        ],
        [
            "icon"=> "buy-comics-subscriptions.png",
            "text"=> "subscription",
        ],
        [
            "icon"=> "buy-comics-shop-locator.png",
            "text"=> "comic shop locator",
        ],
        [
            'icon' => 'buy-dc-power-visa.svg',
            'text' => 'dc power visa',
        ]
    ];
@endphp

<main>
    <div class="container">
        <nav>
            <ul>
                @foreach($mainMenu as $menu)
                <li>
                    <div class="icon">
                        <img src="{{ Vite::asset('resources/img/' . $menu['icon']) }}"/>
                    </div>
                    <a class="text-white">{{ $menu['text'] }}</a>
                </li>
                @endforeach
            </ul>
        </nav>         
    </div>
</main>