<html> 

<head> 
    <style> 
    .main { text-align:center; }
		
    .marq { 
        padding-top:30px; 
        padding-bottom:30px; 
    } 
    .geek1 { 
        font-size:100px; 
        font-weight:bold; 
        color:red; 
        padding-bottom:10px; 
    } 
    </style> 
</head>  
  


<body> 

<div class = "main"> 
    <marquee class="marq" bgcolor = "Blue" direction = "left" loop="" > 
        <div class="geek1">Welcome <?php echo $_POST["usname"];?> </div> 
    </marquee> 
</div> 

<?php
echo "My first PHP script!";
?> 

</body> 
</html> 
