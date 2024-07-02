@extends('layouts.index')

@section('link_box')
    <div class="link_box">
        <a href="/">Главная </a> <span class="slesh">/</span> Личный кабинет
    </div>
@endsection


@section('content')
    <h1 class="page_title">Личный кабинет</h1>
    <div class="profile_container">
        <span>{{$user->name}}</span>
        <br><br>
        <a href="/history">История заказов</a>
        <form action="/logout" class="contact_form">
            <button>
                Выйти
            </button>
        </form>
    </div>

@endsection


