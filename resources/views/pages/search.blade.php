@extends('layouts.index')

@section('link_box')
    <div class="link_box">
        <a href="/">Главная </a> <span class="slesh">/</span> Поиск
    </div>
@endsection


@section('content')
    <h1 class="page_title">Поиск</h1>


    <div class="tovars_list">
        @foreach($tovars as $tovar)
            <div class="tovarbox">
                <a href="{{'/tovar/'.$tovar->id}}">
                    <img src="{{asset($tovar->img)}}" alt="" width="150px">
                </a>

                <div class="tovarbox_name">
                    <a href="{{'/tovar/'.$tovar->id}}">
                        {{$tovar->name}}
                    </a>
                    <div class="custom_line"></div>
                </div>

                <div class="tovarbox_price">

                    {{number_format($tovar->price, 0, '.', ' ')}}руб.

                    <form method="post" action="/cart/{{$tovar->id}}" class="contact_form">
                        @csrf
                        @method('post')
                        <input type="hidden" value="1" name="quantity" class="input_num">
                        <button type="submit">Заказать</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection


