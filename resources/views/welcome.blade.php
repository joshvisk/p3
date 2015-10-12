<!DOCTYPE html>
<html>
  <head>
    <title>Developer's Best Friend </title>
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link href="/css/styles.css" rel="stylesheet" type="text/css">

  </head>
  <body>
    <form action="/paragraph" method="post">
      {{ csrf_field() }}
      <input type="submit" name="paragraph">
    </form>
    <br />
    <form action="/user" method="post">
      {{ csrf_field() }}      
      <input type="submit" name="user">
    </form>  
  </body>
</html>
