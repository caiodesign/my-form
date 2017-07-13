// Busca um elemento dentro do document.
function procuraElemento(elemento){
	var a = document.querySelector(elemento);
	return a;
};

// Verifica campo e-mail
function validaEmail(email) {
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
}

// Exibe uma mensagem de erro de formuláreio para o usuário.
function mensagemErro(erro){
	var erro = '<div class="mensagem-erro"><div class="icon-error"><i class="fa fa-exclamation-triangle fa-2x" aria-hidden="true"></i></div><p>Falha ao preencher o campo <strong>' + erro + '</strong>. Por favor, corrija as informações para prosseguir.</p></div>';
	return erro;
}

function cancelaEnvio(){
	return event.preventDefault();
}

// Valida se o formulário foi preenchido corretamente.
var formulario = procuraElemento("#formulario-contato");
function validaFormulario(){
	var a = procuraElemento("#form-error"),
	nomeErro = "Nome Completo",
	cpErro = "CPF/CNPJ",
	dddErro = "DDD",
	celularErro = "Celular",
	emailErro = "E-mail";

	if(formulario.nome.value.length < 4 || formulario.nome.value.length > 100){
		a.innerHTML = mensagemErro(nomeErro);
		cancelaEnvio();
	} else if(formulario.ddd.value.length < 1 || formulario.ddd.value.length > 4){
		a.innerHTML = mensagemErro(dddErro);
		cancelaEnvio();
	} else if(formulario.celular.value.length < 1 || formulario.celular.value.length > 10){
		a.innerHTML = mensagemErro(celularErro);
		cancelaEnvio();
	} else if(validaEmail(formulario.email.value) == false){
		a.innerHTML = mensagemErro(emailErro);
		cancelaEnvio();
	}
}

formulario.button.addEventListener("click", validaFormulario);

// Desce botão que adiciona novo telefone de acordo com a tela do usuário
function desceAdicionaTelefoneDesktop(){
	var elementoMobile = procuraElemento("#add-tel");
	if(screen.width >= 1024){
		var elementoDesktop = procuraElemento("#add-tel-desktop");
		elementoDesktop.innerHTML = elementoMobile.innerHTML;
		elementoMobile.remove();
	}
}
desceAdicionaTelefoneDesktop();


// Adiciona um novo campo para telefone no documento.
var botaoTel = procuraElemento("#add-tel-link");
var estrutura = procuraElemento(".tel-box");
var i = 1;
botaoTel.addEventListener("click", function(){
	event.preventDefault();
	var novaEstrutura = document.createElement("div");
	novaEstrutura.className = "another-tel-box";
	novaEstrutura.innerHTML = '<input type="text" name="dd' + i +'" placeholder="00"><input type="text" name="celular' + i++ + '" placeholder="99999-1234">';
	estrutura.appendChild(novaEstrutura);
});
