<!doctype html>

<html lang="{{ app()->getLocale() }}">
    <head>
       

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
    </head>
    <body>

    	<form method="post" action="{{ route('book.store')}}">
    		
    		{{csrf_field()}}
    		<input type="text" name="title" required placeholder="title">
    		<br><br>
    		<input type="text" name="autor" required placeholder="autor">
    		<br><br>
    		<input type="text" name="pages" required placeholder="pages">
    		<br><br>
            <input type="text" name="total_copies" required placeholder="total_copies">
            <br><br>
            <input type="text" name="avaliable_copies" required placeholder="avaliable_copies">
            <br><br>
            <input type="submit" value="Guardar" required><br>
    	</form>
    	
    </body>
    </html>


    