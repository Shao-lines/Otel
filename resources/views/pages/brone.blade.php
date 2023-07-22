@extends('layouts.main')
@section('content')
<div class="container brone">
    <h2 style="color: #edaa7e;">БРОНИРОВАНИЕ</h2>
    <p style="font-size: 19px;">ГАРАНТИЯ ЛУЧШЕЙ ЦЕНЫ</p>
    <div style="font-size: 17px;" class="mt-3">Почему выгодно бронировать на <a href="#">hotel-spb.ru?</a></div>
    <div style="font-size: 17px;">Когда вы бронируете на официальном сайте Отеля, мы гарантируем, что вы найдете самые
        низкие цены и получите наилучшие условия. Да, здесь цена ниже, чем на туристических сайтах, и мы предоставим
        множество других исключительных преимуществ, чтобы максимально улучшить ваше пребывание у нас. <a
            href="#">hotel-spb.ru?</a></div>
</div>
<div class="container mt-3 d-flex justify-content-center align-items-center text-center">
    <div class="row">
        <div class="col-lg-6">
            <img src="https://hotel-spb.ru/images/icons/icon_booking.png" width="90px" height="90px">
            <p>СКИДКА 15% на проживание при бронировании на сайте Отеля</p>
        </div>
        <div class="col-lg-6">
            <img src="https://hotel-spb.ru/images/icons/icon_hotel_02.png" width="90px" height="90px">
            <p>Неограниченный доступ к Wi-Fi на всей территории Отеля</p>
        </div>
    </div>
</div>

<div class="container mt-2 mb-3 brone-form">
    <h4 class="text-center">Забронируйте номер</h4>
    <div class="row">
        <div class="col-lg-6">
         <p class="mt-4" style="font-size: 21px;">При бронировании номера заранее , вас ожидает скидка в размере 15%</p>  
         <p style="margin-top: 220px; font-size: 21px;">Прежде чем бронировать номер , тщательно прочитайте наши услуги и заполните поля для бронирования номера</p> 
        </div>
        <div class="col-lg-6">
            <form action="/brone" method="post">
                @csrf
            <div class="brone-input mt-2">
                <label>Дата въезда</label>
                <input name="entry" type="date" class="form-control">
                <div class="text-danger">@error('entry'){{$message}}@enderror</div>
            </div>
            <div class="brone-input mt-2">
                <label>Дата выезда</label>
                <input name="departure" type="date" class="form-control">
                <div class="text-danger">@error('departure'){{$message}}@enderror</div>
            </div>
            <div class="brone-input mt-2">
                <label>К-во взрослых</label>
                <input name="person" type="number" class="form-control">
                <div class="text-danger">@error('person'){{$message}}@enderror</div>
            </div>
            <div class="brone-input mt-2">
                <label>К-во детей(до 18)</label>
                <input name="kid" type="number" class="form-control">
                <div class="text-danger">@error('kid'){{$message}}@enderror</div>
            </div>
            <div class="brone-input mt-2">
                <label>Номер</label>
                <input name="nomer" class='form-control' type="text">
                <div class="text-danger">@error('nomer'){{$message}}@enderror</div>
            </div>
            <button style="margin-left: 28px;" class="form-control btn btn-primary w-50 mt-2 mb-2">Забронировать</button>
        </form>
        </div>
    </div>
</div>
@endsection