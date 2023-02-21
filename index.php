<?php
    //Подключение шапки
    require_once("header.php");
?>

<section class="w3l-main-slider" id="home">
  <!-- main-slider -->
  <div class="companies20-content">
   
    <div class="owl-one owl-carousel owl-theme">
      <div class="item">
        <li>
          <div class="slider-info banner-view bg bg2" data-selector=".bg.bg2">
            <div class="banner-info">
              <div class="container">
                <div class="banner-info-bg mx-auto text-center">
                  <h5>Красивые номера</h5>
                 <a class="btn btn-secondary btn-theme2 mt-md-5 mt-4" href="kn.php">Посмотреть</a>
                 <div class="scroll-button">
                  <a href="#about" class="scroll">
                    <div class="icon-scroll">
                      <div class="mouse">
                        <div class="wheel"></div>
                      </div>
                      <div class="icon-arrows">
                        <span></span>
                      </div>
                    </div>
                  </a>
                </div>
                </div>
                
              </div>
            </div>
          </div>
        </li>
      </div>
      <div class="item">
        <li>
          <div class="slider-info  banner-view banner-top1 bg bg2" data-selector=".bg.bg2">
            <div class="banner-info">
              <div class="container">
                <div class="banner-info-bg mx-auto text-center">
                  <h5>Безлимитные тарифы</h5>
                  <a class="btn btn-secondary btn-theme2 mt-md-5 mt-4" href="tarif.php">Посмотреть</a>
                  <div class="scroll-button">
                    <a href="#about" class="scroll">
                      <div class="icon-scroll">
                        <div class="mouse">
                          <div class="wheel"></div>
                        </div>
                        <div class="icon-arrows">
                          <span></span>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>
      </div>
      <div class="item">
        <li>
          <div class="slider-info banner-view banner-top2 bg bg2" data-selector=".bg.bg2">
            <div class="banner-info">
              <div class="container">
                <div class="banner-info-bg mx-auto text-center">
                  <h5>Есть вопросы?</h5>
                 <a class="btn btn-secondary btn-theme2 mt-md-5 mt-4" href="wa.me/79999984224" target="_blank">Задать вопрос!</a>
                 <div class="scroll-button">
                  <a href="#about" class="scroll">
                    <div class="icon-scroll">
                      <div class="mouse">
                        <div class="wheel"></div>
                      </div>
                      <div class="icon-arrows">
                        <span></span>
                      </div>
                    </div>
                  </a>
                </div>
                </div>
              </div>
            </div>
          </div>
        </li>
      </div>
      <div class="item">
        <li>
          <div class="slider-info banner-view banner-top3 bg bg2" data-selector=".bg.bg2">
            <div class="banner-info">
              <div class="container">
                <div class="banner-info-bg mx-auto text-center">
                  <h5>Нужен роутер или модем с безлимитным интернетом?</h5>
                  <a class="btn btn-secondary btn-theme2 mt-md-5 mt-4" href="mega.php">Купить</a>
                  <div class="scroll-button">
                    <a href="#about" class="scroll">
                      <div class="icon-scroll">
                        <div class="mouse">
                          <div class="wheel"></div>
                        </div>
                        <div class="icon-arrows">
                          <span></span>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>
      </div>
    </div>
  </div>

</div>


  <script src="assets/js/owl.carousel.js"></script>
  <!-- script for -->
  <script>
    $(document).ready(function () {
      $('.owl-one').owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        responsiveClass: true,
        autoplay: false,
        autoplayTimeout: 5000,
        autoplaySpeed: 1000,
        autoplayHoverPause: false,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          480: {
            items: 1,
            nav: false
          },
          667: {
            items: 1,
            nav: true
          },
          1000: {
            items: 1,
            nav: true
          }
        }
      })
    })
  </script>
  <!-- //script -->
  <!-- /main-slider -->
