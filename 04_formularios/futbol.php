<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Futbol</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <?php
        error_reporting( E_ALL );
        ini_set("display_errors", 1 );  
    ?>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>
<!-- Nombre (letras con tilde, ñ, espacios en blanco y punto)
- Iniciales (3 letras)
- Liga (select con las opciones: Liga EA Sports, Liga Hypermotion, Liga Primera RFEF)
- Ciudad (letras con tilde, ñ, c y espacios en blanco)
- Tiene título de liga (select con si o no)
- Fecha de fundación (entre hoy y el 18 de diciembre de 1899)
- Número de jugadores (entre 19 y 32) -->

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $tmp_nombre = $_POST["nombre"];
            $tmp_iniciales = $_POST["iniciales"]
            $tmp_liga = $_POST["liga"];
            $tmp_ciudad = $_POST["ciudad"];
            $tmp_titulo = $_POST["titulo"];
            $tmp_fecha_fundacion = $_POST["fecha_fundacion"];
            $tmp_jugadores = $_POST["jugadores"];

        //NOMBRE
        if($tmp_nombre == '') {
            $err_nombre = "El nombre es obligatorio";
        } else {
            //  letras, espacios en blanco y tildes
            $patron = "/^[a-zA-Z áéióúÁÉÍÓÚñÑüÜ]+$/";
            if(!preg_match($patron, $tmp_nombre)) {
                $err_nombre = "El nombre solo puede contener letras y espacios en blanco";
            } else {
                    $nombre = ucwords(strtolower($tmp_nombre));
             }
        }

        //INICIALES
        if(strlen($tmp_iniciales) < 3 || strlen($tmp_iniciales > 3)) {
            $err_nombre = "Las iniciales deben ser 3.";
        } else {
            //  letras de la A a la Z (mayus)
            $patron = "/^[A-Z]$/";
            if(!preg_match($patron, $tmp_iniciales)) {
                $err_iniciales = "Las iniciales deben ser 3 letras.";
            } else {
                $iniciales = $tmp_iniciales;
            }
        }

        //LIGA
        if($tmp_liga = ''){
            $err_liga = "La liga es obligatoria";
        } else {
            $ligas_validas = ["Liga EA Sports","Liga Hypermotion","Liga Primera RFEF"];
            if(!in_array($tmp_liga,$ligas_validas)){
                $err_liga = "La liga no es válida";
            }
            else{
                $liga = $tmp_liga;
            }
        }

        //CIUDAD
        if($tmp_ciudad == '') {
            $err_ciudad = "La ciudad es obligatorio";
        } else {
                //  letras, espacios en blanco y tildes
                $patron = "/^[a-zA-Z áéióúÁÉÍÓÚñÑüÜ]+$/";
                if(!preg_match($patron, $tmp_ciudad)) {
                    $err_ciudad = "La ciudad solo puede contener letras y espacios en blanco";
                } else {
                    $ciudad = ucwords(strtolower($tmp_ciudad));
                }
            }
        }

        //TITULO
        if($tmp_titulo = ''){
            $err_titulo = "El titulo es obligatorio";
        } else {
            $titulos_validos = ["si","no"];
            if(!in_array($tmp_titulo,$titulos_validos)){
                $err_titulo = "El titulo no es válido";
            }
            else{
                $titulo = $tmp_titulo;
            }
        }

        //FECHA FUNDACION (entre hoy y el 18 de diciembre de 1899)
        if($tmp_fecha_fundacion = ''){
            $err_fecha_fundacion = "La fecha de fundacion es obligatoria";
        } else {
            $patron = "/^[0-9]{4}\-[0-9]{2}\-[0-9]{2}$/";
            if(!preg_match($patron, $tmp_fecha_fundacion)) {
                $err_fecha_fundacion = "Formato de fecha incorrecto";
            }
            else{
                list($anno_fundacion,$mes_fundacion,$dia_fundacion) = explode('-',$tmp_fecha_fundacion);
                if($anno_fundacion < 1899) {
                    $err_fecha_fundacion = "El año no puede ser anterior a 1947";
                    $anno_actual = date("Y");
                    $mes_actual = date("m");
                    $dia_actual = date("d");

                    if($anno_fundacion - $anno_actual < 5){
                        $fecha_fundacion = "La fecha debe ser anterior a dentro de 5 años";
                    } elseif($anno_lanzamiento - $anno_actual > 5){
                        $err_fecha_lanzamiento = $tmp_fecha_lanzamiento;
                    } elseif($anno_lanzamiento - $anno_actual == 5) {
                        if($mes_lanzamiento - $mes_actual < 0){
                            $fecha_lanzamiento = $tmp_fecha_lanzamiento;
                        } elseif($mes_lanzamiento - $mes_actual > 0){
                            $err_fecha_lanzamiento = "La fecha debe ser anterior a dentro de 5 años";
                        } elseif($mes_lanzamiento - $mes_actual == 0){
                            if($dia_lanzamiento - $dia_actual <= 0){
                                $fecha_lanzamiento = $tmp_fecha_lanzamiento;
                            } elseif($dia_lanzamiento - $dia_actual > 0){
                                $err_fecha_lanzamiento = "La fecha deber ser anterior a dentro de 5 años";
                            }
                        }
                    }
                }
            }
        }

        //JUGADORES
        if($tmp_jugadores == '') {
            $err_jugadores = "El usuario es obligatorio";
        } else {
            //  letras de la A a la Z (mayus o minus), numeros y barrabaja (4-12 chars)
            $patron = "/^[0-9]$/";
            if(!preg_match($patron, $tmp_jugadores)) {
                $err_jugadores = "El numero de jugadores solo puede componerse de números";
            } else {
                $jugadores = $tmp_jugadores;
            }
        }





        
    ?>





    <div class="container">
        <form class="col-4" action="" method="post">
            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input class="form-control" type="text" name="nombre">
                <?php if(isset($err_nombre)) echo "<span class='error'>$err_nombre</span>" ?>
            </div>
            <div class="mb-3">
                <label class="form-label">Iniciales</label>
                <input class="form-control" type="text" name="iniciales">
                <?php if(isset($err_iniciales)) echo "<span class='error'>$err_iniciales</span>"?>
            </div>
            <div class="mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="liga" value="Liga EA Sports">
                    <label class="form-check-label">Liga EA Sports</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="liga" value="Liga Hypermotion">
                    <label class="form-check-label">Liga Hypermotion</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="liga" value="Liga Primera RFEF">
                    <label class="form-check-label">Liga Primera RFEF</label>
                </div>
                <?php if(isset($err_liga)) echo "<span class='error'>$err_liga</span>"?>
            </div>
            <div class="mb-3">
                <label class="form-label">Ciudad</label>
                <input class="form-control" type="text" name="ciudad">
                <?php if(isset($err_ciudad)) echo "<span class='error'>$err_ciudad</span>" ?>
            </div>
            <div class="mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="titulo" value="si">
                    <label class="form-check-label">Si</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="titulo" value="no">
                    <label class="form-check-label">No</label>
                </div>
                <?php if(isset($err_titulo)) echo "<span class='error'>$err_titulo</span>"?>
            </div>
            <div class="mb-3">
                <label class="form-label">Fecha de fundación</label>
                <input class="form-control" type="date" name="fecha_fundacion">
                <?php if(isset($err_fecha_fundacion)) echo "<span class='error'>$err_fecha_fundacion</span>" ?>
            </div>
            <div class="mb-3">
                <label class="form-label">Nº de Jugadores</label>
                <input class="form-control" type="text" name="jugadores">
                <?php if(isset($err_jugadores)) echo "<span class='error'>$err_jugadores</span>"?>
            </div>
            <div class="mb-3">
                <input class="btn btn-primary" type="submit" value="Enviar">
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
<!-- Málaga C.F.

Equipos de la liga


