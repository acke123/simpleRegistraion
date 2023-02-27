window.onload= function() {
    $.ajax({
        type: "POST",
        url: 'http://localhost/softSerbia/storeData.php',
        success: function (response) {
            let parseData = jQuery.parseJSON(response);
            if (parseData.firstName != '' && parseData.firstName != undefined){
                $('#result').append("Ime i prezime: " + "<b>" + parseData.firstName + "</b>" + "<br>")
            }
            if (parseData.inputEmail != '' && parseData.firstName != undefined){
                $('#result').append("mail: " + "<b>" + parseData.inputEmail + "</b>" + "<br>")
            }
        },
    });
}

function validatateStep()
{
    let inputValue = $('#firstAndLastNameId').val();
    let resultDiv = $('#result');
    if (/\w+\s+\w+/.test(inputValue)) {
        $.ajax({
            type: "POST",
            url: 'http://localhost/softSerbia/storeData.php',
            data: {
                inputValue: inputValue
            }, success: function (response) {
                let parseData = jQuery.parseJSON(response);
                resultDiv.append("Ime i prezime: " + parseData.firstName)
                window.location.href = "http://localhost/softSerbia/step2.php";
            },
        });
    } else {
        $('#hiddenValidation').text("Unesite validno ime i prezime (Nikola Nikolic).");
        $('#hiddenValidation').css("color", "red");
        $('#hiddenValidation').removeClass("hidden");
    }
}

function validatateEmail()
{
    let inputEmail = $('#emailId').val();
    let resultDiv = $('#result');
    let EmailRegex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if (EmailRegex.test(inputEmail)) {
        $.ajax({
            type: "POST",
            url: 'http://localhost/softSerbia/storeData.php',
            data: {
                inputEmail: inputEmail
            }, success: function (response) {
                let parseData = jQuery.parseJSON(response);
                resultDiv.append("Ime i prezime: " + parseData.firstName)
                resultDiv.append("Mail: " + parseData.inputEmail)
                window.location.href = "http://localhost/softSerbia/step3.php";
            },
        });
    } else {
        $('#hiddenEmailValidation').text("Unesite mail (primer.primer@primer.com).");
        $('#hiddenEmailValidation').css("color", "red");
        $('#hiddenEmailValidation').removeClass("hidden");
    }
}

function validatateCheckBoxValidation()
{
    let checkBoxStatus = $('#flexCheckDefault').is(":checked");
    if (checkBoxStatus){
        $.ajax({
            type: "POST",
            url: 'http://localhost/softSerbia/storeData.php', data: {
                step4: true
            }, success: function () {
                window.location.href = "http://localhost/softSerbia/step4.php";
            },
        });
    } else {
        $('#hiddenCheckBoxValidation').text("Molimo prihvatite uslove registracije!");
        $('#hiddenCheckBoxValidation').css("color", "red");
        $('#hiddenCheckBoxValidation').removeClass("hidden");
    }
}

function clearData()
{
    $('#result').empty()
}