<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <script src="bs/jq.js" type="text/javascript"></script>
        <link href="bs/b1.css" rel="stylesheet" type="text/css"/>
        <link href="bs/b2.css" rel="stylesheet" type="text/css"/>
        <script src="bs/b3.js" type="text/javascript"></script>
        <meta charset="UTF-8">
        <title></title>
        <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Evento</a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="edt.php">Add Event</a></li>
        <li><a href="#">Event Details</a></li>
        <li><a href="main.php">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
    <center><h1>Admin Panel</h1></center>
        <form method="post">
            Upload image: <input type="file" name="f1"><br>
            Upload image:<input type="file" name="f1"><br>
        <textarea rows="10" cols="80"  name="a">
</textarea>
        <script type="text/javascript">
            CKEDITOR.replace('a');
            </script>
            <input type="submit" value="ok" name="b">
        </form>
        <?php
        // put your code here
        ?>
        
  
    </body>
</html>
<?php
if(isset($_REQUEST['b'])){
    $a=$_REQUEST['a'];
    echo $a;
}
?>