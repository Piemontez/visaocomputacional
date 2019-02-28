<template>
  <div>
  <header class="header fadeInDown">
    <div id="logo">
      <a href="index.html"><img src="img/logo.png" width="149" height="42" data-retina="true" alt=""></a>
    </div>
    <ul id="top_menu">
      <li><a href="login.html" class="login">Login</a></li>
      <li><a href="/#" class="search-overlay-menu-btn">Procurar</a></li>
      <li class="hidden_tablet"><a href="admission.html" class="btn_1 rounded">Admission</a></li>
      <li>
        <div class="hamburger hamburger--spin">
          <div class="hamburger-box">
            <div class="hamburger-inner"></div>
          </div>
        </div>
      </li>
    </ul>
    <!-- /top_menu -->
  </header>
  <!-- /header -->
  <div id="main_menu">
    <div class="container">
      <nav class="version_2">
        <div class="row">
          <div class="col-md-3">
            <h3>Categorias</h3>
            <ul>
              <li><a href="index.html">..</a></li>
            </ul>
          </div>
          <div class="col-md-3">
            <h3>Últimos cursos</h3>
            <ul>
              <li><a href="courses-grid.html">..</a></li>
            </ul>
          </div>
          <div class="col-md-3">
            <h3>Professores</h3>
            <ul>
              <li><a href="courses-grid.html">Rafael Alexandre Piemontez</a></li>
            </ul>
          </div>
        </div>
        <!-- /row -->
      </nav>
      <div class="follow_us">
        <ul>
          <li>Siga-nos</li>
          <li><a href="https://www.linkedin.com/company/visaocomputacional/" target="_blanck">
            <i class="ti-linkedin"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  </div>
</template>

<script>
export default {
  name: 'AppNav',
  mounted: function () {
    $(window).on('scroll', function () {
      if ($(this).scrollTop() > 1) {
        $('.header').addClass('sticky')
      } else {
        $('.header').removeClass('sticky')
      }
    })
    var $menu = $('#main_menu')
    $('.hamburger').on('click', function () {
      $menu.toggleClass('show')
      $menu.find('nav').toggleClass('animated fadeIn')
      $menu.find('.follow_us').toggleClass('animated fadeInUp')
      $('.header').toggleClass('sticky_menu_active')
    })
    var forEach = function (t, o, r) {
      if (Object.prototype.toString.call(t) === '[object Object]') {
        for (var c in t) {
          Object.prototype.hasOwnProperty.call(t, c) && o.call(r, t[c], c, t)
        }
      } else {
        for (var e = 0, l = t.length; l > e; e++) {
          o.call(r, t[e], e, t)
        }
      }
    }
    var hamburgers = document.querySelectorAll('.hamburger')
    if (hamburgers.length > 0) {
      forEach(hamburgers, function (hamburger) {
        hamburger.addEventListener('click', function () {
          this.classList.toggle('is-active')
        }, false)
      })
    }
  }
}
</script>
