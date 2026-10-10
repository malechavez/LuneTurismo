
    
    <?= $this->extend('Layouts/LayoutAdmin') ?>
    <?= $this->section('cssExtra') ?>
        <link rel="stylesheet" href="<?= base_url('css/admin/accommodations/createEdit.css') ?>">
    <?= $this->endSection() ?>
    <?= $this->section('content') ?>
        <h1 class=title>Editando alojamiento <?= $accommodation['id'] ?></h1>
        <div class="formulario">
            <form method="post" action="<?= site_url('/accommodations/update/') . $accommodation['id'] ?>" >
                
                <div class="form">
                    <label class="form-label">Nombre:</label>
                    <input type="text" name="name" value="<?= $accommodation['name'] ?>" required><br>
                </div>

                <div class="form">
                    <label class="form-label">Categoria:</label>
                    <select name="category" required>
                        <option value= "">Seleccioná una categoría</option>
                        <option value="Hotel" <?= $accommodation['category'] == "Hotel" ? 'selected' : '' ?>>Hotel</option>
                        <option value="Hotel boutique" <?= $accommodation['category'] == "Hotel boutique" ? 'selected' : '' ?>>Hotel boutique</option>
                        <option value="Apart-hotel" <?= $accommodation['category'] == "Apart-hotel" ? 'selected' : '' ?>>Apart-hotel</option>
                        <option value="Departamento temporario" <?= $accommodation['category'] == "Departamento temporario" ? 'selected' : '' ?>>Departamento temporario</option>
                        <option value="Hostel" <?= $accommodation['category'] == "Hostel" ? 'selected' : '' ?>>Hostel</option>
                        <option value="Bed & Breakfast" <?= $accommodation['category'] == "Bed & Breakfast" ? 'selected' : '' ?>>Bed & Breakfast</option>
                        <option value="Hospedaje" <?= $accommodation['category'] == "Hospedaje" ? 'selected' : '' ?>>Hospedaje / residencial turístico</option>
                    </select>
                </div>

                <div class="form">
                    <label class="form-label">Locacion:</label>
                    <select name="location" required>
                        <option value="">Seleccioná un barrio</option>
                        <option value="Agronomía" <?= $accommodation['location'] == 'Agronomía' ? 'selected' : '' ?>>Agronomía</option>
                        <option value="Almagro" <?= $accommodation['location'] == 'Almagro' ? 'selected' : '' ?>>Almagro</option>
                        <option value="Balvanera" <?= $accommodation['location'] == 'Balvanera' ? 'selected' : '' ?>>Balvanera</option>
                        <option value="Barracas" <?= $accommodation['location'] == 'Barracas' ? 'selected' : '' ?>>Barracas</option>
                        <option value="Belgrano" <?= $accommodation['location'] == 'Belgrano' ? 'selected' : '' ?>>Belgrano</option>
                        <option value="Boedo" <?= $accommodation['location'] == 'Boedo' ? 'selected' : '' ?>>Boedo</option>
                        <option value="Caballito" <?= $accommodation['location'] == 'Caballito' ? 'selected' : '' ?>>Caballito</option>
                        <option value="Chacarita" <?= $accommodation['location'] == 'Chacarita' ? 'selected' : '' ?>>Chacarita</option>
                        <option value="Coghlan" <?= $accommodation['location'] == 'Coghlan' ? 'selected' : '' ?>>Coghlan</option>
                        <option value="Colegiales" <?= $accommodation['location'] == 'Colegiales' ? 'selected' : '' ?>>Colegiales</option>
                        <option value="Constitución" <?= $accommodation['location'] == 'Constitución' ? 'selected' : '' ?>>Constitución</option>
                        <option value="Flores" <?= $accommodation['location'] == 'Flores' ? 'selected' : '' ?>>Flores</option>
                        <option value="Floresta" <?= $accommodation['location'] == 'Floresta' ? 'selected' : '' ?>>Floresta</option>
                        <option value="La Boca" <?= $accommodation['location'] == 'La Boca' ? 'selected' : '' ?>>La Boca</option>
                        <option value="La Paternal" <?= $accommodation['location'] == 'La Paternal' ? 'selected' : '' ?>>La Paternal</option>
                        <option value="Liniers" <?= $accommodation['location'] == 'Liniers' ? 'selected' : '' ?>>Liniers</option>
                        <option value="Mataderos" <?= $accommodation['location'] == 'Mataderos' ? 'selected' : '' ?>>Mataderos</option>
                        <option value="Monte Castro" <?= $accommodation['location'] == 'Monte Castro' ? 'selected' : '' ?>>Monte Castro</option>
                        <option value="Montserrat" <?= $accommodation['location'] == 'Montserrat' ? 'selected' : '' ?>>Montserrat</option>
                        <option value="Nueva Pompeya" <?= $accommodation['location'] == 'Nueva Pompeya' ? 'selected' : '' ?>>Nueva Pompeya</option>
                        <option value="Núñez" <?= $accommodation['location'] == 'Núñez' ? 'selected' : '' ?>>Núñez</option>
                        <option value="Palermo" <?= $accommodation['location'] == 'Palermo' ? 'selected' : '' ?>>Palermo</option>
                        <option value="Parque Avellaneda" <?= $accommodation['location'] == 'Parque Avellaneda' ? 'selected' : '' ?>>Parque Avellaneda</option>
                        <option value="Parque Chacabuco" <?= $accommodation['location'] == 'Parque Chacabuco' ? 'selected' : '' ?>>Parque Chacabuco</option>
                        <option value="Parque Chas" <?= $accommodation['location'] == 'Parque Chas' ? 'selected' : '' ?>>Parque Chas</option>
                        <option value="Parque Patricios" <?= $accommodation['location'] == 'Parque Patricios' ? 'selected' : '' ?>>Parque Patricios</option>
                        <option value="Puerto Madero" <?= $accommodation['location'] == 'Puerto Madero' ? 'selected' : '' ?>>Puerto Madero</option>
                        <option value="Recoleta" <?= $accommodation['location'] == 'Recoleta' ? 'selected' : '' ?>>Recoleta</option>
                        <option value="Retiro" <?= $accommodation['location'] == 'Retiro' ? 'selected' : '' ?>>Retiro</option>
                        <option value="Saavedra" <?= $accommodation['location'] == 'Saavedra' ? 'selected' : '' ?>>Saavedra</option>
                        <option value="San Cristóbal" <?= $accommodation['location'] == 'San Cristóbal' ? 'selected' : '' ?>>San Cristóbal</option>
                        <option value="San Nicolás" <?= $accommodation['location'] == 'San Nicolás' ? 'selected' : '' ?>>San Nicolás</option>
                        <option value="San Telmo" <?= $accommodation['location'] == 'San Telmo' ? 'selected' : '' ?>>San Telmo</option>
                        <option value="Versalles" <?= $accommodation['location'] == 'Versalles' ? 'selected' : '' ?>>Versalles</option>
                        <option value="Villa Crespo" <?= $accommodation['location'] == 'Villa Crespo' ? 'selected' : '' ?>>Villa Crespo</option>
                        <option value="Villa Devoto" <?= $accommodation['location'] == 'Villa Devoto' ? 'selected' : '' ?>>Villa Devoto</option>
                        <option value="Villa General Mitre" <?= $accommodation['location'] == 'Villa General Mitre' ? 'selected' : '' ?>>Villa General Mitre</option>
                        <option value="Villa Lugano" <?= $accommodation['location'] == 'Villa Lugano' ? 'selected' : '' ?>>Villa Lugano</option>
                        <option value="Villa Luro" <?= $accommodation['location'] == 'Villa Luro' ? 'selected' : '' ?>>Villa Luro</option>
                        <option value="Villa Ortúzar" <?= $accommodation['location'] == 'Villa Ortúzar' ? 'selected' : '' ?>>Villa Ortúzar</option>
                        <option value="Villa Pueyrredón" <?= $accommodation['location'] == 'Villa Pueyrredón' ? 'selected' : '' ?>>Villa Pueyrredón</option>
                        <option value="Villa Real" <?= $accommodation['location'] == 'Villa Real' ? 'selected' : '' ?>>Villa Real</option>
                        <option value="Villa Riachuelo" <?= $accommodation['location'] == 'Villa Riachuelo' ? 'selected' : '' ?>>Villa Riachuelo</option>
                        <option value="Villa Santa Rita" <?= $accommodation['location'] == 'Villa Santa Rita' ? 'selected' : '' ?>>Villa Santa Rita</option>
                        <option value="Villa Soldati" <?= $accommodation['location'] == 'Villa Soldati' ? 'selected' : '' ?>>Villa Soldati</option>
                        <option value="Villa Urquiza" <?= $accommodation['location'] == 'Villa Urquiza' ? 'selected' : '' ?>>Villa Urquiza</option>
                        <option value="Villa del Parque" <?= $accommodation['location'] == 'Villa del Parque' ? 'selected' : '' ?>>Villa del Parque</option>
                        <option value="Vélez Sarsfield" <?= $accommodation['location'] == 'Vélez Sarsfield' ? 'selected' : '' ?>>Vélez Sarsfield</option>
                    </select>
                </div>

                <div class="form">
                    <label class="form-label">Establecimientos disponibles:</label>
                    <input type="number" name="available_slots"  value="<?= $accommodation['available_slots'] ?>" required><br>
                </div>

                <div class="form">
                    <label class="form-label">Cantidad maxima de personas:</label>
                    <input type="number" name="people"  value="<?= $accommodation['people'] ?>" required><br>
                </div>

                <div class="form">
                    <label class="form-label">Precio:</label>
                    <input type="number" name="price"  step="0.01"  value="<?= $accommodation['price'] ?>" required><br>
                </div>

                <div class="form">
                    <label class="form-label">Descripcion:</label>
                    <textarea name="description" rows="4"><?= esc($accommodation['description']) ?></textarea>                
                </div>

                <div class="form">
                    <label class="form-label">Imagen 1:</label>
                    <input type="file" name="image1" accept="image/*"><br>
                </div>

                <div class="form">
                    <label class="form-label">Imagen 2:</label>
                    <input type="file" name="image2" accept="image/*"><br>
                </div>

                <div class="form">
                    <label class="form-label">Imagen 3:</label>
                    <input type="file" name="image3" accept="image/*"><br>
                </div>

                <button type="submit">Editar</button>
            </form>
        </div>
    <?= $this->endSection() ?>
