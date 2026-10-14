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
                    <div class="card mx-3 my-2">
                        <img src="#" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="card-title">Museo bellas artes</h4>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer d-flex flex-row-reverse">
                            <a href="#">Reservar</a>
                        </div>
                    </div>
                    <div class="card mx-3 my-2">
                        <img src="#" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        </div>
                        <div class="card-footer d-flex flex-row-reverse">
                            <a href="#">Reservar</a>
                        </div>
                    </div>
                    <div class="card mx-3 my-2">
                        <img src="#" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        </div>
                        <div class="card-footer d-flex flex-row-reverse">
                            <a href="#">Reservar</a>
                        </div>
                    </div>
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
            <div class="d-flex flex-column" style="width: 60%;">
                <div class="m-auto my-2">
                    <div class="card mx-3 my-2">
                        <img src="#" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="card-title">Museo bellas artes</h4>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer d-flex flex-row-reverse">
                            <a href="#">Reservar</a>
                        </div>
                    </div>
                    <div class="card border-start mx-3 my-2">
                        <img src="#" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        </div>
                        <div class="card-footer d-flex flex-row-reverse">
                            <a href="#">Reservar</a>
                        </div>
                    </div>
                    <div class="card border-start mx-3 my-2">
                        <img src="#" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        </div>
                        <div class="card-footer d-flex flex-row-reverse">
                            <a href="#">Ver detalle</a>
                        </div>                    </div>
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