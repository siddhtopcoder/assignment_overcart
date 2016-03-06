<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Information Page</title>
    <style>
        .asb {
                position: absolute;
                height: 300px;
                width: 800px;
                margin:  -200px 0 0 -200px;
                top: 60%;
                left: 35%;

        }
       
        body {
    background-color: #ffe6e6;
    margin:80px 80px 100px 100px;
}
  #qwe {
    border-radius: 25px;
    background: #ffcc66;
    padding: 20px;
    
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
    </style>
  </head>
  <body>
    <div id="fixedheader">INSTA NEWS</div>
    <div class="asb">
    <table border="2px" id="qwe" >
        <tr>
            <td>Author</td>
            <td>{{ $send['author'] }}</td>
        </tr>
        <tr>
            <td>Title</td>
            <td>{{ $send['title'] }}</td>
        </tr>
        <tr>
            <td>Date</td>
            <td>{{ $send['date'] }}</td>
        </tr>
        <tr>
            <td>Other Data</td>
            <td>{!!$send['body']!!}</td>
        </tr> 
      
    </table>
</div>
    <br>
    <br>
    <div id="fixedfooter"></div>
  </body>
</html>

