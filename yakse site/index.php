<html>
  <head>
    <title>ASSY</title>
    <link rel="shortcut icon" type="image/x-icon" href="img\icon.ico">
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
  </head>
  <body>
    <?php
    $host='localhost';
    $name='root';
    $pass='root';
    $base='yakse';

    $conn=mysqli_connect($host,$name,$pass,$base);
    ?> 
    <header>
      <div class="shapka-left" align="left">
      <a href="index.php"><img class="logotype"  src="img/logo.png" width="100px" height="100px"></a>
    </div>
    <div class="shapka-right" align="right">
      <a class="button_1622692227046" href="log.php">Вход</a>
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
      <h2 class="h2-raiting">Рейтинг<br> лучшие студенты</h2>
      <div class="raiting">
        <input class="raiting-search" placeholder="Например: Иванов Иван Иванович" type="text" name="search">
        <div class="raiting-search-button">
          <button class="button_search_16227635">Найти</button>
        </div>
          <div class="tabs">
           <div class="tab">
            <input type="radio" id="tab1" name="tab-group" checked>
            <label for="tab1" class="tab-title">За месяц</label> 
            <div class="tab-content">
                <table class="tab-content-all">
                  <tr>
                    <th>Место</th>
                    <th>Студент</th>
                    <th>Группа</th>
                    <th>Средний балл</th>
                  </tr>
                  <tr>
                    <td><img src="img/first.png" width="60px" height="60px"></td>
                    <td>Петров Владислав Сергеевич</td>
                    <td>ИСИП19/2</td>
                    <td>9,99</td>
                  </tr>
                  <tr>
                    <td><img src="img/second.png" width="60px" height="60px"></td>
                    <td>Филпиский Николай Викторович</td>
                    <td>ИСИП19/2</td>
                    <td>8,43</td>
                  </tr>
                  <tr>
                    <td><img src="img/three.png" width="60px" height="60px"></td>
                    <td>Волков Артем Юрьевич</td>
                    <td>ИСИП19/2</td>
                    <td>8,20</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Иванов Игорь Александрович</td>
                    <td>ОИБ18</td>
                    <td>7,10</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>Новичков Василий Ивнанович</td>
                    <td>РЭТ20</td>
                    <td>6,76</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>Донау Руслан Васильевичы</td>
                    <td>АВТ19</td>
                    <td>5,44</td>
                  </tr>
                </table>
            </div>
           </div> 
           <div class="tab">
            <input type="radio" id="tab2" name="tab-group">
            <label for="tab2" class="tab-title">За 2022</label> 
            <div class="tab-content">Скоро....</div>
           </div>
          </div>
          <div class="raiting-more">
            <button class="button_more_166748329">Показать еще</button>
          </div>
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