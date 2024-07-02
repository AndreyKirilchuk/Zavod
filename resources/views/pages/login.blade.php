@extends('layouts.index')

@section('link_box')
    <div class="link_box">
        <a href="/">Главная </a> <span class="slesh">/</span> Авторизация
    </div>
@endsection


@section('content')
    <div class="login_container">
        <h1 class="page_title">Личный кабинет</h1>

        <form method="post" action="/login" class="contact_form">
            @csrf
            <label for="email">Email: *</label>
            <input type="email" name="email">

            <p></p>

            <label for="password">Пароль: *</label>
            <input type="password" name="password">

            <div class="contact_container2">
                <button type="submit">
                    Войти
                </button>
                <a href="/signup" class="link_signup">
                    <button type="button">РЕГИСТРАЦИЯ ПОКУПАТЕЛЯ</button>
                </a>
            </div>

        </form>
    </div>
@endsection


