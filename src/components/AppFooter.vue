<template>
  <footer>
    <div class="container margin_120_95">
      <div class="row">
        <div class="col-lg-5 col-md-12 p-r-5">
          <p><img src="img/logo.png" width="149" height="42" data-retina="true" alt=""></p>
          <p>
            Nosso objeto, neste espaço, é disponibilizar de forma gratuito, aulas de visão computacional, para comunidade Brasileira.
            Caso você também tenha o mesmo interessa, por favor, entre em contato.
          </p>
          <div class="follow_us">
            <ul>
              <li>Siga-nos</li>
              <li><a href="https://www.linkedin.com/company/visaocomputacional/" target="_blanck">
                <i class="ti-linkedin"></i></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 ml-lg-auto">
          <h5>Links úteis</h5>
          <ul class="links">
            <li><a href="https://www.linkedin.com/in/piemontez/">Responsável</a></li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-6">
          <h5>Entre em contato</h5>
          <ul class="contacts">
            <li><a href="tel://61280932400"><i class="ti-mobile"></i> + 47 99725 1117</a></li>
            <li><a href="mailto:info@udema.com"><i class="ti-email"></i> rafael@thalamus.digital</a></li>
          </ul>
          <div id="newsletter">
          <h6>Deixe seu recado</h6>
          <p v-if="!!sendmsg">{{sendmsg}}</p>
          <form method="post" v-if="!sendmsg" v-on:submit.prevent="onSubmit">
            <div class="form-group">
              <input type="text"  v-model="message" class="form-control" placeholder="Deixe sua mensagem">
              <input type="email" v-model="email" class="form-control" placeholder="Seu e-mail">
              <input type="submit" value="Enviar" id="submit-newsletter">
            </div>
          </form>
          </div>
        </div>
      </div>
      <!--/row-->
      <hr>
      <div class="row">
        <div class="col-md-8">
          <!--
          <ul id="additional_links">
            <li><a href="#0">Termos e condições</a></li>
          </ul>
          -->
        </div>
        <div class="col-md-4">
          <div id="copy">
            © Setembro de 2019
            Mantido por <a href="http://thalamus.digital" target="_blanck">Thalamus</a>
          </div>
        </div>
      </div>
    </div>
  </footer>
</template>

<script>
import axios from 'axios'

export default {
  name: 'AppFooter',
  data: function () {
    return {
      sendmsg: '',
      message: '',
      email: ''
    }
  },
  methods: {
    onSubmit: function () {
      this.sendmsg = 'Encaminhando mensagem'
      axios
        .post('http://visaocomputacional.com.br:9091/', {
          origem: 'Visão computacional',
          subject: 'Recado visão computacional',
          email: this.email,
          message: this.message
        })
        .then(response => {
          this.sendmsg = 'Mensagem encaminhada com sucesso'
          this.email = ''
          this.message = ''
        })
        .catch(response => {
          this.sendmsg = 'Ocorreu um erro ao encaminhar msg, tente novamente mais tarde'
          this.email = ''
          this.message = ''
        })
    }
  }
}
</script>
