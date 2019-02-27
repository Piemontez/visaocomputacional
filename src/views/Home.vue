<template>
  <div class="home">
  <main>
    <section class="hero_single version_2">
      <div class="wrapper">
        <div class="container">
          <h3>What would you learn?</h3>
          <p>Increase your expertise in business, technology and personal development</p>
          <form>
            <div id="custom-search-input">
              <div class="input-group">
                <input type="text" class=" search-query" placeholder="Ex. Architecture, Specialization...">
                <input type="submit" class="btn_search" value="Search">
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>
    <!-- /hero_single -->

    <div class="features clearfix">
      <div class="container">
        <ul>
          <li><i class="pe-7s-study"></i>
            <h4>+200 courses</h4><span>Explore a variety of fresh topics</span>
          </li>
          <li><i class="pe-7s-cup"></i>
            <h4>Expert teachers</h4><span>Find the right instructor for you</span>
          </li>
          <li><i class="pe-7s-target"></i>
            <h4>Focus on target</h4><span>Increase your personal expertise</span>
          </li>
        </ul>
      </div>
    </div>
    <!-- /features -->

    <PopularComp />
    <CategoriasComp />

    <div class="call_section">
      <div class="container clearfix">
        <div class="col-lg-5 col-md-6 float-right wow" data-wow-offset="250">
          <div class="block-reveal">
            <div class="block-vertical"></div>
            <div class="box_1">
              <h3>Enjoy a great students community</h3>
              <p>Ius cu tamquam persequeris, eu veniam apeirian platonem qui, id aliquip voluptatibus pri. Ei mea primis ornatus disputationi. Menandri erroribus cu per, duo solet congue ut. </p>
              <a href="#0" class="btn_1 rounded">Read more</a>
            </div>
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
