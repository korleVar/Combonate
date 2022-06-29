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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <title>Образовательный портал</title>
</head>

<body>


    <?php include("app/include/header.php"); ?>

    <!-- base -->
    <?php include("app/include/base.php"); ?>


    <!-- блок main-->


    <!-- карточки с курсами -->
    <section class="page__service service">

        <div class="services__container _container">
            <div class=" header-block ">
                <h2 class="header-block__title ">КУРСЫ ПО ДИЗАЙНУ
                </h2>
            </div>
            <div class="services__body">

                <div href="inform.php" class="services__column">
                    <div class="services_item item-services">

                        <h3 class="item-services__title">Дизайн жилых интерьеров</h3>
                        <a href="inform.php" class="iteam-services__text">Научитесь придумывать визуальные решения для
                            квартир и жилых
                            домов</a>
                        <h4 class="iteam-services__text-mouth">12 месяцев</h4>
                        <h4 class="iteam-services__text-start">Старт: 10 июня</h4>
                        <div class="item-services__icon"><a class="fa-solid fa-heart"></a></div>

                    </div>
                </div>

                <div class="services__column">
                    <div class="services_item item-services">

                        <h3 class="item-services__title">Дизайн жилых интерьеров</h3>
                        <a href="inform.php" class="iteam-services__text">Научитесь придумывать визуальные решения для
                            квартир и жилых
                            домов</a>
                        <h4 class="iteam-services__text-mouth">12 месяцев</h4>
                        <h4 class="iteam-services__text-start">Старт: 10 июня</h4>
                        <div class="item-services__icon"><i class="fa-solid fa-heart"></i></div>

                    </div>
                </div>

            </div>
            <div class="services__body">
                <div class="services-2__column">
                    <div class="services_item item-services">

                        <h3 class="item-services__title">Дизайн жилых интерьеров</h3>
                        <a href="inform.php" class="iteam-services__text">Научитесь придумывать визуальные решения для
                            квартир и жилых
                            домов</a>
                        <h4 class="iteam-services__text-mouth">12 месяцев</h4>
                        <h4 class="iteam-services__text-start">Старт: 10 июня</h4>
                        <div class="item-services__icon"><i class="fa-solid fa-heart"></i></div>
                    </div>
                </div>
                <div class="services-2__column">
                    <div class="services_item item-services">

                        <h3 class="item-services__title">Дизайн жилых интерьеров</h3>
                        <a href="inform.php" class="iteam-services__text">Научитесь придумывать визуальные решения для
                            квартир и жилых
                            домов</a>
                        <h4 class="iteam-services__text-mouth">12 месяцев</h4>
                        <h4 class="iteam-services__text-start">Старт: 10 июня</h4>
                        <div class="item-services__icon"><i class="fa-solid fa-heart"></i></div>
                    </div>
                </div>

            </div>
            <div class="services__body">
                <div class="services-3__column">
                    <div class="services_item item-services">

                        <h3 class="item-services__title">Дизайн жилых интерьеров</h3>
                        <a href="inform.php" class="iteam-services__text">Научитесь придумывать визуальные решения для
                            квартир и жилых
                            домов</a>
                        <h4 class="iteam-services__text-mouth">12 месяцев</h4>
                        <h4 class="iteam-services__text-start">Старт: 10 июня</h4>
                        <div class="item-services__icon"><i class="fa-solid fa-heart"></i></div>
                    </div>
                </div>
                <div class="services-3__column">
                    <div class="services_item item-services">

                        <h3 class="item-services__title">Дизайн жилых интерьеров</h3>
                        <a href="inform.php" class="iteam-services__text">Научитесь придумывать визуальные решения для
                            квартир и жилых
                            домов</a>
                        <h4 class="iteam-services__text-mouth">12 месяцев</h4>
                        <h4 class="iteam-services__text-start">Старт: 10 июня</h4>
                        <div class="item-services__icon"><i class="fa-solid fa-heart"></i></div>
                    </div>
                </div>

            </div>


        </div>
    </section>
    </div>


    <!-- обратная связь -->
    <?php include("app/include/feedback.php"); ?>
    <!-- // footer -->
    <!-- блок main END-->
    <!-- footer -->
    <?php include("app/include/footer.php"); ?>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>


</body>

</html>