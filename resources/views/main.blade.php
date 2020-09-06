<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/main.css') }}">
</head>
<body>
<!--header-->
<div class="header">
    <div class="container">
        <div class="header_information">
            <div class="header_logo"></div>
            <div class="header_contact">
                <div class="header_phone">
                    <a href="tel:03 8096 123 45 67">03 8096 123 45 67</a>
                    <br>
                    <a href="tel:03 8096 123 45 67">03 8096 123 45 67</a></div>
                <div class="header_email"><a href="email:">moto4you@mail.com</a></div>
            </div>
        </div>
        <div class="header_text">
            <h1>из швейцарии в украину</h1>
            <div class="header_text_info">найдём<br>
                и привезём<br>
                <span class="color_red">железного</span></div>
            <a href="" class="take_order">ЗАКАЗАТЬ!</a>
        </div>
        <div class="header_bike"></div>
    </div>
</div>
<!--end header-->
<!--problem-->
<div class="container">
    <div class="decide-problem">
        <div class="h-container">
            <div class="h-container_point bg_red">1</div>
            <h2>
                решаем <br>эти боли
            </h2>
        </div>
        <div class="flex-between">

            <div class="decide-problem_elem">
                <div class="decide-problem_elem_img">
                    <img src="/img/bike-1.png" alt="" height="180" width="300">
                </div>
                <h3>ПОДБОР</h3>
                <div class="decide-problem_elem_text">
                    Подберём мотоцикл, который станет Твоим вторым Я
                </div>
            </div>

            <div class="decide-problem_elem">
                <div class="decide-problem_elem_img">
                    <img src="/img/bike-2.png" alt="" height="180" width="300">
                </div>
                <h3>ПОДБОР</h3>
                <div class="decide-problem_elem_text">
                    Подберём мотоцикл, который станет Твоим вторым Я
                </div>
            </div>

            <div class="decide-problem_elem">
                <div class="decide-problem_elem_img">
                    <img src="/img/bike-3.png" alt="" height="180" width="300">
                </div>
                <h3>ПОДБОР</h3>
                <div class="decide-problem_elem_text">
                    Подберём мотоцикл, который станет Твоим вторым Я
                </div>
            </div>
        </div>
        <div class="decide-problem_content">
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
            Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.

            Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec
            pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a,
            venenatis vitae, justo.
        </div>
    </div>
</div>
<!--end problem-->

<!--your bike-->

<div class="your-bike">
    <div class="container">
        <div class="your-bike_header">
            <div class="h-container">
                <div class="h-container_point bg_red">2</div>
                <h2 class="color_white">
                    ИТАК, ТВОЙ МОТОЦИКЛ
                </h2>
            </div>
        </div>
        <div class="your-bike_select-block">
            <div class="your-bike_select-block_column">
                <div class="select-container">
                    <div class="select-container_point">1.</div>
                    <div class="select-container_text">Какой класс мото вы считаете<br> самый крутой?</div>
                </div>
                <select name="" id="" class="your-bike_choose">
                    <option value="">1</option>
                    <option value="">2</option>
                    <option value="">3</option>
                    <option value="">4</option>
                </select>


                <div class="select-container">
                    <div class="select-container_point">2.</div>
                    <div class="select-container_text">Какой марке мотопроизводителей<br> вы отдаете предпочтение?</div>
                </div>
                <select name="" id="" class="your-bike_choose">
                    <option value="">1</option>
                    <option value="">2</option>
                    <option value="">3</option>
                    <option value="">4</option>
                </select>


                <div class="select-container">
                    <div class="select-container_point">3.</div>
                    <div class="select-container_text">Какой обьем вы считаете<br> комфортным для себя (см3)?</div>
                </div>
                <select name="" id="" class="your-bike_choose">
                    <option value="">1</option>
                    <option value="">2</option>
                    <option value="">3</option>
                    <option value="">4</option>
                </select>


                <div class="select-container">
                    <div class="select-container_point">4.</div>
                    <div class="select-container_text">Ваши приоритеты<br> в выборе?</div>
                </div>
                <select name="" id="" class="your-bike_choose">
                    <option value="">1</option>
                    <option value="">2</option>
                    <option value="">3</option>
                    <option value="">4</option>
                </select>
            </div>
            <div class="your-bike_select-block_column">
                <div class="select-container">
                    <div class="select-container_point">5.</div>
                    <div class="select-container_text">Осблуживаешь сам(а) <br> или на СТО?</div>
                </div>
                <div class="your-bike_radio your-bike_choose">
                    <input type="radio" id="self" checked name="sto"><label for="self"> Сам</label>
                    <input type="radio" id="sto" name="sto"> <label for="sto">СТО</label>

                </div>
                <div class="select-container">
                    <div class="select-container_point">6.</div>
                    <div class="select-container_text">Привод<br>мотоцикла</div>
                </div>
                <div class="your-bike_radio your-bike_choose">
                    <input type="radio" id="chain" checked name="drive-unit"><label for="chain"> Цепь</label>
                    <input type="radio" id="propeller-shaft" name="drive-unit"> <label
                            for="propeller-shaft">Кардан</label>
                    <input type="radio" id="belt" name="drive-unit"> <label for="belt">Ремень</label>
                </div>
                <div class="select-container">
                    <div class="select-container_point">7.</div>
                    <div class="select-container_text">Сколько ты готов(а) потратить на <br> покупку мотоцикла?</div>
                </div>
                <select name="" id="" class="your-bike_choose">
                    <option value="">3000</option>
                    <option value="">4000</option>
                    <option value="">5000</option>
                    <option value="">6000</option>
                    <option value="">7000</option>
                </select>
                <div class="your-bike_show-results">
                    Посмотреть<br>
                    Результаты
                </div>
            </div>
        </div>
    </div>
