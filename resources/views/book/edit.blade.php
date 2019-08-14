<!doctype html>

<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
    </head>
    <body>
        
            
        <form method="post" action="{{ route('book.update', $book->id) }}">

            @csrf
            @method('PATCH')
            
            {{csrf_field()}}
            <input type="text" name="title" required placeholder="title"  value="{{$book->title}}">
            <br><br>
            <input type="text" name="autor" required placeholder="autor" value="{{$book->autor}}">
            <br><br>
            <input type="text" name="pages" required placeholder="pages"  value="{{$book->pages}}">
            <br><br>
            <input type="text" name="total_copies" required placeholder="total copies"  value="{{$book->total_copies}}">
            <br><br>
            <input type="text" name="avaliable_copies" required placeholder="avaliable copies"  value="{{$book->avaliable_copies}}">
            <br><br>
            <input type="submit" value="guardar" required><br>
        
        </form>

    </body>
    </html>

    