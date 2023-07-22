@extends('layouts.main')
@section('content')

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container">
        <h1>Добро Пожаловать!</h1>
        <h2>Лучший паронамный вид в городе</h2>
    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">
            <h1 class="text-center mb-3">Коротко о нас</h1>
            <div class="row">
                <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="150">
                    <img src="assets/img/about.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
                    <p class="fst-italic">Отель с уникальным панорамным видом.Современные номера. Лучший ресторан Derb
                        на крыше.Новый SPA-комплекс с бассейном. Зарядная станция для электромобилей.Гарантия лучшей
                        цены </p>
                    <ul>
                        <li><i class="bi bi-check-circle"></i>Гарантия лучшей цены</li>
                        <li><i class="bi bi-check-circle"></i> Программа лояльности </li>
                        <li><i class="bi bi-check-circle"></i> Специальные предложения </li>
                    </ul>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
        <div class="container">

            <div class="row counters">

                <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="3245" data-purecounter-duration="1"
                        class="purecounter"></span>
                    <p>Клиентов</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="54" data-purecounter-duration="1"
                        class="purecounter"></span>
                    <p>Номеров</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="34" data-purecounter-duration="1"
                        class="purecounter"></span>
                    <p>Стандарт номеров</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="1"
                        class="purecounter"></span>
                    <p>Люкс номеров</p>
                </div>

            </div>

        </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
        <div class="container services" >
            <div class="section-title">
                <h2>Услуги</h2>
            </div>
            <div class="row gy-4">
                <div class="col-lg-4 ">
                    <div class="box">
                        <img src="https://blog.ostrovok.ru/wp-content/uploads/2012/02/download.jpg" alt="">
                        <h4><a href="/nomera">Номера</a></h4>
                    </div>
                </div>

                <div class="col-lg-4 ">
                    <div class="box">
                        <img src="https://primamediamts.servicecdn.ru/f/big/977/976520.jpg" alt="">
                        <h4><a href="/restoran">Ресторан</a></h4>
                    </div>
                </div>

                <div class="col-lg-4 ">
                    <div class="box">
                        <img src="https://houses.ru/upload/medialibrary/27b/spa_luxe_04.jpg" alt="">
                        <h4><a href="/pool">Бассейн</a></h4>
                    </div>
                </div>
            </div>

            <div class="row gy-4">
                <div class="col-lg-4 ">
                    <div class="box">
                        <img src="https://hotel-spb.ru/assets/components/phpthumbof/cache/spika_photo_03.335f649b4be0316c8b83c0c90700f9ae.jpg" alt="">
                        <h4><a href="/krasota">Красота и Здоровье</a></h4>
                    </div>
                </div>

                <div class="col-lg-4 ">
                    <div class="box">
                        <img src="https://hotel-spb.ru/assets/components/phpthumbof/cache/bkz_1000x.30933c2db2be01cc7d608f4aa383397b.jpg" alt="">
                        <h4><a href="">Концертный зал</a></h4>
                    </div>
                </div>

                <div class="col-lg-4 ">
                    <div class="box">
                        <img src="https://hotel-spb.ru/assets/components/phpthumbof/cache/273%D1%85204%404x-100%20%282%29.335f649b4be0316c8b83c0c90700f9ae.jpg" alt="">
                        <h4><a href="/electro">Для электромобилей</a></h4>
                    </div>
                </div>
            </div>
        </div>

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Цены</h2>
            </div>

            <div class="row">

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="box">
                        <h3>Стандарт</h3>
                        <h4><sup>Р</sup>1500<span> / день</span></h4>
                        <ul>
                            <li>3-х местный номер</li>
                            <li>3-х разовое питание</li>
                            <li>1-я уборка в день</li>
                            <li class="na">Абонемент в бассейн</li>
                            <li class="na">Абонемент в СПА</li>
                        </ul>
                    </div>
                </div>  

                <div class="col-lg-4 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                    <div class="box featured">
                        <h3>Деюкс</h3>
                        <h4><sup>Р</sup>3500<span> / день</span></h4>
                        <ul>
                            <li>4-х местный номер</li>
                            <li>3-х разовое питание</li>
                            <li>3-я уборка в день</li>
                            <li>Абонемент в бассейн</li>
                            <li class="na">Абонемент в СПА</li>
                        </ul>
                        
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
                    <div class="box">
                        <h3>Люкс</h3>
                        <h4><sup>Р</sup>5000<span> / день</span></h4>
                        <ul>
                            <li>5-и местный номер</li>
                            <li>3-х разовое питание</li>
                            <li>3-я уборка в день</li>
                            <li>Абонемент в бассейн</li>
                            <li>Абонемент в СПА</li>
                        </ul>
                    </div>
                </div>


            </div>

        </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Контакты</h2>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="info-box mb-4">
                        <i class="bx bx-map"></i>
                        <h3>Адрес</h3>
                        <p>Окружная 24,Дагестан,Дербент</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="info-box  mb-4">
                        <i class="bx bx-envelope"></i>
                        <h3>Почта</h3>
                        <p>aubovomar13@gmail.com</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="info-box  mb-4">
                        <i class="bx bx-phone-call"></i>
                        <h3>Номер</h3>
                        <p>+7 903 423 44 89</p>
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-lg-6 ">
                    <iframe class="mb-4 mb-lg-0"
                    src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2538.4226008000155!2d48.290361182454575!3d42.08297160686403!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1z0YXQsNC90LTQsNC00LDRiNCwINGC0LDQs9C40LXQstCwINC00LXRgNCx0LXQvdGC!5e0!3m2!1sru!2sru!4v1690026723678!5m2!1sru!2sru"
                        frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                </div>

                <div class="col-lg-6">
                    <form action="/" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Имя"
                                    >
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Почта" >
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Проблема"
                                >
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Сообщение"
                                ></textarea>
                        </div>
                        <div class="my-3">
                            <div class="sent-message">Ваша сообщение успешно отправлено. Спасибо!</div>
                        </div>
                        <div class="text-center"><button type="submit">Отправить</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->
@endsection