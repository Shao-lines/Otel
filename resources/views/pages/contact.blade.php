@extends('layouts.main')
@section('content')
<div class="container" id="cont">
    <h3 class="cont-text">Бассейн Oceanclub</h3>
    <div class="row">
        <div class="col-lg-6">
            <img src="https://hotel-spb.ru/images/contacts_01.jpg" alt="" height="450px" width="600px" style="object-fit: cover;">
        </div>
        <div class="col-lg-6" id="conttext">
            <h2>Отель D-PLUS</h2>
            <p>194044, Россия, Дербент, Дербентская наб., д. 2/2</p>
            <p>Телефон: <a href="#">+7 903 423 44 89</a></p>
            <p>E-mail: <a href="#">aubovomar13@gmail.com</a></p>
            <p>Координаты: 59.956806, 30.341644</p>
            <p>Официальный сайт: <a href="#">www.d-plus.ru</a></p>
            <div class="mt-3" id="poloscont"></div>
            <div class="container mt-2">
                <div class="row">
                    <div class="col-lg-4">Сведения об исполнителе услуг</div>
                    <div class="col-lg-4">Свидетельство о присвоении отелю 4 звезд</div>
                    <div class="col-lg-4">Сведения о сертификации услуг</div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-3">
                <div class="card" style="width: 18rem; height: 12rem;">
                    <div class="card-section p-2">Отдел по обработке бронирования</div>
                    <div class="card-body">
                      <p><a href="#">+7 903 423 44 89</a></p>                      
                      <p><a href="#">hotel@hotel-spb.com</a></p>                      
                      <p class="card-text">Ежедневно с 8.30 до 20.30</p>
                    </div>
                  </div>
            </div>
            
            <div class="col-lg-3">
                <div class="card" style="width: 18rem; height: 12rem;">
                    <div class="card-section p-2">Отдел по работе с партнерами</div>
                    <div class="card-body">
                      <p><a href="#">+7 (812) 380 19 09</a></p>                      
                      <p><a href="#">reservation@hotel-spb.com</a></p>                      
                      <p class="card-text">Ежедневно с 9.30 до 18.15</p>
                    </div>
                  </div>
            </div>

            <div class="col-lg-3">
                <div class="card" style="width: 18rem; height: 12rem;">
                    <div class="card-section p-2">Конгресс-Холл</div>
                    <div class="card-body">
                      <p><a href="#">+7 (812) 380 19 17</a></p>                      
                      <p><a href="#">event@hotel-spb.com</a></p>                      
                      <p class="card-text">Пн-Пт с 9.30 до 18.00</p>
                    </div>
                  </div>
            </div>

            <div class="col-lg-3">
                <div class="card" style="width: 18rem; height: 12rem;">
                    <div class="card-section p-2">Отдел маркетинга и рекламы</div>
                    <div class="card-body">
                      <p><a href="#">+7 (812) 380-19-19</a></p>                      
                      <p><a href="#">press@viking.spb.ru</a></p>                      
                      <p class="card-text">Пн-Пт с 9.30 до 18.00</p>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>

<div class="contianer mt-5">
    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2538.4226008000155!2d48.290361182454575!3d42.08297160686403!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1z0YXQsNC90LTQsNC00LDRiNCwINGC0LDQs9C40LXQstCwINC00LXRgNCx0LXQvdGC!5e0!3m2!1sru!2sru!4v1690026723678!5m2!1sru!2sru"  style="border:0; width: 100%; height: 30em" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
@endsection