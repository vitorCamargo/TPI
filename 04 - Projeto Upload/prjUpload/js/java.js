$(document).ready(function() {
	$("form").submit(function(event) {
		if($("input:first").val() != "") {
			return ;
		} else {
			$("#resposta").html("<p> Nome de Arquivo Vazio </p>");
		}
		event.preventDefault();
	});
	$("#botao2_back").click( function() {
		location.href = "../index.php";
	});
});