<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Toxygen shop</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="wrapper">
    <div class="content">
        <header class="header">
            <nav class="primary-menu">
                <div class="container">
                    <ul class="primary-menu__list">
                        <li class="primary-menu__item">
                            <a class="primary-menu__link" href="index.php">HOME</a>
                        </li>
                        <li class="primary-menu__item">
                            <a class="primary-menu__link" href="animals.php">PRODUCTS</a>
                        </li>
                        <li class="primary-menu__item">
                            <a class="primary-menu__link" href="#">ABOUT US</a>
                        </li>
                        <li class="primary-menu__item">
                            <a class="primary-menu__link" href="#">CONTACTS</a>
                        </li>
                    </ul>
                    <ul class="left-menu__list">
                        <li id="dropdown" class="dropdown ddmenu left-menu__item">
                            <i class="fas fa-user"></i>
                            <?php
                            session_start();
                            if (isset($_SESSION['logged']))
                                print
                                    '<ul id="dropdown-list" class="hide">
                        <li><a href="profile.php">My Profile</a></li>
                        <li><a href="admin-users.php">Admin Panel</a></li>
                        <li><a href="../server.php">Log Out</a></li>
                    </ul>';
                            else
                                print
                                    '<ul id="dropdown-list" class="hide">
                    <li><a href="auth.php">Sign In</a></li>
                    <li><a href="register.php">Register</a></li>
                </ul>';
                            ?>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <main class="main">
            <div class="container">
                <h2 class="auth-header">Админ Панель</h2>
                <div class="admin-links">
                    <a class="admin-links__link" href="admin-users.php">Пользователи</a>
                    <a class="admin-links__link" href="admin-goods.php">Товары</a>
                    <a class="admin-links__link" href="admin-categories.php">Категории</a>
                </div>
                <form action="admin-users.php" method="post">
                    <table class="admin-products">
                        <thead>
                        <tr>
                            <th>Название</th>
                            <th>Описание</th>
                            <th>Картинка</th>
                            <th>Размер</th>
                            <th>Вес</th>
                            <th>Цена</th>
                            <th>Категория</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><input class="admin-products" type="text" value="Медоед"></td>
                            <td><textarea class="admin-products" resize="none" type="text">Тут находится прямо таки охуенное описание товара</textarea></td>
                            <td><input class="admin-products" type="text" value="https://www.google.com"></td>
                            <td><input class="admin-products" type="text" value="25x65x78"></td>
                            <td><input class="admin-products" type="text" value="256кг"></td>
                            <td><input class="admin-products" type="text" value="25x65x78"></td>
                            <td><input class="admin-products" type="text" value="Млекопитающие"></td>
                            <td><input type="checkbox"></td>
                        </tr>
                        </tbody>
                    </table>
                    <input type="submit" value="Сохранить">
                </form>
            </div>
        </main>
    </div>
    <footer class="footer">
        <div class="container">
            <div class="footer__copyright">
                © Copyright @Toxygen 2019, All right reserved
            </div>
            <div class="footer__socials">
                <div class="social">
                    <a target="_blank" href="https://vk.com"><i class="fab fa-vk"></i></a>
                </div>
                <div class="social">
                    <a target="_blank" href="https://facebook.com" <i class="fab fa-facebook-f"></i></a>
                </div>
                <div class="social">
                    <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i>
                    </a>
                </div>
                <div class="social">
                    <a target="_blank" href="https://linkedin.com"><i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>
</div>
<script src="js/dropdown.js"></script>
</body>
</html>
