<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zapateria</title>
</head>
<body>
    <h1 >Zapateria la sangileña</h1>
    <?php
    echo "hola";
    ?>
    <div id="div_inicio_sesion">
        <form  action="modelo/loguear.php" method="post">
            <input type="text" name="usuario" id="" placeholder = "Usuario" require>
            <br>
            <input type = "password" name="clave" id="" placeholder = "Contraseña" require>
            <br>
            <button type = "submit">Ingresar</button>
        </form> 
        <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f0f4f8;
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h1 {
            margin-bottom: 20px;
            color: #4CAF50;
        }

        #div_inicio_sesion {
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: border 0.3s;
        }

        input[type="text"]:focus, input[type="password"]:focus {
            border: 1px solid #4CAF50;
            outline: none;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>

    
</style>
    </div>
</body>
</html>