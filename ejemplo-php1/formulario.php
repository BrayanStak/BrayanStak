<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Nota Final</title>
    <script>
        function validarFormulario() {
            var campos = document.querySelectorAll('input[type="number"]');
            for (var i = 0; i < campos.length; i++) {
                var valor = parseFloat(campos[i].value);
                if (isNaN(valor) || valor < 0 || valor > 5) {
                    alert("Las notas deben estar entre 0 y 5.");
                    return false;
                }
            }
            return true;
        }
    </script>
</head>
<body>
    <h1>Formulario para Calcular Nota Final</h1>
    <style>
        
        body {
            display: flex;
            flex-direction: column;
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #145c7a;
        }
        form {
            background-color: #2c4466;
            padding: 20px;
            border-radius: 10px;
            margin: 0 auto;
        }
        input {
            padding: 10px;
            margin: 5px 0;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;   

            border-radius: 4px;
            cursor: pointer;

        }

        .formText {
            font-weight: 600
        }

        .formBar {
            display: flex;
            flex-direction: column;
        }
    </style>

    <form action="calcular.php" method="post">
        <div class="formBar">
        <label class="formText" for="parcial1">Nota del Primer Parcial:</label>
        <input type="number" id="parcial1" name="parcial1" step="0.01" required>
        </div>
        
        <div class="formBar">
        <label class="formText" for="parcial2">Nota del Segundo Parcial:</label>
        <input type="number" id="parcial2" name="parcial2" step="0.01" required>
        </div>
        
        <div class="formBar">
        <label class="formText" for="parcial3">Nota del Tercer Parcial:</label>
        <input type="number" id="parcial3" name="parcial3" step="0.01" required>
        </div>
        
        <div class="formBar">
        <label class="formText" for="examen_final">Nota del Examen Final:</label>
        <input type="number" id="examen_final" name="examen_final" step="0.01" required>
        </div>  

        <div class="formBar">
        <label class="formText" for="trabajo_final">Nota del Trabajo Final:</label>
        <input type="number" id="trabajo_final" name="trabajo_final" step="0.01" required>
        </div>


        <input type="submit" value="Calcular Nota Final">
    </form>
</body>
</html>
