$(document).ready(function() {
    
    // Przyklej menu
    $(window).scroll(function() {
        if ($(document).scrollTop() > 38) {
            $('nav.navbar').addClass('fixed');
        }
        else {
            $('nav.navbar').removeClass('fixed');
        }
    });
    
    // Hover i active w menu   
    $( "nav.navbar li a" ).click(function() {
        $(this).closest('ul').find('li.active').removeClass('active');
        $(this).parent().addClass('active');        
    });
 
    // Wysokości
    var winW = $('body').width();
    var winH = $(window).height();
    if ( $('.banner').length ) {
        $('body div.banner').css('height', winW * 1/10);
        $('body section.fit').css('height', winH - winW * 1/10);

    } else {
        $('body section.fit').css('height', winH);
    }
    
    // Scroll to
    // Select all links with hashes
    $('nav.navbar a[href*="#"], a.to_top')
        .not('[href="#"]')
        .not('[href="#0"]')
        .click(function (event) {
            if (
                    location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '')
                    &&
                    location.hostname === this.hostname
                    ) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    event.preventDefault();
                    $('html, body').animate({
                        scrollTop: target.offset().top -110
                    }, 700, function () {
                        var $target = $(target);
                        $target.focus();
                        if ($target.is(":focus")) { // Checking if the target was focused
                            return false;
                        } else {
                            $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                            $target.focus(); // Set focus again
                        }
                        ;
                    });
                }
            }
        });
            
// Menu responsywne
    $('.navbar-toggler').click(function(){
        $('#icon-menu').toggleClass("open");
    });            

    // To top
    $(window).scroll(function() {
        if ($(document).scrollTop() > 500) {
            $('.to_top').addClass('fade-in');
        }
        else {
            $('.to_top').removeClass('fade-in');
        }
    });
    
    // Strona główna - wysuń zdjęcie kiedy placeholder nie jest pusty
    $("#main-page .main-form form input:nth-of-type(2)").on('keyup', function() {
        if (this.value.length >= 1) {
            $('#main-page .form-img img').css('right', '0');
            $('#main-page .form-img').removeClass('fade-out');
        } else {
            $('#main-page .form-img img').css('right', '-18.75rem');
            $('#main-page .form-img').addClass('fade-out');
        }
    });
    
    // Bootstrap pill
    $('.flex-column.nav-pills a.nav-link').click(function() {
        var pillColor = $(this).css('background-color');
        $(this).closest('.row').find('.tab-content').css('background-color', pillColor);           
        $(this).closest('.flex-wrap').find('.flex-bg').css('background-color', pillColor);       
    });
    
    var pillsTab = $('#v-pills-tab').outerHeight();
    console.log(pillsTab);
    $('#v-pills-tabContent').css('height', pillsTab);
    
    // Komunikator 
    if ( $('.scroll').length ) {
        $('.scroll').scrollTop($('.scroll')[0].scrollHeight);
    }
    
    // Button add route
    $('.add_route').append('<span></span>');
    
    // Policz szerokość kolumn tabeli
    var tableW = $('table.h-per-week').parent().width();
    $('table.h-per-week th:not(:first)').css('width', (tableW - 80) / 7);

    
    // Tabela
    $('.h-per-week tr:not(:first)').each(function(idxr){
        $(this).children().addClass('tab_row_' + (idxr + 1));
    });
    $('.h-per-week tr:not(:first)').each(function(idxc){
        $(this).find('td:not(:first)').each(function(idxc){
            $(this).addClass('tab_col_' + (idxc + 1));
        });
    });
    $('.h-per-week tr:not(:first) td:not(:first-of-type)').click(function() {
        $(this).html('<span class="route">Trasa 1</span>');
    });
    
    new WOW().init();
    AOS.init();
    
});