$(document).ready( function() {
	$("#voltar").click( function() {
		location.href = "../index.php";
	});
	
	$("#btBuscador").click( function() {
		var servico = "http://api.postmon.com.br/v1/cep/";
		var cep = $("#cep").val();
		
		$.getJSON(servico + cep)
		.done(onCepDone)
		.error(onCepError);
	});
});

function onCepDone(data) {
	$("#endereco").val(data.logradouro);
	$("#bairro").val(data.bairro);
	$("#cidade").val(data.cidade);
	$("#estado").val(data.estado);
}

function onCepError(error) {
	$("#endereco").val("");
	$("#bairro").val("");
	$("#cidade").val("");
	$("#estado").val("");
	alert("CEP inválido!")
}