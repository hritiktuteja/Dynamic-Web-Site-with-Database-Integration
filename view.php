<?php

require_once('db.php');
$query = "select * from data";
$result = mysqli_query($con, $query );

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Employee Data</title>
    <link rel="stylesheet" href="view.css">
</head>
<body>
<header>
        <a href="index.php">Add Content</a>
        <a href="view.php">View Content</a>
    </header>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card_header">
                        <h2 class="heading">View Sumbitted Data</h2>
                    </div>
                    <div class="card_body">
                        <table>
                            <tr>
                                <td>Name</td>
                                <td>Email</td>
                                <td>Student ID</td>
                                <td>Grades</td>
                                <td>Edit</td>
                                <td>Delete</td>
                            </tr>
                            <tr>
                                <!-- loop through the result of the query and display it here -->
                                <?php 
                                     while ($row = mysqli_fetch_assoc($result))
                                { 
                                ?> 
                                 <td>
                                 <?php
                                    echo $row['name'] 
                                 ?>
                                </td>
                                <td>
                                 <?php
                                    echo $row['email'] 
                                 ?>
                                </td>
                                <td>
                                 <?php
                                    echo $row['studentid'] 
                                 ?>
                                </td>
                                <td>
                                 <?php
                                    echo $row['grades'] 
                                 ?>
                                </td>
                                <td>
                                <a href="#" class="edit" >Edit</a>
                                </td>
                                <td>
                                <a href="#" class="delete">Delete</a>
                                </td>

                                 </tr>

                                 <?php
                                }

                                ?>
                               
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
            <p>2024. All rights reserved</p>
        </footer>
</body>
</html>