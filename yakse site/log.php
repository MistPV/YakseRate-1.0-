<html>
  <head>
    <title>ASSY</title>
    <link rel="shortcut icon" type="image/x-icon" href="img\icon.ico">
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
  </head>
  <body>
    <header>
      <div class="shapka-left" align="left">
      <a href="index.php"><img class="logotype"  src="img/logo.png" width="100px" height="100px"></a>
    </div>
    <div class="shapka-right" align="right">
      <div class="shapka-right" align="right">
        <a class="button_1622692227046" href="log.php">Вход</a>
      </div>
    </div>
    </header>
    <main>
    <div class="hamburger-menu">
        <input id="menu__toggle" type="checkbox" />
        <label class="menu__btn" for="menu__toggle">
          <span></span>
        </label>
        <ul class="menu__box">
          <li><a class="menu__item" href="events.php">Мероприятия</a></li>
          <li><a class="menu__item" href="#">Проекты</a></li>
        </ul>
      </div>
      <h2 class="h2-log">Вход</h2> 
      <div class="log">
        <div class="log-all">
          <form action="log.php" method="post">
            <p class="p1">Введите логин:</p>
            <input class="log-name" type="text" name="" placeholder="Например: иванов иван">
            <p class="p2">Введите пароль:</p>
            <input class="log-pass" type="password" name="" placeholder="********"> 
            <input class="button_log_16665464" type='submit' name='auto' value='Войти'>
      </div>
    </main>
    <footer>
      <h2 class="footer-h2">2022 © Якутский колледж связи и энергетики имени П.И. Дудкина</h2>
      <div class="footer-img">
        <a href=""><img src="img/yt.svg" width="50" height="50"></a>
        <a href=""><img src="img/inst.svg" width="40" height="50"></a>
        <a href=""><img src="img/vk.svg" width="40" height="50"></a>
      </div>
    </footer> 
  </body>
</html>