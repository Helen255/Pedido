<!doctype html>

<html lang="{{ app()->getLocale() }}">
    <head>
       

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
    </head>
    <body>

    	<form method="post" action="{{ route('client.store')}}">
    		
    		{{csrf_field()}}
    		<input type="text" name="code" required placeholder="code">
    		<br><br>
    		<input type="date" name="date" required placeholder="date">
    		<br><br>
    		<input type="text" name="fullname" required placeholder="fullname">
    		<br><br>
            <input type="text" name="is_active" required placeholder="is/active">
            <br><br>
            <input type="submit" value="Guardar" required><br>
    	</form>
    	
    </body>
    </html>

  