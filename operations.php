  
<?php

require_once ("input.php");
require_once ("data.php");

$con = Createdata();

// create button 
if(isset($_POST['create'])){
    add();
}

if(isset($_POST['update'])){
    UpdateData();
}

if(isset($_POST['delete'])){
    deleteRecord();
}


function add(){

   $Course = textboxValue ("s_course");
   $Year = textboxValue ("s_program");
   $Block = textboxValue ("s_section");
   $ID = textboxValue ("s_id");
   $Lastname = textboxValue ("s_lname");
   $Firstname = textboxValue ("s_fname");
   $Email = textboxValue ("s_email");
   $Age = textboxValue ("s_age");
   $Gender = textboxValue ("s_gender");
   $Contactno = textboxValue ("s_cnumber");

   if($Course && $Year && $Block && $ID && $Lastname && $Firstname && $Email && $Age && $Gender && $Contactno){

    $sql = "INSERT INTO `student`(`Course`, `Year`, `Block`, `ID`, `Lastname`, `Firstname`, `Email`, `Age`, `Gender`, `Contactno`) 
    VALUES ('$Course','$Year','$Block','$ID','$Lastname','$Firstname','$Email','$Age','$Gender','$Contactno')";

if(mysqli_query($GLOBALS['con'], $sql)){
    TextNode("success", "Record Successfull!");
}else{
    echo "Error Record";
}

}else{
    TextNode("error", " Provide Data!");
}
}

function textboxValue($value){
$textbox = mysqli_real_escape_string($GLOBALS['con'], trim($_POST[$value]));
if(empty($textbox)){
return false;
}else{
return $textbox;
}
}


// messages
function TextNode($classname, $msg){
$element = "<h6 class='$classname'>$msg</h6>";
echo $element;
}

// get data from mysql database
function getData(){
    $sql = "SELECT * FROM student";

    $result = mysqli_query($GLOBALS['con'], $sql);

    if(mysqli_num_rows($result) > 0){
        return $result;
    }
}

function UpdateData(){
    $Course = textboxValue ("s_course");
    $Year = textboxValue ("s_program");
    $Block = textboxValue ("s_section");
    $ID = textboxValue ("s_id");
    $Lastname = textboxValue ("s_lname");
    $Firstname = textboxValue ("s_fname");
    $Email = textboxValue ("s_email");
    $Age = textboxValue ("s_age");
    $Gender = textboxValue ("s_gender");
    $Contactno = textboxValue ("s_cnumber");

    if($Course && $Year && $Block && $ID && $Lastname && $Firstname && $Email && $Age && $Gender && $Contactno){
        $sql = "
        UPDATE `student` SET `Course`='$Course',`Year`='$Year',`Block`='$Block',`ID`='$ID',`Lastname`='$Lastname',
        `Firstname`='$Firstname',`Email`='$Email',`Age`='$Age',`Gender`='$Gender',`Contactno`='$Contactno' WHERE ID='$ID';                    
        ";

        if(mysqli_query($GLOBALS['con'], $sql)){
            TextNode("success", "Data Successfully Updated");
        }else{
            TextNode("error", "Enable to Update Data");
        }

    }else{
        TextNode("error", "Select Data!");
    }


}

function deleteRecord(){
    $ID = (int)textboxValue("s_id");
    $Contactno = (int)textboxValue("s_cnumber");

    $sql = "DELETE FROM student WHERE ID=$ID and Contactno=$Contactno";

    if(mysqli_query($GLOBALS['con'], $sql)){
        TextNode("success","Deleted!");
    }else{
        TextNode("error","Enable to Delete!");
    }

}

