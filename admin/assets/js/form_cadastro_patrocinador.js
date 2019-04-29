function validar(){
	
	//Campos do formulário
	const form = document.formulario;
	const nome = form.nome;
	const tipo = form.tipo;
	const cpf_cnpj = form.cnpj;
	const email = form.email;
	const novoLogo = form.logo;
	const logoAtual = form.logo_atual;

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

	//Tipo
	if(!tipo.value){

		alertaCampo(tipo);
		return false;
	}

	//CPF/CNPJ
	if(cpf_cnpj.value){

		cpf_cnpj.value = formataValorCampoTexto(cpf_cnpj.value);

		switch(tipo.value){

			case "f":

				if(!verificaCpf(cpf_cnpj.value)){

					alertaCampo(cpf_cnpj, "CPF inválido");
					return false;
				}

				break;
			

			case "j":{

				if(!verificaCnpj(cpf_cnpj.value)){

					alertaCampo(cpf_cnpj, "CNPJ inválido");
					return false;
				}

				break;
			}

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

	//Logo
	if(!novoLogo.value && !logoAtual.value){
		
		alertaImagem(novoLogo);
		return false;
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

//Função que alerta que nenhuma imagem foi selecionada
function alertaImagem(campo){

	if(campo.nextElementSibling != null){

		campo.parentNode.removeChild(campo.nextElementSibling);
		clearTimeout(temporizador);
	}

	const label = document.createElement("label");
	label.setAttribute("class", "campoVazio");
	label.appendChild(document.createTextNode("Selecione uma imagem"));
	campo.parentNode.appendChild(label);

	temporizador = setTimeout(()=>{
		campo.parentNode.removeChild(campo.nextElementSibling);
	},5000);

}

function verificaCampoTexto(valorCampo){

	const expressao = /\w+/ig;
	return expressao.test(valorCampo);

}

function verificaEmail(email){

	const expressao = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/ig;
	return expressao.test(email);

}

function verificaCpf(cpf){

	const expressao = /^\d{11}$/;
	return expressao.test(cpf);

}

function verificaCnpj(cnpj){

	const expressao = /^\d{14}$/;
	return expressao.test(cnpj);

}

function formataValorCampoTexto(valorCampo){

	//Retirando os espaços vazios do ínicio da string
	valorCampo = valorCampo.replace(/^(\s*) | (\s*)$/ig,"");

	//Retirando espaços duplicados
	valorCampo = valorCampo.replace(/\s{2,}/ig," ");

	return valorCampo;

}