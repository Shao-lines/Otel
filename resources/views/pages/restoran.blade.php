@extends('layouts.main')
@section('content')
<div class="container-fluid rest"></div>

<div class="container text-desc">
    <h3 class="mt-5 rest-text">Панорамный ресторан "Derbent"</h3>
    <p>Панорамный ресторан "Derbent" с уникальным видом на каспийское море. Только здесь можно одновременно насладиться изысканными блюдами и неповторимой красотой Каспия.</p>
    <p>Удобное зонирование ресторана подойдет и для романтического ужина при свечах, и для корпоративного праздника. Шеф-повар панорамного ресторана "Derbent" разработал оригинальное меню, в котором представлены русская, азиатская и европейская кухни, а также авторские блюда.</p>
    <p>Ежедневно в ресторане "Derbent" проходят завтраки в формате «шведский стол» (завтрак с собой можно заказать на ресепшене Отеля за 1 сутки), а также обеды/ужины a la cart. Так же в будние дни проводятся бизнес-ланчи в формате «шведский стол». </p>
    <p>Более подробную информацию вы можете узнать на сайте ресторана <a href="#">Derbent.ru</a></p>
</div>

<div class="container rest-img">
    <div class="row">
    <div class="col-lg-4">
        <img src="https://hotel-spb.ru/images/icons/icon_quality_circled.png" alt="">
        <p class="text-center">Лучшие стандарты качества</p>
    </div>
    <div class="col-lg-4">
        <img src="https://hotel-spb.ru/images/icons/icon_top1_circled.png" alt="">
        <p class="text-center">Лучший панорамный ресторан города </p>
    </div>
    <div class="col-lg-4">
        <img src="https://hotel-spb.ru/images/icons/icon_origmenu_circled.png" alt="">
        <p>Оригинальное меню</p>
    </div>
</div>  
</div>

<div class="container">
    <h2 class="text-center">Меню</h2>
    <div class="row gy-3">
        <div class="col-lg-4" id="osnv">
            <a href="#">Основное меню</a>
        </div>

        <div class="col-lg-4" id="vino">
            <a href="#">Винная карта</a>
        </div>

        <div class="col-lg-4" id="bar">
            <a href="#">Барная карта</a>
        </div>

    </div>
</div>

<div class="container mt-3">
    <h2 class="text-center">Шеф-повар</h2>
    <div class="row">
        <div class="col-lg-4">
            <img src="https://hotel-spb.ru/images/restaurants/shilov_bering_chef_hotel.jpg" alt="" style="width: 425px; height: 280px; object-fit: cover;">
        </div>
        <div class="col-lg-8" id="infshef">
            <h4>Вадим Шилов</h4>
            <h4>Шеф-повар панорамного ресторана "Derbent"</h4>
            <p class="mt-3">Мастерство повар оттачивал в ведущих ресторанах Санкт-Петербурга и в крупных загородных отелях Ленинградской области. Вадим руководит созданием и проработкой основного меню, технологических карт, фирменных и авторских блюд, десертов и домашних напитков, с учётом специфики и особенностей заведения. Гастрономические изыски, за которые так любят ресторан "Беринг" и гости отеля, и взыскательные гурманы, и организаторы банкетов и конференций, - съедобное воплощение творческих идей Вадима.</p>
        </div>
    </div>
</div>

<div class="container mt-2 mb-4">
    <h2 class="text-center">Галерея</h2>
    <div class="row gal">
        <div class="col-lg-3 mt-4" id="vid"></div>
        <div class="col-lg-3 mt-4" id="sup"></div>
        <div class="col-lg-3 mt-4" id="vid2"></div>
        <div class="col-lg-3 mt-4" id="sal"></div>
        <div class="col-lg-3 mt-4" id="vid3"></div>
    </div>
    <div class="row gal2">
        <div class="col-lg-3 mt-4" id="item_1"></div>
        <div class="col-lg-3 mt-4" id="item_2"></div>
        <div class="col-lg-3 mt-4" id="item_3"></div>
        <div class="col-lg-3 mt-4" id="item_4"></div>
        <div class="col-lg-3 mt-4" id="item_5"></div>
    </div>
</div>
@endsection
