<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <section>
            <div>
                <h2>Iniciar sesion</h2>
                <form method="post" action="<?= site_url('/auth/login') ?>">
                    <input type="email" name="email" placeholder="Correo" require><br>
                    <input type="password" name="password" placeholder="Contraseña" require><br>
                    <button type="submit">Iniciar sesion</button>
                    <a href="<?= site_url('/auth/register') ?>">Crear cuenta</button>
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