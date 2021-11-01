<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Animes</title>

	<link rel="stylesheet" href="{{url_for('static', filename='css/mi_estilo.css')}}">
	<link rel="stylesheet" href="{{url_for('static', filename='css/bootstrap.min.css')}}">
</head>
<body class='container'>
	<ul>
		<li>
			<a href="/">Inicio</a>
		</li>
	</ul>
	
	<table class='table table-striped'>
		{% for val in ['Sword art online', 'Tensei shitara slime datta ken', 'Jujutsu kaisen', 'shokugeki no soma']: %}
			<tr><td>{{val}}</td></tr>
		{% endfor %}
	</table>
</body>
</html>