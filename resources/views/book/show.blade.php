<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <table>

        <dl>
            <dt>Title</dt><dd>{{$book->title}}</dd>
            <dt>Autor</dt><dd>{{$book->autor}}</dd>
            <dt>Pages</dt><dd>{{$book->pages}}</dd>
            <dt>Total Copies</dt><dd>{{$book->total_copies}}</dd>
            <dt>Avaliable Copies</dt><dd>{{$book->avaliable_copies}}</dd>
        </dl>

         <a href="{{ route('book.index') }}">Lista</a>
         <br>
         <a href="{{ route('book.edit', $book->id) }}">Editar</a>
         
         <form method="post" action="{{route('book.destroy', $book->id)}}">
            @csrf
            @method('DELETE')
         <input type="submit" value="Borrar"> 
              
         </form>

    </table>
    
   

</body>
</html>

   