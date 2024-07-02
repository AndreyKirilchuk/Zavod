@extends('layouts.index')

@section('link_box')
    <div class="link_box">
        <a href="/">Главная </a> <span class="slesh">/</span> Контакты
    </div>
@endsection

@section('content')
    <div class="about_container">
        <h1 class="page_title">Контакты</h1>
        <div class="contact_container2">
            <div>
                <h2>Информация</h2>
                <p>Наименование: КАЗАНСКИЙ ЗАВОД ПОЖАРНОГО ОБОРУДОВАНИЯ</p>
                <p>Адрес: Республика Татарстан, г. Казань, Ул.Рахимова 8 к.78</p>
                <p>Тел.: 8(843)512-00-47</p>
            </div>
            <div>
                <h2>Мы на карте</h2>
                <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A15e064e6166dc7c982c55ea7c5f4b57af546a9dedc1460eadb3c55a52436f540&amp;source=constructor" width="408" height="400" frameborder="0"></iframe>
            </div>
        </div>
        <p><br></p>

        <h2>Форма обратной связи</h2>
        <form action="/contacts" class="contact_form" method="post">
            @csrf
            <div class="reviewButtons">
                <div>
                    <label for="name">Имя: *</label>
                    <input type="text" name="name">
                </div>
                <div>
                    <label for="email">Email: *</label>
                    <input type="email" name="email">
                </div>
            </div>
            <br><br>
            <label for="text">Текст сообщения: *</label>
            <textarea name="text"></textarea>
            <br><br><br>
            <button>
                Отправить
            </button>
        </form>
    </div>
@endsection
