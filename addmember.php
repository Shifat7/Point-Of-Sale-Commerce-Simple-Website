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

        <h2>Add Member Form</h2>
        
        <form action="includes/member.php" method="POST">
        <fieldset>
            <legend class="legendtext"> Personal Details &nbsp</legend>
            <p><label for="Member_ID">Member ID</label>
            <input type="text" name= "Member_ID" id="Member_ID" required="required" size="10" maxlength="5" pattern="\d{5}" /></p>
            <p><label for="First_Name">First Name</label>
            <input type="text" name= "First_Name" id="First_Name" required="required" maxlength="25" size="30" pattern="^[a-zA-Z ]+$"/> 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <label for="Last_Name">Last Name</label>
            <input type="text" name= "Last_Name" id="Last_Name" required="required" maxlength="25" size="30" pattern="^[a-zA-Z ]+$" /></p>
            <p><label for="Email_ID">Email Address</label>
            <input type="email" name= "Email_ID" id="Email_ID" required="required" size="30" placeholder="name@example.com" /></p>
        </fieldset>

        <fieldset>
            <legend class="legendtext">Address &nbsp</legend>
            <p><label for="Street_Address">Street Address</label>
            <input type="text" name= "Street_Address" id="Street_Address" required="required" maxlength="40" size="40" /></p>
            <p><label for="Suburb/Town">Suburb/Town</label>
            <input type="text" name= "Suburb/Town" id="Suburb/Town" required="required" maxlength="20" size="20" /></p>
            <p><label for="Postcode">Postcode</label>
            <input type="text" name= "Postcode" id="Postcode" required="required" size="10" maxlength="4" pattern="\d{4}" /></p>
        </fieldset>

        <fieldset>
            <legend class="legendtext">Contact Details &nbsp</legend>
            <p><label for="Phone_Number">Phone Number</label>
            <input type="tel" name= "Phone_Number" id="Phone_Number" required="required" size="20" maxlength="10" pattern="\d{10}" placeholder="(##) ####-####" />
            </p>
            <p><label>Preferred Contact</label><br />
            <input type="radio" name="Preferred_Contact" value="Email" required="required" checked="checked" />Email
            <input type="radio" name="Preferred_Contact" value="Post" required="required" />Post
            <input type="radio" name="Preferred_Contact" value="Phone" required="required" />Phone
        </fieldset>

        <p><input type="submit" value="Add Member" class="button" />
        <input type="reset" value="Clear" class="button"/></p>

        </form>

        <footer>
            <p id="footertext">
                 <a id="whitelink">Faiz Syed Ibrahim 103146075</a> / <a id="whitelink">Aishwarya Kaggdas 103170236</a> / <a id="whitelink">Shifat Bin Rahman 103528424</a> 
                 <br/>
                 <a id="whitelink">Vishnuwardhan Gopal 103174555</a> / <a id="whitelink">Kai Ikeda 103492189</a>
            </p>
        </footer>
    </body> 
</html>