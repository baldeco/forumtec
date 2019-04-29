function validar(){
	
	//Campos do formulário
	const form = document.formulario;
	const nome = form.f_nome;
	const responsaveis = document.getElementsByName("f_palestrantes[]");
	const data = form.f_data;
	const descricao = form.f_descricao;
	const local = form.f_id_local;
	const novaFoto = form.f_img_divulgar;
	const fotoAtual = form.f_foto_atual;
	const novoAnexo = form.f_anexo;
	const anexoAtual = form.f_anexo_atual;
	const legendaAnexo = form.f_legenda_anexo;

	//Array com os valores do atributo checked dos checkboxes
	let checkboxes = [];
	for(let i=0; i < responsaveis.length; i++){
		checkboxes.push(responsaveis[i].checked);
	}

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

	//Palestrantes
	if(!checkboxes.some(verificaCheckboxes)){
		
		responsaveis[0].focus();
		alert("Selecione um ou mais responsáveis");
		return false;
	}
	
	//Data
	if(data.value){
	
		if(!verificaData(data.value)){
			
			alertaCampo(data, "Data inválida");
			return false;
		}
		
	}else{
		
		alertaCampo(data);
		return false;
	}

	//Descrição
	if(descricao.value){

		descricao.value = formataValorCampoTexto(descricao.value);

		if(!verificaCampoTexto(descricao.value)){
			
			alertaCampo(descricao, "Descrição inválida");
			return false;
		}

	}

	//Local
	if(!local.value){
		
		alertaCampo(local);
		return false;
	}

	//Anexo
	if(novoAnexo.value || anexoAtual.value){

		legendaAnexo.value = formataValorCampoTexto(legendaAnexo.value);

		if(!verificaCampoTexto(legendaAnexo.value)){
			alert('Legenda do anexo inválida');
			return false;
		}

	}

	if(legendaAnexo.value){
		
		if(!novoAnexo.value && !anexoAtual.value){
			alert('Selecione um arquivo');
			return false;
		}

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

//Verifica se o checkbox foi selecionado
function verificaCheckboxes(checkbox){
	return checkbox == true;
}

function verificaData(data){

	let dataFormatada = data.split("/");
	dataFormatada = dataFormatada.reverse();
	dataFormatada = dataFormatada.join("/");

	let dataAtual = new Date();
	dataAtual.setHours(0,0,0,0);

	if(Date.parse(dataFormatada) >= dataAtual.getTime()){
		return true;
	}

	return false;

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

