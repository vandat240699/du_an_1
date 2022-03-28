<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liên hệ</title>
</head>
<body>
    <form action="sendmail.php" method="post" enctype="multipart/form-data">
        <input type="text" name="fullname" placeholder="Fullname" id="">
        <br>
        <input type="email" name="email" placeholder="Email" id="">
        <br>
        <input type="text" name="title" placeholder="Title contact" id="">
        <br>
        <input type="file" name="image" id="">
        <br>
        <textarea name="content" id="" cols="150" rows="10"></textarea>
        <br>
        <button type="submit">Send</button>
    </form>
</body>
</html>