$(function(){	
	$('form#register').submit(function(){
		var nome = $('input[name=NOMEdb]').val();
		var creci = $('input[name=CRECIdb]').val();
		var cpf = $('input[name=CPFdb]').val();
		
		if(verificarCpf(cpf) == false){
			aplicarCampoInvalido($('input[name=CPFdb]'));
			return false;
		}else if(verificarCreci(creci) == false){
			aplicarCampoInvalido($('input[name=CRECIdb]'));
			return false;
		}else if(verificarNome(nome) == false){
			aplicarCampoInvalido($('input[name=NOMEdb]'));
			return false;
		}
		else{
			alert("Corretor cadastrado.")
		}
	});

	$('input[type=text]').focus(function(){
	resetarCampoInvalido($(this));
	})

	$('input[type=number]').focus(function(){
	resetarCampoInvalido($(this));
	})

	function aplicarCampoInvalido(el){
		el.css('border','2px solid red').css('color','red');
		//el.data('invalido','true');
	}

	function resetarCampoInvalido(el){
		el.css('border','1px solid black').css('color','black');
		el.val('');
	}

	function verificarNome(nome){

		if(nome==''){
			return false;
		}

		var amount = nome.split(' ').length;
		var splitStr = nome.split(' ');

		if(amount >= 2){
			for(var i = 0; i < amount; i++){
				if(splitStr[i].match(/^[A-Zd]{1}[a-z]{1,}$/)){

				}else{
					return false;
				}
			}
		}else{
			return false;
		}

	}

	function verificarCreci(creci){

		if(creci == ''){
			return false;
		}

		if(creci.length < 2){
			return false;
		}

	}

	function verificarCpf(cpf){

		if(cpf == ''){
			return false;
		}

		if(cpf.length < 11){
			return false;
		}

	}

	
})