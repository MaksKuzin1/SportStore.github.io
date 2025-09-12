<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
    <title>Sport Store/Форма регистрации</title>
  </head>
  <body>
    <div class="list_registration_team TEXT_text">
      <form action="" id="registration">
        <div class="form_content">
          <label for="name">Ваше имя</label>
          <input type="text" name="name" id="name" required>
        </div>
        
        <div class="form_content">
          <label for="number">Номер телефона</label>
          <input type="tel" name="number" id="number" placeholder="+7 (982) 615-09-13" pattern="\+7\s?\(?9\d{2}\)?\s?\d{3}[-]?\d{2}[-]?\d{2}" required>
        </div>
        
        <div class="form_content">
          <label for="date">Дата доставки</label>
          <input type="date" name="date" id="date" required>
        </div>
        
        <div class="form_content">
          <label for="adres">Адрес доставки</label>
          <input type="text" name="adres" id="adres" required>
        </div>
        
        <div class="form_content">
          <div>Я заказываю товар:</div>
          <div>
            <input type="radio" name="for_who" id="self">
            <label for="self">Для себя</label>
          </div>
          <div>
            <input type="radio" name="for_who" id="gift">
            <label for="gift">В подарок</label>
          </div>
        </div>

        <div class="form_content">
          <label for="prom">Коментарий к заказу или промокод:</label>
          <input type="text" name="prom" id="prom" required>
        </div>

        <div class="form_summa TEXT_podzagolovok">Сумма: 4900 р.</div>

        <div class="knopka TEXT_knopka" onclick="document.getElementById('registration').submit()">Отправить</div>
        <a href="../index.html" class="TEXT_knopka" style="text-align: end; width: 100%;">Назад</a>
      </form>
    </div>

  </body>
</html>