</div>
<!--end your bike-->

<!--start check-bike-->
<div class="check-bike">
    <div class="container">
        <div class="check-bike_header">
            <div class="h-container" style="position: relative">
                <div class="h-container_point bg_red">3</div>
                <h2 class="color_black">
                    ПРОВЕРЯЕМ<br>
                    ПРИ ПОДБОРЕ
                </h2>

            </div>
            <div class="check-bike_background"></div>
            <div class="check-bike_bg">
                <div class="check-bike_bg_first-column">
                    <h3>Электрическую<br>
                        часть:
                    </h3>

                    <div>Работа свето-индикационных<br>
                        приборов
                    </div>
                    <div>Состояние проводки, наличие<br>
                        посторонних скруток и установку<br>
                        «колхозных» элементов
                    </div>

                    <h3>Общее состояние :
                    </h3>

                    <div>Износ расходных запчастей</div>
                    <div>Наличие ржавчины</div>
                    <div>Наличие следов ДТП<br>
                        и падений
                    </div>
                    <div>Соответствие стоку</div>
                </div>
                <div class="check-bike_bg_second-column">
                    <h3>Ходовую часть:</h3>

                    <div>Состояние передней вилки <br>
                        и амортизаторов
                    </div>
                    <div>Состояние тормозной системы<br>
                        (суппорта, тормозные диски, <br>
                        тормозные шланги)
                    </div>
                    <div>Наличие люфтов</div>
                    <div>Износ и состояние покрышек</div>
                    <h3>Двигатель:
                    </h3>

                    <div>Наличие признаков <br>вмешательства в двигатель
                    </div>
                    <div>Посторонние звуки при работе</div>

                    <h3>Историю техники:</h3>
                    <div>Количество владельцев</div>
                    <div>Сервисная история</div>
                    <div>Характер эксплуатации</div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end check-bike-->

<!--start why me-->
<div class="why-me">
    <div class="container">
        <div class="why-me_header">
            <div class="h-container">
                <div class="h-container_point bg_red">4</div>
                <h2 class="color_white">
                    Почему стоит <br>обратиться к нам
                </h2>
            </div>
        </div>
        <ul class="why-me_list">
            <li>Ты сохранишь до 2-х недель своего времени;</li>
            <li> Мы умеем минимизировать время на поиск и стоимость доставки мото;</li>
            <li>Мы знаем все нюансы таможенного оформления при доставке из Швейцарии;</li>
            <li> Мы знаем как растаможить мотоцикл в Украине и пройти сертификацию;</li>
            <li> У тебя будет честный мотоцикл с историей, без технических проблем;</li>
            <li>Мы никуда не пропадаем – всегда тебе поможем советом и делом в твоей мото жизни :)</li>
        </ul>

    </div>
