<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Main Page</title>
  </head>
  <body>

    @foreach($data as $person)
      <a href="{{ URL::route('info', ['id' => $person['guid']]) }}">
        Guid - {{ $person['guid'] }} </br>
        Author - {{ $person['author'] }} </br>
        Title - {{ $person['title'] }} </br>
      </a>
      <br>
    @endforeach
  </body>
</html>
