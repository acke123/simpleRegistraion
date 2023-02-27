<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>SoftSerbia</title>
</head>
<body>
<div id="result"></div>
<div class="form-check">
    <input type="checkbox" value="" id="flexCheckDefault">
    <label for="flexCheckDefault">
        Prihvatam uslove koriscenja
    </label>
</div>
    <p class="" id="hiddenCheckBoxValidation"></p>
    <button type="submit" class="btn btn-primary" onclick="validatateCheckBoxValidation()">Submit</button><br><br>
<table>
    <tr>
        <th>
            <a href="#" onclick="validatateCheckBoxValidation()">Prvi korak |</a>
        </th>
        <th>
            <a href="#" onclick="validatateCheckBoxValidation()"> Drugi korak |</a>
        </th>
        <th>
            <a href="step3.php" onclick="validatateCheckBoxValidation()"> Treci korak |</a>
        </th>
        <th>
            <a href="#" onclick="validatateCheckBoxValidation()"> Cetvrti korak</a>
        </th>
    </tr>
</table>
<script src="js/validation.js">
</script>
</body>
</html>