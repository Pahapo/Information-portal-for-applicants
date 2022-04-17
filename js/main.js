$(function(){
    
    /*$('.product__name').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        asNavFor: '.product__content',
        focusOnSelect: true,
        vertical: true,
        centerMode: true,
        prevArrow: '<button type="button" class="product-prev"><img src="../images/product-prev.svg" alt=""></button>',
        nextArrow: '<button type="button" class="product-next"><img src="../images/product-next.svg" alt=""></button>',
        responsive: [
          {
            breakpoint: 460,
            settings: {
              arrows: false,
              vertical: false,
              slidesToShow: 1,
            },
            breakpoint: 890,
            settings: {
              arrows: false,
              vertical: false,
              slidesToShow: 3,
            }
          }          
        ]
      });
      $('.product__content').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        asNavFor: '.product__name',
        fade: true,
        arrows: false
      });*/

      $(document).ready(function(){  // animation
        $('.main-title').toggleClass('hidden active main-title__active');
        $('.main-text-1').toggleClass('hidden active main-text-1__active');
        $('.block').toggleClass('hidden active block__active');
        $('.transition-01').toggleClass('block__transition-1');
        $('.transition-02').toggleClass('block__transition-2');
        $('.transition-03').toggleClass('block__transition-3');
        $('.main-text-2').toggleClass('hidden active main-text-2__active');
        $('.info-block_a').toggleClass('hidden active info-block_a__active');
        $('.transition-1').toggleClass('info-block_a__transition-1');
        $('.transition-2').toggleClass('info-block_a__transition-2');
        $('.transition-3').toggleClass('info-block_a__transition-3'); 
        $('.transition-4').toggleClass('info-block_a__transition-4');
        $('.transition-5').toggleClass('info-block_a__transition-5');
        $('.transition-6').toggleClass('info-block_a__transition-6');
        $('.transition-7').toggleClass('info-block_a__transition-7');
        $('.transition-8').toggleClass('info-block_a__transition-8');
        $('.transition-9').toggleClass('info-block_a__transition-9');
        $('.transition-10').toggleClass('info-block_a__transition-10');
        $('.transition-11').toggleClass('info-block_a__transition-11');
        $('.transition-12').toggleClass('info-block_a__transition-12');    
        $('.block-mini-2').toggleClass('hidden active block-mini-2__active');
        $('.transition-13').toggleClass('block-mini-2__transition-13');
        $('.protection').toggleClass('hidden active protection__active');
        $('.transition-14').toggleClass('protection__transition-14');
      });

      document.onkeydown = function (event) {
        if(event.code == 'ControlLeft') {
          document.onkeyup = function (event) {
            if(event.code == 'KeyY') {
              $('.combination__hidden').toggleClass('combination__active');
            }
            else {
              document.onkeyup = null;
            }
          }
        }
      }

      var radio = document.getElementsByName('choice'); // form replacement
      for (var i = 0; i < radio.length; i++) {
        radio[i].onchange = function() {
        if (this.value == "fiz") {  // form for an individual
          console.log('1');
          $('.individual').addClass('individual-active');
          $('.entity').removeClass('entity-active');
          $('.individual-choice').removeClass('hidden_question');
          $('.individual-choice').addClass('active_question');
          $('.entity-choice').removeClass('active_question');
          $('.entity-choice').addClass('hidden_question');
        }
        else if (this.value == "yr") {  // form for a entity
          console.log('2');
          $('.entity').addClass('entity-active');
          $('.individual').removeClass('individual-active');
          $('.entity-choice').removeClass('hidden_question');
          $('.entity-choice').addClass('active_question');
          $('.individual-choice').removeClass('active_question');
          $('.individual-choice').addClass('hidden_question');
        }
      }
    }

      document.querySelector('#block_questions').oninput = function () {  // search
        let val = this.value.trim();
        let blockQuestionsItems = document.querySelectorAll('.block_questions .block-1 h2');
        if (val != '') {
          blockQuestionsItems.forEach(function(elem) {
            if (elem.innerText.search(val) == -1) {
              elem.parentNode.parentNode.classList.add('hidden_question');
            }
            else {
              elem.parentNode.parentNode.classList.remove('hidden_question');
            }
          });
        }
        else {
          blockQuestionsItems.forEach(function (elem) {
            elem.parentNode.parentNode.classList.remove('hidden_question');
          });
        }
      }
});