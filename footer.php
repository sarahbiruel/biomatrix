<footer>

  <section style="" class="footer">
    <div class="container2">
      <div class="row">
        <div class="hidden-xs hidden-sm col-md-4 line">
          <div class="space"><?php dynamic_sidebar( 'Rodape1' ); ?></div>
        </div>
        <div class="hidden-xs col-sm-6 col-md-4 line">
          <div class="space"><?php dynamic_sidebar( 'Rodape2' ); ?></div>
        </div>
        <div class=" col-sm-6 col-md-4 line">
          <div class="space"><?php dynamic_sidebar( 'Rodape3' ); ?></div>
        </div>
      </div>
    </div>
  </section>

  <section class="copyright">
    <div class="container2">
      <div class="row">
        <div class="col-md-6"><p>Sementes Biomatrix è¢Ó 2016 - Todos os direitos reservados</p></div>
        <div class="col-md-6"><?php
echo file_get_contents("http://www.mamweb.com.br/assinaturas/logo-mamweb-branco.html");
?></div>
      </div>
    </div>
  </section>

</footer>
</content>


<?php wp_footer(); ?>

<script type="text/javascript">
  //PRODUCTS
    $(document).ready(function(){
    $('.slider-products').slick({
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 3,
      autoplay: true,
      dots: true,
      arrows: false,
      responsive: [
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: false,
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
      }
    }]
    });
  });
  //PARTNERS
  $(document).ready(function(){
  $('.slider-partners').slick({
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 4,
    autoplay: true,
    dots: false,
    arrows: false,
    responsive: [
  {
    breakpoint: 480,
    settings: {
      slidesToShow: 1,
      slidesToScroll: 1,
      infinite: true,
    }
  },
  {
    breakpoint: 768,
    settings: {
      slidesToShow: 2,
      slidesToScroll: 2,
      slidesToShow: 1,
      slidesToScroll: 1,
      infinite: true,
    }
  }]
  });
});
  //NEWS
  $(document).ready(function(){
  $('.slider-news').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 3,
    autoplay: true,
    dots: true,
    arrows: false,
    responsive: [
  {
    breakpoint: 480,
    settings: {
      slidesToShow: 1,
      slidesToScroll: 1,
      infinite: true,
      dots: false,
    }
  },
  {
    breakpoint: 768,
    settings: {
      slidesToShow: 2,
      slidesToScroll: 2,
      infinite: true,
      dots: true,
    }
  }]
  });
  });
</script>
<script src="<?php echo get_template_directory_uri() . '/js/classie.js' ?>" ></script>
<script type="text/javascript">
(function() {
  var morphSearch = document.getElementById( 'morphsearch' ),
    input = morphSearch.querySelector( 'input.morphsearch-input' ),
    ctrlClose = morphSearch.querySelector( 'span.morphsearch-close' ),
    isOpen = isAnimating = false,
    // show/hide search area
    toggleSearch = function(evt) {
      // return if open and the input gets focused
      if( evt.type.toLowerCase() === 'focus' && isOpen ) return false;

      var offsets = morphsearch.getBoundingClientRect();
      if( isOpen ) {
        classie.remove( morphSearch, 'open' );

        // trick to hide input text once the search overlay closes
        // todo: hardcoded times, should be done after transition ends
        if( input.value !== '' ) {
          setTimeout(function() {
            classie.add( morphSearch, 'hideInput' );
            setTimeout(function() {
              classie.remove( morphSearch, 'hideInput' );
              input.value = '';
            }, 300 );
          }, 500);
        }

        input.blur();
      }
      else {
        classie.add( morphSearch, 'open' );
      }
      isOpen = !isOpen;
    };

  // events
  input.addEventListener( 'focus', toggleSearch );
  ctrlClose.addEventListener( 'click', toggleSearch );
  // esc key closes search overlay
  // keyboard navigation events
  document.addEventListener( 'keydown', function( ev ) {
    var keyCode = ev.keyCode || ev.which;
    if( keyCode === 27 && isOpen ) {
      toggleSearch(ev);
    }
  } );
  /***** for demo purposes only: don't allow to submit the form *****/
  //morphSearch.querySelector( 'button[type="submit"]' ).addEventListener( 'click', function(ev) { ev.preventDefault(); } );
})();
</script>

</body>
</html>
