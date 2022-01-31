function JSCalculator()
{
    //Valores
    var x1 = document.getElementById("Number1").value;
    var x2 = document.getElementById("Number2").value;

    const num1 = parseInt(x1);
    const num2 = parseInt(x2);
    
    if(document.getElementById("plus").checked)
    {
        const sum = prompt(num1 + num2);
    }

    if(document.getElementById("minus").checked)
    {
        const minus = prompt(num1 - num2);
    }

    if(document.getElementById("division").checked)
    {
        const division = prompt(num1 / num2);
    }

    if(document.getElementById("multi").checked)
    {
        const multi = prompt(num1 * num2);
    }

}