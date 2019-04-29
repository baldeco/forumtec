function validar(){
	
	//Campos do formulário
	const form = document.formulario;
	const nome = form.f_nome;
	const cpf = form.f_cpf;
	const email = form.f_email;
	const telefone = form.f_telefone;

	//Verificação dos campos do formulário

	//Nome
	if(nome.value){
		
		nome.value = formataValorCampoTexto(nome.value);

		if(!verificaCampoNome(nome.value)){
			
			alertaCampo(nome, "Nome inválido");
			return false;
		}

	}else{

		alertaCampo(nome);
		return false;
	}
	
	//E-mail
	if(email.value){

		email.value = formataValorCampoTexto(email.value);

		if(!verificaEmail(email.value)){
		
			alertaCampo(email, "E-mail inválido");
			return false;
		}

	}else{
		alertaCampo(email);
		return false;
	}

	//CPF
	if(cpf.value){

		cpf.value = formataValorCampoTexto(cpf.value);

		if(!verificaCpf(cpf.value)){
				
			alertaCampo(cpf, "CPF inválido");
			return false;
		}

	}

	//Telefone
	if(telefone.value){

		telefone.value = formataValorCampoTexto(telefone.value);

		if(!verificaTelefone(telefone.value)){
		
			alertaCampo(telefone, "Telefone inválido");
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

function verificaEmail(email){

	const expressao = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/ig;
	return expressao.test(email);

}

function verificaCpf(cpf){

	const expressao = /^\d{11}$/;
	return expressao.test(cpf);

}

function verificaTelefone(telefone){

	const expressao = /^\d{8,}$/ig;
	return expressao.test(telefone);

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