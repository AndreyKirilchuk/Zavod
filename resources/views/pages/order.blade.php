@extends('layouts.index')

@section('link_box')
    <div class="link_box">
        <a href="/">Главная </a> <span class="slesh">/</span> Оформление заказа
    </div>
@endsection


@section('content')

    <h1 class="page_title">Оформление заказа</h1>

    <form action="/order" method="post" class="contact_form signup_container order_form">
        @csrf

        <div>
            <label for="name">Имя: *</label>
            <input type="name" name="name" required @auth() value="{{$user->name}}" @endauth>
        </div>

        <div>
            <label for="lastname">Фамилия: *</label>
            <input type="lastname" name="lastname" required @auth() value="{{$user->lastname}}" @endauth>
        </div>

        <div>
            <label for="email">Email: *</label>
            <input type="email" name="email" required @auth() value="{{$user->email}}" @endauth>
        </div>

        <div>
            <label for="number">Телефон: *</label>
            <input type="number" name="number" required @auth() value="{{$user->number}}" @endauth>
        </div>

        <div>
            <label for="city">Город: *</label>
            <input type="city" name="city" required @auth() value="{{$user->city}}" @endauth>
        </div>

        <div>
            <label for="adress">Адрес: *</label>
            <input type="adres" name="adress" required @auth() value="{{$user->adress}}" @endauth>

        </div>


        <div>
            <label for="text">Комментарий: </label>
            <textarea name="text" name="comment"></textarea>
        </div>

        <br><br>
        <button type="submit">
            Оформить заказ
        </button>


    </form>

@endsection


