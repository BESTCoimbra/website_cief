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

    if ($(window).width() <= 960) {
        startAnimFrameAnimation();
    }
    if ($(window).width() > 960) {
        front.mousemove(function(e){
                var valueX = (e.pageX * 1/8);
                var valueY = (e.pageY * 1/8);
                        
                animateHeader(valueX,valueY,imagem);
        });
    }


    function startAnimFrameAnimation() {
        const refreshRate = 1000 / 10;
        const maxXPosition = 70;
        const maxYPosition = 60;

        let speedX = 1;
        let speedY = 1;

        let positionX = 0;
        let positionY = 0;

      
        function step() {
          positionX = positionX + speedX;
          positionY = positionY + speedY;

          if (positionX > maxXPosition || positionX < -maxXPosition) {
            speedX = speedX * (-1);
          }
          if (positionY > maxYPosition || positionY < -maxYPosition) {
            speedY = speedY * (-1);
          }
          animateHeader(positionX,positionY,imagem);
          window.requestAnimationFrame(step);
        }
      
        window.requestAnimationFrame(step);
      }

    
    function animateHeader(valueX, valueY, imagem){
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
    }
	
});