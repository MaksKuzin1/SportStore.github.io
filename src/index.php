<?php include '../includes/head.php'; ?>
    <div class="list1">
      <?php include '../includes/header.php'; ?>
      <div class="banner">
        <div class="banner_content">
          <h1 class="TEXT_zagolovok">
            <div class="h1_mag">Магазин</div>
            Активного отдыха
          </h1>
          <div class="TEXT_podzagolovok banner_content_text">
            <?php
            $str = "«SPORT STORE» предлагает большой выбор спортивных товаров для занятий спортом.";
            $str = explode(' ', $str);
            $color = '';
            foreach ($str as $i => $el) {
              $color = ($i %2== 0) ?'red':'blue';
              $str[$i] = "<span style='color:$color'>$str[$i]</span>";
            }
            $str = implode(" ", $str);
            echo $str;            
            ?>
          </div>
        </div>
      </div>
    </div>

    <div class="list2 TEXT_podzagolovok">
      <div class="content_list2 ">
        Зимний транспорт
        <div class="image1">
          <div class="im">
            <img src="../img/im1.png" />
          </div>
          <div class="im23">
            <img src="../img/im2.png" />
            <img src="../img/im3.png" />
          </div>
        </div>
      </div>
      <div class="content_list2">
        Летний транспорт
        <div class="image2">
          <a href="../components/action.php" class="im">
            <img src="../img/im4.png" />
          </a>
          <div class="im56">
            <div class="im">
              <img src="../img/im5.png" />
            </div>
            <div class="im">
              <img src="../img/im6.png" />
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="list3">
      <h2 class="TEXT_podzagolovok">Популярные модели</h2>

      <div class="content_list3">
        
        <div class="cart cart_1">
          <div class="cart_conteiner">
            <div class="cart_content">
              <div class="cart_top">
                <div class="cart_top_left">
                  <h2 class="TEXT_podzagolovok">Кеды Converse Chuck Taylor All Star</h2>
                  <p class="TEXT_text">Эта модель Converse unisex.</p>
                </div>
                <div class="cart_top_right TEXT_knopka">4 500 р.</div>
              </div>
              <a href="../components/product_card.php" class="knopka TEXT_knopka">Сделать заказ</a>
            </div>
          </div>
        </div>
        
        <div class="cart cart_2">
          <div class="cart_conteiner">
            <div class="cart_content">
              <div class="cart_top">
                <div class="cart_top_left">
                  <h2 class="TEXT_podzagolovok">Лонгборд TECH TEAM Spicy Red</h2>
                  <p class="TEXT_text">Стильный лонгборд для катания.</p>
                </div>
                <div class="cart_top_right TEXT_knopka">8 800 р.</div>
              </div>
              <a href="../components/action.php" class="knopka TEXT_knopka">Сделать заказ</a>
            </div>
          </div>
        </div>
        
        <div class="cart cart_3">
          <div class="cart_conteiner">
            <div class="cart_content">
              <div class="cart_top">
                <div class="cart_top_left">
                  <h2 class="TEXT_podzagolovok">Роликовые коньки Reaction Rainbow</h2>
                  <p class="TEXT_text">Эти коньки - надежность и удобство.</p>
                </div>
                <div class="cart_top_right TEXT_knopka">5 500 р.</div>
              </div>
              <div class="knopka TEXT_knopka">Сделать заказ</div>
            </div>
          </div>
        </div>


      </div>
    </div>

    <div class="list4">
      <div class="list4_img" width="100%">
        <img src="../img/list4.png" alt="" width="100%">
      </div>
      <div class="list4_content">
        <div class="list4_top">
          <p class="TEXT_podzagolovok">Почему мы?</p>
          <p class="TEXT_podzagolovok">Наш магазин выбирают больше 1 млн. клиентов каждый месяц.</p>
        </div>
        <div class="list4_text">
          <p class="TEXT_text"><b class="TEXT_podzagolovok">Sport Store</b> — это сервис, где свои товары размещают более 100 тысяч магазинов. Здесь вы можете:
            <ul class="TEXT_text">
              <li>Изучить товары и выбрать подходящие: сравнить характеристики, почитать отзывы и задать вопросы, узнать советы экспертов по использованию товаров.</li>
              <li>Купить нужные вам товары и выбрать удобный способ доставки (курьером, в пункт выдачи, постамат или отделение Почты России)</li>
            </ul>
          </p>
          </div>
        <div class="knopka TEXT_knopka">Сделать заказ</div>
      </div>
    </div>

    <div class="list5">
      <div class="list5_text TEXT_podzagolovok" id="otziv">Отзывы наших покупателей</div>
      <div class="list5_content">

        <div class="list5_cart">
          <div class="list5_cart_content">
            <div class="list5_cart_content_top">
              <p class="TEXT_knopka">Отзыв от Ивана П.</p>
              <p class="TEXT_text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
            </div>
            <div class="list5_rating">
              <div class="stars_container">
                <img src="../img/Star.png" alt="">
                <img src="../img/Star.png" alt="">
                <img src="../img/Star.png" alt="">
                <img src="../img/Star.png" alt="">
                <img src="../img/Star.png" alt="">
              </div>
              <p class="TEXT_knopka">5/5</p>
            </div>
          </div>
        </div>

        <div class="list5_cart">
          <div class="list5_cart_content">
            <div class="list5_cart_content_top">
              <p class="TEXT_knopka">Отзыв от Руслана Ш.</p>
              <p class="TEXT_text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
            </div>
            <div class="list5_rating">
              <div class="stars_container">
                <img src="../img/Star.png" alt="">
                <img src="../img/Star.png" alt="">
                <img src="../img/Star.png" alt="">
                <img src="../img/Star.png" alt="">
                <img src="../img/Star.png" alt="">
              </div>
              <p class="TEXT_knopka">5/5</p>
            </div>
          </div>
        </div>
        
        <div class="list5_cart">
          <div class="list5_cart_content">
            <div class="list5_cart_content_top">
              <p class="TEXT_knopka">Отзыв от Владимира П.</p>
              <p class="TEXT_text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
            </div>
            <div class="list5_rating">
              <div class="stars_container">
                <img src="../img/Star.png" alt="">
                <img src="../img/Star.png" alt="">
                <img src="../img/Star.png" alt="">
                <img src="../img/Star.png" alt="">
                <img src="../img/Star.png" alt="">
              </div>
              <p class="TEXT_knopka">5/5</p>
            </div>
          </div>
        </div>

        <div class="list5_cart">
          <div class="list5_cart_content">
            <div class="list5_cart_content_top">
              <p class="TEXT_knopka">Отзыв от Анастасии М.</p>
              <p class="TEXT_text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
            </div>
            <div class="list5_rating">
              <div class="stars_container">
                <img src="../img/Star.png" alt="">
                <img src="../img/Star.png" alt="">
                <img src="../img/Star.png" alt="">
                <img src="../img/Star.png" alt="">
                <img src="../img/Star.png" alt="">
              </div>
              <p class="TEXT_knopka">5/5</p>
            </div>
          </div>
        </div>

      </div>
      <div class="knopka TEXT_knopka">Посмотреть все отзывы</div>
    </div>

    <div class="list6">
      <iframe class="karta" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4758.002388471159!2d58.98548242756834!3d53.39691852568774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x43d12f1b103e41dd%3A0x3ca203fbaefb4941!2z0JzQsNCz0L3QuNGC0L7Qs9C-0YDRgdC60LjQuSDQs9C-0YHRg9C00LDRgNGB0YLQstC10L3QvdGL0Lkg0YLQtdGF0L3QuNGH0LXRgdC60LjQuSDRg9C90LjQstC10YDRgdC40YLQtdGCINC40LwuINCTLtCYLiDQndC-0YHQvtCy0LA!5e0!3m2!1sru!2sru!4v1747331856175!5m2!1sru!2sru"style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      <?php include '../includes/footer.php'; ?>
    </div>
  </body>
</html>