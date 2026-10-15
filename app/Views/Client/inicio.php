<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?= $this->extend('Layouts/LayoutUser') ?>
    <?= $this->section('content') ?>
    <main class="flex-grow-1">
        <!--------------------            Imagen de presentacion ----------------------->
        <section class="bg-image d-flex align-items-center justify-content-center text-center text-white">
            <div class="container">
                <h2 class="display-3 fw-bold">Actividades</h1>
                    <p class="fg-danger">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas quis iste, ut, exercitationem totam libero ipsa quibusdam aspernatur culpa amet, dicta accusantium sint aliquam praesentium. Harum nemo quam maxime ipsum.</p>
            </div>
        </section>

        <!--------------------            Cards de actividades ----------------------->
        <section class="d-flex w-100 justify-content-center">
            <div class="d-flex flex-column" style="width: 60%;">
                <div class="m-auto my-2 max-w-100">
                    <?php foreach ($activities as $u): ?>
                        <?= view('Partials/CardActivity', ['activity' => $u]) ?>
                    <?php endforeach; ?>    
                </div>
                <div class="mx-3 my-2">
                    <a href="#">Ver mas...</a>
                </div>
            </div>

        </section>

        <!--------------------            Card de alojamientos ----------------------->

        <section class="d-flex align-items-center justify-content-center text-center m-5">
            <div class="container">
                <h2 class="display-3 fw-bold">Alojamientos</h1>
                    <p class="fg-danger">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas quis iste, ut, exercitationem totam libero ipsa quibusdam aspernatur culpa amet, dicta accusantium sint aliquam praesentium. Harum nemo quam maxime ipsum.</p>
            </div>
        </section>

        <section class="d-flex w-100 justify-content-center">
            <section class="d-flex w-100 justify-content-center">
            <div class="d-flex flex-column" style="width: 60%;">
                <div class="m-auto my-2 max-w-100">
                    <?php foreach ($accommodations as $u): ?>
                            <?= view('Partials/CardAccommodations', ['accommodation' => $u]) ?>
                        <?php endforeach; ?>   
                </div>
                <div class="mx-3 my-2">
                    <a href="#">Ver mas...</a>
                </div>
            </div>
        </section>

    </main>
    <?= $this->endSection() ?>

</body>
                        
</html>