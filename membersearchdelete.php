<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta name="description" content="Managing Software Projects"/>
        <meta name="keywords" content="HTML, CSS, Grocery, MRM, Project"/>
        <meta name="author" content="Faiz Syed Ibrahim 103146075"/>
        <meta name="author" content="Aishwarya Kaggdas 103170236"/>
        <meta name="author" content="Shifat Bin Rahman 103528424"/>
        <meta name="author" content="Vishnuwardhan Gopal 103174555"/>
        <meta name="author" content="Kai Ikeda 103492189"/>

        <link href= "style.css" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&family=Source+Sans+Pro:wght@300&display=swap" rel="stylesheet">

        <title>Goto Gro MRM</title>
    </head>

    <body>  
        <div id="header">
            <div id="titleboxone"></div>
                <div id="titleboxtwo">
                    <h1 id="titleheading">Goto Grocery</h1>
                </div>
            </div>

        <div id="navbarbg">
            <p id="navbartext">
                <a id="whitelink" href="index.php"> Home &nbsp</a> | &nbsp
                <a id="whitelink" href="addmember.php">Add Member</a> | &nbsp
                <a id="whitelink" href="membersearchdelete.php">Member Search/Delete</a> | &nbsp
                <a id="whitelink" href="addsalesrecord.html">Add Sales Record</a> | &nbsp
                <a id="whitelink" href="salesrecordsearch.html">Sales Record Search</a>  
            </p>
        </div>

        <h2>Member Search / Delete Form</h2>
        
        <form method="POST">
        <fieldset>
            <legend class="legendtext"> Member Details &nbsp</legend>
            <p><label for="First_Name">Member Name (First or Last)</label>
            <input type="text" name= "Name_Value" id="Name_Value" required="required" maxlength="25" size="30" pattern="^[a-zA-Z ]+$"/> 
        </fieldset>

        <p>
            <input type="submit" name="Search_Member" value="Search Member" class="button" />
            <input type="submit" name="Delete_Member" value="Delete Member" class="button" />
            <input type="reset" value="Clear" class="button"/>
        </p>

        </form>
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
        echo "<style>#member{
            margin-left: auto; margin-right: auto; border-collapse: collapse; font-family: 'Source Sans Pro', sans-serif; width: 90%;
                }</style>";
        echo "<table id=\"member\" border=\"1\">\n";
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
  
          echo "<tr>\n ";
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

    if(isset($_POST['Delete_Member'])){

        $namevalue = $_POST['Name_Value'];

        $query = "DELETE FROM gotogrom WHERE firstname = '$namevalue' OR lastname = '$namevalue'";

        $result = mysqli_query($conn, $query);
    }


?>
        <footer>
            <p id="footertext">
                 <a id="whitelink">Faiz Syed Ibrahim 103146075</a> / <a id="whitelink">Aishwarya Kaggdas 103170236</a> / <a id="whitelink">Shifat Bin Rahman 103528424</a> <br/>
                 <a id="whitelink">Vishnuwardhan Gopal 103174555</a> / <a id="whitelink">Kai Ikeda 103492189</a>
            </p>
        </footer>
    </body> 
</html>