@extends('app')
@section('content')

<!-- 
=============================================
	Theme Inner Banner
============================================== 
-->
<div class="theme-inner-banner section-spacing">
	<div class="overlay">
		<div class="container">
			<h2>Услуги</h2>
		</div> <!-- /.container -->
	</div> <!-- /.overlay -->
</div> <!-- /.theme-inner-banner -->


<!-- 
=============================================
	Our Solution
============================================== 
-->
<div class="our-solution section-spacing">
	<div class="container">
		<div class="theme-title-one">
			<h2>Наши решения</h2>
		</div> <!-- /.theme-title-one -->
		<div class="wrapper">
			<div class="row">
				<div class="col-lg-4 col-sm-6 col-12">
					<div class="single-solution-block">
						<img src="images/icon/5.png" alt="" class="icon">
						<h5><a href="service-details">Бизнес релокация в Казахстан</a></h5>
						<p>На территории Международного финансового центра Астана (МФЦА) созданы все условия для благоприятного развития бизнеса. </p>
					</div> <!-- /.single-solution-block -->
				</div> <!-- /.col- -->
				<div class="col-lg-4 col-sm-6 col-12">
					<div class="single-solution-block">
						<img src="images/icon/6.png" alt="" class="icon">
						<h5><a href="service-details">Услуги поддержки бизнеса</a></h5>
						<p>Регистрация юридического лица это лишь часть пути, завершение которого требует своевременной поддержки и консультаций. </p>
					</div> <!-- /.single-solution-block -->
				</div> <!-- /.col- -->
				<div class="col-lg-4 col-sm-6 col-12">
					<div class="single-solution-block">
						<img src="images/icon/9.png" alt="" class="icon">
						<h5><a href="service-details">Юридическая консультация</a></h5>
						<p>Профессиональные рекомендации относительно оптимальных действий в условиях сложившегося правоприменения. </p>
					</div> <!-- /.single-solution-block -->
				</div> <!-- /.col- -->
				<div class="col-lg-4 col-sm-6 col-12">
					<div class="single-solution-block">
						{{-- <img src="images/icon/8.png" alt="" class="icon"> --}}
						<h5><a href="service-details">Решения:</a></h5>
						<ul class="service-details">
							<li>Регистрация юридического лица</li>
							<li>Получение Лицензии в МФЦА</li>
							<li>Подбор видов деятельности (ОКЭД)</li>
							<li>Получение регистрационного свидетельства налогоплательщика (БИН/ИИН)</li>
							<li>Оформление электронно цифровой подписи (ЭЦП)</li>
						</ul>
					</div> <!-- /.single-solution-block -->
				</div> <!-- /.col- -->
				<div class="col-lg-4 col-sm-6 col-12">
					<div class="single-solution-block">
						{{-- <img src="images/icon/8.png" alt="" class="icon"> --}}
						<h5><a href="service-details">Решения:</a></h5>
						<ul class="service-details">
							<li>Поиск офисного помещения</li>
							<li>Содействие в открытии счетов в банках РК</li>
							<li>Изготовление печати</li>
							<li>Правовая экспертиза документов аренды помещения</li>
							<li>Представительство в государственных органах</li>
							<li>Хранение документов</li>
							<li>Маркетинговые услуги</li>
							<li>Настройка получения уведомлений/писем</li>
							<li>Подбор команды</li>
						</ul>
					</div> <!-- /.single-solution-block -->
				</div> <!-- /.col- -->
				<div class="col-lg-4 col-sm-6 col-12">
					<div class="single-solution-block">
						{{-- <img src="images/icon/10.png" alt="" class="icon"> --}}
						<h5><a href="service-v2">Решения:</a></h5>
						<p align="left">Консультации по регулированию бизнеса в МФЦА; </p>
						<p align="left">Юридическое сопровождение; </p>
						<p align="left">Юридический аудит; </p>
						<p align="left">Представление в суде МФЦА; </p>
						<p align="left">Сопровождение по вопросам трудового и налогового законодательства; </p>
						<p align="left">Anti‐Money Laundering & Know Your Customer (Идентификация личности клиента и контроль его финансовых операции). </p>
					</div> <!-- /.single-solution-block -->
				</div> <!-- /.col- -->
			</div> <!-- /.row -->
		</div> <!-- /.wrapper -->
	</div> <!-- /.container -->
