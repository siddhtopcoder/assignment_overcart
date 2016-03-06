<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Information Page</title>
  </head>
  <body>
    <ul>
      <li>{{ $send['author'] }}</li>
      <li>{{ $send['title'] }}</li>
      <li>{{ $send['date'] }}</li>
      <li>{!!$send['body']!!}</li>
    </ul>
    <br>
    <br>
  </body>
</html>
