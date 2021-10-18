<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Information</title>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="phone_book2.css">
</head>
<body>
<div class="header">
        <ul>
            <li><a href="user_homepage.php">Home</a></li>
            <li><a href="contact_info.php">Contact Information</a></li>
            <li class="sign_out"><a href="phone_book.php">Sign Out</a></li>
        </ul>
    </div>
    <div class="container">
        <div class="row justify-content-center">
        <?php 
          include 'database_link.php';
          
          $sql = "SELECT * FROM person_details";
          $result = mysqli_query($conn, $sql);
          
        ?>
        <h1 style="text-align: center">Contact Information</h1>
        <table class="table">
            <tr>
                <th>Name</th>
                <th>Contact Number</th>
            </tr>
            <?php 
                while($row = mysqli_fetch_array($result)):?> 
                <tr>
                    <td><?php echo $row['Name'];?></td>
                    <td><?php echo $row['Contact Number'];?></td>
                </tr>
            <?php endwhile; ?>
        </table>
        </div>
    </div>
</body>
</html>