<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <script src="bs/jq.js" type="text/javascript"></script>
        <link href="bs/b1.css" rel="stylesheet" type="text/css"/>
        <link href="bs/b2.css" rel="stylesheet" type="text/css"/>
        <script src="bs/b3.js" type="text/javascript"></script>
        <title></title>
    </head>
    <body>
        <div class="container">
  <h2>Admin Login:</h2>
  <form class="form-horizontal" role="form" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="t1" placeholder="Enter email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" name="t2" placeholder="Enter password">
      </div>
    </div>
      <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" name="b1">Login</button>
      </div>
    </div>
  </form>
</div>

    </body>
</html>
<?php
if(isset($_REQUEST['b1'])){
    if(!empty($_REQUEST['t1'])&&!empty($_REQUEST['t2'])){
        $a=$_REQUEST['t1'];
        $b=$_REQUEST['t2'];
        mysql_connect('localhost','root','');
        mysql_select_db('xyz');
        $q="select email and passwd from reg where email='$a' and passwd='$b'";
        $rs=mysql_query($q);
        if(mysql_fetch_row($rs))
        {
            echo "<script>"
            . "window.location='admin.php'"
                    . "</script>";
                    
        }
       
    }
    else{
        echo "Fill all fields";
    }
}
?>