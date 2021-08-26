<?php

require_once ("input.php");
require_once("operations.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie-edge">
        <title>Student File Management</title>
		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
		<link rel="stylesheet" href="style.css">

	</head>
    <body>
	<main>
	  <div class="">
            <div class="navigator">
                <ul>
                    <li>
                        <a href="#">
                        <span class="icon"><i class="fa fa-files-o" aria-hidden="true"></i></span>
                        <span class="title"><h1>PSU</h1></span>

                    </a>
                    </li>
                    <br><br>
                    <li>
                        <a href="home.html">
                        <span class="icon"><i class="fa fa-tachometer" aria-hidden="true"></i></span>
                        <span class="title"><h2>Dashboard</h2></span>
                    </a>
                    </li><br>
                    <li>
                        <a href="masterlist.php">
                        <span class="icon"><i class="fa fa-book" aria-hidden="true"></i></span>
                        <span class="title"><h2>Masterlist</h2></span>
                    </a>
                    </li><br>
                    <li>
                        <a href="index.php">
                        <span class="icon"><i class="fa fa-files-o" aria-hidden="true"></i></span>
                        <span class="title"><h2>Manage Files</h2></span>
                    </a>
                    </li><br>
                    <li>
                        <a href="login.html">
                        <span class="icon"><i class="fa fa-sign-out" aria-hidden="true"></i></span>
                        <span class="title"><h2>Sign Out</h2></span>
                    </a>
                    </li>
                </ul>
            </div> 

            <div class="main">
                <div class="topbar">
                    <div class="toggle" onclick="toggleMenu();"></div>
                    <div class="search">
                        <label>
                             <form action="search.php" method="POST">
                  <div class="input-group mb-3">
                  <input type="text" class="form-control search" name="search" placeholder="Search..." aria-label="Recipient's username" aria-describedby="button-addon2">
                  <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                               </form>
                        </label>
                    </div>
                        <div class="user">
                           <img src="Pangasinan_State_University_logo.png">
                    </div>
                          <script>
            function toggleMenu()
            {
                let toggle = document.querySelector('.toggle');
                let navigator = document.querySelector('.navigator');
                let main = document.querySelector('.main');
                toggle.classList.toggle('active')
                navigator.classList.toggle('active')
                main.classList.toggle('active')

               
            }
        </script>
                </div>


		<div class="container text-center">
			<h1 class="py-3 bg-light text-info"><i class="fas fa-file"></i>Manage Files Here</h1>

			<div class="d-flex justify-content-center">
            <form action="" method="post" class="w-50">
			<div class=" row pt-2">
			<div class=" col">
                    <?php inputElement("<i class='fas fa-book'></i>","Course", "s_course",""); ?>
                </div>
			<div class="col">
                    <?php inputElement("<i class='fas fa-layer-group'></i>","Year", "s_program",""); ?>
                </div>
				<div class="col">
                    <?php inputElement("<i class='fas fa-th-large'></i>","Block", "s_section",""); ?>
                </div></div>
                <div class="pt-2">
                    <?php inputElement("<i class='fas fa-id-badge'></i>","ID", "s_id","" ); ?>
                </div>
                <div class="pt-2">
                    <?php inputElement("<i class='fas fa-signature'></i>","Lastname", "s_lname",""); ?>
                </div>
					<div class="pt-2">
						<?php inputElement("<i class='fas fa-signature'></i>","Firstname", "s_fname",""); ?>
             	   </div>
					<div class="pt-2">
						<?php inputElement("<i class='fas fa-envelope-open-text'></i>","Email", "s_email",""); ?>
              	  </div>
              	  <div class="row pt-2">
                    <div class="col">
						<?php inputElement("<i class='fas fa-sort-numeric-up-alt'></i>","Age", "s_age",""); ?>
                    </div>
					<div class="col">
						<?php inputElement("<i class='fas fa-venus-mars'></i>","Gender", "s_gender",""); ?>
               		 </div></div>
                    <div class="pt-2">
                        <?php inputElement("<i class='fas fa-phone-alt'></i>","Contactno", "s_cnumber",""); ?>
                    </div>
                
						
  					  <div class="d-flex justify-content-center">
                        <?php buttonElement("btn-create","btn btn-success","Create","create","data-toggle='tooltip' data-placement='bottom' title='Create'"); ?>
                        <?php buttonElement("btn-read","btn btn-primary","Refresh","read","data-toggle='tooltip' data-placement='bottom' title='Read'"); ?>
                        <?php buttonElement("btn-update","btn btn-warning","Update","update","data-toggle='tooltip' data-placement='bottom' title='Update'"); ?>
                        <?php buttonElement("btn-delete","btn btn-danger","Delete","delete","data-toggle='tooltip' data-placement='bottom' title='Delete'"); ?>
  					  </div>
  		
					</div>
				</form>
			</div>

		<!--BOOTSRTAP TABLE-->
		<div class="d-flex table-data">
			<table class="table table-striped table-dark">
				<thead class="thead-dark">
					<tr>
						<th>Course</th>
						<th>Year</th>
						<th>Block</th>
						<th>ID</th>
						<th>Lastname</th>
						<th>Firstname</th>
						<th>Email</th>
						<th>Age</th>
						<th>Gender</th>
						<th>ContactNo</th>
						<th>Edit</th>
					</tr>
				</thead>
				<tbody id="tbody">
				<?php


if(isset($_POST['read'])){
	$result = getData();

	if($result){

		while ($row = mysqli_fetch_assoc($result)){ ?>

			<tr>
				<td data-id="<?php echo $row['ID'];?>"> <?php echo $row['Course']; ?></td>
				<td data-id="<?php echo $row['ID']; ?>"> <?php echo $row['Year']; ?></td>
				<td data-id="<?php echo $row['ID']; ?>"> <?php echo $row['Block']; ?></td>
				<td data-id="<?php echo $row['ID']; ?>"> <?php echo $row['ID']; ?></td>
				<td data-id="<?php echo $row['ID']; ?>"> <?php echo $row['Lastname']; ?></td>
				<td data-id="<?php echo $row['ID']; ?>"> <?php echo $row['Firstname']; ?></td>
				<td data-id="<?php echo $row['ID']; ?>"> <?php echo $row['Email']; ?></td>
				<td data-id="<?php echo $row['ID']; ?>"> <?php echo $row['Age']; ?></td>
				<td data-id="<?php echo $row['ID']; ?>"> <?php echo $row['Gender']; ?></td>
				<td data-id="<?php echo $row['ID']; ?>"> <?php echo $row['Contactno']; ?></td>
				<td > <i class="fas fa-edit btnedit" data-id="<?php echo $row['ID']; ?>"></i></td>
			</tr>

<?php
		}

	}
}


?>
				</tbody>
			</table>
		</div>

		</div>
	</main>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
	<script  src="main.js"></script>
	</body>
</html>