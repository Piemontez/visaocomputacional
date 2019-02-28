<template>
    <div class="container-fluid margin_120_0">
      <div class="main_title_2">
        <span><em></em></span>
        <h2>Últimos cursos adicionados/atualizados</h2>
        <p>Para você que acompanha nossas aulas ficar sempre atualizado.</p>
      </div>
      <div id="reccomended" class="owl-carousel owl-theme">
        <div class="item" v-for="item in items" v-bind:key="item.id">
          <div class="box_grid">
            <figure>
              <a href="#0" class="wish_bt"></a>
              <a href="course-detail.html">
                <div class="preview"><span>Preview course</span></div><img src="http://via.placeholder.com/800x533/ccc/fff/course__list_1.jpg" class="img-fluid" alt=""></a>
              <div class="price">$39</div>

            </figure>
            <div class="wrapper">
              <small>Category</small>
              <h3>{{ item.title }}</h3>
              <p>{{ item.descricao }}</p>
              <div class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></div>
            </div>
            <ul>
              <li><i class="icon_clock_alt"></i> 1h 30min</li>
              <li><i class="icon_like"></i> 890</li>
              <li><a href="course-detail.html">Enroll now</a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- /carousel -->
      <div class="container">
        <p class="btn_home_align"><a href="courses-grid.html" class="btn_1 rounded">View all courses</a></p>
      </div>
      <!-- /container -->
      <hr>
    </div>
</template>

<script>
export default {
  name: 'PopularComp',
  data: function () {
    return {
      items: [
        {title: 'Título', descricao: 'Descrição'}, {}, {}
      ]
    }
  },
  mounted: function () {
    this.$nextTick(function () {
      $('#reccomended').owlCarousel({
        center: true,
        items: 2,
        loop: true,
        margin: 10,
        responsive: {
          0: {
            items: 1,
            dots: false
          },
          600: {
            items: 2
          },
          1000: {
            items: 4
          }
        }
      })
    })
  }
}
</script>

<style scoped>
</style>
