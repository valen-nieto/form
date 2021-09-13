<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>formulario</title>
</head>
<body>
<main>
        <h1>Musica clasica BA</h1>
        <form action="consulta.php" method="post">
            <div class="inline"> <label>Nombre:
            <input type="text" name="nombre" placeholder="Ingresa tu nombre" required>
        </label>
                <br> <br>
                
        <label>Apellido:
            <input type="text" name="apellido" placeholder="Ingresa tu apellido">
        </label> 
            </div>
<br> <br>
            <label>
            Fecha de nacimiento:
            <input type="date" name="date_of_birth">
        </label> <br><br>
            <label>¿Querés recibir la agenda cultural por email?</label>
            <br><br>
            <label>
        <input type="radio" name="notificaciones" value=si checked>si</label>
            <br>
            <label>
    <input type="radio" name="notificaciones" value=no>no
            <br><br>
            <label>Email:
                <input type="email" name="email" placeholder="ejemplo@hotmail.com">
            </label><br><br>


            <br><br>
            <label>Comentarios<br> <br>
<textarea name="Comentarios" cols="50" rows="10" maxlength="300" placeholder="inquietudes/dudas/sugerencias"></textarea>
    </label>
            <br><br>
            <label>
        <input type="checkbox" name="Acepto_terminos" value="Acepto términos y condiciones">Acepto términos y condiciones
    </label>
            <br><br>
            <div class="crear">
                <input type="submit" value="Enviar">
            </div>
        </form>
    </main>
</body>
</html>