function ValidateForm() {

    var x = document.forms["Form"]["assessment"].value;
    if (x == "")
    {
        alert("Необходимо ввести оценку!");
        return false;
    }
        var adr_pattern = /^([1-9]|10)$/;
        if (adr_pattern.test(x) == false)
    {
        alert("Вы ввели некорректую оценку! Введите оценку от 1 до 10.");
        return false;
    }

    var x = document.forms["Form"]["review"].value;
    if (x == "")
    {
        alert("Необходимо ввести отзыв!");
        return false;
    }

    var x = document.forms["Form"]["myFile"].value;
    if (x == "")
    {
        alert("Необходимо выбрать файл!");
        return false;
    }
                        
}
