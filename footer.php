<footer>
    <div class="container credits mt-5">
      <hr>
      <div class="d-flex justify-content-between">
        <div class="client-area w-50">
          <div class="d-flex">
            <figure class="logo-area mr-5">
              <img src="<?= get_template_directory_uri().'/dist/images/logo-altmaker.svg'; ?>" alt="Client Logo">
            </figure>
            <div class="message-client mt-3">
              <p>2019. Todos os direitos reservados.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="zapzap">
      <a href="#" target="_blank">
        <figure>
          <img src="<?= get_template_directory_uri().'/dist/images/zapzap.svg'; ?>" alt="Entre em contato pelo Whatsapp" data-toggle="Entre em contato pelo Whatsapp" data-placement="top" title="Entre em contato pelo Whatsapp">
        </figure>
      </a>
    </div>

      <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <iframe width="100%" height="1000" src="https://www.youtube.com/embed/iItJJoQXG84" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
        </div>

  </footer>
<?php wp_footer(); ?>
</body>
</html>