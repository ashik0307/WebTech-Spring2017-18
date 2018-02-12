<!DOCTYPE html>
<html>
  <head> 
    <title>lab test</title> 
  </head>

   <body>
      <?php 
	  $x="hello"; 
	  $y='world';
	  echo $x;
	  echo $y;
	  
	  echo "<br>";
	  
	  
	  
	  for ($z=1; $z<=15;$z++) {
		  echo "<h3>" .$z."." . "lab test= " .$x. "</h3>";
	  }
	  
	  $n=2;
	  while ($n<=5) {
		  echo "lab test= $n <br>";
		  $n++;
	  }
	  
	  
	  
	  		  $color= array ( "red", "green", "blue") ;
			   foreach ($color as $value) {
				   echo "$value <br>";
			   }
			   
	   
		$labtest = array ("mis","em","nrs" );
		$arrlength = count($labtest);
		 for($m=0; $m< $labtest; $m++) {
			 echo $labtest[$m];
			 echo "<br>";
		 }
	  
	  ?>
	</body>
</html>	