</section>
<section class="author-archive">
  <div class="container">
    <input type="radio" id="All" name="categories" value="All" checked>
    <input type="radio" id="mts" name="categories" value="mts">
    <input type="radio" id="Beeline" name="categories" value="Beeline">
    <input type="radio" id="megaphone" name="categories" value="megaphone">
    <input type="radio" id="tele2" name="categories" value="tele2">
    <input type="radio" id="yota" name="categories" value="yota">
    <input type="radio" id="bezlimit" name="categories" value="bezlimit">



    <ol class="posts">
      <li class="post" data-category="mts">
        <article>
          <figure>
            <a href="https://postimages.org/" target="_blank"><img src="https://i.postimg.cc/rwQQZ7Wd/mtsmax.png" alt="mtsmax"/></a>
            <figcaption>
              <ol class="post-categories">
                <li><a>Стоимость подключения - 4000Р</a></li>
                <li><a>На ваш номер</a></li>
                <li><a>Есть раздача</a></li>
                <li><a>Москва и Московская область</a></li>
              </ol>
            </figcaption>
          </figure>
        </article>
      </li>
      <li class="post" data-category="megaphone">
        <article>
          <figure>
            <a href="https://postimages.org/" target="_blank"><img src="https://i.postimg.cc/QxZ4FQhM/megaphone-severnii.png"></a>
            <figcaption>
              <ol class="post-categories">
                <li><a>Стоимость подключения - 4000Р</a></li>
                <li><a>На ваш номер</a></li>
                <li><a>Есть раздача</a></li>
                <li><a>Все регионы</a></li>
              </ol>
            </figcaption>
          </figure>
        </article>
      </li>
      <li class="post" data-category="bezlimit">
        <article>
          <figure>
            <a href="https://postimages.org/" target="_blank"><img src="https://i.postimg.cc/K8sWRCW8/bezlimit.png"></a>
            <figcaption>
              <ol class="post-categories">
                <li><a>Стоимость подключения - 0Р</a></li>
                <li><a>Новый номер</a></li>
                <li><a>Есть раздача</a></li>
                <li><a>Все регионы</a></li>
                <li><a>Красивый номер в подарок</a></li>
              </ol>
            </figcaption>
          </figure>
        </article>
      </li>
      <li class="post" data-category="Beeline">
        <article>
          <figure>
            <a href="https://postimages.org/" target="_blank"><img src="https://i.postimg.cc/MZQ3ZPk4/beeline-unlim-vip.png"></a>
            <figcaption>
              <ol class="post-categories">
                <li><a>Стоимость подключения - 4000Р</a></li>
                <li><a>На ваш номер</a></li>
                <li><a>Есть раздача</a></li>
                <li><a>Все регионы</a></li>
              </ol>
            </figcaption>
          </figure>
        </article>
      </li>







    </ol>
  </div>
</section>
<div class="w3l-open-block-services py-5" id="services">
		<div class="container py-lg-5 pt-4">
			<div class="heading text-center mx-auto">
				<h3 class="head">Наши преимущества</h3>

				  
			  </div>
			<div class="row pt-5 mt-3">
				<div class="col-lg-4 col-md-6">
					<div class="card text-center">
						<h4 class="mission">Экономично</h4>
						<div class="open-description">
							<p>Размер абонентской платы на наших тарифах от 100 до 650 руб. в месяц. Ваши расходы на связь сокращаются в 3-4 раза!</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mt-md-0 mt-3 pt-md-0 pt-3">
					<div class="card text-center">
						<h4 class="mission">Сохранение номера</h4>
						<div class="open-description">
							<p>Вам не нужно расставаться с привычным номером. На любой тариф можно перейти с сохранением своего номера для любых регионов.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mt-lg-0 mt-3 pt-lg-0 pt-3">
					<div class="card text-center">
						<h4 class="mission">Надежно</h4>
						<div class="open-description">
							<p>Подключение происходит на Ваш паспорт. Можно управлять услугами через личный кабинет и корпоративную поддержку.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mt-lg-0 mt-3 pt-lg-0 pt-3">
					<div class="card text-center">
						<h4 class="mission">Быстро</h4>
						<div class="open-description">
							<p>Переход со своим номером занимает от 2 до 7 рабочих дней. Новые номера отправляем курьером СДЭК или почтой России, доставка в течение недели.</p>
						</div>
					</div>
				</div>
        <div class="col-lg-4 col-md-6 mt-lg-0 mt-3 pt-lg-0 pt-3">
          
        </div>
        <div class="col-lg-4 col-md-6 mt-lg-0 mt-3 pt-lg-0 pt-3">
          <div class="card text-center">
            <h4 class="mission">Гарантия</h4>
            <div class="open-description">
              <p>На любые наши тарифы действует гарантия 6 месяцев. Если тариф уйдет в архив, то мы бесплатно заменим его на аналогичный по условиям.</p>
            </div>
          </div>
        </div>
			</div>
		</div>
	</div>
<section class="w3l-index6 py-5">
  <div class="container py-md-3 text-center">
    <div class="heading text-center mx-auto">
				<h3 class="head text-white">Понравился наш сервис?</h3>
				<p class="my-3 head text-white">Можете оставить отзыв о нашей работе иkb порекомендовать нас своим знакомым!</p>
				  
			  </div>
    <div class="buttons mt-5">
      <a href="https://vk.com/topic-197730421_49769541" class="btn btn-outline-primary mr-2 theme-button lft-btn" target="_blank">Оставить отзыв</a>
      <a href="https://vkontakte.ru/share.php?url=https://nopublic.com/tarif.php" class="btn btn-primary theme-button ml-2" target="_blank">Поделиться</a>
    </div>
  </div>
