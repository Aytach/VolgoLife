function validateForm() {

var x = document.forms["myForm"]["name"].value;
if (x == "")
{
    alert("Необходимо ввести название!");
    return false;
}
var adr_pattern = /\S/;
if (adr_pattern.test(x) == false)
{
    alert("Вы ввели некорректное название!");
    return false;
}


var x = document.forms["myForm"]["price"].value;
if (x == "")
{
    alert("Необходимо ввести стоимость выполненной работы!");
    return false;
}
var adr_pattern = /^\d+$/;
if (adr_pattern.test(x) == false)
{
    alert("Вы ввели некорректную цену!");
    return false;
}


var x = document.forms["myForm"]["description"].value;
if (x == "")
{
    alert("Необходимо ввести короткое описание товара!");
    return false;
}
var adr_pattern = /\S/;
if (adr_pattern.test(x) == false)
{
    alert("Вы ввели некорректное описание товара!");
    return false;
}

var x = document.forms["myForm"]["leadtime"].value;
if (x == "")
{
    alert("Необходимо ввести время выполнения заказа!");
    return false;
}
var adr_pattern = /([01]?[0-9]|2[0-3]):[0-5][0-9](:[0-5][0-9])?/;
if (adr_pattern.test(x) == false)
{
    alert("Вы ввели некорректное время!");
    return false;
}


var x = document.forms["myForm"]["email"].value;
if (x == "")
{
    alert("Необходимо ввести E-mail!");
    return false;
}
var adr_pattern = /[0-9a-z_-]+@[0-9a-z_-]+\.[a-z]{2,5}/i;
if (adr_pattern.test(x) == false)
{
    alert("Вы ввели E-mail неправильно!");
    return false;
}

}
