@extends('layouts.index')

@section('link_box')
    <div class="link_box">
        <a href="/">Главная </a> <span class="slesh">/</span> Спасибо за ваш заказ!
    </div>
@endsection


@section('content')
    <h1 class="page_title">Спасибо за ваш заказ!</h1>
    <div class="order_container">
        <div class="order_place_info">
            <div class="row">
                <div>Заказчик:</div>
                <div>{{$complete['name'] .'   '. $complete['lastname']}}</div>
            </div>
            <div class="row">
                <div>Телефон:</div>
                <div>{{$complete['number']}}</div>
            </div>
            <div class="row">
                <div>e-mail:</div>
                <div>{{$complete['email']}}</div>
            </div>
            <div class="row">
                <div>Адрес:</div>
                <div>у{{$complete['adress']}}</div>
            </div>
        </div>

        <table class="order_table">
            <thead>
                <tr>
                    <td>Наименование</td>
                    <td class="text-center">
                        <span class="hidden-sm hidden-xs">Кол-во</span>
                    </td>
                    <td class="text-right hidden-xx">Цена</td>
                    <td class="text-right">Сумма</td>
                </tr>
            </thead>
                <tbody>
                @foreach($complete['cart'] as $item)
                    <tr>
                        <td>{{$item['name']}}</td>
                        <td class="text-center">{{$item['quantity']}}</td>
                        <td class="text-right hidden-xx">{{$item['price']}}руб.</td>
                        <td class="text-right">{{$item['price'] * $item['quantity']}}руб.</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="cart_summ">
            Итого <span>{{$complete['totalPrice']}}руб.</span>
        </div>

        <div class="alert-success">Мы свяжемся с Вами для подтверждения заказа в ближайшее время.</div>
    </div>
@endsection


