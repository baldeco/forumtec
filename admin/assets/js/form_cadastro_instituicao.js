function validar(){
	
	//Campos do formulário
	const form = document.formulario;
	const nome = form.f_nome;
	const cidade = form.f_cidade;

	//Verificação dos campos do formulário

	//Nome
	if(nome.value){

		nome.value = formataValorCampoTexto(nome.value);

		if(!verificaCampoTexto(nome.value)){
			
			alertaCampo(nome, "Nome inválido");
			return false;
		}
	
	}else{

		alertaCampo(nome);
		return false;
	}

	//Cidade
	if(cidade.value){

		cidade.value = formataValorCampoTexto(cidade.value);

		if(!verificaCampoNome(cidade.value)){

			alertaCampo(cidade, "Cidade inválida");
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

function verificaCampoNome(valorCampo){

	const expressao = /^[a-z\u00C0-\u00FF ]+$/ig;
	return expressao.test(valorCampo);

}

function formataValorCampoTexto(valorCampo){

	//Retirando os espaços vazios do ínicio da string
	valorCampo = valorCampo.replace(/^(\s*) | (\s*)$/ig,"");

	//Retirando espaços duplicados
	valorCampo = valorCampo.replace(/\s{2,}/ig," ");

	return valorCampo;

}