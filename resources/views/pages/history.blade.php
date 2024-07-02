@extends('layouts.index')

@section('link_box')
    <div class="link_box">
        <a href="/">Главная </a> <span class="slesh">/</span> История заказов
    </div>
@endsection

@section('content')
    <h1 class="page_title">История заказов</h1>
    <table class="table_history">
        <thead>
            <tr>
                <td>Номер заказа</td>
                <td>Наименование</td>
                <td>Время заказа</td>
                <td>Цена</td>
                <td>Количество</td>
                <td>Сумма</td>
            </tr>
        </thead>
        <tbody>
            @foreach($history as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>
                        <a href="{{'tovar/'.$item->id}}">
                            {{$item->name}}
                        </a>
                    </td>
                    <td>
                        {{$item->created_at}}
                    </td>
                    <td>
                        {{$item->price}}руб.
                    </td>
                    <td>
                        {{$item->quantity}}
                    </td>
                    <td>
                        {{$item->total_price}}руб.
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
