<?php
	include "slideText.html";
?>

<html>

<head>
<style>
	img {
  	    display: block;
  	    margin-left: auto;
  	    margin-right: auto;
	}

	.inline-block{
	    display: inline-block
	}
</style>
</head>
  
<body>

<center>
<h1> 
<font size="48" color="red">122L <font size="48" color="blue">Term Project </font> 
</h1>
  
<img src="https://yt3.ggpht.com/a/AGF-l79iTUpavi-i7LKxvR4exeimm0HXl_xP6lhokw=s900-c-k-c0xffffffff-no-rj-mo" alt="LCOE"  style="width:25%;"> 

<?php
    if(isset($_POST['Submit'])){
	$usname=$_POST["usname"];
    }
?>

<div id="banner">
  <div class="inline-block">
      <img src="https://i.kym-cdn.com/photos/images/original/001/567/318/ba7.gif" alt="PepeD">
  </div>

  <div class="inline-block">
        <form action="userGUI.html">
  	    <label for="usname">Username:</label><br>
  	    <input type="text" name="usname"><br><br>

  	    <label for="psword">Password:</label><br>
  	    <input type="text" name="psword"><br><br>
  	    <input type="submit" value="Submit" name="Submit">
	</form>
  </div>


  <div class="inline-block">
      <img src="https://i.kym-cdn.com/photos/images/original/001/567/318/ba7.gif" alt="PepeD">
  </div>
</div>
</center> 

</body>

</html>

