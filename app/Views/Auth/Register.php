<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
</head>
<body>
    <main>
        <section>
            <div>
                <h2>Crear usuario</h2>
                <form method="post" action="<?= site_url('/auth/store') ?>">
                    <input type="text" name="name" placeholder="Nombre" require><br>
                    <input type="text" name="surname" placeholder="apellido" require><br>
                    <input type="email" name="email" placeholder="Correo" require><br>
                    <input type="password" name="password" placeholder="Contraseña" require><br>
                    <input type="password" name="confirmpassword" placeholder="Repetir contraseña"><br>
                    <button type="submit">Guardar</button>
                </form>
            </div>
            
            <?php if(session()->getFlashdata('errors') !== null):?>
                <div>
                    <?= session()->getFlashdata('errors') ?>
                </div>   
            <?php endif; ?>
            
        </section>
    </main>
</body>
</html>