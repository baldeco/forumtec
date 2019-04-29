function validar(){
	
	//Campos do formulário
	const form = document.formulario;
	const nome = form.nome;
	const cpf = form.cpf;
	const email = form.email;
	const endereco = form.endereco;
	const bairro = form.bairro;
	const cidade = form.cidade;
	const cep = form.cep;
	const telefone = form.telefone;
	const descricao = form.descricao;

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

	//CPF
	if(cpf.value){

		cpf.value = formataValorCampoTexto(cpf.value);

		if(!verificaCpf(cpf.value)){
				
			alertaCampo(cpf, "CPF inválido");
			return false;
		}

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

	//Endereço
	if(endereco.value){

		endereco.value = formataValorCampoTexto(endereco.value);

		if(!verificaCampoTexto(endereco.value)){

			alertaCampo(endereco, "Endereço inválido");
			return false;
		}

	}
	
	//Bairro
	if(bairro.value){

		bairro.value = formataValorCampoTexto(bairro.value);

		if(!verificaCampoTexto(bairro.value)){

			alertaCampo(bairro, "Bairro inválido");
			return false;
		}

	}

	//Cidade
	if(cidade.value){

		cidade.value = formataValorCampoTexto(cidade.value);

		if(!verificaCampoNome(cidade.value)){

			alertaCampo(cidade, "Cidade inválida");
			return false;
		}

	}

	//CEP
	if(cep.value){

		cep.value = formataValorCampoTexto(cep.value);

		if(!verificaCep(cep.value)){
				
			alertaCampo(cep, "CEP inválido");
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

	//Descrição
	if(descricao.value){

		descricao.value = formataValorCampoTexto(descricao.value);

		if(!verificaCampoTexto(descricao.value)){
			
			alertaCampo(descricao, "Descrição inválida");
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

function verificaCep(cep){

	const expressao = /^\d{8}$/ig;
	return expressao.test(cep);

}

function verificaTelefone(telefone){

	const expressao = /^\d{8,}$/ig;
	return expressao.test(telefone);

}

function verificaCampoNome(valorCampo){

	const expressao = /^[a-z\u00C0-\u00FF ]+$/ig;
	return expressao.test(valorCampo);

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