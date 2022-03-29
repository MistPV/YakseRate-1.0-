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
      <div class="add-main">
       <table>
          <h2 align="center">Выбор Достижений <br>Студенту</h2>
            <form action="add.php" method="post">
                <tr>
                  <td class="td-add">Выберите студента</td>
                  <td class="td-add">
                    <select name="user_profile_color_1">
                      <option value="1">Ф.И.О</option>
                      <option value="2">Ф.И.О</option>
                    </select>
                  </td> 
                </tr>
                <tr>
                  <td class="td-add">Выберите группу</td>
                  <td class="td-add">
                    <select name="user_profile_color_1">
                      <option value="1">ИСИП19.2</option>
                      <option value="2">ИСИП19.1</option>
                    </select>
                  </td> 
                </tr>
                <tr>
                  <td class="td-add">Выберите достижение</td>
                  <td class="td-add">
                    <select name="user_profile_color_1">
                      <option value="1">Участие в хакатонах</option>
                      <option value="2">Хорошая репутация</option>
                    </select>
                  </td> 
                </tr>
                <tr>
                  <td class="td-add"><input class="button_add_1667483232" type="submit" name="add_pol2" value="Создать"></td>
                </tr>
            </form>
        </table>
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