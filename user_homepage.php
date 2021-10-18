<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="phone_book.css">
</head>
<body>
    <div class="header">
        <ul>
            <li><a href="user_homepage.php">Home</a></li>
            <li><a href="contact_info.php">Contact Information</a></li>
            <li class="sign_out"><a href="phone_book.php">Sign Out</a></li>
        </ul>
    </div>
    <div class="form">
        <h1>Add Contact</h1>
        <form action="add_contact.php" method="GET">
            <label for="name">Name</label>
            <input type="text" name="name"><br>
            <label for="number">Contact Number</label>
            <input type="number" name="number">
            <button class="btn2">ADD</button>
        </form>
    </div>
</body>
</html>