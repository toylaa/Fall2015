<?php
    
   
if (isset($_POST['query'])) {
    

    mysql_connect("localhost", "root", "root");
    mysql_select_db("exercises")  

   $query = $_POST['query'];
   
   $SQl = mysql_query("SELECT * FROM exercises WHERE ex_name LIKE '%{$query} %'";
    $results= array();
    
    while($row = mysql_fetch_assoc[$sql]) {
        $results[] = $row['ex_name'];
        
    }
}

?>
