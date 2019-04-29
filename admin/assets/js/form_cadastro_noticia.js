function validar(){
	
	//Campos do formulário
	const form = document.formulario;
	const titulo = form.titulo;
	const autor = form.id_autor;
	const texto = form.texto;
	const novaFoto = form.img_divulgar;
	const fotoAtual = form.f_foto_atual;

	//Verificação dos campos do formulário

	//Título
	if(titulo.value){

		titulo.value = formataValorCampoTexto(titulo.value);

		if(!verificaCampoTexto(titulo.value)){
			
			alertaCampo(titulo, "Título inválido");
			return false;
		}
	
	}else{

		alertaCampo(titulo);
		return false;
	}

	//Autor
	if(!autor.value){
		
		alertaCampo(autor);
		return false;
	}

	//Texto
	if(texto.value){

		texto.value = formataValorCampoTexto(texto.value);

		if(!verificaCampoTexto(texto.value)){
				
			alertaCampo(texto, "Texto inválido");
			return false;
		}

	}else{

		alertaCampo(texto);
		return false;
	}
	

	//Imagem de divulgação
	if(!novaFoto.value && !fotoAtual.value){
		
		alertaImagem(novaFoto);
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

function formataValorCampoTexto(valorCampo){

	//Retirando os espaços vazios do ínicio da string
	valorCampo = valorCampo.replace(/^(\s*) | (\s*)$/ig,"");

	//Retirando espaços duplicados
	valorCampo = valorCampo.replace(/\s{2,}/ig," ");

	return valorCampo;

}
