<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
</head>
<body>
<form action="registratie_handler.php" method="post">
        <label>
            <input type="text" name = "username"> Username
        </label>
        <label>
            <input type="email" name = "email"> Email
        </label>
        <label>
            <input type="number" name = "age"> Age
        </label>
        <label>
            <input type="submit" value = "Submit" >  
        </label>
    </form>
</body>
</html>