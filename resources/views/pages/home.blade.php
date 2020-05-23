@extends('layouts.master')

@section('content')
    <div class="menu-icon">
        <div class="menu-item" id="smileys">
            <span>😀</span>
        </div>
        <div class="menu-item" id="gestures-and-people">
            <span>👍</span>
        </div>
        <div class="menu-item" id="hearts-clothes-activities">
            <span>️❤️</span>
        </div>
        <div class="menu-item active" id="foods-drinks">
            <span>🍔</span>
        </div>
        <div class="menu-item" id="animals">
            <span>🐻</span>
        </div>
        <div class="menu-item" id="plants-nature-weather">
            <span>🍀</span>
        </div>
        <div class="menu-item" id="travel-places-buildings">
            <span>🚘</span>
        </div>
        <div class="menu-item" id="objects">
            <span>💡</span>
        </div>
        <div class="menu-item" id="symbols">
            <span>🚫</span>
        </div>
        <div class="menu-item" id="flags">
            <span>🏳️‍🌈</span>
        </div>
    </div>
    <div class="list-icon">
        <section id="smileys-section">
            <h2>Smileys</h2>
            <div class="icons">
                @foreach($smileysIcons as $smileysIcon)
                    <button class="tooltip show" title="{{$smileysIcon->name}}"
                            icon-name="{{strtolower($smileysIcon->name)}}">
                        {!! $smileysIcon->code !!}
                    </button>
                @endforeach
            </div>
        </section>
        <section id="gestures-and-people-section">
            <h2>Gestures And People</h2>
            <div class="icons">
                @foreach($gesturesAndPeopleIcons as $gesturesAndPeopleIcon)
                    <button class="tooltip show" title="{{$gesturesAndPeopleIcon->name}}"
                            icon-name="{{strtolower($gesturesAndPeopleIcon->name)}}">
                        {!! $gesturesAndPeopleIcon->code !!}
                    </button>
                @endforeach
            </div>
        </section>
        <section id="hearts-clothes-activities-section">
            <h2>Hearts, Clothes, Activities</h2>
            <div class="icons">
                @foreach($heartsClothesActivitiesIcons as $heartsClothesActivitiesIcon)
                    <button class="tooltip show" title="{{$heartsClothesActivitiesIcon->name}}"
                            icon-name="{{strtolower($heartsClothesActivitiesIcon->name)}}">
                        {!! $heartsClothesActivitiesIcon->code !!}
                    </button>
                @endforeach
            </div>
        </section>
        <section id="foods-drinks-section">
            <h2>Foods, Drinks</h2>
            <div class="icons">
                @foreach($foodsDrinksIcons as $foodsDrinksIcon)
                    <button class="tooltip show" title="{{$foodsDrinksIcon->name}}"
                            icon-name="{{strtolower($foodsDrinksIcon->name)}}">
                        {!! $foodsDrinksIcon->code !!}
                    </button>
                @endforeach
            </div>
        </section>
        <section id="animals-section">
            <h2>Animals</h2>
            <div class="icons">
                @foreach($animalsIcons as $animalsIcon)
                    <button class="tooltip show" title="{{$animalsIcon->name}}"
                            icon-name="{{strtolower($animalsIcon->name)}}">
                        {!! $animalsIcon->code !!}
                    </button>
                @endforeach
            </div>
        </section>
        <section id="plants-nature-weather-section">
            <h2>Plants, Nature, Weather</h2>
            <div class="icons">
                @foreach($plantsNatureWeatherIcons as $plantsNatureWeatherIcon)
                    <button class="tooltip show" title="{{$plantsNatureWeatherIcon->name}}"
                            icon-name="{{strtolower($plantsNatureWeatherIcon->name)}}">
                        {!! $plantsNatureWeatherIcon->code !!}
                    </button>
                @endforeach
            </div>
        </section>
        <section id="travel-places-buildings-section">
            <h2>Travel, Places, Buildings</h2>
            <div class="icons">
                @foreach($travelPlacesBuildingsIcons as $travelPlacesBuildingsIcon)
                    <button class="tooltip show" title="{{$travelPlacesBuildingsIcon->name}}"
                            icon-name="{{strtolower($travelPlacesBuildingsIcon->name)}}">
                        {!! $travelPlacesBuildingsIcon->code !!}
                    </button>
                @endforeach
            </div>
        </section>
        <section id="objects-section">
            <h2>Objects</h2>
            <div class="icons">
                @foreach($objectIcons as $objectIcon)
                    <button class="tooltip show" title="{{$objectIcon->name}}"
                            icon-name="{{strtolower($objectIcon->name)}}">
                        {!! $objectIcon->code !!}
                    </button>
                @endforeach
            </div>
        </section>
        <section id="symbols-section">
            <h2>Symbols</h2>
            <div class="icons">
                @foreach($symbolsIcons as $symbolsIcon)
                    <button class="tooltip show" title="{{$symbolsIcon->name}}"
                            icon-name="{{strtolower($symbolsIcon->name)}}">
                        {!! $symbolsIcon->code !!}
                    </button>
                @endforeach
            </div>
        </section>
        <section id="flags-section">
            <h2>Flags</h2>
            <div class="icons">
                @foreach($flagsIcons as $flagsIcon)
                    <button class="tooltip show" title="{{$flagsIcon->name}}"
                            icon-name="{{strtolower($flagsIcon->name)}}">
                        {!! $flagsIcon->code !!}
                    </button>
                @endforeach
            </div>
        </section>
    </div>
@endsection

@section('footer')
    <footer>
        <div class="footer-wrapper">
            <span>Icon đã chọn</span>
            <input class="icons-input" type="text">
            <button class="btn-copy tooltip" title="Copied!">Copy</button>
            <button class="btn-cancel">Hủy</button>
        </div>
    </footer>
@endsection

@section('js')
    <script>
        $(function () {
            $('.menu-item').on('click', function () {
                let id = $(this).attr('id');
                let sectionPos = $('#' + id + '-section').offset().top;
                let top = $('#smileys-section').offset().top;
                $('.menu-item.active').removeClass('active');
                $(this).addClass('active');
                $('.list-icon').animate({
                    scrollTop: sectionPos - top
                });
            });

            $('.icons button').on('click', function () {
                $(this).addClass('active');
                $('.icons-input').val($('.icons-input').val() + $(this).html().trim());
            });

            $('.btn-copy').on('click', function () {
                let copyIcons = $('.icons-input');
                copyIcons.select();
                document.execCommand("copy");
            });

            $('.btn-cancel').on('click', function () {
                $('.icons-input').val('');
                $('.icons button.active').removeClass('active');
            });

            $('.btn-copy.tooltip').tooltipster({
                animation: 'fade',
                delay: 100,
                theme: 'tooltipster-borderless',
                trigger: 'click',
                timer: 1000
            });

            $('input.search-input').on('input', function () {
                let searchVal = $(this).val();
                if (searchVal !== '') {
                    $('.icons button.show').removeClass('show');
                    $('.icons button[icon-name*=' + searchVal.toLowerCase() + ']').addClass('show');
                } else {
                    $('.icons button').addClass('show');
                }
            });
        });
    </script>
@endsection

