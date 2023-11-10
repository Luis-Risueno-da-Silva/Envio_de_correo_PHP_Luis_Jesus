<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Variable Mail</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/styles.css">
    </head>
    
    <!-- Inicio del body -->
    <body class="body">
        
        <h1>Uso de "mail"</h1>
        <p>Curso: 2º DAW</p>
        <p>Módulo: Desarrollo web en entorno servidor (DWES)</p>
        
        <!-- Inicio del main -->
        <main class="main">
            <hr>

            <form method="post" action="./pages/envio.php">
                
                <!-- Mail -->
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name="email">
                </div>
                
                <!-- Asunto -->
                <div class="mb-3">
                    <label class="form-label">Asunto</label>
                    <input type="text" class="form-control" name="asunto">
                </div>
                
                <!-- Cuerpo -->
                <div class="mb-3">
                    <label class="form-label">Mensaje</label>
                    <input type="text" class="form-control" name="cuerpo">
                </div>
                
                <button type="submit" class="btn btn-primary" name="enviar">Enviar</button>
            </form>
            
            
            
        </main>
        <!-- Fin del main-->
        
    </body>
    <!-- Final del body-->
    
</html>
