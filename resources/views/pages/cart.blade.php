@extends('layouts.index')

@section('link_box')
    <div class="link_box">
        <a href="/">Главная </a> <span class="slesh">/</span> Корзина
    </div>
@endsection

@section('content')
    <h1 class="page_title">@if($cart)Корзина@elseВаша корзина пуста@endif</h1>
    @if($cart)
    <table class="table_cart table_adaptive">
        <thead>
            <tr>
                <td>Фото</td>
                <td>Название</td>
                <td>
                    <span class="colvo_dekstop">Количество</span>
                    <span class="colvo_mobile">Кол. во</span>
                </td>
                <td>Цена</td>
                <td>
                    <form method="post" action="/deleteCart">
                        @csrf
                        @method('delete')
                        <button class="del_btn"></button>
                    </form>
                </td>
            </tr>
        </thead>
        <tbody>
            @foreach($cart as $item)
            <tr>
                <td>
                    <a href="">
                        <img src="{{asset($item['img'])}}" alt="" width="50px">
                        <span class="mobile_name">
                            {{ $item['name'] }}
                        </span>
                        <span class="mobile_price">
                            {{ number_format($item['price'] * $item['quantity'], 0, '.', ' ') }} руб.
                        </span>
                    </a>
                </td>
                <td>
                    <a href="{{'tovar/'.$item['id']}}">
                        {{$item['name']}}
                    </a>
                </td>
                <td>
                    <form action="/cart/{{$item['id']}}" class="contact_form" method="post">
                        @csrf
                        @method('put')
                        <input type="number" placeholder="{{$item['quantity']}}" class="input_num" name="quantity" onchange="this.form.submit()">
                    </form>
                </td>
                <td>
                    {{ number_format($item['price'] * $item['quantity'], 0, '.', ' ') }} руб.
                </td>
                <td>
                    <form method="post" action="/cart/{{$item['id']}}">
                        @csrf
                        @method('delete')
                        <button class="del_btn"></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <table class="table_cart table_delivery">
        <tbody>
            <tr>
                <td>Доставка</td>
                <td>
                    <select>

                    </select>
                </td>
                <td class="price"><span id="shipping_cost_show" class="price">0руб.</span></td>
            </tr>
        </tbody>
    </table>

    <hr class="hr_cart">

    <div class="cart_summ">
        Итого <span>{{number_format($totalPrice, 0, '.', ' ')}}руб.</span>
    </div>

    <div class="cart_buttons contact_form">
        <div>
            <a href="/catalog" class="cart_button-left">
                <button>Вернуться к покупкам</button>
            </a>
        </div>
        <div class="cart_buttons">
            <a href="/order">
                <button>ОФОРМИТЬ ЗАКАЗ</button>
            </a>
        </div>
    </div>
    @endif
@endsection
