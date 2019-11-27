function validateForm() {

    var x = document.forms["myForm"]["login"].value;
    if (x == "")
    {
        alert("Необходимо ввести login!");
        return false;
    }
    var x = document.forms["myForm"]["password1"].value;
    if (x == "")
    {
        alert("Необходимо ввести пароль!");
        return false;
    }
        var x = document.forms["myForm"]["password2"].value;
        if (x == "")
    {
        alert("Необходимо подтвердить введенный пароль!");
        return false;
    }
} 
