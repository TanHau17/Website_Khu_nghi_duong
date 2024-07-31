
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Thank you</title>
<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-image {
    background-image: url("farm details photos/seashall5.jpg");
  

  filter: blur(2px);
  -webkit-filter: blur(2px);
  
  
  height: 100%; 
  
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}


.bg-text {
  background-color: rgb(0,0,0); 
  background-color: rgba(0,0,0, 0.4);
  color: white;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
  text-align: center;
}
a:link, a:visited {
  background-color: #333;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: DodgerBlue;
</style>
</head>
<body>

<div class="bg-image"></div>
<?php
echo '<div class="bg-text">
  <h2>ENJOY, YOUR HOLIDAY ARE BOOK WITH US..</h2>
  <h1 style="font-size:55px"><b>THANK YOU!</b></h1>
  <p>IF YOU LIKE THEN TELL OTHERS, IF NOT LIKE THEN TELL US...</p>
  <span><a href="resort.php?cat_name=farm">Want To Book Resort</a></span>&nbsp;&nbsp;&nbsp;
  <span><a href="farm.php?cat_name=farm">Want To Book Farm</a></span>&nbsp;&nbsp;&nbsp;
  <span><a href="homepage.php" >Go To Home Page</a></span>
</div>';
?>

</body>
</html>
