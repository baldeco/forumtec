function validar(){
	
	//Campos do formulário
	const form = document.formulario;
	const local = form.nome;
	const capacidade = form.capacidade;

	//Verificação dos campos do formulário

	//Local
	if(local.value){

		local.value = formataValorCampoTexto(local.value);

		if(!verificaCampoTexto(local.value)){
			
			alertaCampo(local, "Local inválido");
			return false;
		}
	
	}else{

		alertaCampo(local);
		return false;
	}

	//Capacidade
	if(capacidade.value){

		if(capacidade.value <= 0){

			alertaCampo(capacidade, "Capacidade inválida");
			return false;
		}

	}

	return true;

}

//Função que aponta para o campo que não foi preenchido corretamente
function alertaCampo(campo, msg="Preencha este campo"){
		
	if(campo.nextElementSibling != null){

		campo.parentNode.removeChild(campo.nextElementSibling);
		clearTimeout(temporizador);
	}

	campo.style.borderColor = "#a94442";

	const label = document.createElement("label");
	label.setAttribute("class", "campoVazio");
	label.appendChild(document.createTextNode(msg));
	campo.parentNode.appendChild(label);

	campo.focus();


	temporizador = setTimeout(()=>{

		campo.style.borderColor = "#dce1e4";
		campo.parentNode.removeChild(campo.nextElementSibling);
	
	},5000);

}

function verificaCampoTexto(valorCampo){

	const expressao = /\w+/ig;
	return expressao.test(valorCampo);

}

function formataValorCampoTexto(valorCampo){

	//Retirando os espaços vazios do ínicio da string
	valorCampo = valorCampo.replace(/^(\s*) | (\s*)$/ig,"");

	//Retirando espaços duplicados
	valorCampo = valorCampo.replace(/\s{2,}/ig," ");

	return valorCampo;

}