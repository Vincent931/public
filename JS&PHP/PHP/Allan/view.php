<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <label for="name">Nom (Pattern: deux lettre tiret 4 chiffre)</label><br>
        <input type="text" name="name" id="name" placeholder="Nom"><br><br>
        <label for="moral">La moral</label><br>
        <select id="moral" name="moral">
            <option value="">--Please choose an option--</option>
            <option value="1">Evil</option>
            <option value="2">Good</option>
        </select><br>
        <button type="submit">CLIQUER</button>
    </form>


</body>
</html>