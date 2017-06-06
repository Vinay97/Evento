<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
 <?php
    $e=$_REQUEST['id'];
    $d=$_REQUEST['d'];
    //$v=$_REQUEST['v'];?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="bs/jq.js" type="text/javascript"></script>
        <link href="bs/b1.css" rel="stylesheet" type="text/css"/>
        <link href="bs/b2.css" rel="stylesheet" type="text/css"/>
        <script src="bs/b3.js" type="text/javascript"></script>
        <link href="css/main.css" rel="stylesheet">

        <script>
            $(document).ready(function(){
               $('#b1').click(function(){
                   var id= <?php echo rand(1000,5000); ?>;
                   //alert(id);
                   var nm=$('#t1').val();
                   var em=$('#t2').val();
                   var mob=$('#t3').val();
                   var ev='<?php echo $e; ?>';
                   var d='<?php echo $d; ?>';
                  
                   $.post('tckt.php',{p:id,q:nm,r:em,s:mob,t:ev,u:d},function(data){
                       $('.container').html(data);
                   });
               }); 
            });
            </script>
    </head>
   
    <style>
        #tc{
            width:100%;
            height:500px;
        }
    </style>

    <body>
        <!--<header id="header" role="banner">		
		<div class="main-nav">
			<div class="container">
				<div class="header-top">
					<div class="pull-right social-icons">
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-google-plus"></i></a>
						<a href="#"><i class="fa fa-youtube"></i></a>
					</div>
				</div>     
		        <div class="row">	        		
		            <div class="navbar-header">
		                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		                    <span class="sr-only">Toggle navigation</span>
		                    <span class="icon-bar"></span>
		                    <span class="icon-bar"></span>
		                    <span class="icon-bar"></span>
		                </button>
		                <a class="navbar-brand" href="main.php">
		                	<img class="img-responsive" src="images/logo.png" alt="logo">
		                </a>                    
		            </div>
                        </div>
                            </header>-->
      
        <div id="tc">
        <div class="container">
            <center><h1 style="color: black;">Registration for <b><?php echo $e?></h1></center>
           
    <div class="form-group">
        <label class="control-label col-sm-2" for="name" style="color: black;">Enter Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="t1" placeholder="Enter Name">
      </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="email" style="color: black;">Enter Email:</label>
      <div class="col-sm-10">          
        <input type="email" class="form-control" id="t2" placeholder="Enter Email">
      </div>
    </div>
                <div class="form-group">
      <label class="control-label col-sm-2" for="email" style="color: black;">Enter Mobile no:</label>
      <div class="col-sm-10">          
        <input type="number" class="form-control" id="t3" placeholder="Enter Mobile no">
      </div>
    </div>
    
    Book Now:<div class="pm-button"><a href="https://www.payumoney.com/paybypayumoney/#/296847">
            <img src="https://www.payumoney.com//media/images/payby_payumoney/buttons/212.png" /></a></div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="button" class="btn btn-primary" id="b1">Submit</button>
      </div>
    </div>
            
</div>
        </div>
        </body>
</html>
 <?php
/*if(isset($_REQUEST['b1'])){
    if(!empty($_REQUEST['t1'])&&!empty($_REQUEST['t2'])&&!empty($_REQUEST['t3'])&&!is_numeric($_REQUEST['t1'])){
        mysql_connect('localhost','root','');
        mysql_select_db('xyz');
        $id=rand(1000,5000);
        $nm=$_REQUEST['t1'];
        $em=$_REQUEST['t2'];
        $mob=$_REQUEST['t3'];
                
        $q="insert into info values ($id,'$nm','$em',$mob,'$e','$d')";
        $rs=  mysql_query($q);
        if($rs>0){
            $t="select * from info where id=$id";
            $rs2=  mysql_query($t);
            while ($row = mysql_fetch_array($rs2)) {
                echo "<script>"
                . "$(document).ready(function(){"
                        . "$('.container').html('<section id='event'>'
                            . '<center><h1>Ticket:</h1>'
                            . '<h3>Id:<b>$row[id]</b><br>Name:<b>$row[name]</b><br>Event Name:<b>$row[event]</b><br>Date:<b>$row[din]</b></h3><br>'
                            . '<button type='button' class='btn btn-success'>Print Ticket</button></center></div></section>');"
                        . "});"
                        . "</script>";
            }
        }
        else{
            echo "error 1";
        }
    }
    else{
        echo "error 2";
    }
}*/
?>