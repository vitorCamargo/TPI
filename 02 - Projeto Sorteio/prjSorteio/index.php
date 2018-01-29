<!DOCTYPE html>
<html>
	<head>
		<link rel = "icon" type = "image/png" href = "">		
		
		<link type = "text/css" rel = "stylesheet" href = "css/style.css">
		<link type = "text/css" rel = "stylesheet" href = "css/style-scrolbar.css">
		
		<meta charset = "UTF-8">
		<title> Sorteio da Mega Sena </title>
		
		<script type = "text/javascript">
			function sortear() {
				var xmlhttp = new XMLHttpRequest();
				xmlhttp.onreadystatechange = function() {
					if(xmlhttp.readyState === 4 && xmlhttp.status === 200) {
						document.getElementById("bolas").innerHTML = xmlhttp.responseText;
					}
				}
				xmlhttp.open("GET", "sortear.php", true);
				xmlhttp.send();
			}
		</script>
	</head>

	<body>	
		<form>
			<div class = "form-all">
				<ul class = "form-section">
					<li style = "height: 200px;">
						<div class = "httac" style = "padding-top: 120px;">
							<h1 class = "form-header">
								Sorteio da Mega Sena
							</h1>
							<div class = "form-subHeader">
								QUE A SORTE ESTEJA AO SEU LADO
							</div>
						</div>
					</li>

					<li style = "margin-top: 50px;">
						<center>
							<table id = "bolas">
								<tr>
									<td> B1 </td>
									<td> B2 </td>
									<td> B3 </td>
									<td> B4 </td>
									<td> B5 </td>
									<td> B6 </td>
									<td> B7 </td>
									<td> B8 </td>
									<td> B9 </td>
									<td> B10 </td>
									<td> B11 </td>
									<td> B12 </td>
									<td> B13 </td>
									<td> B14 </td>
									<td> B15 </td>
								</tr>
							</table>
						</center>
					</li>

					<li class = "form-line" style = "text-align:center">
						<input onclick = "sortear();" type = "button" value = "Sortear" class = "form-submit-button">
					</li>
				</ul>
			</div>
		</form>
	</body>
</html>