$(document).ready(function(){
	$("#botao").click(function(){
		if(($("#lingua1").val() == $("#lingua2").val()) || $("#lingua1_input").val() == ""){
			alert("Erro encontrado");
		}
		else{ 
			$.get("php/converter.php", {
				lingua1_val: $("#lingua1").val(),
				lingua2_val: $("#lingua2").val(),
				lingua1_input: $("#lingua1_input").val()
			},
			function(data, status){
				$("#lingua1").val(1);
				$("#lingua2").val(2);
				$("#lingua1_input").val(0);
				
				$("#conversao").css("display" , "none");
				$("#conversao").fadeIn("slow");
				$("#conversao").html(data);
			});
		}
	});
	$("#seta").click( function() {
		location.href = "#corpo";
	});
});