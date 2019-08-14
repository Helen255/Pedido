<!doctype html>

<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
    </head>
    <body>
        
            
        <form method="post" action="{{ route('client.update', $client->id) }}">

            @csrf
            @method('PATCH')
            
            {{csrf_field()}}
            <input type="text" name="code" required placeholder="code"  value="{{$client->code}}">
            <br><br>
            <input type="date" name="date" required placeholder="date" value="{{$client->date}}">
            <br><br>
            <input type="text" name="fullname" required placeholder="fullname"  value="{{$client->fullname}}">
            <br><br>
            <input type="text" name="is_active" required placeholder="is/active"  value="{{$client->is_active}}">
            <br><br>
            <input type="submit" value="Guardar" required><br>
        
        </form>

    </body>
    </html>

    