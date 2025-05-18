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
        <h2>List Of STAFF</h2>
        <div class="mb-3">
            <a href="create.php" class="col-sm-3 mb-3 btn btn-primary" role="button">New Client</a>
            <div class="col-sm-6">
                <input type="text" name="search" placeholder="Search Client.." id="search_bar" class="form-control">
            </div>
        </div>
        <br>
        <br>

        <table class="table">
            <thead>
                <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone No.</th>
                <th>Address</th>
                <th>Date Of Birth</th>
                <th>Gender</th>
                <th>Created At</th>
                <th>Action</th>
                </tr>
            </thead>
            <tbody id="tbody">
                <?php include "php/client_record.php"; ?>
            </tbody>
        </table>

    </div>


    <script src="js/search.js"></script>
</body>
</html>