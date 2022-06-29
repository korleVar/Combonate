<header class="container-fluid ">
    <div class="container _container">
        <div class="row">
            <div class="col-2">
                <h1 class="header__logo">
                    <a href="index.php">Combonate</a>
                </h1>

            </div>
            <nav class="col-8 header__menu menu">
                <ul class="menu__list topmenu ">
                    <li class="menu__item"><a class="menu__link" href="<?php echo BASE_URL . 'about.php' ?> ">блог</a>
                    </li>
                    <li class="menu__item"><a class="menu__link" href=" <?php echo BASE_URL ?>">Акции</a> </li>

                    <li class="menu__item active">
                        <a class="menu__link" href="courses.php">
                            Католог курсов
                            <span class="fa fa-angle-down"></span>
                        </a>


                        <ul class="submenu">
                            <li><a href="courses.php">Ландшафтный дизайн</a></li>
                            <li><a href="courses.php">Программирование</a></li>
                            <li><a href="courses.php">Разработка игр</a></li>
                        </ul>
                    </li>

                    <li>
                        <div class="section search">
                            <!-- <h3>Поиск</h3> -->
                            <form action="search.php" method="post">
                                <input type="text" name="search-term" class="text-input" placeholder="Поиск...">
                            </form>
                        </div>
                    </li>

                    <li>
                        <?php if (isset($_SESSION['id'])) : ?>
                        <a href="#">
                            <i class="fa fa-user"></i>
                            <?php echo $_SESSION['login']; ?>
                        </a>
                        <ul>
                            <?php if ($_SESSION['admin']) : ?>
                            <li><a href="#">Админ панель</a> </li>
                            <?php endif; ?>
                            <li><a href="<?php echo BASE_URL . "logout.php"; ?>">Выход</a> </li>
                        </ul>
                        <?php else : ?>
                        <a href="log.php">
                            <i class="fa fa-user "></i>
                            Войти
                        </a>
                        <ul>
                            <li class="reg"><a href="reg.php">Регистрация</a> </li>
                        </ul>
                        <?php endif; ?>

                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>