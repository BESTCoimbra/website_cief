$(document).ready(function() {
    
    //scroll menu to div
    $('.opcao').bind('click', function(e) {
        e.preventDefault(); // prevent hard jump, the default behavior

        var target = $(this).attr("href"); // Set the target as variable
        $('html, body').animate({
            scrollTop: $(target).offset().top-120
        }, 600);

        return false;
    });            
    $('#opcaoTop').bind('click',function(e){
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $('#front').offset().top-120},600);
        return false
    });
    $('.cima').bind('click',function(e){
        e.preventDefault();
        $('html,body').animate({
            scrollTop: $('#contact').offset().top-120},600);
        return false;
    });
    
    //menu phone 
    var hamburger = $('#hamburger-icon');
    var menu_mobile = $(".menuOpcoes");
    hamburger.click(function() {
        hamburger.toggleClass('active');
        menu_mobile.toggleClass('active');
        return false;
    });
    var opcoes = $('.Opcao');
    opcoes.click(function() {
        hamburger.toggleClass('active');
        menu_mobile.toggleClass('active');
                    
        return false;
    });
    
    //scroll menu to div
    $('.Opcao').bind('click', function(e) {
        e.preventDefault(); // prevent hard jump, the default behavior

        var target = $(this).attr("href"); // Set the target as variable
        $('html, body').animate({
            scrollTop: $(target).offset().top-120
        }, 600);

        return false;
    });            
    $('#link').bind('click',function(e){
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $('#front').offset().top-120},600);
        return false
    });
                
    //animação header            
    var front = $('#front');
    var imagem = $('#Layer_1');
    front.mousemove(function(e){
        var valueX = (e.pageX * 1/8);
        var valueY = (e.pageY * 1/8);
                    
                    
        imagem.css({
            'transform':'translateY('+valueY + 'px) translateX(' +valueX +'px)', '-webkit-transform':'translateY('+valueY + 'px) translateX(' +valueX +'px)','-moz-transform':'translateY('+valueY + 'px) translateX(' +valueX +'px)'
        });
        if(valueX <= 55){
            $('.cls-1').css({
                'fill':'#00a773'
            })
        }
        else if(valueX<=170){
            $('.cls-1').css({
                'fill':'#2271B9'
            })
        }
        else {
            $('.cls-1').css({
                'fill':'#E42F26'
            })
        }
                    
    });
    
	
});