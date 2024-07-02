@extends('layouts.index')

@section('link_box')
    <div class="link_box">
        <a href="/">Главная </a> <span class="slesh">/</span> Товары нашего производства
    </div>
@endsection


@section('content')
    <h1 class="page_title">Товары нашего производства</h1>

    <div class="tovars_priview_container">
        @foreach($categories as $category)
            <div class="tovars_preview">
                <a href="{{'/tovars/'.$category->id}}">
                    <img src="{{asset($category->img)}}" alt="" width="250px">
                </a>
                <div class="tovars_preview_link">
                    <a href="{{'/tovars/'.$category->id}}">{{$category->name}}</a>
                </div>
            </div>
        @endforeach
    </div>

    <form action="/alltovars">
        <div class="tovar_list_form">
            сортировать по:
            <select name="sort" id="" type="submit" onchange="this.form.submit()">
                <option value="name_asc" {{ request('sort') === 'name_asc' ? 'selected' : '' }}>Имени: А - Я</option>
                <option value="name_desc" {{ request('sort') === 'name_desc' ? 'selected' : '' }}>Имени: Я - А</option>
                <option value="price_asc" {{ request('sort') === 'price_asc' ? 'selected' : '' }}>Цене: Ниже - Выше</option>
                <option value="price_desc" {{ request('sort') === 'price_desc' ? 'selected' : '' }}>Цене: Выше - Ниже</option>
            </select>
        </div>
    </form>

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
                        <input type="hidden" value="1" name="quantity" class="input_num">
                        <button type="submit">Заказать</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection


