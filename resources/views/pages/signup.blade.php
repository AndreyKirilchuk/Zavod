@extends('layouts.index')

@section('link_box')
    <div class="link_box">
        <a href="/">Главная </a> <span class="slesh">/</span> Регистрация
    </div>
@endsection


@section('content')

        <h1 class="page_title">Регистрация покупателя</h1>

        <form action="/signup" method="post" class="contact_form signup_container">
            @csrf
            <div>
                <label for="email">Email: *</label>
                <input type="email" name="email" required>
            </div>

            <div>
                <label for="name">Имя: *</label>
                <input type="name" name="name" required>
            </div>

            <div>
                <label for="lastname">Фамилия: *</label>
                <input type="lastname" name="lastname" required>
            </div>

            <div>
                <label for="number">Телефон: *</label>
                <input type="number" name="number" required>
            </div>

            <div>
                <label for="city">Город: *</label>
                <input type="city" name="city" required>
            </div>

            <div>
                <label for="adress">Адрес: *</label>
                <input type="adres" name="adress" required>

            </div>

            <div>
                <label for="password">Ваш пароль: *</label>
                <input type="password" name="password" required>
            </div>

            <div>
                <label for="password_confirmation">Повторите пароль: *</label>
                <input type="password" name="password_confirmation" required>
            </div>

            <br><br>
            <button type="submit">
                Зарегестрироваться
            </button>


        </form>

@endsection


