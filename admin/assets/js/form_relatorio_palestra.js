function validar()
{
	
	const form = document.formulario;
	const data = form.f_data;

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
}

function verificaData(data){

	let dataFormatada = data.split("/");
	dataFormatada = dataFormatada.reverse();
	dataFormatada = dataFormatada.join("/");

	let dataAtual = new Date();
	dataAtual.setHours(0,0,0,0);

	if(Date.parse(dataFormatada) <= dataAtual.getTime()){
		return true;
	}
	// A data não pode ser maior, pois mesmo se tiver palestra quer dizer que ainda não ocorreu.
	return false;

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