</div>

<!--end why me-->
<!--start some numbers-->
<div class="some-numbers">
    <div class="container">
        <h2>НЕМНОГО ЦИФР</h2>
        <div class="some-numbers_content">
            <div class="some-numbers_block">
                <div class="some-numbers_block_numbers">
                    <div class="some-numbers_block_numbers_number">1</div>
                    <div class="some-numbers_block_numbers_number">3</div>
                    <div class="some-numbers_block_numbers_text row-2">
                        Лет успешной<br> работы
                    </div>
                </div>
                <div class="some-numbers_text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </div>

            </div>
            <div class="some-numbers_block">
                <div class="some-numbers_block_numbers">
                    <div class="some-numbers_block_numbers_number">3</div>
                    <div class="some-numbers_block_numbers_number">7</div>
                    <div class="some-numbers_block_numbers_number">5</div>
                    <div class="some-numbers_block_numbers_text row-3">
                        Байков<br> подобрано<br>
                        в Украине
                    </div>
                </div>
                <div class="some-numbers_text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </div>

            </div>
            <div class="some-numbers_block">
                <div class="some-numbers_block_numbers">
                    <div class="some-numbers_block_numbers_number">1</div>
                    <div class="some-numbers_block_numbers_number">3</div>
                    <div class="some-numbers_block_numbers_text row-3">
                        Байков<br> подобрано<br>
                        в Украине
                    </div>
                </div>
                <div class="some-numbers_text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </div>
            </div>
        </div>
    </div>
</div>
<!--end some numbers-->

<!--start risking-->
<div class="risk">
    <div class="container">
        <div class="why-me_header">
            <div class="h-container">
                <div class="h-container_point bg_red">5</div>
                <h2 class="color_white">
                    ЧЕМ ВЫ РИСКУЕТЕ,<br>
                    ПОДБИРАЯ САМИ
                </h2>
            </div>
        </div>
        <div class="content">
            <div class="block">
                <div class="block_row block_risks">
                    <div class="row_col">
                        <div class="col_item">
                            <img src="./img/hart.png" alt="heart" class="item_img">
                        </div>
                        <div class="col_item">
                            <h3 class="item_title">здоровьем</h3>
                            <p class="item_description some-numbers_text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
                        </div>
                    </div>
                    <div class="row_col">
                        <div class="col_item">
                            <img src="./img/card.png" alt="card" class="item_img">
                        </div>
                        <div class="col_item">
                            <h3 class="item_title">деньгами</h3>
                            <p class="item_description some-numbers_text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
                        </div>
                    </div>
                </div>

                <div class="block_row block_risks">
                    <div class="row_col">
                        <div class="col_item">
                            <img src="./img/time.png" alt="time" class="item_img">
                        </div>
                        <div class="col_item">
                            <h3 class="item_title">временем</h3>
                            <p class="item_description some-numbers_text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
                        </div>
                    </div>
                    <div class="row_col">
                        <div class="col_item">
                            <img src="./img/angry.png" alt="angry" class="item_img">
                        </div>
                        <div class="col_item">
                            <h3 class="item_title">нервами</h3>
                            <p class="item_description some-numbers_text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="order">
            <h2 class="order_title">хочешь <br>надёжный байк?</h2>
            <form action="" class="form">
                <div class="border"><input type="text" placeholder="   Имя" class="form__name" required></div>
                <div class="border"><input type="tel" placeholder="   +38 (096) 123 45 67" class="form__phone" required></div>
                <button  class="form__button">ЗАКАЗАТЬ!</button>
            </form>
        </div>
        <!-- /.form__order -->
    </div>
