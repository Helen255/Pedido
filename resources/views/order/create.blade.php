<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>


        <table>
     
         <tr>
             <th>Title</th>
             <th>Autor</th>
             <th>Disponibles</th>
             <th></th>
         </tr>   

        @foreach($book as $book)

        <tr>
            <td>{{ $book->title }}</td>
            <td>{{ $book->autor }}</td>
            <td>{{ $book->avaliable_copies }}</td>
           
            <td><a  href=" /add/{{($book->id) }} " class="button is-dark">Agregar Orden</a></td>
        </tr>

        @endforeach

            
        </table>
       

</body>
</html>

