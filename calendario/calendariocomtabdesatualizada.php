

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
		<title> SISOP </title>
		<link rel="stylesheet" type="text/css" href="../Codigo/style.css">

<body>
	<div id="topo">
		<div id="topo2">
			<div class="primeira"> <b>COLÉGIO <br> </div>
				<div class= "segunda"> PEDRO II<b>
			</div>
		</div>
	</div>

	<style>
	ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
			overflow: hidden;
			background-color: black;
	}

	li {
			float: left;
	}

	li a {
			display: block;
			color: white;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
	}

	li a:hover:not(.active) {
			background-color: #111;
	}

	}
	</style>
	</head>
	<body>

	<ul>
		<li><a href="../Codigo/entradasesop.html">Pesquisa</a></li>
		<li><a href="../Codigo/agendamentos.html"> Agendamentos</a></li>
		<li><a href="index.php"> Calendário</a></li>
		<li><a href="../Codigo/cadastra.html"> Cadastramento</a></li>
		<li style="float:right"><a class="active" href="../Codigo/sair.php">Sair</a></li>
	</ul>
	<br><br><br>
<meta charset='utf-8' />
<link href='css/fullcalendar.min.css' rel='stylesheet' />
<link href='css/fullcalendar.print.min.css' rel='stylesheet' media='print' />

<script src='js/moment.min.js'></script>
<script src='js/jquery.min.js'></script>
<script src='js/fullcalendar.min.js'></script>
<script src='locale/pt-br.js'></script>
<script>
		$(document).ready(function() {
					$('#calendar').fullCalendar({
						header: {
							left: 'prev,next today',
							center: 'title',
							right: 'month,agendaWeek,agendaDay'
						},
						defaultDate: Date(),
						navLinks: true, // can click day/week names to navigate views
						editable: true,
						eventLimit: true, // allow "more" link when too many events
						events: [
						
						]
					});
		});
</script>
</head>
<body>

	<div id='calendar'></div>

</body>
</html>