</div>
<!--end risking-->
<footer class="footer">
    <div class="block_row">
        <div class="row_col">
            <div class="col_item footer_logo">
                <img src="./img/logo.png" alt="logo">
            </div>
            <div class="col_item">
                <div class="header_phone tel">
                    <a href="tel:03 8096 123 45 67">03 8096 123 45 67</a>
                    <br>
                    <a href="tel:03 8096 123 45 67">03 8096 123 45 67</a>
                </div>
            </div>
        </div>
    </div>
    <div class="block_row">
        <div class="row_col footer_copyright">© 2020 moto4you</div>
    </div>
    <div class="block_row">
        <div class="block_row">
            <div class="row_col">
                <div class="col_item ">
                    <a href="mailto: moto4you@mail.com">moto4you@mail.com</a>
                </div>
                <div class="col_item">
                    <a href="#">
                        <svg fill="#fff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="23px" height="23px">
                            <path d="M16.403,9H14V7c0-1.032,0.084-1.682,1.563-1.682h0.868c0.552,0,1-0.448,1-1V3.064c0-0.523-0.401-0.97-0.923-1.005 C15.904,2.018,15.299,1.999,14.693,2C11.98,2,10,3.657,10,6.699V9H8c-0.552,0-1,0.448-1,1v2c0,0.552,0.448,1,1,1l2-0.001V21 c0,0.552,0.448,1,1,1h2c0.552,0,1-0.448,1-1v-8.003l2.174-0.001c0.508,0,0.935-0.381,0.993-0.886l0.229-1.996 C17.465,9.521,17.001,9,16.403,9z"/></svg>
                    </a>
                </div>
                <div class="col_item">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                             width="23" height="23"
                             viewBox="0 0 50 50"
                             style=" fill: #ffffff;">
                            <path d="M 16 3 C 8.8324839 3 3 8.8324839 3 16 L 3 34 C 3 41.167516 8.8324839 47 16 47 L 34 47 C 41.167516 47 47 41.167516 47 34 L 47 16 C 47 8.8324839 41.167516 3 34 3 L 16 3 z M 16 5 L 34 5 C 40.086484 5 45 9.9135161 45 16 L 45 34 C 45 40.086484 40.086484 45 34 45 L 16 45 C 9.9135161 45 5 40.086484 5 34 L 5 16 C 5 9.9135161 9.9135161 5 16 5 z M 37 11 A 2 2 0 0 0 35 13 A 2 2 0 0 0 37 15 A 2 2 0 0 0 39 13 A 2 2 0 0 0 37 11 z M 25 14 C 18.936712 14 14 18.936712 14 25 C 14 31.063288 18.936712 36 25 36 C 31.063288 36 36 31.063288 36 25 C 36 18.936712 31.063288 14 25 14 z M 25 16 C 29.982407 16 34 20.017593 34 25 C 34 29.982407 29.982407 34 25 34 C 20.017593 34 16 29.982407 16 25 C 16 20.017593 20.017593 16 25 16 z"></path>
                        </svg>
                    </a><!-- <svg fill="#fff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" width="23px" height="23px"><path d="M 16 3 C 8.8324839 3 3 8.8324839 3 16 L 3 34 C 3 41.167516 8.8324839 47 16 47 L 34 47 C 41.167516 47 47 41.167516 47 34 L 47 16 C 47 8.8324839 41.167516 3 34 3 L 16 3 z M 16 5 L 34 5 C 40.086484 5 45 9.9135161 45 16 L 45 34 C 45 40.086484 40.086484 45 34 45 L 16 45 C 9.9135161 45 5 40.086484 5 34 L 5 16 C 5 9.9135161 9.9135161 5 16 5 z M 37 11 A 2 2 0 0 0 35 13 A 2 2 0 0 0 37 15 A 2 2 0 0 0 39 13 A 2 2 0 0 0 37 11 z M 25 14 C 18.936712 14 14 18.936712 14 25 C 14 31.063288 18.936712 36 25 36 C 31.063288 36 36 31.063288 36 25 C 36 18.936712 31.063288 14 25 14 z M 25 16 C 29.982407 16 34 20.017593 34 25 C 34 29.982407 29.982407 34 25 34 C 20.017593 34 16 29.982407 16 25 C 16 20.017593 20.017593 16 25 16 z"/></svg> -->
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- /.footer -->
</body>
</html>