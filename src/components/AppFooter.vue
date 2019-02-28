<template>
  <footer>
    <div class="container margin_120_95">
      <div class="row">
        <div class="col-lg-5 col-md-12 p-r-5">
          <p><img src="img/logo.png" width="149" height="42" data-retina="true" alt=""></p>
          <p>Mea nibh meis philosophia eu. Duis legimus efficiantur ea sea. Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu. Nihil facilisi indoctum an vix, ut delectus expetendis vis.</p>
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
          <h5>Useful links</h5>
          <ul class="links">
            <li><a href="#0">Admission</a></li>
            <li><a href="#0">Sobre</a></li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-6">
          <h5>Contact with Us</h5>
          <ul class="contacts">
            <li><a href="tel://61280932400"><i class="ti-mobile"></i> + 47 99725 1117</a></li>
            <li><a href="mailto:info@udema.com"><i class="ti-email"></i> rafael@thalamus.digital</a></li>
          </ul>
          <div id="newsletter">
          <h6>Newsletter</h6>
          <div id="message-newsletter"></div>
          <form method="post" action="assets/newsletter.php" name="newsletter_form" id="newsletter_form">
            <div class="form-group">
              <input type="text" name="email_newsletter" id="email_newsletter" class="form-control" placeholder="Deixe sua mensagem">
              <input type="email" name="email_newsletter" id="email_newsletter" class="form-control" placeholder="Seu e-mail">
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
          <ul id="additional_links">
            <li><a href="#0">Termos e condições</a></li>
          </ul>
        </div>
        <div class="col-md-4">
          <div id="copy">
            © Março de 2019 
            <a href="http://thalamus.digital" target="_blanck">Thalamus</a>
          </div>
        </div>
      </div>
    </div>
  </footer>
</template>

<script>
export default {
  name: 'AppFooter'
}
</script>