</div> <!-- /.our-solution -->



<!-- 
=============================================
	Feature Banner
============================================== 
-->
<div class="feature-banner section-spacing">
	<div class="opacity">
		<div class="container">
			<h2>Мы предоставляем высококачественные услуги и инновационные решения для реального роста</h2>
			<a href="service" class="theme-button-one">Задать вопрос</a>
		</div> <!-- /.container -->
	</div> <!-- /.opacity -->
</div> <!-- /.feature-banner -->


<!--
=====================================================
	Free Consultation
=====================================================
-->
<div class="consultation-form section-spacing">
	<div class="container">
		<div class="theme-title-one">
			<h2>БЕСПЛАТНАЯ КОНСУЛЬТАЦИЯ</h2>
			<p>По данной форме Вы можете обратиться к специалисту за консультацией</p>
		</div> <!-- /.theme-title-one -->
		<div class="clearfix main-content no-gutters row">
			<div class="col-xl-6 col-lg-5 col-12"><div class="img-box"></div></div>
			<div class="col-xl-6 col-lg-7 col-12">
				<div class="form-wrapper">
					<form action="service" class="theme-form-one">
						<div class="row">
							<div class="col-md-6"><input type="text" placeholder="Имя *"></div>
							<div class="col-md-6"><input type="text" placeholder="Телефон *"></div>
							<div class="col-md-6"><input type="email" placeholder="Email *"></div>
							<div class="col-md-6">
								<select class="form-control" id="exampleSelect1">
									<option>Вид интересующей услуги?</option>
									<option>Бизнес релокация в Казахстан</option>
									<option>Услуги поддержки бизнеса</option>
									<option>Юридическая консультация</option>
									{{-- <option>Software Research</option> --}}
								</select>
							</div>
							<div class="col-12"><textarea placeholder="Сообщение"></textarea></div>
						</div> <!-- /.row -->
						<button class="theme-button-one">Задать вопрос</button>
					</form>
				</div> <!-- /.form-wrapper -->
			</div> <!-- /.col- -->
		</div> <!-- /.main-content -->
	</div> <!-- /.container -->
</div> <!-- /.consultation-form -->


<!-- 
=============================================
	Top Feature
============================================== 
-->
<div class="top-feature fix-border">
	<div class="top-features-slide">
		<div class="item">
			<div class="main-content" style="background:#fafafa;">
				<img src="images/icon/1.png" alt="">
				<h4><a href="index">Качество</a></h4>
						<p>Клиент получает индивидуальный сервис по вопросам требующим быстрых решений</p>
					</div> <!-- /.main-content -->
				</div> <!-- /.item -->
				<div class="item">
					<div class="main-content" style="background:#f6f6f6;">
						<img src="images/icon/2.png" alt="">
						<h4><a href="index">Профессионализм</a></h4>
						<p>Наша команда состоит из профессионалов, обладающих необходимыми компетенциями и опытом</p>
					</div> <!-- /.main-content -->
				</div> <!-- /.item -->
				<div class="item">
					<div class="main-content" style="background:#efefef;">
						<img src="images/icon/3.png" alt="">
						<h4><a href="index">Оперативность</a></h4>
						<p>Соблюдение плановых сроков реализации является одним из наших основных приоритетов</p>
					</div> <!-- /.main-content -->
				</div> <!-- /.item -->
				<div class="item">
					<div class="main-content" style="background:#e9e9e9;">
						<img src="images/icon/4.png" alt="">
						<h4><a href="index">Конфиденциальность</a></h4>
						<p>Информация Клиента не подлежит огласке, без предварительного согласия её обладателя</p>
			</div> <!-- /.main-content -->
		</div> <!-- /.item -->
	</div> <!-- /.top-features-slide -->
</div> <!-- /.top-feature -->

@endsection