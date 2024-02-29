@php
    $links = [
        [
            'url' => '',
            'label' => 'DC',
        ],
        [
            'url' => 'characters',
            'label' => 'characters',
        ],
        [
            'url' => 'comics',
            'label' => 'comics',
        ],
        [
            'url' => 'movies',
            'label' => 'movies',
        ],
        [
            'url' => 'tv',
            'label' => 'tv',
        ],
        [
            'url' => 'games',
            'label' => 'games',
        ],
        [
            'url' => 'collectibles',
            'label' => 'collectibles',
        ],
        [
            'url' => 'videos',
            'label' => 'videos',
        ],
        [
            'url' => 'fans',
            'label' => 'fans',
        ],
        [
            'url' => 'news',
            'label' => 'news',
        ],
        [
            'url' => 'shop',
            'label' => 'shop',
        ],
    ];
@endphp

<header>

    <div class="bg-primary">
        <div class="d-flex justify-content-end text-white p-1 top-header">
            <div class="me-5">
                DC POWER VISA
            </div>
            <div>
                ADDITIONAL DC SITES <i class="fa-solid fa-caret-down"></i>
            </div>
        </div>
    </div>
    <div class="container">

        <div class="logo">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo" />
        </div>
        <nav>
            <ul>
            @foreach ($links as $link)
                <li class="h-100">
                    <a href="{{ url($link['url']) }}">
                        {{ $link['label'] }}
                    </a>
                </li> 
            @endforeach
            </ul>
        </nav>
        <div class="d-flex align-items-center align-self-center border-5 border-bottom border-primary search-container">
            <input class="border-white search-input" type="search" placeholder="Search" aria-label="Search"> <i class="fa-solid fa-magnifying-glass"></i>
        </div>
    </div>

</header>