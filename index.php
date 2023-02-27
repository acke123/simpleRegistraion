<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
<div id="result"></div>
    <div id="firstStep">
        <label for="firstAndLastName">Ime i prezime:</label>
        <input type="text" class="form-control" id="firstAndLastNameId" placeholder="Unesite ime i prezime"><br><br>
        <p class="hidden" id="hiddenValidation"></p>
    <button type="submit" class="btn btn-primary" onclick="validatateStep()">Submit</button><br><br>
</div>
<table>
    <tr>
        <th>
            <a href="index.php" class="nav-link">Prvi korak |</a>
        </th>
        <th>
            <a href="#" onclick="validatateStep()"> Drugi korak |</a>
        </th>
        <th>
            <a href="#" onclick="validatateStep()"> Treci korak |</a>
        </th>
        <th>
            <a href="#" onclick="validatateStep()"> Cetvrti korak</a>
        </th>
    </tr>
</table>
<script src="js/validation.js">
</script>
</body>
</html>