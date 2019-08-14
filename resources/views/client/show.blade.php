<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <table>

        <dl>
            <dt>Code</dt><dd>{{$client->code}}</dd>
            <dt>Date</dt><dd>{{$client->date}}</dd>
            <dt>Fullname</dt><dd>{{$client->fullname}}</dd>
            <dt>Is Active</dt><dd>{{$client->is_active}}</dd>
           
        </dl>

         <a href="{{ route('client.index') }}">Lista</a>
         <br>
         <a href="{{ route('client.edit', $client->id) }}">Editar</a>
         
         <form method="post" action="{{route('client.destroy', $client->id)}}">
            @csrf
            @method('DELETE')
         <input type="submit" value="Borrar"> 
              
         </form>

    </table>
    
   

</body>
</html>

   