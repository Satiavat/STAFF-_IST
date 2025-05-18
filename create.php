<?php
    include "php/conn.php";

    if(isset($_POST['submit'])){
        $ran_id = rand(time(), 100000000);
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $number = trim($_POST['number']);
        $address = trim($_POST['address']);
        $birth = trim($_POST['date']);
        $gender = trim($_POST['gender']);


        $date = date('d - F Y');


        $insert = mysqli_query($conn, "INSERT INTO `data`(`crud_id`, `name`, `email`, `number`, `address`, `birth`, `gender`, `time_created`) 
        VALUES ('$ran_id','$name','$email','$number','$address','$birth','$gender','$date')");

        if($insert){
            header("location: create.php?success=Client Created Successfull");
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
    <title>Crud Project</title>
</head>
<body>
    <div class="container my-5">
        <h2>New Staff</h2>
        <br>
        <br>

        <form action="" method="post">
            <?php
                if(isset($_GET['success'])){
                    echo '<div class="w-25 alert alert-success" role="alert">'.$_GET['success'].'</div>';
                }
            
            ?>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Name</label>
                <div class="col-sm-6">
                    <input type="text" name="name" class="form-control" placeholder="Staff Name" required>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-6">
                    <input type="email" name="email" class="form-control" placeholder="Staff Email" required>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Phone No.</label>
                <div class="col-sm-6">
                    <input type="number" name="number" class="form-control" placeholder="Staff Phone Number" required>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Address</label>
                <div class="col-sm-6">
                    <input type="text" name="address" class="form-control" placeholder="Staff Address" required>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Date Of Birth</label>
                <div class="col-sm-6">
                    <input type="date" name="date" class="form-control" placeholder="Staff Date Of Birth" required>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label" name="gender">Gender</label>
                <div class="col-sm-6">
                   <select name="gender" class="form-control">
                        <option>Male</option>
                        <option>Female</option>
                   </select>
                </div>
            </div>
            <div class="row mb-3">
               <button type="submit" name="submit" class="col-sm-3 btn btn-primary">Submit</button>
                <div class="col-sm-6">
                   <a href="index.php" class="btn btn-outline-primary">Go Back</a>
                </div>
            </div>
        </form>


    </div>
</body>
</html>