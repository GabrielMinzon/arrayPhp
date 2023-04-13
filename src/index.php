<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <h1>Inserir Tarefa</h1>

    <form action="main.php" method="POST">
        <label for="name">Name: </label><br>
        <input type="text" name="name" id="name" required><br><br>

        <label for="details">Details</label><br>
        <textarea name="details" id="details"></textarea>
        <br><br>
        <input type="submit" id="btnSubmitInsertTaskForm" value="enviar"> <br>
    </form>
</body>
</html>