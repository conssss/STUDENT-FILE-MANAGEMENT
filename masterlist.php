<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Masterlist</title>
        <link rel="stylesheet" type="text/css" href="home.css">
    </head>

    <body>
        <div class="container">
            <div class="navigator">

                <ul>
                    <li>
                        <a href="#"><br>
                        <span class="icon"><i class="fa fa-files-o" aria-hidden="true"></i></span>
                        <span class="title"><h1 style="color:white;font-size:40px;">PSU Files</h1></span>

                    </a>
                    </li>
                    <br><br>
                    <li>
                        <a href="home.html">
                        <span class="icon"><i class="fa fa-tachometer" aria-hidden="true"></i></span>
                        <span class="title"><h2 style="color:white;font-size:30px;">Dashboard</h2></span>
                    </a>
                    </li><br>
                    <li>
                        <a href="masterlist.php">
                        <span class="icon"><i class="fa fa-book" aria-hidden="true"></i></span>
                        <span class="title"><h2 style="color:white;font-size:30px;">Masterlist</h2></span>
                    </a>
                    </li><br>
                    <li>
                        <a href="index.php">
                        <span class="icon"><i class="fa fa-files-o" aria-hidden="true"></i></span>
                        <span class="title"><h2 style="color:white;font-size:30px;">Manage Files</h2></span>
                    </a>
                    </li><br>
                    <li>
                        <a href="login.html">
                        <span class="icon"><i class="fa fa-sign-out" aria-hidden="true"></i></span>
                        <span class="title"><h2 style="color:white;font-size:30px;">Sign Out</h2></span>
                    </a>
                    </li>
                    </li>
                </ul>
            </div> 

            <div class="main active">
                <div class="topbar">
                     <div class="toggle" onclick="toggleMenu();"></div>
                    <div class="search">
                       
                    </div>
                        <div class="user">
                           <img src="Pangasinan_State_University_logo.png">
                    </div>
                </div>
        <style>


        body{
            background: #ecf0f1;
            font-family: 'source sans pro';
            font-weight: 400;
        }
        h1{
            font-size: 45px;
            color: #2c97de;
            text-align: center;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            color: #2c97de;
            font-family: monospace;
            font-size: 15px;
            text-align: center;
        }

        th {
            background-color: #2c97de;
            color: white;
        }

        tr:nth-child(even){ background-color: #ededed}
        .accordionMenu{
            width: 100%;
            margin: 0 auto;
        }
        .accordionMenu input[type=radio]{
            display: none;
        }
        .accordionMenu label{
            display: block;
            height: 50px;
            line-height: 47px;
            padding: 0 25px 0 10px;
            background: #2c97de;
            font-size: 18px;
            color: #fff;
            position: relative;
            cursor: pointer;
            border-bottom: 1px solid #e6e6e6;
        }
        /*design and hide contents*/
    .accordionMenu label::after{
    display: block;
    content: "";
    width: 0;
    height: 0;
    border-style: solid;
    border-width: 5px 0 5px 10px;
    border-color: transparent transparent transparent #ffffff;
    position: absolute;
    right: 10px;
    top: 20px;
    z-index: 10;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -ms-transition:all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}
.accordionMenu label::before{
    display: block;
    content: "";
    width: 0;
    height: 0;
    border-style: solid;
    border-width: 5px 0 5px 10px;
    border-color: transparent transparent transparent #ffffff;
    position: absolute;
    right: 10px;
    top: 20px;
    z-index: 10;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -ms-transition:all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}
.accordionMenu .content{
    max-height: 0;
    height: 0;
    overflow: hidden;
    -webkit-transition: all 2s ease-in-out;
    -moz-transition: all 2s ease-in-out;
    -o-transition: all 2s ease-in-out;
    transition: all 2s ease-in-out;
}
.accordionMenu .content .inner{
    font-size: 1.2rem;
    text-align: center;
    color: #2c97de;
    line-height: 1.5;
    background: white;
    padding: 20px 10px;
}

.accordionMenu input[type=radio]:checked + label:after{
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
}

/*animation*/
.accordionMenu input[type=radio]:checked + label + .content{
    max-height: 2000000px;
    height: auto; 
}
    </style>
    </head>
    <body> 
        <h1>MASTERLIST</h1>
        <div class="accordionMenu">
            
        <!-- Course menu  -->
        <input type="radio" name="trg1" id="acc6" checked="checked">
            <label for="acc6">Courses</label>
            <div class="content">
                <div class="inner">
                     <table>
                         
                         <tr>
                            <th>Course Code</th>
                            <th>Course Name</th>
                            <th>No. of Block</th>
                        </tr>
                        <tr>
                            <th>ABEL</th>
                            <td>Bachelor of Arts in English Language</td>
                            <td>2</td>
                            
                            
                        </tr>
                        <tr>
                            <th>BSMATH</th>
                            <td>Bachelor of Science in Mathematics</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <th>BSIT</th>
                            <td>Bachelor of Science in Information Technology</td>
                            <td>2</td>
                        </tr>
                        
                </table>    
                </div>
            </div>
            <!-- 1st menu  -->
            <input type="radio" name="trg1" id="acc1">
            <label for="acc1">1st Year</label>
            <div class="content">
                <div class="inner">
                    

                     <table>
                         <tr><th>ABEL A</th></tr>
                         <tr>
                            <th>Year</th>   
                            <th>Course</th>
                            <th>Block</th>
                            <th>Student ID </th>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>Age</th>
                            <th>Sex</th>
                            <th>Contact No</th>
                            <th>Email</th>
                            
                            
                        </tr>
            <?php
                 $conn = mysqli_connect("localhost", "root", "", "fms");
                 $sql = "SELECT * FROM student WHERE Year = '1' AND Course= 'ABEL' AND Block='A' ORDER BY Lastname ASC ";
                 /*$sql = "SELECT * FROM student WHERE Year = '1';";*/
                 $result = $conn->query($sql);

                     if ($result->num_rows > 0) {
                          while ($row = $result-> fetch_assoc()) {
                            echo "<tr><td>". $row["Year"] . "</td><td>". $row["Course"] . "</td><td>". $row["Block"] . "</td><td>". $row["ID"] . "</td><td>" . $row["Lastname"] . "</td><td>". $row["Firstname"] . "</td><td>". $row["Age"] . "</td><td>". $row["Gender"] . "</td><td>". $row["Contactno"] . "</td><td>". $row["Email"] . "</td></tr>";                         
                     } 
                    }
                    else {  echo "No Results";}

                    $conn->close();
            ?>
                </table>  

                <br><table>
                         <tr><th>ABEL B</th></tr>
                         <tr>
                            <th>Year</th>   
                            <th>Course</th>
                            <th>Block</th>
                            <th>Student ID </th>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>Age</th>
                            <th>Sex</th>
                            <th>Contact No</th>
                            <th>Email</th>
                            
                            
                        </tr>
            <?php
                 $conn = mysqli_connect("localhost", "root", "", "fms");
                 $sql = "SELECT * FROM student WHERE Year = '1' AND Course= 'ABEL' AND Block='B' ORDER BY Lastname ASC";
                 /*$sql = "SELECT * FROM student WHERE Year = '1';";*/
                 $result = $conn->query($sql);

                     if ($result->num_rows > 0) {
                          while ($row = $result-> fetch_assoc()) {
                            echo "<tr><td>". $row["Year"] . "</td><td>". $row["Course"] . "</td><td>". $row["Block"] . "</td><td>". $row["ID"] . "</td><td>" . $row["Lastname"] . "</td><td>". $row["Firstname"] . "</td><td>". $row["Age"] . "</td><td>". $row["Gender"] . "</td><td>". $row["Contactno"] . "</td><td>". $row["Email"] . "</td></tr>";                         
                     } 
                    }
                    else {  echo "No Results";}

                    $conn->close();
            ?>
                </table>  

                <br><table>
                         <tr><th>BSMATH A</th></tr>
                         <tr>
                            <th>Year</th>   
                            <th>Course</th>
                            <th>Block</th>
                            <th>Student ID </th>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>Age</th>
                            <th>Sex</th>
                            <th>Contact No</th>
                            <th>Email</th>
                            
                            
                        </tr>
            <?php
                 $conn = mysqli_connect("localhost", "root", "", "fms");
                 $sql = "SELECT * FROM student WHERE Year = '1' AND Course= 'BSMATH' AND Block='A' ORDER BY Lastname ASC";
                 /*$sql = "SELECT * FROM student WHERE Year = '1';";*/
                 $result = $conn->query($sql);

                     if ($result->num_rows > 0) {
                          while ($row = $result-> fetch_assoc()) {
                            echo "<tr><td>". $row["Year"] . "</td><td>". $row["Course"] . "</td><td>". $row["Block"] . "</td><td>". $row["ID"] . "</td><td>" . $row["Lastname"] . "</td><td>". $row["Firstname"] . "</td><td>". $row["Age"] . "</td><td>". $row["Gender"] . "</td><td>". $row["Contactno"] . "</td><td>". $row["Email"] . "</td></tr>";                         
                     } 
                    }
                    else {  echo "No Results";}

                    $conn->close();
            ?>
                </table>  

                <br><table>
                         <tr><th>BSMATH B</th></tr>
                         <tr>
                            <th>Year</th>   
                            <th>Course</th>
                            <th>Block</th>
                            <th>Student ID </th>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>Age</th>
                            <th>Sex</th>
                            <th>Contact No</th>
                            <th>Email</th>
                            
                            
                        </tr>
            <?php
                 $conn = mysqli_connect("localhost", "root", "", "fms");
                 $sql = "SELECT * FROM student WHERE Year = '1' AND Course= 'BSMATH' AND Block='B' ORDER BY Lastname ASC";
                 /*$sql = "SELECT * FROM student WHERE Year = '1';";*/
                 $result = $conn->query($sql);

                     if ($result->num_rows > 0) {
                          while ($row = $result-> fetch_assoc()) {
                            echo "<tr><td>". $row["Year"] . "</td><td>". $row["Course"] . "</td><td>". $row["Block"] . "</td><td>". $row["ID"] . "</td><td>" . $row["Lastname"] . "</td><td>". $row["Firstname"] . "</td><td>". $row["Age"] . "</td><td>". $row["Gender"] . "</td><td>". $row["Contactno"] . "</td><td>". $row["Email"] . "</td></tr>";                         
                     } 
                    }
                    else {  echo "No Results";}

                    $conn->close();
            ?>
                </table>  

                <br><table>
                         <tr><th>BSIT A</th></tr>
                         <tr>
                            <th>Year</th>   
                            <th>Course</th>
                            <th>Block</th>
                            <th>Student ID </th>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>Age</th>
                            <th>Sex</th>
                            <th>Contact No</th>
                            <th>Email</th>
                            
                            
                        </tr>
            <?php
                 $conn = mysqli_connect("localhost", "root", "", "fms");
                 $sql = "SELECT * FROM student WHERE Year = '1' AND Course= 'BSIT' AND Block='A' ORDER BY Lastname ASC";
                 /*$sql = "SELECT * FROM student WHERE Year = '1';";*/
                 $result = $conn->query($sql);

                     if ($result->num_rows > 0) {
                          while ($row = $result-> fetch_assoc()) {
                            echo "<tr><td>". $row["Year"] . "</td><td>". $row["Course"] . "</td><td>". $row["Block"] . "</td><td>". $row["ID"] . "</td><td>" . $row["Lastname"] . "</td><td>". $row["Firstname"] . "</td><td>". $row["Age"] . "</td><td>". $row["Gender"] . "</td><td>". $row["Contactno"] . "</td><td>". $row["Email"] . "</td></tr>";                         
                     } 
                    }
                    else {  echo "No Results";}

                    $conn->close();
            ?>
                </table>  

                <br><table>
                         <tr><th>BSIT B</th></tr>
                         <tr>
                            <th>Year</th>   
                            <th>Course</th>
                            <th>Block</th>
                            <th>Student ID </th>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>Age</th>
                            <th>Sex</th>
                            <th>Contact No</th>
                            <th>Email</th>
                            
                            
                        </tr>
            <?php
                 $conn = mysqli_connect("localhost", "root", "", "fms");
                 $sql = "SELECT * FROM student WHERE Year = '1' AND Course= 'BSIT' AND Block='B' ORDER BY Lastname ASC";
                 /*$sql = "SELECT * FROM student WHERE Year = '1';";*/
                 $result = $conn->query($sql);

                     if ($result->num_rows > 0) {
                          while ($row = $result-> fetch_assoc()) {
                            echo "<tr><td>". $row["Year"] . "</td><td>". $row["Course"] . "</td><td>". $row["Block"] . "</td><td>". $row["ID"] . "</td><td>" . $row["Lastname"] . "</td><td>". $row["Firstname"] . "</td><td>". $row["Age"] . "</td><td>". $row["Gender"] . "</td><td>". $row["Contactno"] . "</td><td>". $row["Email"] . "</td></tr>";                         
                     } 
                    }
                    else {  echo "No Results";}

                    $conn->close();
            ?>
                </table>  
        
                </div>
            </div>
            <!-- 2nd menu -->
            <input type="radio" name="trg1" id="acc2">
            <label for="acc2">2nd Year</label>
            <div class="content">
                <div class="inner">
               
                <table>
                         <tr><th>ABEL A</th></tr>
                         <tr>
                            <th>Year</th>   
                            <th>Course</th>
                            <th>Block</th>
                            <th>Student ID </th>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>Age</th>
                            <th>Sex</th>
                            <th>Contact No</th>
                            <th>Email</th>
                            
                            
                        </tr>
            <?php
                 $conn = mysqli_connect("localhost", "root", "", "fms");
                 $sql = "SELECT * FROM student WHERE Year = '2' AND Course= 'ABEL' AND Block='A' ORDER BY Lastname ASC ";
                 /*$sql = "SELECT * FROM student WHERE Year = '1';";*/
                 $result = $conn->query($sql);

                     if ($result->num_rows > 0) {
                          while ($row = $result-> fetch_assoc()) {
                            echo "<tr><td>". $row["Year"] . "</td><td>". $row["Course"] . "</td><td>". $row["Block"] . "</td><td>". $row["ID"] . "</td><td>" . $row["Lastname"] . "</td><td>". $row["Firstname"] . "</td><td>". $row["Age"] . "</td><td>". $row["Gender"] . "</td><td>". $row["Contactno"] . "</td><td>". $row["Email"] . "</td></tr>";                         
                     } 
                    }
                    else {  echo "No Results";}

                    $conn->close();
            ?>
                </table>  

                <br><table>
                         <tr><th>ABEL B</th></tr>
                         <tr>
                            <th>Year</th>   
                            <th>Course</th>
                            <th>Block</th>
                            <th>Student ID </th>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>Age</th>
                            <th>Sex</th>
                            <th>Contact No</th>
                            <th>Email</th>
                            
                            
                        </tr>
            <?php
                 $conn = mysqli_connect("localhost", "root", "", "fms");
                 $sql = "SELECT * FROM student WHERE Year = '2' AND Course= 'ABEL' AND Block='B' ORDER BY Lastname ASC";
                 /*$sql = "SELECT * FROM student WHERE Year = '1';";*/
                 $result = $conn->query($sql);

                     if ($result->num_rows > 0) {
                          while ($row = $result-> fetch_assoc()) {
                            echo "<tr><td>". $row["Year"] . "</td><td>". $row["Course"] . "</td><td>". $row["Block"] . "</td><td>". $row["ID"] . "</td><td>" . $row["Lastname"] . "</td><td>". $row["Firstname"] . "</td><td>". $row["Age"] . "</td><td>". $row["Gender"] . "</td><td>". $row["Contactno"] . "</td><td>". $row["Email"] . "</td></tr>";                         
                     } 
                    }
                    else {  echo "No Results";}

                    $conn->close();
            ?>
                </table>  

                <br><table>
                         <tr><th>BSMATH A</th></tr>
                         <tr>
                            <th>Year</th>   
                            <th>Course</th>
                            <th>Block</th>
                            <th>Student ID </th>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>Age</th>
                            <th>Sex</th>
                            <th>Contact No</th>
                            <th>Email</th>
                            
                            
                        </tr>
            <?php
                 $conn = mysqli_connect("localhost", "root", "", "fms");
                 $sql = "SELECT * FROM student WHERE Year = '2' AND Course= 'BSMATH' AND Block='A' ORDER BY Lastname ASC";
                 /*$sql = "SELECT * FROM student WHERE Year = '1';";*/
                 $result = $conn->query($sql);

                     if ($result->num_rows > 0) {
                          while ($row = $result-> fetch_assoc()) {
                            echo "<tr><td>". $row["Year"] . "</td><td>". $row["Course"] . "</td><td>". $row["Block"] . "</td><td>". $row["ID"] . "</td><td>" . $row["Lastname"] . "</td><td>". $row["Firstname"] . "</td><td>". $row["Age"] . "</td><td>". $row["Gender"] . "</td><td>". $row["Contactno"] . "</td><td>". $row["Email"] . "</td></tr>";                         
                     } 
                    }
                    else {  echo "No Results";}

                    $conn->close();
            ?>
                </table>  

                <br><table>
                         <tr><th>BSMATH B</th></tr>
                         <tr>
                            <th>Year</th>   
                            <th>Course</th>
                            <th>Block</th>
                            <th>Student ID </th>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>Age</th>
                            <th>Sex</th>
                            <th>Contact No</th>
                            <th>Email</th>
                            
                            
                        </tr>
            <?php
                 $conn = mysqli_connect("localhost", "root", "", "fms");
                 $sql = "SELECT * FROM student WHERE Year = '2' AND Course= 'BSMATH' AND Block='B' ORDER BY Lastname ASC";
                 /*$sql = "SELECT * FROM student WHERE Year = '1';";*/
                 $result = $conn->query($sql);

                     if ($result->num_rows > 0) {
                          while ($row = $result-> fetch_assoc()) {
                            echo "<tr><td>". $row["Year"] . "</td><td>". $row["Course"] . "</td><td>". $row["Block"] . "</td><td>". $row["ID"] . "</td><td>" . $row["Lastname"] . "</td><td>". $row["Firstname"] . "</td><td>". $row["Age"] . "</td><td>". $row["Gender"] . "</td><td>". $row["Contactno"] . "</td><td>". $row["Email"] . "</td></tr>";                         
                     } 
                    }
                    else {  echo "No Results";}

                    $conn->close();
            ?>
                </table>  

                <br><table>
                         <tr><th>BSIT A</th></tr>
                         <tr>
                            <th>Year</th>   
                            <th>Course</th>
                            <th>Block</th>
                            <th>Student ID </th>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>Age</th>
                            <th>Sex</th>
                            <th>Contact No</th>
                            <th>Email</th>
                            
                            
                        </tr>
            <?php
                 $conn = mysqli_connect("localhost", "root", "", "fms");
                 $sql = "SELECT * FROM student WHERE Year = '2' AND Course= 'BSIT' AND Block='A' ORDER BY Lastname ASC";
                 /*$sql = "SELECT * FROM student WHERE Year = '1';";*/
                 $result = $conn->query($sql);

                     if ($result->num_rows > 0) {
                          while ($row = $result-> fetch_assoc()) {
                            echo "<tr><td>". $row["Year"] . "</td><td>". $row["Course"] . "</td><td>". $row["Block"] . "</td><td>". $row["ID"] . "</td><td>" . $row["Lastname"] . "</td><td>". $row["Firstname"] . "</td><td>". $row["Age"] . "</td><td>". $row["Gender"] . "</td><td>". $row["Contactno"] . "</td><td>". $row["Email"] . "</td></tr>";                         
                     } 
                    }
                    else {  echo "No Results";}

                    $conn->close();
            ?>
                </table>  

                <br><table>
                         <tr><th>BSIT B</th></tr>
                         <tr>
                            <th>Year</th>   
                            <th>Course</th>
                            <th>Block</th>
                            <th>Student ID </th>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>Age</th>
                            <th>Sex</th>
                            <th>Contact No</th>
                            <th>Email</th>
                            
                            
                        </tr>
            <?php
                 $conn = mysqli_connect("localhost", "root", "", "fms");
                 $sql = "SELECT * FROM student WHERE Year = '2' AND Course= 'BSIT' AND Block='B' ORDER BY Lastname ASC";
                 /*$sql = "SELECT * FROM student WHERE Year = '1';";*/
                 $result = $conn->query($sql);

                     if ($result->num_rows > 0) {
                          while ($row = $result-> fetch_assoc()) {
                            echo "<tr><td>". $row["Year"] . "</td><td>". $row["Course"] . "</td><td>". $row["Block"] . "</td><td>". $row["ID"] . "</td><td>" . $row["Lastname"] . "</td><td>". $row["Firstname"] . "</td><td>". $row["Age"] . "</td><td>". $row["Gender"] . "</td><td>". $row["Contactno"] . "</td><td>". $row["Email"] . "</td></tr>";                         
                     } 
                    }
                    else {  echo "No Results";}

                    $conn->close();
            ?>
                </table> 
                </div>
            </div>
            <!-- 3rd menu -->
            <input type="radio" name="trg1" id="acc3">
            <label for="acc3">3rd Year</label>
            <div class="content">
                <div class="inner">
                <table>
                         <tr><th>ABEL A</th></tr>
                         <tr>
                            <th>Year</th>   
                            <th>Course</th>
                            <th>Block</th>
                            <th>Student ID </th>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>Age</th>
                            <th>Sex</th>
                            <th>Contact No</th>
                            <th>Email</th>
                            
                            
                        </tr>
            <?php
                 $conn = mysqli_connect("localhost", "root", "", "fms");
                 $sql = "SELECT * FROM student WHERE Year = '3' AND Course= 'ABEL' AND Block='A' ORDER BY Lastname ASC ";
                 /*$sql = "SELECT * FROM student WHERE Year = '1';";*/
                 $result = $conn->query($sql);

                     if ($result->num_rows > 0) {
                          while ($row = $result-> fetch_assoc()) {
                            echo "<tr><td>". $row["Year"] . "</td><td>". $row["Course"] . "</td><td>". $row["Block"] . "</td><td>". $row["ID"] . "</td><td>" . $row["Lastname"] . "</td><td>". $row["Firstname"] . "</td><td>". $row["Age"] . "</td><td>". $row["Gender"] . "</td><td>". $row["Contactno"] . "</td><td>". $row["Email"] . "</td></tr>";                         
                     } 
                    }
                    else {  echo "No Results";}

                    $conn->close();
            ?>
                </table>  

                <br><table>
                         <tr><th>ABEL B</th></tr>
                         <tr>
                            <th>Year</th>   
                            <th>Course</th>
                            <th>Block</th>
                            <th>Student ID </th>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>Age</th>
                            <th>Sex</th>
                            <th>Contact No</th>
                            <th>Email</th>
                            
                            
                        </tr>
            <?php
                 $conn = mysqli_connect("localhost", "root", "", "fms");
                 $sql = "SELECT * FROM student WHERE Year = '3' AND Course= 'ABEL' AND Block='B' ORDER BY Lastname ASC";
                 /*$sql = "SELECT * FROM student WHERE Year = '1';";*/
                 $result = $conn->query($sql);

                     if ($result->num_rows > 0) {
                          while ($row = $result-> fetch_assoc()) {
                            echo "<tr><td>". $row["Year"] . "</td><td>". $row["Course"] . "</td><td>". $row["Block"] . "</td><td>". $row["ID"] . "</td><td>" . $row["Lastname"] . "</td><td>". $row["Firstname"] . "</td><td>". $row["Age"] . "</td><td>". $row["Gender"] . "</td><td>". $row["Contactno"] . "</td><td>". $row["Email"] . "</td></tr>";                         
                     } 
                    }
                    else {  echo "No Results";}

                    $conn->close();
            ?>
                </table>  

                <br><table>
                         <tr><th>BSMATH A</th></tr>
                         <tr>
                            <th>Year</th>   
                            <th>Course</th>
                            <th>Block</th>
                            <th>Student ID </th>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>Age</th>
                            <th>Sex</th>
                            <th>Contact No</th>
                            <th>Email</th>
                            
                            
                        </tr>
            <?php
                 $conn = mysqli_connect("localhost", "root", "", "fms");
                 $sql = "SELECT * FROM student WHERE Year = '3' AND Course= 'BSMATH' AND Block='A' ORDER BY Lastname ASC";
                 /*$sql = "SELECT * FROM student WHERE Year = '1';";*/
                 $result = $conn->query($sql);

                     if ($result->num_rows > 0) {
                          while ($row = $result-> fetch_assoc()) {
                            echo "<tr><td>". $row["Year"] . "</td><td>". $row["Course"] . "</td><td>". $row["Block"] . "</td><td>". $row["ID"] . "</td><td>" . $row["Lastname"] . "</td><td>". $row["Firstname"] . "</td><td>". $row["Age"] . "</td><td>". $row["Gender"] . "</td><td>". $row["Contactno"] . "</td><td>". $row["Email"] . "</td></tr>";                         
                     } 
                    }
                    else {  echo "No Results";}

                    $conn->close();
            ?>
                </table>  

                <br><table>
                         <tr><th>BSMATH B</th></tr>
                         <tr>
                            <th>Year</th>   
                            <th>Course</th>
                            <th>Block</th>
                            <th>Student ID </th>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>Age</th>
                            <th>Sex</th>
                            <th>Contact No</th>
                            <th>Email</th>
                            
                            
                        </tr>
            <?php
                 $conn = mysqli_connect("localhost", "root", "", "fms");
                 $sql = "SELECT * FROM student WHERE Year = '3' AND Course= 'BSMATH' AND Block='B' ORDER BY Lastname ASC";
                 /*$sql = "SELECT * FROM student WHERE Year = '1';";*/
                 $result = $conn->query($sql);

                     if ($result->num_rows > 0) {
                          while ($row = $result-> fetch_assoc()) {
                            echo "<tr><td>". $row["Year"] . "</td><td>". $row["Course"] . "</td><td>". $row["Block"] . "</td><td>". $row["ID"] . "</td><td>" . $row["Lastname"] . "</td><td>". $row["Firstname"] . "</td><td>". $row["Age"] . "</td><td>". $row["Gender"] . "</td><td>". $row["Contactno"] . "</td><td>". $row["Email"] . "</td></tr>";                         
                     } 
                    }
                    else {  echo "No Results";}

                    $conn->close();
            ?>
                </table>  

                <br><table>
                         <tr><th>BSIT A</th></tr>
                         <tr>
                            <th>Year</th>   
                            <th>Course</th>
                            <th>Block</th>
                            <th>Student ID </th>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>Age</th>
                            <th>Sex</th>
                            <th>Contact No</th>
                            <th>Email</th>
                            
                            
                        </tr>
            <?php
                 $conn = mysqli_connect("localhost", "root", "", "fms");
                 $sql = "SELECT * FROM student WHERE Year = '3' AND Course= 'BSIT' AND Block='A' ORDER BY Lastname ASC";
                 /*$sql = "SELECT * FROM student WHERE Year = '1';";*/
                 $result = $conn->query($sql);

                     if ($result->num_rows > 0) {
                          while ($row = $result-> fetch_assoc()) {
                            echo "<tr><td>". $row["Year"] . "</td><td>". $row["Course"] . "</td><td>". $row["Block"] . "</td><td>". $row["ID"] . "</td><td>" . $row["Lastname"] . "</td><td>". $row["Firstname"] . "</td><td>". $row["Age"] . "</td><td>". $row["Gender"] . "</td><td>". $row["Contactno"] . "</td><td>". $row["Email"] . "</td></tr>";                         
                     } 
                    }
                    else {  echo "No Results";}

                    $conn->close();
            ?>
                </table>  

                <br><table>
                         <tr><th>BSIT B</th></tr>
                         <tr>
                            <th>Year</th>   
                            <th>Course</th>
                            <th>Block</th>
                            <th>Student ID </th>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>Age</th>
                            <th>Sex</th>
                            <th>Contact No</th>
                            <th>Email</th>
                            
                            
                        </tr>
            <?php
                 $conn = mysqli_connect("localhost", "root", "", "fms");
                 $sql = "SELECT * FROM student WHERE Year = '3' AND Course= 'BSIT' AND Block='B' ORDER BY Lastname ASC";
                 /*$sql = "SELECT * FROM student WHERE Year = '1';";*/
                 $result = $conn->query($sql);

                     if ($result->num_rows > 0) {
                          while ($row = $result-> fetch_assoc()) {
                            echo "<tr><td>". $row["Year"] . "</td><td>". $row["Course"] . "</td><td>". $row["Block"] . "</td><td>". $row["ID"] . "</td><td>" . $row["Lastname"] . "</td><td>". $row["Firstname"] . "</td><td>". $row["Age"] . "</td><td>". $row["Gender"] . "</td><td>". $row["Contactno"] . "</td><td>". $row["Email"] . "</td></tr>";                         
                     } 
                    }
                    else {  echo "No Results";}

                    $conn->close();
            ?>
                </table> 
                </div>
            </div>
            <!-- 4th menu -->
            <input type="radio" name="trg1" id="acc4">
            <label for="acc4">4th Year</label>
            <div class="content">
                <div class="inner">
                <table>
                         <tr><th>ABEL A</th></tr>
                         <tr>
                            <th>Year</th>   
                            <th>Course</th>
                            <th>Block</th>
                            <th>Student ID </th>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>Age</th>
                            <th>Sex</th>
                            <th>Contact No</th>
                            <th>Email</th>
                            
                            
                        </tr>
            <?php
                 $conn = mysqli_connect("localhost", "root", "", "fms");
                 $sql = "SELECT * FROM student WHERE Year = '4' AND Course= 'ABEL' AND Block='A' ORDER BY Lastname ASC ";
                 /*$sql = "SELECT * FROM student WHERE Year = '1';";*/
                 $result = $conn->query($sql);

                     if ($result->num_rows > 0) {
                          while ($row = $result-> fetch_assoc()) {
                            echo "<tr><td>". $row["Year"] . "</td><td>". $row["Course"] . "</td><td>". $row["Block"] . "</td><td>". $row["ID"] . "</td><td>" . $row["Lastname"] . "</td><td>". $row["Firstname"] . "</td><td>". $row["Age"] . "</td><td>". $row["Gender"] . "</td><td>". $row["Contactno"] . "</td><td>". $row["Email"] . "</td></tr>";                         
                     } 
                    }
                    else {  echo "No Results";}

                    $conn->close();
            ?>
                </table>  

                <br><table>
                         <tr><th>ABEL B</th></tr>
                         <tr>
                            <th>Year</th>   
                            <th>Course</th>
                            <th>Block</th>
                            <th>Student ID </th>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>Age</th>
                            <th>Sex</th>
                            <th>Contact No</th>
                            <th>Email</th>
                            
                            
                        </tr>
            <?php
                 $conn = mysqli_connect("localhost", "root", "", "fms");
                 $sql = "SELECT * FROM student WHERE Year = '4' AND Course= 'ABEL' AND Block='B' ORDER BY Lastname ASC";
                 /*$sql = "SELECT * FROM student WHERE Year = '1';";*/
                 $result = $conn->query($sql);

                     if ($result->num_rows > 0) {
                          while ($row = $result-> fetch_assoc()) {
                            echo "<tr><td>". $row["Year"] . "</td><td>". $row["Course"] . "</td><td>". $row["Block"] . "</td><td>". $row["ID"] . "</td><td>" . $row["Lastname"] . "</td><td>". $row["Firstname"] . "</td><td>". $row["Age"] . "</td><td>". $row["Gender"] . "</td><td>". $row["Contactno"] . "</td><td>". $row["Email"] . "</td></tr>";                         
                     } 
                    }
                    else {  echo "No Results";}

                    $conn->close();
            ?>
                </table>  

                <br><table>
                         <tr><th>BSMATH A</th></tr>
                         <tr>
                            <th>Year</th>   
                            <th>Course</th>
                            <th>Block</th>
                            <th>Student ID </th>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>Age</th>
                            <th>Sex</th>
                            <th>Contact No</th>
                            <th>Email</th>
                            
                            
                        </tr>
            <?php
                 $conn = mysqli_connect("localhost", "root", "", "fms");
                 $sql = "SELECT * FROM student WHERE Year = '4' AND Course= 'BSMATH' AND Block='A' ORDER BY Lastname ASC";
                 /*$sql = "SELECT * FROM student WHERE Year = '1';";*/
                 $result = $conn->query($sql);

                     if ($result->num_rows > 0) {
                          while ($row = $result-> fetch_assoc()) {
                            echo "<tr><td>". $row["Year"] . "</td><td>". $row["Course"] . "</td><td>". $row["Block"] . "</td><td>". $row["ID"] . "</td><td>" . $row["Lastname"] . "</td><td>". $row["Firstname"] . "</td><td>". $row["Age"] . "</td><td>". $row["Gender"] . "</td><td>". $row["Contactno"] . "</td><td>". $row["Email"] . "</td></tr>";                         
                     } 
                    }
                    else {  echo "No Results";}

                    $conn->close();
            ?>
                </table>  

                <br><table>
                         <tr><th>BSMATH B</th></tr>
                         <tr>
                            <th>Year</th>   
                            <th>Course</th>
                            <th>Block</th>
                            <th>Student ID </th>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>Age</th>
                            <th>Sex</th>
                            <th>Contact No</th>
                            <th>Email</th>
                            
                            
                        </tr>
            <?php
                 $conn = mysqli_connect("localhost", "root", "", "fms");
                 $sql = "SELECT * FROM student WHERE Year = '4' AND Course= 'BSMATH' AND Block='B' ORDER BY Lastname ASC";
                 /*$sql = "SELECT * FROM student WHERE Year = '1';";*/
                 $result = $conn->query($sql);

                     if ($result->num_rows > 0) {
                          while ($row = $result-> fetch_assoc()) {
                            echo "<tr><td>". $row["Year"] . "</td><td>". $row["Course"] . "</td><td>". $row["Block"] . "</td><td>". $row["ID"] . "</td><td>" . $row["Lastname"] . "</td><td>". $row["Firstname"] . "</td><td>". $row["Age"] . "</td><td>". $row["Gender"] . "</td><td>". $row["Contactno"] . "</td><td>". $row["Email"] . "</td></tr>";                         
                     } 
                    }
                    else {  echo "No Results";}

                    $conn->close();
            ?>
                </table>  

                <br><table>
                         <tr><th>BSIT A</th></tr>
                         <tr>
                            <th>Year</th>   
                            <th>Course</th>
                            <th>Block</th>
                            <th>Student ID </th>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>Age</th>
                            <th>Sex</th>
                            <th>Contact No</th>
                            <th>Email</th>
                            
                            
                        </tr>
            <?php
                 $conn = mysqli_connect("localhost", "root", "", "fms");
                 $sql = "SELECT * FROM student WHERE Year = '4' AND Course= 'BSIT' AND Block='A' ORDER BY Lastname ASC";
                 /*$sql = "SELECT * FROM student WHERE Year = '1';";*/
                 $result = $conn->query($sql);

                     if ($result->num_rows > 0) {
                          while ($row = $result-> fetch_assoc()) {
                            echo "<tr><td>". $row["Year"] . "</td><td>". $row["Course"] . "</td><td>". $row["Block"] . "</td><td>". $row["ID"] . "</td><td>" . $row["Lastname"] . "</td><td>". $row["Firstname"] . "</td><td>". $row["Age"] . "</td><td>". $row["Gender"] . "</td><td>". $row["Contactno"] . "</td><td>". $row["Email"] . "</td></tr>";                         
                     } 
                    }
                    else {  echo "No Results";}

                    $conn->close();
            ?>
                </table>  

                <br><table>
                         <tr><th>BSIT B</th></tr>
                         <tr>
                            <th>Year</th>   
                            <th>Course</th>
                            <th>Block</th>
                            <th>Student ID </th>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>Age</th>
                            <th>Sex</th>
                            <th>Contact No</th>
                            <th>Email</th>
                            
                            
                        </tr>
            <?php
                 $conn = mysqli_connect("localhost", "root", "", "fms");
                 $sql = "SELECT * FROM student WHERE Year = '4' AND Course= 'BSIT' AND Block='B' ORDER BY Lastname ASC";
                 /*$sql = "SELECT * FROM student WHERE Year = '1';";*/
                 $result = $conn->query($sql);

                     if ($result->num_rows > 0) {
                          while ($row = $result-> fetch_assoc()) {
                            echo "<tr><td>". $row["Year"] . "</td><td>". $row["Course"] . "</td><td>". $row["Block"] . "</td><td>". $row["ID"] . "</td><td>" . $row["Lastname"] . "</td><td>". $row["Firstname"] . "</td><td>". $row["Age"] . "</td><td>". $row["Gender"] . "</td><td>". $row["Contactno"] . "</td><td>". $row["Email"] . "</td></tr>";                         
                     } 
                    }
                    else {  echo "No Results";}

                    $conn->close();
            ?>
                </table> 
                </div>
            </div>  
        </div>
              
                <script>
            function toggleMenu()
            {
                let toggle = document.querySelector('.toggle');
                let navigator = document.querySelector('.navigator');
                let main = document.querySelector('.main');
                let cardbox = document.querySelector('.cardBox');
                toggle.classList.toggle('active')
                navigator.classList.toggle('active')
                main.classList.toggle('active')
                cardBox.classList.toggle('active')

               
            }
        </script>

    </body>
</html>