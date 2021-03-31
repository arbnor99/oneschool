<?php
include "lib/Student.php";
include_once("inc/header.php");
$Students=new Student();

if(isset($_POST['modify'])){
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];

	$Students->updateStudent($_GET['id'], $firstname, $lastname, $phone, $email);
}
?>

<?php
if(isset($_GET['id'])){
	$student=$Students->getStudentById($_GET['id']);
}
?>

<head>
	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<meta name="language" content="English">
  	<meta name="description" content="It is a website about education">
  	<meta name="keywords" content="blog,cms blog">
  	<link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.css">	
  	<link rel="stylesheet" href="../css/bootstrap.min.css">
  	<link rel="stylesheet" href="../css/style.css">
  	<title>Blog</title>
</head>

<section id="contact" class="py-5 h-100 bg-light" >
        <div class="container text-center">
            <h1 class="display-4 pb-1 border-bottom w-25 mx-auto pt-5">Edit Student</h1>
            <div class="row mx-auto">
                <div class="col-sm-12 col-md-6 col-lg-6 mx-auto">
                    <form class="p-5  my-5 bg-white" method="post">
                        <div class="form-group text-left">
                            <label for="name">First name</label>
                            <input type="text" name="firstname" class="form-control" value="<?php echo $student['firstname']; ?>">
                        </div>
                        <div class="form-group text-left">
                            <label for="name">Last name</label>
                            <input type="text" name="lastname" class="form-control" value="<?php echo $student['lastname']; ?>">
                        </div>
                        <div class="form-group text-left">
                            <label for="name">Phone</label>
                            <input type="text" name="phone" class="form-control" value="<?php echo $student['phone']; ?>">
                        </div>
 						<div class="form-group text-left">
                            <label for="name">Email</label>
                            <input type="email" name="email" class="form-control" value="<?php echo $student['email']; ?>">
                        </div>
                        <button type="submit" class="btn btn-block btn-outline-secondary mt-5" name="modify">Edit</button>
                        
                    </form>
                </div>
            </div>
        </div>
    </section>


<?php include_once("inc/footer.php");?>