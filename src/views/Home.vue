<template>
  <div class="home">
  <main>
    <section id="search" class="hero_single version_2">
      <div class="wrapper">
        <div class="container">
          <img src="../img/emconstrucao.png" height="150">
          <br/><br/><br/><br/>

          <h3>O que você quer aprender hoje?</h3>
          <p>
            Estamos trabalhando para utilizar este espaço, da melhor forma possível.
          </p>
          <!--
          <form>
            <div id="custom-search-input">
              <div class="input-group">
                <input type="text" class=" search-query" placeholder="Ex: Morfologia, Sobel, Opencv...">
                <input type="submit" class="btn_search" value="Procurar">
              </div>
            </div>
          </form>
          -->
        </div>
      </div>
    </section>
    <!-- /hero_single -->

    <div class="features clearfix">
    <!--
      <div class="container">
        <ul>
          <li><i class="pe-7s-study"></i>
            <h4>0 courses</h4><span>Em breve as aulas serão disponibilizadas</span>
          </li>
          <li>
            <font color="#000">.</font>
            <i class="pe-7s-cup"></i>
            <h4>Expert teachers</h4><span>Find the right instructor for you</span>
          </li>
          <li><i class="pe-7s-target"></i>
            <h4>Nosso objetivo</h4><span>Disponibilizar aulas gratuitas em português</span>
          </li>
        </ul>
      </div>
    -->
    </div>

    <!-- /features -->

    <!--
    <PopularComp />
    <CategoriasComp />
     -->

    <div class="container margin_30_95 clearfix" style="margin-top:50px">
      <div class="col-lg-5 col-md-6 float-right wow animated" data-wow-offset="250" style="visibility: visible;">
        <div class="block-reveal">
          <div class="block-vertical"></div>
          <div class="box_1">
            <h3>Faça parte desta comunidade.</h3>
            <p>
              Interessado pelo tema? Inscreva-se no canal e seja informado do lançamento.
            </p>
            <a href="https://www.linkedin.com/company/visaocomputacional/" target="_blanck" class="btn_1 rounded">Link-in</a>
          </div>
        </div>
      </div>
    </div>
    <!--/call_section-->
  </main>
  <!-- /main -->
  <!-- Search Menu -->
  <div class="search-overlay-menu">
    <span class="search-overlay-close"><span class="closebt"><i class="ti-close"></i></span></span>
    <form role="search" id="searchform" method="get">
      <input value="" name="q" type="search" placeholder="Search..." />
      <button type="submit"><i class="icon_search"></i>
      </button>
    </form>
  </div><!-- End Search Menu -->
  </div>
</template>

<script>
import PopularComp from '../views/PopularComp'
import CategoriasComp from '../views/CategoriasComp'

export default {
  name: 'Home',
  mounted: function () {
    this.$nextTick(function () {
    })
  },
  components: {
    PopularComp,
    CategoriasComp
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
</style>
