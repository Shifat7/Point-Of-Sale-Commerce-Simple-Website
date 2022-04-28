<?php
    include_once 'includes/dbs.php';

    $conn = @mysqli_connect($dbServername,
    $dbUsername,
    $dbPassword,
    $dbName
    );

    if(!$conn){
    echo "<p>Database connection failure</p>";
    }

    if(isset($_POST['Search_Member']))
    {
        $namevalue = $_POST['Name_Value'];
 

        $query = "SELECT id, firstname, lastname, email, staddress, subtown, postcode, phoneno, prefcon from gotogrom 
        WHERE CONCAT(`firstname`, `lastname`, `email`, `staddress`, `subtown`, `postcode`, `phoneno`, `prefcon`) LIKE '%$namevalue%'";

        $result = mysqli_query($conn, $query);

        
        if(!$result) {
            echo "<p>Something is wrong with ", $query, "</p>";
        } else {
        echo "<table border=\"1\">\n";
        echo "<tr>\n "
          ."<th scope=\"col\">ID</th>\n"
          ."<th scope=\"col\">First Name</th>\n"
          ."<th scope=\"col\">Last Name</th>\n"
          ."<th scope=\"col\">Email</th>\n"
          ."<th scope=\"col\">Street Address</th>\n"
          ."<th scope=\"col\">Suburb/Town</th>\n"
          ."<th scope=\"col\">Postcode</th>\n"
          ."<th scope=\"col\">Phone No</th>\n"
          ."<th scope=\"col\">Preferred Contact</th>\n"
          ."</tr>\n ";
          
      while ($row = mysqli_fetch_assoc($result)){
  
          echo "<tr>\n ";?>
          <td><input type='checkbox' name='check[]' value="<?php echo $row["order_id"]?>"></td>
          <?php
          echo "<td>",$row["id"],"</td>\n ";
          echo "<td>",$row["firstname"],"</td>\n ";
          echo "<td>",$row["lastname"],"</td>\n ";
          echo "<td>",$row["email"],"</td>\n ";
          echo "<td>",$row["staddress"],"</td>\n ";
          echo "<td>",$row["subtown"],"</td>\n ";
          echo "<td>",$row["postcode"],"</td>\n ";
          echo "<td>",$row["phoneno"],"</td>\n ";
          echo "<td>",$row["prefcon"],"</td>\n ";
          echo "</tr>\n ";
      }
      echo "</table>\n ";
  
        }
    }

?>