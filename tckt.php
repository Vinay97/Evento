<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="bs/jq.js" type="text/javascript"></script>
        <link href="bs/b1.css" rel="stylesheet" type="text/css"/>
        <link href="bs/b2.css" rel="stylesheet" type="text/css"/>
        <script src="bs/b3.js" type="text/javascript"></script>
        <link href="css/main.css" rel="stylesheet">
    </head>
    <body>
        <header id="header" role="banner">		
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
                            </header>
        <section id="event">
            <div class="container">
        <?php
        if(!empty($_REQUEST['q'])&&!empty($_REQUEST['r'])&&!empty($_REQUEST['s'])){
            $id=$_REQUEST['p'];
            $nm=$_REQUEST['q'];
            $em=$_REQUEST['r'];
            $mob=$_REQUEST['s'];
            $ev=$_REQUEST['t'];
            $d=$_REQUEST['u'];
            
            mysql_connect('localhost','root','');
            mysql_select_db('xyz');
            $t="select mobno and email from reg where mobno=$mob and email='$em'";
            $y=  mysql_query($t);
            if(mysql_fetch_row($y)){
            $q="insert into info values($id,'$nm','$em',$mob,'$ev','$d')";
            $rs=mysql_query($q);
            if($rs>0){
                $t="select * from info where id=$id";
                $rs2=mysql_query($t);
        
                while($row=  mysql_fetch_array($rs2)){
                    echo
                             "<center><h1>Ticket:</h1>"
                            . "<h3>Id:  <b>$row[id]</b><br>Name:  <b>$row[name]</b><br>Event Name:  <b>$row[event]</b><br>Date & Venue:  <b>$row[din]</b></h3><br>"
                            . "<button type='button' class='btn btn-success' onClick='window.print()'>Print Ticket</button></center>";
                }
            }
            
            else{
                echo "error1".  mysql_error();
            }
        }
        else{
            echo " This User is not registerd with us.";
        }
        }
        else{
            echo "error2";
        }
        ?>
                </div></section>
    </body>
</html>