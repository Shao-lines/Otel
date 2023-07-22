@extends('layouts.main')
@section('content')
<div class="container kras">
    <h2>КРАСОТА И ЗДОРОВЬЕ</h2>
    <div class="mt-3">
        <form action="/krasota" method="post">
            @csrf
            <div class="row">
                <div class="col-lg-4 mt-4" style="color: rgb(123, 127, 131); font-size: 25px;">Бронирование услуг</div>
                <div class="col-lg-4" id='bronekras'><span>Дата: </span><input name="date" type="date" class="form-control">
                    <div class="text-danger">@error('date'){{$message}}@enderror</div>
                </div>
                <div class="col-lg-4"  id="bronekrasbut"><button class="form-control">Забронировать</button></div>
            </div>
        </form>
    </div>
</div>

<div class="container mt-5">
    <h3 class="text-center">Салон красоты МИЛЛЕНИУМ </h3>
    <div class="img-kras">
        <img src="https://hotel-spb.ru/images/dosug/salon-millenium_02.jpg" alt="">
    </div>
    <p class="mt-2">Большое количество услуг в Салоне Красоты «Миллениум» позволит Вам выбрать именно то, что
        необходимо: все виды парикмахерских услуг, косметические процедуры, кабинет маникюра и педикюра, массаж.</p>
    <p>И всё это по доступным ценам. Квалифицированные и дипломированные мастера салона создадут для Вас идеальный
        образ, который подчеркнёт Вашу индивидуальность.</p>
    <p>Цель специалистов салона красоты – дарить людям радость и красоту!</p>
    <p>Подробнее на сайте салона красоты Millennium <a href="#">salon-millennium.ru</a></p>
    <p>+7 (812) 332 16 77</p>
    <p>+7 (911) 167 83 02</p>
</div>

<div class="container mt-1">
    <div class="row">
        <div class="col-lg-6" id="photokras">
            <img src="https://hotel-spb.ru/images/dosug/salon-millenium_04.jpg" alt="">
        </div>
        <div class="col-lg-6" id="photokras">
            <img src="https://hotel-spb.ru/images/dosug/salon-millenium_prev.jpg" alt="">
        </div>
    </div>
</div>
<hr>

<div class="container mt-3">
    <h3 class="text-center">Институт красоты ГАЛАКТИКА</h3>
    <div class="img-kras">
        <img src="https://hotel-spb.ru/images/dosug/institut-krasoti_01.jpg" alt="">
    </div>
    <p class="mt-2">Институт красоты ГАЛАКТИКА — современная высокотехнологичная клиника пластической хирургии и
        медицинской косметологии, открыла свои двери для пациентов в августе 2016 года.</p>
    <p>Общая площадь клиники составляет более 1500 квадратных метров и включает в себя современно оснащенный
        операционный блок, состоящий из 3-х операционных, 12 палат класса люкс с панорамными видами на акваторию Каспия
        и легендарный крейсер «Аврора», а также отделение медицинской косметологии с новейшими аппаратами.</p>
    <p>В Институте красоты вас ждут врачи высшей категории, которые искренне любят свою работу. Мы заботимся о здоровье
        и красоте, поэтому в нашей команде собраны специалисты, которые огромное значение уделяют вопросам
        профессиональной этики, развиваются и неустанно совершенствуют свои знания и навыки.</p>
    <p>Парк медицинского оборудования представлен как уже известными традиционными аппаратами, так и новейшими
        установками, впервые представленными в России. Клиника соответствует всем мировым и российским стандартам, что
        подтверждается имеющимися лицензиями.</p>
    <p>Отделение пластической хирургии Института красоты — это профессиональный коллектив практикующих хирургов. Врачи
        клиники являются участниками и активными докладчиками конгрессов, профильных семинаров как в России, так и за
        рубежом.</p>
    <p>В 2019 году открылось отделение стоматологии.</p>
    <p><a href="">+7(812) 403-02-01</a></p>
    
    <div class="container mt-1">
        <div class="row ">
            <div class="col-lg-6" id="photokras1">
                <img src="https://hotel-spb.ru/images/dosug/spika_photo_01.jpg" alt="">
            </div>
            <div class="col-lg-6" id="photokras1">
                <img src="https://hotel-spb.ru/images/dosug/spika_photo_03.jpg" alt="">
            </div>
        </div>
    </div>
</div>
@endsection