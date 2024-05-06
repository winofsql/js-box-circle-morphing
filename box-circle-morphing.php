<?php 


?>
<!DOCTYPE html>
<html>
<head>
<title>HTML Input Test</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css">

<style>
#my_box_radius { 
  width:400px;
  height:400px;
  
  transition: all 2s ease;

  border:20px #000 solid;

  background-image:url("sample.jpg");
  background-size: 800px;
  
} 
</style>

<script>

function action_box_circle() { 

  var obj = document.getElementById("my_box_radius"); 
  obj.style.borderRadius = "210px"; 
} 

function action_circle_box() { 

  var obj = document.getElementById("my_box_radius"); 
  obj.style.borderRadius = "0px"; 
} 

</script>

</head>
<body>
<h1 class="alert alert-primary">四角形 <=> 円 のモーフィングアニメーション</h1>

<div id="main" class="m-4">

  <input class="btn btn-primary me-4" type="button" value="○ へ" onclick="action_box_circle();"> 
  <input class="btn btn-primary" type="button" value="□ へ" onclick="action_circle_box();"> 
  
  <div class="mt-4" id="my_box_radius"></div></div>

</div>

</body>
</html>



<?//php phpinfo() ?>