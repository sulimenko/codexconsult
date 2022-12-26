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
			<h2>Страница не найдена</h2>
		</div> <!-- /.container -->
	</div> <!-- /.overlay -->
</div> <!-- /.theme-inner-banner -->


<!-- 
=============================================
	Error Page 
============================================== 
-->
<div class="container error-page">
	<h2>404</h2>
	<h3>Похоже, что-то пошло не так</h3>
	<p>Страница которую вы ищете, была перемещена иили никогда не существовала.</p>
	<div>
		<a href="index" class="theme-button-one">Главная</a>
		<span class="or">или</span>
		<input type="text" placeholder="Поиск...">
	</div>
</div> <!-- /.error-page -->

@endsection
