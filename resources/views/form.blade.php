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

	<table>
		@foreach ($toto as $task)
		<tr>
			<td>
				{{ $task->tache_non_faite }}
			</td>

			<td>
				<form action="/delete/{{$task->id}}" method="post">
					<button type="submit" class="btn btn-danger">supprimer</button>
					{{csrf_field()}}
					{{method_field('DELETE')}}
				</form>
			</td>
			
			<td>
                <form action="/modif/{{$task->id}}" method="post">
                {{csrf_field()}}
                {{method_field('PUT')}}
                <labelfor="modif">Modifier</label>
                <input type="text" name="modif">
                <button type="submit" class="btn btn-info">Modifier</button>
                </form>
            </td>
		
		</tr>
		@endforeach
	</table>		
</body>
</html>