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
        <div class="container">
  <h2>Registration Form:</h2>
  <form class="form-horizontal" role="form" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="t1" placeholder="Enter name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Mobile no:</label>
      <div class="col-sm-10">          
        <input type="number" class="form-control" name="t2" placeholder="Enter Mobile Number">
      </div>
    </div>
      <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">E-mail:</label>
      <div class="col-sm-10">          
        <input type="email" class="form-control" name="t3" placeholder="Enter email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" name="t4" placeholder="Enter password">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" name="b1">Submit</button>
      </div>
    </div>
  </form>
</div>
        <?php
        if(isset($_REQUEST['b1'])){
            if(!empty($_REQUEST['t1'])&&!empty($_REQUEST['t2'])&&!empty($_REQUEST['t3'])&&!empty($_REQUEST['t4'])){
                $a=$_REQUEST['t1'];
                $b=$_REQUEST['t2'];
                $c=$_REQUEST['t3'];
                $d=$_REQUEST['t4'];
                mysql_connect('localhost','root','');
                mysql_select_db('evento');
                $e="select mobno and email from reg where mobno=$b and email='$c'";
                $rs1=  mysql_query($e);
                if(mysql_fetch_row($rs1)){
                    echo "<script> "
                    . "alert('Mobile no and email already exist')"
                            . "</script>";
                }
                else{
                $q="insert into reg(name,mobno,email,passwd) values ('$a',$b,'$c','$d')";
                $rs=  mysql_query($q);
                if($rs>0){
                    echo "<script>"
                    . "window.location='success.html'"
                            . "</script>";
                }
                else{
                    echo mysql_error();
                }
            }
            }
            else{
                echo "insert all the fields";
            }
        }
            
        
        
        ?>
    </body>
</html>
