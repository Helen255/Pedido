<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>


        <table>
     
         <tr>
             <th>Code</th>
             <th>Date</th>
             <th>Fullname</th>
             <th>Is Active</th>
            
         </tr>   

        @foreach($client as $client)

        <tr>
            <td>{{ $client->code }}</td>
            <td>{{ $client->date }}</td>
            <td>{{ $client->fullname }}</td>
            <td>{{ $client->is_active }}</td>
           
            <td><a  href="{{ route('client.show', $client->id) }}">Detalle</a></td>
        </tr>

        @endforeach

            
        </table>
       

</body>
</html>
