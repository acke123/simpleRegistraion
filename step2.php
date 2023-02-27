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
    <label for="email">Email:</label>
    <input type="text" class="form-control" id="emailId" placeholder="Unesite email"><br><br>
    <p class="" id="hiddenEmailValidation"></p>
    <button type="submit" class="btn btn-primary" onclick="validatateEmail()">Submit</button><br><br>
<table>
    <tr>
        <th>
            <a href="#" onclick="validatateEmail()">Prvi korak |</a>
        </th>
        <th>
            <a href="step2.php" > Drugi korak |</a>
        </th>
        <th>
            <a href="#" onclick="validatateEmail()"> Treci korak |</a>
        </th>
        <th>
            <a href="#" onclick="validatateEmail()"> Cetvrti korak</a>
        </th>
    </tr>
</table>
<script src="js/validation.js">
</script>
</body>
</html>