<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <table>
            <thead>
                <tr class="table table-striped mt-5 text-center align-middle">
                    <th scope="col">id</th>
                    <th scope="col">data di nascita</th>
                    <th scope="col">nome</th>
                    <th scope="col">cognome</th>
                    <th scope="col">genere</th>
                    <th scope="col">data di assunzione</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include "connection.php";
                    $conn=db();
                    $sql="SELECT * FROM employees LIMIT 20";
                    $stmt=$conn->query($sql);
                    $rows=array();
                    while($row=mysqli_fetch_array($stmt)){
                        $rows[]=$row;
                        $Id=stripslashes($rows['id']);
                        $birth_date=stripslashes($rows['birth_date']);
                        $first_name=stripslashes($rows['first_name']);
                        $last_name=stripslashes($rows['last_name']);
                        $gender=stripslashes($rows['gender']);
                        $hire_date=stripslashes($rows['hire_date']);
                        echo"<tr><th scope=col> $Id </th> <th scope=col> $birth_date</th><th scope=col> $first_name </th><th scope=col> $last_name </th><th scope=col> $gender </th><th scope=col> $hire_date</th>
                        </tr>";
                    }
                ?>
            </tbody>
        </table>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </body>
</html>



<!--<?php
/*
    include "connection.php";
    $conn=db();
    $sql="SELECT * FROM employees";
    $stmt=$conn->query($sql);
    $rows=array();
    while($row=mysqli_fetch_array($stmt)){
        $rows[]=$row;
        $Id=stripslashes($rows['id']);
        $birth_date=stripslashes($rows['birth_date']);
        $first_name=stripslashes($rows['first_name']);
        $last_name=stripslashes($rows['last_name']);
        $gender=stripslashes($rows['gender']);
        $hire_date=stripslashes($rows['hire_date']);
        echo"| $Id | $birth_date | $first_name | $last_name | $gender | $hire_date |";
    }
    */
?>-->