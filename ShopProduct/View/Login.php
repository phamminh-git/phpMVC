<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>View Dang Nhap</h2>
    <form action="../Controller/UserController.php" method="post">
        <table>
            <tr>
                <td><label for="username">Username:</label></td>
                <td><Input type="text" id="username" name="username"></Input></td>
            </tr>
            <tr>
                <td><label for="password">Password:</label></td>
                <td><input type="text" id="password" name="password"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>