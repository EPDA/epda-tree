
<?PHP
$name = "Yuan Yin";
$email = "yuanyin1119@gmail.com";
$day = date("D, d M Y");

?>
<!DOCTYPE html>
<html>
  <head>
  	<meta charset=utf-8>
  	<title>PHP Basics at Treehouse</title>
  	<link href="css/style.css" rel="stylesheet" />
  </head>
  
  <body>
    <div id="wrap">
        <section class="sidebar text-center">
          <div class="avatar">
            <img src="img/logo.png" alt="Alt For Image">
          </div>
          <h1><?PHP echo $name ?></h1>
          <p>Contact:<br />
          <a href="mailto:"><?PHP echo $email?></a></p>
          <hr />
          <ul class="social">
            <li><a href=""><span class="icon facebook"></span></a></li>
          </ul>
          <hr />
          <p>Today: <?PHP echo $day?></p>		  
        </section>
        <section class="main">
          <h1>My First PHP Page</h1>
    
          <h2>Unit Conversion</h2>
		  <?php include 'inc/units.php'?>
          <hr />
    
          <h2>Daily Exercise</h2>
		  <?PHP include 'inc/excercise.php'?>
        </section>
    </div>
    <section class="footer text-center">
      &copy; <?PHP echo date("Y")." "."$name"." last modified: ".date("F d Y H:i:s",getlastmod())."."?> </section>
  </body>
</html>