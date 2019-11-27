
<?php
 /*function updatesCarPlace(argument) 
    {
      $('[type="checkbox"]').bootstrapSwitch();
    }*/
function updateCarPlace(placeId)
        {
            $.ajax({
                type: "POST",
                url: "make_place_free.php",
                data: {
                    place_id: placeId
                }
            });
        }
// Database Connection//
	$username = "root";
	$server = "127.0.0.1";
   $dbpass = '';
   $database = 'mydb';
   $conn = mysql_connect($server, $username, $dbpass);
   if(! $conn )
   {
     die('Could not connect: ' . mysql_error());
   }
   echo 'Connected successfully';
   
   /*$sql = "SELECT * FROM car_detail";
    $result = mysql_query($sql, $conn);
    $count = mysql_num_rows($result);
    if($count > 0)
    {
        $i = 1;
        while ($row = mysql_fetch_array($result))
        {
            ?>
            <div>
                <font size="5"> P<?php echo $i; ?></font>&nbsp;&nbsp;&nbsp;&nbsp;
                <?php
                    if($row["car_no"] != '0') {
                        ?>
                        <input class="form-control" onchange="updateCarPlace(<?php echo $i; ?>)" type="checkbox" checked>
                        <?php
                    }
                    else
                    {
                        ?>
                        <input class="form-control" onchange="updateCarPlace(<?php echo $i; ?>)" type="checkbox">
                        <?php
                    }
                ?>
            </div>
            <?php
            $i++;
        }
    }
    mysql_close($conn);*/

   // Recieve Data from Form
   //$name = $_POST["vn1"]+$_POST["vn2"]+$_POST["vn3"]+$_POST["vn4"] ;
   $fname= $_POST["vn1"];
   $lname = "";
   $email = "";
   $password = ""; 
   
 /* if(isset($_POST['Submit'])){
      
	  $name = $_POST['vn1']+$_POST['vn2']+$_POST['vn3']+$_POST['vn4'] ;
	  echo $name ; */
	  
	  if(isset($_POST["vt"]))
         {
           $type = $_POST["vt"];
			echo $type;
         }
		 
      //$brand = $_POST["brands"]; 
	  
  //}
     
// Enter Data into Database

   $sql = "INSERT INTO car_detail (First_Name, Last_Name, Email_id, Password) VALUES ('$fname', '$lname', '$email', '$password')";
  
   $db_found = mysql_select_db($database);
   $retval = mysql_query($sql, $conn);





  if (!$retval)
   {
      die('Could not enter data: ' . mysql_error());
   }
      echo "Entered data successfully\n";
      mysql_close($conn);
		  

?>