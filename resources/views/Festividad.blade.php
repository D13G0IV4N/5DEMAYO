<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Batalla del 5 de mayo</title>
    <link rel="stylesheet" href="festividad.css">
</head>
<body>
    <header>
        <img id="header-image" src="5may.jpg" alt="Imagen de encabezado">
    </header>
    <main>
        <section>
            <h2>¿Qué es la Batalla del 5 de mayo?</h2>
            <p>La Batalla del 5 de mayo, también conocida como la Batalla de Puebla, 
                fue un enfrentamiento histórico que tuvo lugar el 5 de mayo de 1862 en la ciudad de Puebla, México. 
                En esta batalla, el ejército mexicano, liderado por el general Ignacio Zaragoza, 
                logró una victoria sorprendente sobre el ejército francés, que era considerado uno de los más 
                poderosos del mundo en ese momento. Aunque la victoria mexicana no detuvo por completo la invasión 
                francesa, se convirtió en un símbolo de la resistencia y la determinación del pueblo mexicano contra 
                la intervención extranjera.</p>
            <img src="{{ asset('pelea.jpeg') }}" alt="Batalla del 5 de mayo">
        </section>
        <section>
            <h2>¿Por qué se celebra?</h2>
            <p>La Batalla del 5 de mayo se celebra en México como un símbolo de la resistencia 
                y la determinación del pueblo mexicano frente a la invasión extranjera. 
                Aunque la victoria mexicana en esta batalla fue una victoria simbólica y 
                no detuvo completamente la invasión francesa, se considera un momento crucial en 
                la historia de México. Esta celebración resalta el orgullo nacional y la valentía de 
                los combatientes mexicanos que defendieron su tierra contra las fuerzas invasoras.</p>
            <img src="{{ asset('celebracion.webp') }}" alt="Celebración del 5 de mayo">
        </section>
        <section>
            <h2>Actividades</h2>
            <p>¡Celebra el 5 de mayo aprendiendo más sobre la historia y la cultura de México! 
                Aquí tienes algunas ideas:</p>
            <ul>
                <li>Investiga más sobre la Batalla del 5 de mayo y su impacto en la historia de México.</li>
                <li>Prepara o disfruta de comida mexicana tradicional, como tacos, enchiladas o guacamole.</li>
                <li>Disfruta de música mexicana, como mariachi o música regional mexicana.</li>
                <li>Visita un museo o monumento relacionado con la historia de México.</li>
            </ul>
            <img src="{{ asset('Act5.webp') }}" alt="Imagen de actividades para celebrar el 5 de mayo">
        </section>
        <!-- Agregamos el formulario con validación -->
        <section>
            <h2>Encuesta</h2>
            <form id="encuestaForm" action="{{ route('guardar_encuesta') }}" method="POST">
                @csrf <!-- Token de seguridad -->
                
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <label for="festejas">¿Festejas el 5 de Mayo?</label><br>
                <input type="radio" id="si" name="festejas" value="si">
                <label for="si">Sí</label>
                <input type="radio" id="no" name="festejas" value="no">
                <label for="no">No</label><br><br>
                
                <label for="porque">¿Por qué?</label><br>
                <textarea id="porque" name="porque" rows="4" cols="50"></textarea><br><br>
                
                <input type="submit" value="Enviar">
            </form>
        </section>
    </main>
    <footer>
        <p>© 2024 Batalla del 5 de mayo - Diego Ivan .</p>
    </footer>

   
</body>
</html>