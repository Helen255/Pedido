<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

    <form></form>
    <h1 class="title is-vcentered">Book List</h1>
  
        <div class="columns">
            <div class="column"></div>

            <div class="column">

         <table class="table">
     
         <tr>
             <th>Title</th>
             <th>Autor</th>
             <th>Pages</th>
             <th>Total Copies</th>
             <th>Avaliable Copies</th>
         </tr>   

        @foreach($book as $book)

        <tr>
            <td>{{ $book->title }}</td>
            <td>{{ $book->autor }}</td>
            <td>{{ $book->pages }}</td>
            <td>{{ $book->total_copies }}</td>
            <td>{{ $book->avaliable_copies }}</td>
           
            <td><a class="button is-primary" href="{{ route('book.show', $book->id) }}">Detalle</a></td>
        </tr>

        @endforeach

            
        </table>
        </div>
        <div class="column"></div>
        
         
        

</body>
</html>
    


     
       

