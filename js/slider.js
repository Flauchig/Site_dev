$(function () {
    var curSlide = 0;
    // curSlide é o lside atual 
    var delay = 3;
    var maxSlide = $(".banner-single").length - 1;
    // pegando os slider  usando o .length() para buscar os elementos e o -1 para começar do 0
    initSlider();
    changeSlide();

    function initSlider() {
        $(".banner-single").hide();
        $(".banner-single").eq(0).show();
        for (var i = 0; i < maxSlide + 1; i++) {
            // coloca-se (+1) com o maxslide por ele começar no indice 0 
            var content = $('.bullets').html();
            if (i == 0)
                content += '<span class="active-slider"></span>';
            else
                content += '<span></span>';

            $('.bullets').html(content);
            // aqui estou chamando a content
            // no caso se eu nao chamar a contente no .html() a tag span acima não é criada 

        }
        // o .eq(0) é para chamar im elemento especifico do html no caso a primeira imagem
        // .show é para mostrar o elemento selecionado
    }

    function changeSlide() {
        setInterval(function () {
            $('.banner-single').eq(curSlide).fadeOut(2000);
            curSlide++;
            if (curSlide > maxSlide) curSlide = 0;
            $('.banner-single').eq(curSlide).fadeIn(2000);
            // trocando a nevegção usando os botãoes do slider
            $('.bullets span').removeClass('active-slider');
            $('.bullets span').eq(curSlide).addClass('active-slider');

        }, delay * 2000);
    }

    $('body').on('click', '.bullets span', function () {
        var currentBullet = $(this);
        // quando usamos (this) ele define o elemento que estmos selecionando.  
        $('.banner-single').eq(curSlide).fadeOut(2000);
        curSlide = currentBullet.index();
        $('.banner-single').eq(curSlide).fadeIn(2000);

        $('.bullets span').removeClass('active-slider');
        currentBullet.addClass('active-slider');


    })







});


