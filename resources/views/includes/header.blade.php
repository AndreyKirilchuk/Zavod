
<div class="header_top">
    <div class="container">
            <div class="header_nav">
                <nav>
                    <a href="/">Главная</a>
                    <a href="/about">О магазине</a>
                    <a href="/catalog">Каталог товаров</a>
                    <a href="/delivery">Доставка и оплата</a>
                    <a href="/contacts">Контакты</a>
                </nav>

                <div class="burger_menu" onclick="toggleBurgerMenu()">
                    <div class="burger_button">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                    Меню
                </div>

                <div class="burger_links">
                    <a href="/">Главная</a>
                    <a href="/about">О магазине</a>
                    <a href="/catalog">Каталог товаров</a>
                    <a href="/delivery">Доставка и оплата</a>
                    <a href="/contacts">Контакты</a>
                </div>

                <div class="header_profile" onclick="toggleProfile()">
                    <svg width="10" height="10" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 10C12.7614 10 15 7.76142 15 5C15 2.23858 12.7614 0 10 0C7.23858 0 5 2.23858 5 5C5 7.76142 7.23858 10 10 10Z" fill="#737474"/>
                        <path d="M11 10H9C6.61305 10 4.32387 10.9482 2.63604 12.636C0.948211 14.3239 0 16.6131 0 19C0 19.2652 0.105357 19.5196 0.292893 19.7071C0.48043 19.8946 0.734784 20 1 20H19C19.2652 20 19.5196 19.8946 19.7071 19.7071C19.8946 19.5196 20 19.2652 20 19C20 16.6131 19.0518 14.3239 17.364 12.636C15.6761 10.9482 13.3869 10 11 10Z" fill="#737474"/>
                    </svg>
                    Личный кабинет
                    <svg width="10" height="10" viewBox="0 0 26 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13 10L25.9904 0.25H0.00961876L13 10Z" fill="#737474"/>
                    </svg>

                    <div class="profile_links">
                        @auth
                            <a href="/history">
                                История заказов
                            </a>
                            <a href="/logout">
                                Выход
                            </a>
                        @else
                            <a href="/login">
                                <i class="fa fa-sign-in"></i>
                                Авторизация
                            </a>
                            <a href="/signup">
                                <i class="fa fa-pencil-square-o"></i>
                                Регистрация
                            </a>
                        @endauth
                    </div>
                </div>
            </div>
    </div>
</div>

@php
    $totalQuantity = 0;
    $totalPrice = 0;

    if(session()->has('cart')) {
        foreach (session('cart') as $item){
            $totalQuantity += $item['quantity'];
            $totalPrice += $item['price'] * $item['quantity'];
        }
    }

@endphp

<div class="container">
    <header>
        <div class="header_info">
            <div class="header_logo">
                <a href="/">
                    <img src="{{asset('images/logo.svg')}}" alt="" width="280px">
                </a>
            </div>
            <div>
                <form class="search_form" method="get" action="/search">
                    @csrf
                    <input type="search" class="header_search" placeholder="Поиск..." name="search">
                    <button class="search_button" type="submit"></button>
                </form>
            </div>
            <div>
                <div class="header_cart">
                    <img src="{{asset('images/cart.png')}}" alt="" width="34px">
                    <div>
                        <h4>КОРЗИНА</h4>
                        <a href="/cart" class="header_price">{{$totalQuantity}} товар(ов) - {{number_format($totalPrice, 0, '.', ' ')}}руб</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>

