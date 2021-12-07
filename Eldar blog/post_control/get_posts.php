<?php 
   require "../blocks/connect.php";
   
   $sql = "SELECT * FROM posts ORDER BY timestamp desc limit 3 "; 
   $result = $mysql->query($sql);
   $sqlall= "SELECT * FROM posts ORDER BY timestamp desc";
   $resultall = $mysql->query($sqlall);
      
   $i = 0;
      
   if ($result->num_rows > 0) {  
     
       $idarray= array();
       while($row = $result->fetch_assoc()) {
           echo "<br>";  
              
           array_push($idarray,$row['id']); 
       } 
   }
  
   ?>