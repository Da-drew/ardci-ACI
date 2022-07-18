// navlink active
window.addEventListener('load', () => {

    // prelaoder
        $("#status").fadeOut(500, function(){
            $('body').removeClass('loading');
        }); 
        $("#preloader").delay(500).fadeOut("slow");
    // end
   
    var path = window.location.pathname;
    var page = path.split("/").pop();

    switch (page){
        case 'index.php':
        case '':
            $('#home').addClass('active');
            break;
        case 'accommodation.php':
        case 'accommodation-page2.php':
        case 'accommodation-executive-suite.php':
            $('#accommodation').addClass('active');
            break;
        case 'blog.php':
        case 'blog-page2.php':
        case 'blog-All-Rooms-Now-Equiped-With-High-Speed-Wifi.php':
            $('#blog').addClass('active');
            break;
        case 'gallery.php':
        case 'gallery-page2.php':
            $('#gallery').addClass('active');
            break;
        case 'about-us.php':
            $('#about-us').addClass('active');
            break;
        case 'contact-us.php':
            $('#contact-us').addClass('active');
            break;    
    }
    // aos
    AOS.init({
        duration: 700,
        easing: 'ease-in-out',
        once: false,
        mirror: false
    })
    // capitalize the first letter in input modal
    $('.to-upper').keyup(function(event) {
        var textBox = event.target;
        var start = textBox.selectionStart;
        var end = textBox.selectionEnd;
        textBox.value = textBox.value.charAt(0).toUpperCase() + textBox.value.slice(1);
        textBox.setSelectionRange(start, end);
    });
});


// glightbox
var lightbox = GLightbox();
lightbox.on('open', (target) => {

});
var lightboxDescription = GLightbox({
    selector: '.glightbox2'
});
var lightboxVideo = GLightbox({
    selector: '.glightbox3'
});
lightboxVideo.on('slide_changed', ({ prev, current }) => {
    console.log('Prev slide', prev);
    console.log('Current slide', current);

    const { slideIndex, slideNode, slideConfig, player } = current;

    if (player) {
        if (!player.ready) {
            // If player is not ready
            player.on('ready', (event) => {
                // Do something when video is ready
            });
        }

        player.on('play', (event) => {
        });

        player.on('volumechange', (event) => {
        });

        player.on('ended', (event) => {
        });
    }
});

var lightboxInlineIframe = GLightbox({
    selector: '.glightbox4'
});

// owl carousel 
$('.owl-carousel').owlCarousel({
    loop:true,
    margin: 20,
    responsiveClass: true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
});

// faqs on about
var path = window.location.pathname;
var page = path.split("/").pop();
 if(page == 'about-us.php'){
    // faq1
    var faqQuestion = document.getElementById('faq-question-one');
    faqQuestion.addEventListener('click', ()=>{
        document.getElementById('faq-answer-one').classList.toggle('faqs-answer-answer')

        var faqsIconPlus = document.getElementById('i-faqs-title-plus');
        var faqsIconMinus = document.getElementById('i-faqs-title-minus');

        faqsIconPlus.classList.toggle('i-faqs-title');
        faqsIconMinus.classList.toggle('i-faqs-title');
    })
    // faq2
    var faqQuestion2 = document.getElementById('faq-question-two');
    faqQuestion2.addEventListener('click', ()=>{
        document.getElementById('faq-answer-two').classList.toggle('faqs-answer-answer')

        var faqsIconPlus = document.getElementById('i-faqs-title-plus-two');
        var faqsIconMinus = document.getElementById('i-faqs-title-minus-two');

        faqsIconPlus.classList.toggle('i-faqs-title');
        faqsIconMinus.classList.toggle('i-faqs-title');
    })
    // faq3
    var faqQuestion2 = document.getElementById('faq-question-three');
    faqQuestion2.addEventListener('click', ()=>{
        document.getElementById('faq-answer-three').classList.toggle('faqs-answer-answer')

        var faqsIconPlus = document.getElementById('i-faqs-title-plus-three');
        var faqsIconMinus = document.getElementById('i-faqs-title-minus-three');

        faqsIconPlus.classList.toggle('i-faqs-title');
        faqsIconMinus.classList.toggle('i-faqs-title');
    })
    // faq4
    var faqQuestion2 = document.getElementById('faq-question-four');
    faqQuestion2.addEventListener('click', ()=>{
        document.getElementById('faq-answer-four').classList.toggle('faqs-answer-answer')

        var faqsIconPlus = document.getElementById('i-faqs-title-plus-four');
        var faqsIconMinus = document.getElementById('i-faqs-title-minus-four');

        faqsIconPlus.classList.toggle('i-faqs-title');
        faqsIconMinus.classList.toggle('i-faqs-title');
    })
}

(function () {
    'use strict'

    var forms = document.querySelectorAll('.needs-validation')

    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function (event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }

          form.classList.add('was-validated')
        }, false)
      })
})()
