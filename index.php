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
                <a id="whitelink" href="membersearchdelete.php">Member Search/Delete</a> 
            </p>
        </div>

        <div>
            <h2>Background</h2>
            <p id="homebody">
                Goto (GotoGro) Inc. is a Hawthorn-based member-owned grocery store. They provide high-quality grocery items to customers in need through delivery.<br/><br/>
                The company used a paper-based register system to write and record the members' information and sales records. However, they have found it difficult to manage the members' expectations and their requirements using that system. They particularly struggled to meet their members' grocery needs as they are not able to gather their member’s requirements in a time-efficient manner. <br/><br/>
                The company required a software application that will assist them in managing their members' records, storing those records, and informing them of their grocery needs in an instant. The implementation of this web-based software system can help them solve all these problems.
            </p>

            <h3>Project Requirements</h3>
            <p id="homebodyp">
                The GotoGro-MRM project is a graphical user application that will manage member grocery order details and sales records. To be able to fulfill the requirements of GotoGro, the software will need to track customer purchases and product stock. <br/><br/>
                This will require a database system which will read and store data from user input from a graphical user interface for data input. The software will have to contain multiple databases, one for storing purchases and sales, and another that will record member details. The graphical interface will allow the user to add, search, edit, and delete both member records and sale records.<br/><br/>
                The software will also be able to generate reports of the data that can be converted into a CSV format to easily identify how much stock of each item will be needed based on demand.
            </p>
            <img src="grocerystore.jpeg" id="groceryimage" />
        </div>

		<footer>
            <p id="footertext">
			     <a id="whitelink">Faiz Syed Ibrahim 103146075</a> / <a id="whitelink">Aishwarya Kaggdas 103170236</a> / <a id="whitelink">Shifat Bin Rahman 103528424</a> <br/>
                 <a id="whitelink">Vishnuwardhan Gopal 103174555</a> / <a id="whitelink">Kai Ikeda 103492189</a>
            </p>
        </footer>
    </body> 
</html>