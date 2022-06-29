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

    <!-- Custom Styling -->
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

    <!-- информация о курсе -->
    <section class="page__special-offers ">


        <div class="korse__container ">
            <div class="_container ">
                <div class="special-offers__rate ">

                    <div class="kors">
                        <p class="header-kors">6 МЕСЯЦЕВ БЕСПЛАТНО — ПЕРВЫЙ ПЛАТЁЖ ЧЕРЕЗ ПОЛГОДА!</p>
                        <h1 class="header-info_kors">Профессия Дизайнер интерьеров
                        </h1>
                        <p class="kors-text">Вы научитесь преображать дома и квартиры. Узнаете, как создавать чертежи,
                            эффектные рендеры и 3D-визуализации. Получите востребованную профессию, сможете брать
                            высокооплачиваемые заказы или открыть дизайн-студию.</p>
                        <a href="# " class="buttons-kors button-kors ">Добавить в корзину

                        </a>



                    </div>
                    <div class="korse__imag  ">
                        <img src="assets/images/курсы_оформление.png " alt="изоб ">


                    </div>
                </div>

            </div>
        </div>


    </section>
    <!-- текст с информацией -->
    <section class="text-info _container ">
        <p><span class="span">Дизайнеры интерьеров</span> превращают пустые бетонные коробки в уютные дома, которые не
            хочется покидать. Специалисты могут работать в дизайн-студии или уйти на фриланс — самостоятельно решать, за
            какие задачи приниматься
            и сколько брать за свои услуги. По данным ВЦИОМ, чаще всего траты россиян связаны с ремонтом, поэтому
            дизайнеры интерьеров востребованы всегда.</p>
        <p class="p">По данным ВЦИОМ, чаще всего траты россиян связаны с ремонтом, поэтому дизайнеры интерьеров
            востребованы всегда.</p>
    </section>

    <!-- -----------преимущества--------- -->
    <section class="page__service service">

        <div class="services__container _container">
            <div class=" header-block ">
                <h2 class="header-block__title ">Чему вы научитесь
                </h2>
            </div>
            <div class="services__body">
                <div class="services__column">
                    <div class="corsi_item item-services">
                        <div class="item-corsi__icon"><i class="fa fa-check-circle" aria-hidden="true"></i>
                        </div>
                        <h3 class="item-services__title">Дизайн жилых интерьеров</h3>
                        <p class="item-services__text">Познакомитесь с разными стилями — от ар нуво до хай-тека.
                            Научитесь грамотно их применять и сочетать в современных интерьерах.
                        </p>


                    </div>
                </div>
                <div class="services__column">
                    <div class="corsi_item item-services">

                        <div class="item-corsi__icon">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                        </div>
                        <h3 class="item-services__title">Дизайн жилых интерьеров</h3>
                        <p class="item-services__text">Познакомитесь с разными стилями — от ар нуво до хай-тека.
                            Научитесь грамотно их применять и сочетать в современных интерьерах.
                        </p>
                    </div>
                </div>

            </div>
            <div class="services__body">
                <div class="services__column">
                    <div class="corsi_item item-services">
                        <div class="item-corsi__icon"><i class="fa fa-check-circle" aria-hidden="true"></i>
                        </div>
                        <h3 class="item-services__title">Дизайн жилых интерьеров</h3>
                        <p class="item-services__text">Познакомитесь с разными стилями — от ар нуво до хай-тека.
                            Научитесь грамотно их применять и сочетать в современных интерьерах.
                        </p>


                    </div>
                </div>
                <div class="services__column">
                    <div class="corsi_item item-services">

                        <div class="item-corsi__icon">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                        </div>
                        <h3 class="item-services__title">Дизайн жилых интерьеров</h3>
                        <p class="item-services__text">Познакомитесь с разными стилями — от ар нуво до хай-тека.
                            Научитесь грамотно их применять и сочетать в современных интерьерах.
                        </p>
                    </div>
                </div>

            </div>




        </div>
    </section>
    </main>


    <!-- footer -->
    <?php include("app/include/footer.php"); ?>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>

</body>

</html>