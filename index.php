<?php
include "path.php";
include "app/controllers/topics.php";

$page = isset($_GET['page']) ? $_GET['page'] : 1;
$limit = 2;
$offset = $limit * ($page - 1);
$total_pages = round(countRow('posts') / $limit, 0);

$posts = selectAllFromPostsWithUsersOnIndex('posts', 'users', $limit, $offset);
$topTopic = selectTopTopicFromPostsOnIndex('posts');


?>
<!doctype html>
<html lang="ru">




<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Custom Styling -->
    <style>
        <?php include 'assets/css/style.css';
        ?>
    </style>
    <!-- <link rel="stylesheet" href="assets/css/stele1.css"> -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">

    <title>Образовательный портал</title>
</head>

<body>

    <?php include("app/include/header.php"); ?>

    <!-- base -->
    <?php include("app/include/base.php"); ?>



    <div id="cookie">
        <p>🍪 Этот сайт использует файлы cookies. Продолжая
            использовать наш сайт, вы автоматически соглашаетесь с использованием данных технологий.
            <a id="close" href="#" onclick="javascript:closeCookiePopup()">✘</a>
        </p>
    </div>


    <!-- блок main-->
    <div class="__container">


        <!-- спецпредложение -->
        <section class="page__special-offers ">
            <div class="_container ">
                <div class="advantages_header header-block ">
                    <h2 class="header-block__title ">СПЕЦПРЕДЛОЖЕНИЕ </h2>
                </div>
            </div>

            <div class="special-offers__container">
                <div class="_container ">
                    <div class="special-offers__rate">
                        <div class="special-offers__item">
                            <h4 class="special-offers__header ">БАЗОВЫЙ ТАРИФ</h4>

                            <ul class="special-offers__list">

                                <li class="special-offers__atem">
                                    <i class="fa fa-check-circle-o" aria-hidden="true">✔</i> текст о тарифе
                                </li>
                                <li class="special-offers__atem">
                                    <i class="fa fa-check-circle-o" aria-hidden="true">✔</i> текст о тарифе
                                </li>
                                <li class="special-offers__atem">
                                    <i class="fa fa-check-circle-o" aria-hidden="true">✔</i> текст о тарифе
                                </li>
                                <li class="special-offers__atem">
                                    <i class="fa fa-check-circle-o" aria-hidden="true">✘</i> текст о тарифе
                                </li>
                                <li class="special-offers__atem">
                                    <i class="fa fa-check-circle-o" aria-hidden="true">✘</i> текст о тарифе
                                </li>

                            </ul>
                        </div>
                        <div class="special-offers__item">
                            <h4 class="special-offers__header">ПРЕМИУМ ТАРИФ</h4>

                            <ul class="special-offers__list">

                                <li class="special-offers__atem">
                                    <i class="fa fa-check-circle-o" aria-hidden="true">✔</i> текст о тарифе
                                </li>
                                <li class="special-offers__atem">
                                    <i class="fa fa-check-circle-o" aria-hidden="true">✔</i> текст о тарифе
                                </li>
                                <li class="special-offers__atem">
                                    <i class="fa fa-check-circle-o" aria-hidden="true">✔</i> текст о тарифе
                                </li>
                                <li class="special-offers__atem">
                                    <i class="fa fa-check-circle-o" aria-hidden="true">✔</i> текст о тарифе
                                </li>
                                <li class="special-offers__atem">
                                    <i class="fa fa-check-circle-o" aria-hidden="true">✔</i> текст о тарифе
                                </li>

                            </ul>
                        </div>

                    </div>

                </div>
            </div>


        </section>
        <!-- новое -->
        <section class="page__new ">
            <div class="_container ">
                <div class=" header-block ">
                    <h2 class="header-block__title ">НОВОЕ </h2>
                </div>
            </div>

            <div class="new__container ">
                <div class="_container ">
                    <div class="new__rate ">
                        <div class="new__item ">
                            <a href=" #"><img src="assets/images/геймдизайнер.png " alt="геймдизайнер ">
                                <div class="left ">ГЕЙМДИЗАЙНЕР</div>
                            </a>
                        </div>
                        <div class="new__item ">
                            <a href=" #"><img src="assets/images/веб-дизайнер.png " alt="веб-дизайнер ">
                                <div class="left ">веб-дизайнер</div>
                            </a>
                        </div>
                        <div class="new__item ">
                            <a href="# "><img src="assets/images/дизайнтлан.png " alt="дизайнтлан ">
                                <div class="left ">ландшафт</div>
                            </a>
                        </div>



                    </div>

                </div>
            </div>


        </section>
        <!-- карточки с курсами -->
        <section class="page__service  ">
            <div class=" _container ">
                <div class=" header-block ">
                    <h2 class="header-block__title ">КУРСЫ </h2>
                </div>
                <div class="courses-row ">

                    <div class="courses-col ">

                        <a href=" " class="courses-item ">
                            <div class="photo-left ">ГЕЙМДИЗАЙНЕР</div>
                            <img src="assets/images/программирование.png " alt="картинка ">

                        </a>


                    </div>

                    <div class="courses-col ">
                        <a href=" #" class="courses-item "><img src="assets/images/дизайнер.jpg " alt="картинка ">
                            <div class="photo-left ">дизайнер</div>
                        </a>
                    </div>
                    <div class="courses-col ">
                        <a href="# " class="courses-item "><img src="assets/images/разработка_игр.jpg " alt="картинка ">
                            <div class="photo-left ">разработка игр</div>
                        </a>
                    </div>
                    <div class="courses-col ">
                        <a href=" #" class="courses-item "><img src="assets/images/управление.jpg " alt="картинка ">
                            <div class="photo-left ">управление</div>
                        </a>
                    </div>
                    <div class="courses-col ">
                        <a href="# " class="courses-item "><img src="assets/images/маркетинг.jpg " alt="картинка ">
                            <div class="photo-left ">маркетинг</div>
                        </a>
                    </div>
                    <div class="courses-col ">
                        <a href="# " class="courses-item "><img src="assets/images/программирование.png " alt="картинка ">
                            <div class="photo-left ">программирование</div>
                        </a>
                    </div>
                </div>

            </div>
        </section>

        <!-- обратная связь -->
        <?php include("app/include/feedback.php"); ?>



        <!-- footer -->
        <?php include("app/include/footer.php"); ?>

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
        </script>


        <script src="assets/js/scripts.js"></script>

</body>

</html>