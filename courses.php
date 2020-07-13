<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SAHARA</title>
    <link rel="icon" href="logo.png" type="image/gif">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script type="text/javascript" src="javascript/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="javascript/bootstrap.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light top-bar">
    <a class="navbar-brand" href="index.html"><img src="logo.png" style="width: 100px; height: 100px;"></a>
<div class="modal fade" role="dialog" id="create-admin">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Edit courses</h3>
                <button type="button" class="close" data-dismiss="modal">&times</button>
            </div>
            <div class="modal-body">
                <form action="coursesedit.php" method="post">
                    <div class="form-group">
                        <label>Course id</label>
                        
                        <input type="text"  name="serial_id" placeholder="course id" required>
                    </div>
                    <div class="form-group">
                        <label>Course outcome</label>
                        <input type="text"  name="des" placeholder="course outcome " >
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Create" name="create_admin">
                    </div>
                    
                </form>

            </div>
        </div>
    </div>
</div>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
            
            <li class="nav-item mr-4">
                <button class="btn mb-2" type="button" data-toggle="modal" data-target="#create-admin">Edit courses</button>
            </li>
            <li class="nav-item mr-4">
                <button class="btn mb-2" type="button" data-toggle="modal" data-target="#reply">
                    <a style="color: #000; text-decoration: none;"href="index.html">Logout</a>
                     
            </li>
        </ul>
    </div>
</nav>
<hr>
<?php
        $con=new mysqli("localhost","root","","sahara_database");
        $sql = "select * from courses";
        $result = $con->query($sql);

        echo "<table id=\"courses\" class=\"table table-striped\">
            <h3>EDIT COURSES</h3>
            <tr>
                <th>Serial</th>
                <th>Description</th>
                
            </tr>";

        if ($result->num_rows > 0) {
    // output data of each row
        while($row = $result->fetch_assoc())
        {
            echo "<tr>
                <th>".$row["serial_id"]."</th>
                <th>".$row["des"]."</th>
                
            </tr>";
        }
    }
    echo "<tbody>";

        ?>