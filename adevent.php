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
<div class="container">
    <h2><center>Events</center></h2>          
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Event Name</th>
        <th>Day and Place</th>
      
      </tr>
    </thead>
    <tbody>
        <?php
        mysql_connect('localhost','root','');
        mysql_select_db('xyz');
        $q="select * from eventd";
        $rs=  mysql_query($q);
        while($row=mysql_fetch_array($rs)){
      echo "<tr>
        <td>$row[event]</td>
        <td>$row[din]</td>
       
      </tr>";
        }
        ?>
    </tbody>
  </table>
</div>


        <?php
        // put your code here
        ?>
    </body>
</html>
