<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Main Page</title>
    <style>
  
        body {
    background-color: #ffe6e6;
margin:80px 80px 100px 100px;
}
  
div#fixedheader {
  position:fixed;
  top:0px;
  left:0px;
  width:100%;
  color:#CCC;
  background:#333;
  padding:20px;
  text-align: center;
}
div#fixedfooter {
  position:fixed;
  bottom:0px;
  left:0px;
  width:100%;
  color:#CCC;
  background:#333;
  padding:15px;
  text-align: center;
}
hr {
  height:1px; 
  border:none; 
  color:#000; 
  background-color:#000; 
  width:35%; 
  text-align:left; 
  margin: 0 
  auto 0 0;
}

        
    </style>
  </head>
  <body >
<div id="fixedheader">INSTA NEWS</div>

    @foreach($data as $person)
      <a href="{{ URL::route('info', ['id' => $person['guid']]) }}"  >
        Guid - {{ $person['guid'] }} </br>
        Author - {{ $person['author'] }} </br>
        Title - {{ $person['title'] }} </br>
      </a>
      <hr>
    @endforeach
     <div id="fixedfooter"></div>
  </body>
</html>
