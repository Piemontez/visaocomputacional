<style>
  @import 'css/bootstrap.min.css';
  @import 'css/style.css';
  @import 'css/vendors.css';
  @import 'css/icon_fonts/css/all_icons.min.css';
  @import 'css/custom.css';
</style>

<template>
  <div id="app">
    <div v-if="preloadshow" id="preloader">
      <div data-loader="circle-side"></div>
    </div>
    <!--
    <AppNav/>
    -->
    <router-view/>

    <AppFooter/>
  </div>
</template>

<script>
import AppNav from './components/AppNav'
import AppFooter from './components/AppFooter'

export default {
  name: 'App',
  data: function () {
    return {
      preloadshow: true
    }
  },
  components: {
    AppNav,
    AppFooter
  },
  mounted: function () {
    this.$nextTick(function () {
      $('#preloader').delay(350).fadeOut('slow')
      $(window).scroll()
    })
  }
}
</script>
