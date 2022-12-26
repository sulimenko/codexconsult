@extends('app')
@section('content')

<!--
=====================================================
    Our Team
=====================================================
-->
<div class="our-team section-spacing">
    <div class="container">
        <div class="wrapper">
            <div class="row">
                @foreach([
							['image' => '6.jpg', 'phrase' => 'lysenko@codexconsult.kz', 'fio' => 'Алексей Лысенко', 'position' => 'Директор по продажам'],
							['image' => '2.jpg', 'phrase' => 'abraimov@codexconsult.kz', 'fio' => 'Алмаз Абраимов', 'position' => 'Генеральный директор'],
							['image' => '5.jpg', 'phrase' => 'berdyugin@codexconsult.kz', 'fio' => 'Александр Бердюгин', 'position' => 'Комплаенс-директор'],
							['image' => '3.jpg', 'phrase' => 'nem@codexconsult.kz', 'fio' => 'Людмила Нэм', 'position' => 'Коммерческий директор'],
						] AS $each)
						<div class="col-lg-3 col-sm-6 col-12">
							<div class="team-member">
								<div class="image-box">
									<img src="images/team/{{ $each['image'] }}" alt="">
									<div class="overlay">
										<div class="hover-content">
											<ul>
												<li><a href="index"><i class="fa fa-facebook"
															aria-hidden="true"></i></a></li>
												<li><a href="index"><i class="fa fa-twitter"
															aria-hidden="true"></i></a></li>
												<li><a href="index"><i class="fa fa-pinterest"
															aria-hidden="true"></i></a></li>
											</ul>
											<p>{{ $each['phrase'] }}</p>
										</div> <!-- /.hover-content -->
									</div> <!-- /.overlay -->
								</div> <!-- /.image-box -->
								<div class="text">
									<h6>{{ $each['fio'] }}</h6>
									<span>{{ $each['position'] }}</span>
								</div> <!-- /.text -->
							</div> <!-- /.team-member -->
						</div> <!-- /.col- -->
						@endforeach
            </div> <!-- /.row -->
        </div> <!-- /.wrapper -->
    </div> <!-- /.container -->
</div> <!-- /.our-team -->



<!--
=====================================================
    Free Consultation
=====================================================
-->
<div class="consultation-form section-spacing">
    <div class="container">
        <div class="theme-title-one">
            <h2>Организовать встречу</h2>
            <p>По данной форме Вы можете обратиться к специалисту и назначить встречу</p>
        </div> <!-- /.theme-title-one -->
        <div class="clearfix main-content no-gutters row">
            <div class="col-xl-6 col-lg-5 col-12"><div class="img-box"></div></div>
            <div class="col-xl-6 col-lg-7 col-12">
                <div class="form-wrapper">
                    <form action="team.html#" class="theme-form-one">
                        <div class="row">
                            <div class="col-md-6"><input type="text" placeholder="Имя *"></div>
                            <div class="col-md-6"><input type="text" placeholder="Телефон *"></div>
                            <div class="col-md-6"><input type="email" placeholder="Email *"></div>
                            <div class="col-md-6">
                                <select class="form-control" id="exampleSelect1">
                                    <option>Кого вы ищете?</option>
                                    <option>Алексей Лысенко</option>
                                    <option>Алмаз Абраимов</option>
                                    <option>Александр Бердюгин</option>
                                    <option>Людмила Нэм</option>
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
=====================================================
    Partner Slider
=====================================================
-->
<div class="partner-section bg-color">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-4 col-12">
                <h6>Наши <br>партнеры</h6>
            </div>
            <div class="col-md-9 col-sm-8 col-12">
                <div class="partner-slider">
                    <div class="item"><img src="images/logo/ptfinlogo.svg" alt=""></div>
                    <div class="item"><img src="images/logo/ptfinlogo.svg" alt=""></div>
                    <div class="item"><img src="images/logo/ptfinlogo.svg" alt=""></div>
                    <div class="item"><img src="images/logo/ptfinlogo.svg" alt=""></div>
                    <div class="item"><img src="images/logo/ptfinlogo.svg" alt=""></div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- /.partner-section -->

@endsection