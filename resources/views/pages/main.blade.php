@extends('layouts.index')

@section('content')
    <div class="main_slider">
        <div class="mainSwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="{{asset('images/mainSlide1.jpg')}}" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('images/mainSlide2.jpg ')}}" alt="">
                </div>
            </div>

            <div class="swiper-button-prev_custom_main">
                <i class="fa fa-chevron-left fa-5x"></i>
            </div>
            <div class="swiper-button-next_custom_main">
                <i class="fa fa-chevron-right fa-5x"></i>
            </div>
        </div>

    </div>

    <div class="main_name">
        Специальные предложения
    </div>

    <div class="main_special">
        <div class="special_tovar">
            <a href="/tovar/100">
                <img src="{{asset('images/flanec.jpg')}}" alt="" width="150px">
            </a>
            <a href="/tovar/100" class="special_tovar-name">
                Фланец для ПГ
            </a>
            <div class="price">
                1 800руб.
            </div>
            {{--            <span class="rating_container">--}}
            {{--                <i class="fa fa-star active" aria-hidden="true"></i>--}}
            {{--                <i class="fa fa-star active" aria-hidden="true"></i>--}}
            {{--                <i class="fa fa-star active" aria-hidden="true"></i>--}}
            {{--                <i class="fa fa-star active" aria-hidden="true"></i>--}}
            {{--                <i class="fa fa-star active" aria-hidden="true"></i>--}}
            {{--            </span>--}}
            <div class="special_tovar_bottom">
                <a href="/tovar/100" class="special_tovar-btn">
                    ПОДРОБНО
                </a>
            </div>
        </div>

        <div class="special_tovar">
            <a href="/tovar/90">
                <img src="{{asset('images/yf.png')}}" alt="" width="150px">
            </a>
            <a href="/tovar/90" class="special_tovar-name">
УФ ДУ100
            </a>
            <div class="price">
                2 730руб.
            </div>
{{--            <span class="rating_container">--}}
{{--                <i class="fa fa-star active" aria-hidden="true"></i>--}}
{{--                <i class="fa fa-star active" aria-hidden="true"></i>--}}
{{--                <i class="fa fa-star active" aria-hidden="true"></i>--}}
{{--                <i class="fa fa-star active" aria-hidden="true"></i>--}}
{{--                <i class="fa fa-star active" aria-hidden="true"></i>--}}
{{--            </span>--}}
            <div class="special_tovar_bottom">
                <a href="/tovar/90" class="special_tovar-btn">
                    ПОДРОБНО
                </a>
            </div>
        </div>
    </div>

    {{--    why choose us--}}
    <div class="main_name">
        Почему выбирают нас?
    </div>

    <div class="main_info">
        <p>
            1) Оперативность-процесс от приема вашего заказа до выдачи и конечной доставки до вас по казани
            занимает от з дней
            в другие регионы доставка зависит от транспортной компании
        </p>
        <p>2) Мы работаем с 2012 года-а это значит, что уже на протяжении 12 лет мы производим качественную продукцию</p>
        <p>3) Имеем сотни довольных клиентов и постоянно развиваемся, чтобы становится лучше и делать наш мир еще безопаснее</p>
        <p>4) Мы даем гарантию на нашу продукцию 3 года</p>
        <p>5) Вам не нужно переживать о доставке до пункта транспортной компании, ведь этим занимаемся мы!</p>
        <p>6) Несмотря на прекрасное качество нашего товара, мы сохраняем низкие цены для вас</p>
    </div>

    <br>
    {{--    about company--}}
    <div class="main_name">
        О компании
    </div>

    <div class="main_info">
        <p>Завод пожарного оборудования находится в г.Казань и является производителем стальных пожарных подставок под гидрант, фланцев под гидрант.
        Подставки под гидрант ставит вместе с гидрантом и являются частью магистрального водопровода. Казанский завод КЗПО производит широкий ассортимент пожарных подставок различных конфигураций и размеров.Завод имеет собственную производственную базу с механическими, слесарно-сварочными, заготовительными и малярными цехами. Работают на станках высококвалифицированные дипломированные сварщики. Продукция, выпускаемал заводом КЗПО, имеет сертификаты соответствия и паспорта.</p>
    </div>

    {{--    aboust shop--}}
{{--    <div class="main_name">--}}
{{--        О магазине--}}
{{--    </div>--}}

{{--    <div class="main_info">--}}
{{--        <p>Предлагаем вашему вниманию поставку стальных сварных пожарных подставок (ППОФ,ППФ,ППТФ,ППКФ) и фланцев под пожарный гидрант, а также стальных сварных фланцевых тройников (ТФ), крестов (КФ),переходов (ПФ), отводов (УФ) Собственного производства!</p>--}}

{{--        <p>Наш завод принимает заказы на изготовления трубных фланцевых изделий по чертежам заказчика, а также более высокого давления до РУ16(16кгс/см2). Цены расчетные и могут меняться в зависимости от цен на исходные материалы без изменения информации в прайсе Вся продукция с паспортами и сертифицирована!</p>--}}
{{--    </div>--}}
@endsection
