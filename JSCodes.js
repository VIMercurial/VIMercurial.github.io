/*
function Inicializador()
{
    JSClock();
}
*/

function JSCalculator()
{

    var x1 = document.getElementById("Number1").value;
    var x2 = document.getElementById("Number2").value;

    var num1 = parseInt(x1);
    var num2 = parseInt(x2);
    
    if(document.getElementById("plus").checked)
    {
        var sum = alert(num1 + num2);
    }

    if(document.getElementById("minus").checked)
    {
        var minus = alert(num1 - num2);
    }

    if(document.getElementById("division").checked)
    {
        var division = alert(num1 / num2);
    }

    if(document.getElementById("multi").checked)
    {
        var multi = alert(num1 * num2);
    }

}

window.onload = function JS_Clock()
{
    var Segundinhos = new Date();
    var Tempo = document.getElementById("Reloginho").innerText = Segundinhos;
}