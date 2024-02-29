@php
$linksFooter =[
    'DC COMICS'=>[
        'Characters',
        'Comics',
        'Movie',
        'TV',
        'Games',
        'Videos',
        'News'
    ],
    'DC'=>[
        'Terms Of Use',
        'Privacy policy(New)',
        'Ad Choices',
        'Advertising',
        'Jobs',
        'Subscriptions',
        'Talent Workshops',
        'CPSC Certificates',
        'Ratings',
        'Shop Help',
        'Contact Us'
    ],
    'SITES'=>[
        'DC',
        'MAD Magazine',
        'DC Universe',
        'DC Power Visa'
    ],
    'SHOP'=>[
        'Shop DC',
        'Shop DC collectibles'
    ]
];
$socialFooter =[
    'footer-facebook.png',
    'footer-twitter.png',
    'footer-youtube.png',
    'footer-pinterest.png',
    'footer-periscope.png'
]
@endphp

<footer>
    <div class="footer-top">
        <div class="container">
            <div class="menu row">
                <div class="col-6 d-flex flex-wrap">
                @foreach($linksFooter as $key => $link)                
                <ul class="">
                <h3>{{ $key }}</h3>
                    @foreach($link as $key => $elem)
                    <li>
                        <a>{{ $elem }}</a>
                    </li>
                    @endforeach
                </ul>
                @endforeach
                </div>
                <p class="info">
                    All Site Content TIM and 2020 DC Entertaiment, unless otherwise <span class="highlighted">noted here</span>. All rights reserverd.<br><span class="highlighted">Cookies Settigs</span>
                </p>
            </div>

            <div class="bg-logo">
                <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="footerbg">
            </div>
        </div>
    </div>

    <div class="bottom">
        <div class="container">
            <button>Sign-Up Now!</button>
            <div class="social">
                <h3>Follow Us</h3>
                <ul>
                    @foreach ($socialFooter as $elem)
                    <li>
                        <a><img class="social-logo" src="{{ Vite::asset('resources/img/'.$elem) }}" alt="{{ $elem }}"></a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</footer>