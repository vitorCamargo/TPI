$(document).ready(function() {
	$("#form2").hide();
    $("#menuLogin_logout").hide();
	
    //Inicio js menu
	$("#menu_contate").hide();
	$("#menu_reserva").hide();
	
	$('#menu_1').mouseover(function() {
		$("#menu_reserva").show();
	});

	$('#menu_1').mouseout(function() {
		$("#menu_reserva").hide();
	});
	
	$('#menu_2').mouseover(function() {
		$("#menu_contate").show();
	});

	$('#menu_2').mouseout(function() {
		$("#menu_contate").hide();
	});
    
    $('#menuLogin_log').mouseover(function() {
		$("#menuLogin_logout").show();
	});
	
	$('#menuLogin_log').mouseout(function() {
		$("#menuLogin_logout").hide();
	});
	//Fim js menu
	
	//Inicio js horario
	$("#destino").change(function() {
		$.post("horarios.php", {
			destino: $("#dpDestino").val()
		},
		function(data, status) {
			$("#horario1").html(data);
		});
	});

	$("#pacote").change(function() {
		$.post("horarios.php", {
			pacote: $("#dpPacote").val()
		},
		function(data, status) {
			$("#horario2").html(data);
		});
	});
	//Fim js horario			
	
	//Inicio js dest/pac
	$("#pacote").hide();
	$("#div_horario2").hide();
				
	$("input:radio").change(function() {
		if($("#escolha1").prop("checked")) {
			$("#pacote").hide();
			$("#div_horario2").hide();
			$("#destino").show();
			$("#div_horario1").show();
		} else if($("#escolha2").prop("checked")) {
			$("#destino").hide();
			$("#div_horario1").hide();
			$("#pacote").show();
			$("#div_horario2").show();
		}
	});
	//Fim js dest/pac
	
	//Inicio js reservar
	$("#reservar_fail").click(function() {
        alert("É necessário fazer o Login!!");
        window.location.href = "login.php";
	});
	
	$("#reservar").click(function() {
       if($("#escolha1").prop("checked")){
            if($("#nome").val() == "" || $("#qtd").val() == "" || 
               $("#dpDestino").val() == "" || $("#horario1").val() == "") {
                alert('Estão faltando informações!');
            } else {
                $passageiro = $("#nome").val();
                $("#nome2").text($passageiro);

                $("#form2_escolha").text("Destino");
                $("#form2_escolha2").text($("#dpDestino option:selected").text());
                $("#form2_horario2").text($("#horario1 option:selected").text());

                $.post("precos.php", {
                    nome_reserva: $("#dpDestino option:selected").text(),
                    destino: $("#dpDestino option:selected").val(),
                    pacote: 0,
                    horario: $("#horario1 option:selected").text(),
                    qtd: $("#qtd").val()
                },
                function(data, status) {
                    $("#form2_unitario").text("R$ " + (data / $('#qtd').val()));
                    $("#form2_total").text("R$ " + data);
                });
                $("#form1").hide();
                $("#form2").show();
            }
        } else if($("#escolha2").prop("checked")) {
            if($("#nome").val() == "" || $("#qtd").val() == "" || 
               $("#dpPacote").val() == "" || $("#horario2").val() == "") {
                alert('Estão faltando informações!');
            } else {
                $passageiro = $("#nome").val();
                $("#nome2").text($passageiro);
                $("#form2_escolha").text("Pacote");
                $("#form2_escolha2").text($("#dpPacote option:selected").text());
                $("#form2_horario2").text($("#horario2 option:selected").text());
                $.post("precos.php", {
                    nome_reserva: $("#dpPacote option:selected").text(),
                    pacote: $("#dpPacote option:selected").val(),
                    destino: 0,
                    horario: $("#horario2 option:selected").text(),
                    qtd: $("#qtd").val()
                },
                function(data, status) {
                    $("#form2_unitario").text("R$ " + (data / $('#qtd').val()));
                    $("#form2_total").text("R$ " + data);
                }); 
                $("#form1").hide();
                $("#form2").show();
            }
        }
	});
	
    $("#voltar").click(function() {
		$("#form1").show();
		$("#form2").hide();
	});
	// Fim js reservar
});