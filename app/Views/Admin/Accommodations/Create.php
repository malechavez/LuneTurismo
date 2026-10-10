
    
    <?= $this->extend('Layouts/LayoutAdmin') ?>
    <?= $this->section('cssExtra') ?>
        <link rel="stylesheet" href="<?= base_url('css/admin/accommodations/createEdit.css') ?>">
    <?= $this->endSection() ?>
    <?= $this->section('content') ?>
        <h1 class=title>Creación de alojamiento</h1>
        <div class="formulario">
            <form method="post" action="<?= site_url('/accommodations/store') ?>" enctype="multipart/form-data">
                <div class="form">
                    <label class="form-label">Nombre:</label>
                    <input type="text" name="name" required><br>
                </div>

                <div class="form">
                    <label class="form-label">Categoria:</label>
                    <select name="category" required>
                        <option value= "">Seleccioná una categoría</option>

                        <option value="Hotel">Hotel</option>
                        <option value="Hotel boutique">Hotel boutique</option>
                        <option value="Apart-hotel">Apart-hotel</option>
                        <option value="Departamento temporario">Departamento temporario</option>
                        <option value="Hostel">Hostel</option>
                        <option value="Bed & Breakfast">Bed & Breakfast</option>
                        <option value="Hospedaje">Hospedaje / residencial turístico</option>
                    </select>
                </div>

                <div class="form">
                    <label class="form-label">Locacion:</label>
                    <select name="location" required>
                        <option value="">Seleccioná un barrio</option>
                        <option value="Agronomía">Agronomía</option>
                        <option value="Almagro">Almagro</option>
                        <option value="Balvanera">Balvanera</option>
                        <option value="Barracas">Barracas</option>
                        <option value="Belgrano">Belgrano</option>
                        <option value="Boedo">Boedo</option>
                        <option value="Caballito">Caballito</option>
                        <option value="Chacarita">Chacarita</option>
                        <option value="Coghlan">Coghlan</option>
                        <option value="Colegiales">Colegiales</option>
                        <option value="Constitución">Constitución</option>
                        <option value="Flores">Flores</option>
                        <option value="Floresta">Floresta</option>
                        <option value="La Boca">La Boca</option>
                        <option value="La Paternal">La Paternal</option>
                        <option value="Liniers">Liniers</option>
                        <option value="Mataderos">Mataderos</option>
                        <option value="Monte Castro">Monte Castro</option>
                        <option value="Montserrat">Montserrat</option>
                        <option value="Nueva Pompeya">Nueva Pompeya</option>
                        <option value="Núñez">Núñez</option>
                        <option value="Palermo">Palermo</option>
                        <option value="Parque Avellaneda">Parque Avellaneda</option>
                        <option value="Parque Chacabuco">Parque Chacabuco</option>
                        <option value="Parque Chas">Parque Chas</option>
                        <option value="Parque Patricios">Parque Patricios</option>
                        <option value="Puerto Madero">Puerto Madero</option>
                        <option value="Recoleta">Recoleta</option>
                        <option value="Retiro">Retiro</option>
                        <option value="Saavedra">Saavedra</option>
                        <option value="San Cristóbal">San Cristóbal</option>
                        <option value="San Nicolás">San Nicolás</option>
                        <option value="San Telmo">San Telmo</option>
                        <option value="Versalles">Versalles</option>
                        <option value="Villa Crespo">Villa Crespo</option>
                        <option value="Villa Devoto">Villa Devoto</option>
                        <option value="Villa General Mitre">Villa General Mitre</option>
                        <option value="Villa Lugano">Villa Lugano</option>
                        <option value="Villa Luro">Villa Luro</option>
                        <option value="Villa Ortúzar">Villa Ortúzar</option>
                        <option value="Villa Pueyrredón">Villa Pueyrredón</option>
                        <option value="Villa Real">Villa Real</option>
                        <option value="Villa Riachuelo">Villa Riachuelo</option>
                        <option value="Villa Santa Rita">Villa Santa Rita</option>
                        <option value="Villa Soldati">Villa Soldati</option>
                        <option value="Villa Urquiza">Villa Urquiza</option>
                        <option value="Villa del Parque">Villa del Parque</option>
                        <option value="Vélez Sarsfield">Vélez Sarsfield</option>
                    </select>
                </div>

                <div class="form">
                    <label class="form-label">Establecimientos disponibles:</label>
                    <input type="number" name="available_slots" required><br>
                </div>

                <div class="form">
                    <label class="form-label">Cantidad maxima de personas:</label>
                    <input type="number" name="people" required><br>
                </div>

                <div class="form">
                    <label class="form-label">Precio:</label>
                    <input type="number" name="price"  step="0.01" required><br>
                </div>

                <div class="form">
                    <label class="form-label">Descripcion:</label>
                    <textarea name="description" rows="4" required></textarea>
                </div>

                <div class="form">
                    <label class="form-label">Imagen 1:</label>
                    <input type="file" name="image1" accept="image/*" required><br>
                </div>

                <div class="form">
                    <label class="form-label">Imagen 2:</label>
                    <input type="file" name="image2" accept="image/*"><br>
                </div>

                <div class="form">
                    <label class="form-label">Imagen 3:</label>
                    <input type="file" name="image3" accept="image/*"><br>
                </div>

                <button type="submit">Guardar</button>
            </form>
        </div>
    <?= $this->endSection() ?>

