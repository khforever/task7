<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Empoyee</title>
</head>

<body>
    <table border="1">
        <thead>
            <tr>
                
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Salary</th>
                <th>Age</th>
                <th>Actions</th>

            </tr>
        </thead>
        <tbody>
            <?php
            //connection
            try {
                $pdo = new pdo("mysql:host=localhost;dbname=task7_pdo", "root", "");
                //query
                $data =  $pdo->query("select * from employee");
                $employee = $data->fetchAll(PDO::FETCH_ASSOC);
            } catch (pdoexception $e) {
                echo $e;
            }
            foreach ($employee as $employees) {
            ?>
                <tr>
                    
                    <td><?php echo  $employees['fname'] ?></td>
                    <td><?php echo  $employees['lname'] ?></td>
                    <td><?php echo  $employees['email'] ?></td>
                    <td><?php echo  $employees['address'] ?></td>
                    <td><?php echo  $employees['salary'] ?></td>
                    <td><?php echo  $employees['age'] ?></td>
                    <td><a href="show.php?id=<?php echo  $employees['id']  ?>">Show employee</a></td>
                </tr>
            <?php
            }
            //close
            $pdo = null;

            ?>

        </tbody>
    </table>

</body>

</html>