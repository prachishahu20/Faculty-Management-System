<?php
include "conn.php";
include "usersidebar.php";
$query= "SELECT * FROM class";

$result = mysqli_query($conn,$query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
    crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/faculty.css">
    <title>Faculty</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>




      <br><br>
            <table style="color:white;" class="table table-dark">
                <tr>
                    <th>Class Name</th>
                    <th>Faculty Name</th>
                    <th>Branch</th>
                    <th>Date</th>
                    <th>Time</th>
                </tr>
                <?php while($row=mysqli_fetch_array($result)){   ?>

                    <tr>
                        <td>
                            <?php echo $row['cname'] ?>
                </td>
                <td>
                            <?php echo $row['fname'] ?>
                            </td>
                            <td>
                            <?php echo $row['cbranch'] ?>
                            </td>
                            <td>
                            <?php echo $row['cdate'] ?>
                        </td>
                            <td>
                            <?php echo $row['time'] ?>
                        </td>
                    </tr>
                    <?php  }  ?>
            </table>
            </center>


      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>
    <script src="mainBoo.js"></script>
</body>
</html>