</section>
<section class="w3l-news" id="news">
  <section id="grids5-block" class="py-5">
    <div class="container py-lg-3">
      <div class="heading text-center mx-auto">
        <h3 class="head">Наш магазин оборудования</h3>
        </div>
          <div class="container py-lg-5 py-md-4">
      <div class="row text-center img-grids">
        <div class="col-lg-4 col-md-6 col-sm-12">


              <div class="uCalc_423912"></div><script> var widgetOptions423912 = { bg_color: "transparent" }; (function() { var a = document.createElement("script"), h = "head"; a.async = true; a.src = (document.location.protocol == "https:" ? "https:" : "http:") + "//ucalc.pro/api/widget.js?id=423912&t="+Math.floor(new Date()/18e5); document.getElementsByTagName(h)[0].appendChild(a) })();</script>
              <a class="btn btn-secondary btn-theme2 mt-md-5 mt-4" style="width: 100%;" href="#modem">Купить - 3000Р</a>


        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 mt-md-0 mt-4">
          <div class="uCalc_423999"></div><script> var widgetOptions423999 = { bg_color: "transparent" }; (function() { var a = document.createElement("script"), h = "head"; a.async = true; a.src = (document.location.protocol == "https:" ? "https:" : "http:") + "//ucalc.pro/api/widget.js?id=423999&t="+Math.floor(new Date()/18e5); document.getElementsByTagName(h)[0].appendChild(a) })();</script>
          <a class="btn btn-secondary btn-theme2 mt-md-5 mt-4" style="width: 100%;" href="#wifimodem">Купить - 4000Р</a>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 mt-lg-0 mt-4">
          <div class="uCalc_423997"></div><script> var widgetOptions423997 = { bg_color: "transparent" }; (function() { var a = document.createElement("script"), h = "head"; a.async = true; a.src = (document.location.protocol == "https:" ? "https:" : "http:") + "//ucalc.pro/api/widget.js?id=423997&t="+Math.floor(new Date()/18e5); document.getElementsByTagName(h)[0].appendChild(a) })();</script>
          <a class="btn btn-secondary btn-theme2 mt-md-5 mt-4" style="width: 100%;" href="#router">Купить - 7000Р</a>
        </div>
      </div>
    </div>
    </div>
  </section>
<section class="w3l-services2" id="stats">
			<div class="features-with-17_sur py-5">
				   <div class="container py-md-3">
					<div class="heading text-center mx-auto">
						<h3 class="head text-white">Как сделать заказ?</h3>
					  </div>
				     <div class="row pt-5 mt-3">
						
						<div class="col-lg-12 my-lg-0 my-5 align-self-center features-with-17-right_sur">
							<div class="features-with-17-right-tp_sur">
								<div class="features-with-17-left1">
									<span class="">1</span>		
								</div>
								<div class="features-with-17-left2">
									<h6><a href="#url">Заявка</a></h6>
									<p>Оставьте заявку в форме обратной связи и мы перезвоним для уточнения условий тарифа.</p>		
								</div>
							</div>
							<div class="features-with-17-right-tp_sur">
								<div class="features-with-17-left1">
                  <span class="">2</span>   
                </div>
								<div class="features-with-17-left2">
										<h6><a href="#url">Согласование</a></h6>
										<p>Вы присылаете данные паспорта и номер, на который необходимо подключить тариф. Работаем в соответствии ФЗ-245 от 29.07.2017.</p>			
								</div>
							</div>
							<div class="features-with-17-right-tp_sur">
								<div class="features-with-17-left1">
                  <span class="">3</span>   
                </div>
								<div class="features-with-17-left2">
										<h6><a href="#url">Оплата</a></h6>
										<p>С большинством тарифов мы работаем по предоплате. Оплату можно произвести десятью различными способами, в том числе на реквизиты юрлица.</p>	
								</div>
							</div>
							<div class="features-with-17-right-tp_sur">
								<div class="features-with-17-left1">
                  <span class="">4</span>   
                </div>
								<div class="features-with-17-left2">
										<h6><a href="#url">Проверка подключения</a></h6>
										<p>Подключение производится удаленно от 2 до 7 дней. Подробнее Вам уточнит менеджер. Проверяете тариф в личном кабинете или по комбинации.</p>	
								</div>
							</div>
							
							
						</div>
					</div>
				</div>
			</div>
		</section>


<?php
    //Подключение шапки
    require_once("footer.php");
?>