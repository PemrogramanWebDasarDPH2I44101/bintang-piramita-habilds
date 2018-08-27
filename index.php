 <!DOCTYPE html>
 <html lang="en">

<head>
     <meta charset="UTF-8">
     <title>TITLE</title>
     <meta name="description" content="DESCRIPTION">
    <link rel="stylesheet" href="PATH">

     <!--[if lt IE 9]>
       <script src = "http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
     <![endif]-->
 </head>

 <body>
 <?php
 $angka = 3;
 for($i=0;$i<=$angka;$i++){  
		for($j=$angka-$i;$j>=1;$j--){  
		echo "* ";  
		}  
	echo "<br>";  
	}
 ?>
 </body>

 </html>
