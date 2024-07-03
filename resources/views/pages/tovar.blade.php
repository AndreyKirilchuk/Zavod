@extends('layouts.index')

@section('link_box')
    <div class="link_box">
        <a href="/">Главная </a> <span class="slesh">/</span> <a href="/alltovars">Товары нашего производства</a> <span class="slesh">/</span><a href="{{'/tovars/'.$category->id}}">{{$category->name}}</a> <span class="slesh">/</span> {{$tovar->name}}
    </div>
@endsection


@section('content')
    <h1 class="page_title">{{$tovar->name}}</h1>

    <div class="tovar_container">
        <div class="tovar_img">
                    <img src="{{asset($tovar->img)}}" alt="" width="150px"><br>
        </div>
        <div class="tovar_info">
            <div class="tovar_name">
{{--                <div class="rating_container">--}}
{{--                    <i class="fa fa-star active" aria-hidden="true"></i>--}}
{{--                    <i class="fa fa-star active" aria-hidden="true"></i>--}}
{{--                    <i class="fa fa-star active" aria-hidden="true"></i>--}}
{{--                    <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                    <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                </div>--}}
                Производитель: ООО "КЗПО"
            </div>
            <div class="tovar_price">
                {{number_format($tovar->price, 0, '.', ' ')}}руб.
            </div>
            <div class="tovar_dopinfo">
                Доступные варианты
            </div>
            <div class="tovar_form">
                <form method="post" action="/cart/{{$tovar->id}}" class="contact_form">
                    @csrf
                    <input type="number" min="1" value="1" name="quantity" class="input_num" placeholder="1">
                    <button type="submit">Заказать</button>
                </form>
            </div>
        </div>
    </div>

    <div class="tovar_options">
        <button class="tovar_optionInfo" onclick="openInfo()">Описание</button>
{{--        <button class="tovar_optionReviews" onclick="openReviews()">Отзывы (2)</button>--}}

    </div>

    <div class="tovar_content">
        <div class="tovar_contentInfo">
            <strong> {{$tovar->name}} </strong>  - {{$category->info}}
        </div>


{{--        <div class="tovar_contentReviews">--}}
{{--            <h2>Все отзывы</h2>--}}

{{--            <div class="review_list">--}}
{{--                <div class="review_container">--}}
{{--                    <div class="author">--}}
{{--                        <b>Andrey</b> <span>12.06.2023</span>--}}
{{--                    </div>--}}
{{--                    <div class="text">--}}
{{--                        text--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="review_container">--}}
{{--                    <div class="author">--}}
{{--                        <b>Andrey</b> <span>12.06.2023</span>--}}
{{--                    </div>--}}
{{--                    <div class="text">--}}
{{--                        text--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="contact_form">--}}
{{--                <button onclick="openAddReview()">--}}
{{--                    Оставить отзыв--}}
{{--                </button>--}}
{{--            </div>--}}

{{--        </div>--}}

{{--        <div class="tovar_addReview">--}}
{{--            <h2>Оставить отзыв</h2>--}}
{{--            <form action="" class="contact_form">--}}
{{--                <div class="contact_container2">--}}
{{--                    <div>--}}
{{--                        <label for="name">Ваше имя</label>--}}
{{--                        <input type="text" name="name">--}}
{{--                    </div>--}}
{{--                    <div>--}}
{{--                        <label for="email">E-mail</label>--}}
{{--                        <input type="email" name="email">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <br>--}}
{{--                <label for="text">Нам очень важно знать ваше мнение!</label>--}}
{{--                <textarea name="text"></textarea>--}}
{{--                <p></p>--}}
{{--                Ваша оценка--}}
{{--                <div class="review_grade">--}}
{{--                    Плохо <input type="radio" name="mark" value="1"> <input type="radio" name="mark" value="2"> <input type="radio" name="mark" value="3"> <input type="radio" name="mark" value="4"> <input type="radio" name="mark" value="5">Отлично!--}}
{{--                </div>--}}

{{--                <div class="reviewButtons">--}}
{{--                    <div class="contact_container2">--}}
{{--                        <span class="link_signup">--}}
{{--                            <button type="button" onclick="openReviews()">--}}
{{--                                Все отзывы--}}
{{--                            </button>--}}
{{--                        </span>--}}

{{--                        <button type="submit">--}}
{{--                            Отправить--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </form>--}}
{{--        </div>--}}
    </div>
@endsection
