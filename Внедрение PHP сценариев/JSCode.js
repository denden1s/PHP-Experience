function CatchException(){
    inputData = document.getElementById("InputData")
    comboboxConvertFrom = document.getElementById("ConvertFrom")
    comboboxConvertTo = document.getElementById("ConvertTo")

    //Необходимо для обнуления при повторном использовании метода
    inputData.style.backgroundColor = "Transparent"
    comboboxConvertTo.style.backgroundColor = "Transparent"
    comboboxConvertFrom.style.backgroundColor = "Transparent"
    
    isNull = false
    isException = false
    IsSelectTypeToConvert = false

    if (comboboxConvertFrom.value == 0){
        document.getElementById("ConvertFrom").style.backgroundColor = "Red"
        alert("Не выбрано из какой размерности производить конвертацию")
    } 

     if (comboboxConvertTo.value == 0){
        comboboxConvertTo.style.backgroundColor = "Red"
        alert("Не выбрано в какую размерность производить конвертацию")
    }

    if(comboboxConvertFrom.value != 0 && comboboxConvertTo.value != 0) {
        IsSelectTypeToConvert = true
    }
    
    if(inputData.value.toString().length == 0){
        isNull = true
        inputData.focus()
        inputData.style.backgroundColor = "Red"
        alert("Поле не заполнено")
    }
    else {
        if(isNaN(inputData.value)){
            isException = true
            inputData.focus()
            alert("Введённое значение не является числом")
            inputData.style.backgroundColor = "Red"
        } 
    }

     if (!isNull && !isException && IsSelectTypeToConvert){
        try {
            alert("Все элементы прошли проверку")
            inputData.style.backgroundColor = "Transparent"
            comboboxConvertTo.style.backgroundColor = "Transparent"
            comboboxConvertFrom.style.backgroundColor = "Transparent"
            //метод перевода
        } catch (error) {
            alert(error)
        }
    }
}
             
function randomInteger(min, max) {
    // получить случайное число от (min-0.5) до (max+0.5)
    var rand = min - 0.5 + Math.random() * (max - min + 1);
    return Math.round(rand);
}


function SetRandomStyle(){
    var backColor = $('body').css('background-color')
    backColor = "rgb("+ randomInteger(0, 255) + "," + randomInteger(0, 255) + "," + randomInteger(0, 255) + ")";
    
}