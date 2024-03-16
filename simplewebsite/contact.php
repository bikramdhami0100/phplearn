<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
</head>
<body style="margin: 0; padding: 0; font-family: Arial, sans-serif;">

    <?php 
     include_once("./header.php")
    ?>

    <!-- Contact Content -->
    <div style="padding: 50px;">
        <h2 style="color: #333; text-align: center;">Contact Us</h2>
        <p style="color: #555; text-align: center; margin-top: 20px;">Feel free to reach out to us using the form below:</p>
        <form style="margin-top: 30px; text-align: center;" action="./handler.php" method="post">
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" style="padding: 10px; margin-bottom: 20px; width: 60%;"><br>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" style="padding: 10px; margin-bottom: 20px; width: 60%;"><br>
            <label for="message">Message:</label><br>
            <textarea id="message" name="message" rows="4" style="padding: 10px; margin-bottom: 20px; width: 60%;"></textarea><br>
            <button type="submit" style="background-color: #007bff; color: #fff; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">Submit</button>
        </form>
    </div>

    <?php 
     include_once("./footer.php")
    ?>

</body>
</html>
