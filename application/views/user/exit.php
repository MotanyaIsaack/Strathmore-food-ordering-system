<!DOCTYPE html>
<html lang="en">

<head>
    <title> Logout </title>
        <link rel="shortcut icon" href="<?php echo base_url()?>assets/vendor/images/auth/favicon.png" />
        <img src="<?php echo base_url()?>/assets/images/chef1.jpg" alt="image"> 
        <link href="https://fonts.googleapis.com/css?family=Charmonman" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url()?>assets/css/materialize.css">


    <style>
        img
        {
            margin-left: 300px;
        }

        h1 
        {
            color: maroon;
            margin-left: 240px;
            font-family: 'Charmonman', cursive;
            font-size: 60px;
        } 
        body
        {
            background-color:pink;
        }
        #returnToLogin{
            font-size: 20px;
            
        }
        #returnToLogin:hover{
            border-bottom: 3px solid white;
        }
        
    </style>
</head>
<body>
    <h1> Thank you for using our application! </h1>
    <div class="row">
        <div class="col s12 m12 l12 center-align" style="padding: 30px;">
            <a href="<?php echo base_url()?>Users/view" id="returnToLogin">Return to Login</a>
        </div>
    </div>
</html>