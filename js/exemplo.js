$(function(){
	
	var atual = -1;
	var maximo = $('.box-especialidade').length - 1;
	var timer;
	var animacaoDelay = 3;

	executarAnimacao();
	function executarAnimacao(){
		$('.box-especialidade').hide();
		timer = setInterval(logicaAnimacao,animacaoDelay*1000);

		function logicaAnimacao(){
			atual++;
			if(atual > maximo){

				clearInterval(timer);
				// função nativa do Js para parar o timer 
				return false;
			}

			//alert('chamando intervalo');

			$('.box-especialidade').eq(atual).fadeIn();

		}

	}

})

// este codigo nao esta sendo executado pois não estou chamando no index 