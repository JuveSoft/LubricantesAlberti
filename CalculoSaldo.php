<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo saldo</title>
</head>
<body>
    <h1>Calcular saldo pagando con intereses</h1>

<button onclick="imprimirPagina();">Imprimir página</button>
    <button onclick="calcularSaldoPorPagos()">Calcular saldo por pagos</button>
    <script type="text/javascript">
        function calcularSaldoPorPagos() {
            var capital = parseInt(prompt("Introduce el capital "));
            var intereses = parseInt(prompt("introduce los intereses"));
            var valorCuota = parseInt(prompt("Valor de la cuota"));
            var cantCuotas = parseInt(prompt("Cantidad de cuotas"));
            var i = 0;

            while (i < cantCuotas) {
                var resultado = capital + (capital * (intereses / 100));
                var totalMenosCUota = resultado - valorCuota;

                capital = totalMenosCUota;
                //alert("En la cuota " + (i + 1) + " este es el resultado de capital restante mas intereses: " + " $ " + resultado);

                //alert("Resultado menos la cuota " + (i + 1) + " $" + totalMenosCUota);
                // alert("Capital parcial " + "$ " + capital);
                i++;
            }
            alert("Despues de " + i + " cuotas " + " quedan " + " $ " + capital);
        }


        function imprimirPagina() {
            window.print();
        }

    </script>
    
</body>
</html>