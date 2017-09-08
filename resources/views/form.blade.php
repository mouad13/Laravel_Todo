<!DOCTYPE html>
<html>
<head>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<title>Form</title>
</head>
<body>
	<form action={{"/koko"}} method="post">
		{{csrf_field()}}


		<label for="tache">Ajouter une tache</label>
		<input type="text" name="tache" value="">
		

		<button type="submit" name="" class="btn btn-success">envoyer</button>	

	</form>

	@foreach ($toto as $task)
	<ul>
		<li>
			 {{ $task->tache_non_faite }}
			 <form action="/delete{{$task->id}}" method="post">
			 	<button type="submit" class="">supprimer</button>
			</form>
		</li>
	</ul>
			@endforeach
</body>
</html>