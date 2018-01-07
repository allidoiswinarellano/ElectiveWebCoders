<html>
<head>
    <link rel="stylesheet" type="text/css" href="styl.css">
    <meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="assets/img/favicon.png">
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Get Shit Done Kit by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
	
    <link href="bootstrap3/css/bootstrap.css" rel="stylesheet" />
    <link href="bootstrap3/css/font-awesome.css" rel="stylesheet" />
    
	<link href="assets/css/gsdk.css" rel="stylesheet" />   
    <link href="assets/css/demo.css" rel="stylesheet" /> 

    <!--     Font Awesome     -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>
</head>
<body align="center" style="background-image: url('images/bg.jpg')">
	<div id="navbar-full">
    <div id="navbar">
        <nav class="navbar navbar-default navbar-transparent navbar-fixed-top" role="navigation">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
            <ul class="nav navbar-nav navbar-right">
             <li> <a style="color: black" class="navbar-brand" >Web<i class="glyphicon glyphicon-record"></i>Coders</a></li>

             <li class="dropdown">
                      <a href="#gsdk" class="dropdown-toggle" data-toggle="dropdown">Explore <b class="caret"></b></a>
                      <ul style="text-align: left" class="dropdown-menu">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="../NoesCommerce/index.php">Shop</a></li>
                        <li><a href="showcase.php">Showcase</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="org.php">Organization</a></li>
                        
                      </ul>
                </li>
         </ul>
            </div>
        
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">

                    <li><a style="color: black" href="webcoders.php"><b>HOME</b></a></li>
               </ul>
              
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
	<div style="float: right; margin-top: 200px; margin-right: 200px; text-shadow: 4px 4px white">
		<h1><b>Web<i class="glyphicon glyphicon-record"><b>Coders</i></b></h1>
		<h2>"In Code We Trust"</h2>
	</div>
<div class="container">
<div class="col-md-5">
    <div class="form-area">  
    	<div class="br-10">&nbsp;</div>
    	<div class="br-10">&nbsp;</div>
    	<div class="br-10">&nbsp;</div>
    	<div class="br-10">&nbsp;</div>
        <form role="form">
        <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;">Contact Us</h3>
    				<div class="form-group">
						<input type="text" class="form-control " id="name" name="name" placeholder="Name" required>
					</div>
					<div class="br-10">&nbsp;</div>
					<div class="form-group">
						<input type="text" class="form-control " id="email" name="email" placeholder="Email" required>
					</div>
					<div class="br-10">&nbsp;</div>
					<div class="form-group">
						<input type="text" class="form-control " id="mobile" name="mobile" placeholder="Mobile Number" required>
					</div>
					<div class="br-10">&nbsp;</div>
					<div class="form-group">
						<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
					</div>
					<div class="br-10">&nbsp;</div>
                    <div class="form-group">
                    <textarea style="height:200px" class="form-control" type="textarea" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>               
                    </div>
         
					<div class="br-10">&nbsp;</div> 
       <div class="br-10">&nbsp;</div>   
        <a href="webcoders.php" type="button" id="submit" name="submit" class="button">Submit</a>
        </form>
    </div>
</div>
</div>
<script src="js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>

<script type="text/javascript">
    $().ready(function(){
        $('[rel="tooltip"]').tooltip();

    });

    function rotateCard(btn){
        var $card = $(btn).closest('.card-container');
        console.log($card);
        if($card.hasClass('hover')){
            $card.removeClass('hover');
        } else {
            $card.addClass('hover');
        }
    }
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46172202-4', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>