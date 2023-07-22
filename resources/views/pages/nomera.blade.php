@extends('layouts.main')
@section('content')
<div class="container nom">
    <h2 class="nomer-text mt-4">НОМЕРА</h2>
    <div class="img-nomer">
        <img src="https://hotel-spb.ru/assets/components/phpthumbof/cache/rooms-01.bf036fb1ddb81b19bb409c0b48f53adb.jpg"
            alt="">
    </div>
</div>
<h4 class="nomer-text mt-4 text-center ">БРОНИРУЙТЕ НОМЕРА НА НАШЕМ САЙТЕ</h4>

<div class="container nomera-nom mb-4">
    <ul>
        <li> <i class="bi bi-check2-all"></i>Гарантия безопасности</li>
        <li> <i class="bi bi-check2-all"></i>Низкие цены</li>
        <li> <i class="bi bi-check2-all"></i>Программа лояльности</li>
    </ul>
</div>

<div class="container mb-4">

    <div class="row">
        <div class="col-lg-4">
            <img src="https://hotel-spb.ru/assets/components/phpthumbof/cache/room-business_002.788c4c20502cae038e66e118c369e7b7.jpg"
                alt="" class="img-nom">
        </div>
        <div class="col-lg-8">
            <h4 class="title-nom">Стандарт номер </h4>
            <p class="nom-text">Из огромных окон номера открывается уникальный панорамный вид на Каспийское море.</p>
            <p class="nomer-price">От 1500 руб/сут</p>
            <p></p>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-lg-4">
            <img src="https://hotel-spb.ru/assets/components/phpthumbof/cache/predstavitelskiy_2rooms1.788c4c20502cae038e66e118c369e7b7.jpg"
                alt="" class="img-nom">
        </div>
        <div class="col-lg-8">
            <h4 class="title-nom">Люкс номер</h4>
            <p class="nom-text">Просторный комфортабельный номер с потрясающим видом на море.</p>
            <p class="nomer-price">От 3500 руб/сут</p>
            <p></p>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-lg-4">
            <img src="https://hotel-spb.ru/assets/components/phpthumbof/cache/room-deluxe_03.788c4c20502cae038e66e118c369e7b7.jpg"
                alt="" class="img-nom">
        </div>
        <div class="col-lg-8">
            <h4 class="title-nom">Делюкс номер </h4>
            <p class="nom-text">Представительский номер с большими панорамными окнами, из которых открывается уникальный вид на каспийское море.</p>
            <p class="nomer-price">От 5000 руб/сут</p>
            <p></p>
        </div>
    </div>

</div>
@endsection