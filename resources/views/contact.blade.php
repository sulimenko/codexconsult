@extends('app')
@section('content')

<!--
=====================================================
	Google Map
=====================================================
-->
<!-- Google Map -->
<div class="google-map-two section-spacing"><div class="map-canvas"></div></div>

<!-- 
=============================================
	Conatct us Section
============================================== 
-->
<div class="contact-us-section section-spacing">
  <div class="container">
    <div class="theme-title-one">
      <h2>БЕСПЛАТНАЯ КОНСУЛЬТАЦИЯ</h2>
      <p>По данной форме Вы можете обратиться к специалисту за консультацией</p>
    </div>
    <!-- /.theme-title-one -->
    <div class="clearfix main-content no-gutters row">
      <div class="col-lg-5 col-12"><div class="img-box"></div></div>
      <div class="col-lg-7 col-12">
        <div class="form-wrapper">
          <form
            action="https://html.creativegigstf.com/charles/inc/sendemail.php"
            class="theme-form-one form-validation"
            autocomplete="off"
          >
            <div class="row">
              <div class="col-sm-6 col-12">
                <input type="text" placeholder="Имя *" name="name" />
              </div>
              <div class="col-sm-6 col-12">
                <input type="text" placeholder="Телефон *" name="phone" />
              </div>
              <div class="col-sm-6 col-12">
                <input type="email" placeholder="Email *" name="email" />
              </div>
              <div class="col-sm-6 col-12">
                <input type="text" placeholder="Website *" name="web" />
              </div>
              <div class="col-12">
                <textarea placeholder="Сообщение" name="message"></textarea>
              </div>
            </div>
            <!-- /.row -->
            <button class="theme-button-one">Задать вопрос</button>
          </form>
        </div>
        <!-- /.form-wrapper -->
      </div>
      <!-- /.col- -->
    </div>
    <!-- /.main-content -->
  </div>
  <!-- /.container -->

  <!--Contact Form Validation Markup -->
  <!-- Contact alert -->
  <div class="alert-wrapper" id="alert-success">
    <div id="success">
      <button class="closeAlert">
        <i class="fa fa-times" aria-hidden="true"></i>
      </button>
      <div class="wrapper">
        <p>Your message was sent successfully.</p>
      </div>
    </div>
  </div>
  <!-- End of .alert_wrapper -->
  <div class="alert-wrapper" id="alert-error">
    <div id="error">
      <button class="closeAlert">
        <i class="fa fa-times" aria-hidden="true"></i>
      </button>
      <div class="wrapper">
        <p>Sorry!Something Went Wrong.</p>
      </div>
    </div>
  </div>
  <!-- End of .alert_wrapper -->
</div>
<!-- /.contact-us-section -->

<!-- 
=============================================
	Compnay Branch Address
============================================== 
-->
<div class="branch-address">
  <div class="container">
    <div class="row">
      <div class="address-slider">
        <div class="item">
          <div class="wrapper">
            <h6>Головный офис в г. Астана</h6>
            <p>
              <i class="fa fa-address-book-o" aria-hidden="true"></i> 010000:
              пр. Мангилик Ел 55/21, офис 120
            </p>
          </div>
          <!-- /.wrapper -->
        </div>
        <div class="item">
          <div class="wrapper">
            <h6>Офис в г. Алматы</h6>
            <p>
              <i class="fa fa-address-book-o" aria-hidden="true"></i> A15E2P8:
              пр-т Аль-Фараби 17, Блок 4Б, офис 503
            </p>
          </div>
          <!-- /.wrapper -->
        </div>
        <div class="item">
          <div class="wrapper">
            <h6>Головный офис в г. Астана</h6>
            <p>
              <i class="fa fa-address-book-o" aria-hidden="true"></i> 010000:
              пр. Мангилик Ел 55/21, офис 1207
            </p>
          </div>
          <!-- /.wrapper -->
        </div>
        <div class="item">
          <div class="wrapper">
            <h6>Офис в г. Курск</h6>
            <p>
              <i class="fa fa-address-book-o" aria-hidden="true"></i> 305001:
              ул. Карла Либкнехта 2б, офис 17
            </p>
          </div>
          <!-- /.wrapper -->
        </div>
      </div>
      <!-- /.address-slider -->
    </div>
  </div>
  <!-- /.container -->
</div>
<!-- /.branch-address -->

@endsection
