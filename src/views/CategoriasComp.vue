<template>
    <div class="container margin_30_95">
      <div class="main_title_2">
        <span><em></em></span>
        <h2>Categorias</h2>
        <p>Os cursos foram agrupados em grandes áreas.</p>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6 wow" data-wow-offset="150">
          <a href="#0" class="grid_item">
            <figure class="block-reveal">
              <div class="block-horizzontal"></div>
              <img src="http://via.placeholder.com/800x533/ccc/fff/course_1.jpg" class="img-fluid" alt="">
              <div class="info">
                <small><i class="ti-layers"></i>15 Programmes</small>
                <h3>Arts and Humanities</h3>
              </div>
            </figure>
          </a>
        </div>
        <!-- /grid_item -->
        <div class="col-lg-4 col-md-6 wow" data-wow-offset="150">
          <a href="#0" class="grid_item">
            <figure class="block-reveal">
              <div class="block-horizzontal"></div>
              <img src="http://via.placeholder.com/800x533/ccc/fff/course_2.jpg" class="img-fluid" alt="">
              <div class="info">
                <small><i class="ti-layers"></i>23 Programmes</small>
                <h3>Engineering</h3>
              </div>
            </figure>
          </a>
        </div>
        <!-- /grid_item -->
        <div class="col-lg-4 col-md-6 wow" data-wow-offset="150">
          <a href="#0" class="grid_item">
            <figure class="block-reveal">
              <div class="block-horizzontal"></div>
              <img src="http://via.placeholder.com/800x533/ccc/fff/course_3.jpg" class="img-fluid" alt="">
              <div class="info">
                <small><i class="ti-layers"></i>23 Programmes</small>
                <h3>Architecture</h3>
              </div>
            </figure>
          </a>
        </div>
        <!-- /grid_item -->
        <div class="col-lg-4 col-md-6 wow" data-wow-offset="150">
          <a href="#0" class="grid_item">
            <figure class="block-reveal">
              <div class="block-horizzontal"></div>
              <img src="http://via.placeholder.com/800x533/ccc/fff/course_4.jpg" class="img-fluid" alt="">
              <div class="info">
                <small><i class="ti-layers"></i>23 Programmes</small>
                <h3>Science and Biology</h3>
              </div>
            </figure>
          </a>
        </div>
        <!-- /grid_item -->
        <div class="col-lg-4 col-md-6 wow" data-wow-offset="150">
          <a href="#0" class="grid_item">
            <figure class="block-reveal">
              <div class="block-horizzontal"></div>
              <img src="http://via.placeholder.com/800x533/ccc/fff/course_5.jpg" class="img-fluid" alt="">
              <div class="info">
                <small><i class="ti-layers"></i>23 Programmes</small>
                <h3>Law and Criminology</h3>
              </div>
            </figure>
          </a>
        </div>
        <!-- /grid_item -->
        <div class="col-lg-4 col-md-6 wow" data-wow-offset="150">
          <a href="#0" class="grid_item">
            <figure class="block-reveal">
              <div class="block-horizzontal"></div>
              <img src="http://via.placeholder.com/800x533/ccc/fff/course_6.jpg" class="img-fluid" alt="">
              <div class="info">
                <small><i class="ti-layers"></i>23 Programmes</small>
                <h3>Medical</h3>
              </div>
            </figure>
          </a>
        </div>
        <!-- /grid_item -->
      </div>
      <!-- /row -->
    </div>
</template>

<script>
import WOWJS from 'wowjs'

export default {
  name: 'CategoriasComp',
  mounted: function () {
    this.$nextTick(function () {
      // WoW - animation on scroll
      var wow = new WOWJS.WOW(
        {
          boxClass: 'wow', // animated element css class (default is wow)
          animateClass: 'animated', // animation css class (default is animated)
          offset: 0, // distance to the element when triggering the animation (default is 0)
          mobile: true, // trigger animations on mobile devices (default is true)
          live: true, // act on asynchronously loaded content (default is true)
          callback: function (box) {
            // the callback is fired every time an animation is started
            // the argument that is passed in is the DOM node being animated
          },
          scrollContainer: null // optional scroll container selector, otherwise use window
        }
      )
      wow.init()
    })
  }
}
</script>

<style scoped>
</style>
