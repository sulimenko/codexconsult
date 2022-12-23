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
			<h2>Услуги поддержки бизнеса</h2>
		</div> <!-- /.container -->
	</div> <!-- /.overlay -->
</div> <!-- /.theme-inner-banner -->


<!-- 
=============================================
	Service Style One
============================================== 
-->
<div class="service-style-one section-spacing">
	<div class="container">
		<div class="theme-title-one">
			{{-- <h2>Наши решения</h2> --}}
			{{-- <p>A tale of a fateful trip that started from this tropic port aboard this tiny ship today stillers</p> --}}
		</div> <!-- /.theme-title-one -->
		<div class="wrapper">
			<div class="row">

				@foreach([
					['image' => '1.jpg', 'details' => 'Поиск офисного помещения' ],
					['image' => '2.jpg', 'details' => 'Содействие в открытии счетов в банках РК' ],
					['image' => '3.jpg', 'details' => 'Изготовление печати' ],
					['image' => '4.jpg', 'details' => 'Правовая экспертиза документов аренды помещения' ],
					['image' => '5.jpg', 'details' => 'Представительство в государственных органах' ],
					['image' => '6.jpg', 'details' => 'Хранение документов' ],
					['image' => '7.jpg', 'details' => 'Настройка получения уведомлений/писем' ],
					['image' => '7.jpg', 'details' => 'Маркетинговые услуги' ],
					['image' => '7.jpg', 'details' => 'Подбор команды' ],
					] AS $each)
				
					@include('service')

				@endforeach

			</div> <!-- /.row -->
		</div> <!-- /.wrapper -->
		<div class="contact-text">
			<h4>Вы можете отправить нам электронное письмо или позвонить.</h4>
			<h5><a href="service-v2.html#">info@codexconsult.kz</a> <br> <a href="service-v2.html#">+7 727 346 9025, +7 707 350 7550</a></h5>
		</div>
	</div> <!-- /.container -->
</div> <!-- /.service-style-one -->



<!-- 
=============================================
	Feature Banner
============================================== 
-->
<div class="feature-banner section-spacing">
	<div class="opacity">
		<div class="container">
			<h2>Мы предоставляем высококачественные услуги и инновационные решения для реального роста</h2>
			<a href="service-v2.html#" class="theme-button-one">Задать вопрос</a>
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
					<form action="service-v2.html#" class="theme-form-one">
						<div class="row">
							<div class="col-md-6"><input type="text" placeholder="Имя *"></div>
							<div class="col-md-6"><input type="text" placeholder="Телефон *"></div>
							<div class="col-md-6"><input type="email" placeholder="Email *"></div>
							<div class="col-md-6">
								<select class="form-control" id="exampleSelect1">
									<option>Интересующие услуги?</option>
									<option>Открытие бизнеса в МФЦА</option>
									<option>Услуги поддержки бизнеса</option>
									<option>Юридическая консультация</option>
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