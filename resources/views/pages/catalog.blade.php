@extends('layouts.index')

@section('link_box')
    <div class="link_box">
        <a href="/">Главная </a> <span class="slesh">/</span> Каталог товаров
    </div>
@endsection

@section('content')
    <h1 class="page_title">Каталог товаров</h1>
    <a href="/download/kzpo_catalog" class="excel_link">
        <img src="{{asset('images/excel.png')}}" alt="" width="32px">
        Скачать
    </a>

    <table class="catalog_table">
        <tbody>
            <tr>
                <td colspan="2">
                    <a href="/alltovars" class="h4">Товары нашего производства</a>
                </td>
            </tr>
            @foreach($categories as $category)
                <tr>
                    <td colspan="2">
                        <a href="{{'/tovars/'.$category->id}}" class="h4">{{$category->name}}</a>
                    </td>
                </tr>
                @foreach($tovars as $tovar)
                    @if($tovar->category_id === $category -> id)
                        <tr>
                            <td>
                                <a href="/tovar/{{$tovar->id}}">{{$tovar->name}}</a>
                            </td>
                            <td class="catalog_table-price">{{$tovar->price}}руб.</td>
                        </tr>
                    @endif
                @endforeach
            @endforeach
        </tbody>
    </table>


@endsection
