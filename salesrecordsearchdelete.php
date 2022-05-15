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
                <a id="whitelink" href="index.php"> Home &nbsp;</a> | &nbsp;
                <a id="whitelink" href="addmember.php">Add Member &nbsp;</a> | &nbsp;
                <a id="whitelink" href="membersearchdelete.php">Member Search/Delete &nbsp;</a> | &nbsp;
                <a id="whitelink" href="addsalesrecord.php">Add Sales Record &nbsp;</a> | &nbsp;
                <a id="whitelink" href="salesrecordsearchdelete.php">Sales Record Search/Delete </a> 
            </p>
        </div>

        <h2>Sales Record Search Form</h2>


        <form method="post">
        <fieldset>
            <legend class="legendtext"> Member and Sales Details &nbsp</legend>
            <p><label for="Member_ID">Member ID</label>
            <input type="text" name= "Member_ID" id="Member_ID" required="required" size="10" maxlength="5" pattern="\d{5}" />
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
            <label for="Sales_ID">Sales ID</label>
            <input type="text" name= "Sales_ID" id="Sales_ID" required="required" maxlength="6" size="10" pattern="\d{6}"  /></p>    
        </fieldset>

         <fieldset>
            <legend class="legendtext">Time &nbsp</legend>
            <p><label for="Date">Date : </label>
             <input type="date" id="Date" name="Date"></p>
             <p><label for="Day">Day : </label>
            <input type="text" name= "Day" id="Day" required="required" maxlength="20" size="10" pattern="^[a-zA-Z ]+$"/></p>

        </fieldset>


        <p>
            <input type="submit" name="Search_Sales" value="Search Sales Record" class="button" />
            <input type="submit" name="Delete_Sales" value="Delete Sales Record" class="button" />
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

    if(isset($_POST['Search_Sales']))
    {

        $salesid = $_POST['Sales_ID'];
        $memberid = $_POST['Member_ID'];
        $purch_date = $_POST['Date'];
        $purchday = $_POST['Day'];

        $query = "SELECT sales_id, member_id, product_id, productname, quantity, unitprice, total, purch_date, purchday from gotogros 
        WHERE sales_id  = '$salesid' AND
        member_id = '$memberid' AND
        purch_date = '$purch_date' AND
        purchday = '$purchday' AND
        ";

        $result = mysqli_query($conn, $query);

        
        if(!$result) {
            echo "<p>Something is wrong with ", $query, "</p>";
        } else {
        echo "<style>#member{
            margin-left: auto; margin-right: auto; border-collapse: collapse; font-family: 'Source Sans Pro', sans-serif; width: 90%;
                }</style>";
        echo "<table id=\"member\" border=\"1\">\n";
        echo "<tr>\n "
          ."<th scope=\"col\">Sales ID</th>\n"
          ."<th scope=\"col\">Member ID</th>\n"
          ."<th scope=\"col\">Product ID</th>\n"
          ."<th scope=\"col\">Product Name</th>\n"
          ."<th scope=\"col\">Quantity</th>\n"
          ."<th scope=\"col\">Unit Price</th>\n"
          ."<th scope=\"col\">Total</th>\n"
          ."<th scope=\"col\">Purchase Date</th>\n"
          ."<th scope=\"col\">Purchase Day</th>\n"
          ."</tr>\n ";
          
      while ($row = mysqli_fetch_assoc($result)){
  
          echo "<tr>\n ";
          echo "<td>",$row["sales_id"],"</td>\n ";
          echo "<td>",$row["member_id"],"</td>\n ";
          echo "<td>",$row["product_id"],"</td>\n ";
          echo "<td>",$row["productname"],"</td>\n ";
          echo "<td>",$row["quantity"],"</td>\n ";
          echo "<td>",$row["unitprice"],"</td>\n ";
          echo "<td>",$row["total"],"</td>\n ";
          echo "<td>",$row["purch_date"],"</td>\n ";
          echo "<td>",$row["purchday"],"</td>\n ";
          echo "</tr>\n ";
      }
      echo "</table>\n ";
        }
    }

?>

        <footer>
            <p id="footertext">
                 <a id="whitelink">Faiz Syed Ibrahim 103146075</a> / <a id="whitelink">Aishwarya Kaggdas 103170236</a> / <a id="whitelink">Shifat Bin Rahman 103528424</a> 
                 <br/>
                 <a id="whitelink">Vishnuwardhan Gopal 103174555</a> / <a id="whitelink">Kai Ikeda 103492189</a>
            </p>
        </footer>
    </body> 
</html>

        