<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar actividad</title>
</head>

<body>

    <?= $this->extend('Layouts/Layout') ?>

    <?= $this->section('content') ?>
        <h1 class="title">Editando actividad <?=  $activity['id']?></h1>
        <div class="form">
            <form method="post" action="<?= site_url('/activities/update/' . $activity['id']) ?>">

                <label>Nombre:</label>
                <input type="text" name="name" value="<?= $activity['name'] ?>" required><br>

                <label>Categoría:</label>
                <select name="category" required>
                    <option value="">Seleccioná una categoría</option>

                    <option value="Cultural" <?= $activity['category'] == 'Cultural' ? 'selected' : '' ?>>Cultural</option>
                    <option value="Histórica" <?= $activity['category'] == 'Histórica' ? 'selected' : '' ?>>Histórica</option>
                    <option value="Gastronómica" <?= $activity['category'] == 'Gastronómica' ? 'selected' : '' ?>>Gastronómica</option>
                    <option value="Aire libre" <?= $activity['category'] == 'Aire libre' ? 'selected' : '' ?>>Aire libre</option>
                    <option value="Entretenimiento" <?= $activity['category'] == 'Entretenimiento' ? 'selected' : '' ?>>Entretenimiento</option>
                    <option value="Deportiva" <?= $activity['category'] == 'Deportiva' ? 'selected' : '' ?>>Deportiva</option>
                    <option value="Turística" <?= $activity['category'] == 'Turística' ? 'selected' : '' ?>>Turística</option>
                    <option value="Arte" <?= $activity['category'] == 'Arte' ? 'selected' : '' ?>>Arte</option>
                    <option value="Nocturna" <?= $activity['category'] == 'Nocturna' ? 'selected' : '' ?>>Nocturna</option>
                    <option value="Familiar" <?= $activity['category'] == 'Familiar' ? 'selected' : '' ?>>Familiar</option>
                </select>

                <label>Locación:</label>
                <select name="location" required>
                    <option value="">Seleccioná un barrio</option>

                    <option value="Agronomía" <?= $activity['location'] == 'Agronomía' ? 'selected' : '' ?>>Agronomía</option>
                    <option value="Almagro" <?= $activity['location'] == 'Almagro' ? 'selected' : '' ?>>Almagro</option>
                    <option value="Balvanera" <?= $activity['location'] == 'Balvanera' ? 'selected' : '' ?>>Balvanera</option>
                    <option value="Barracas" <?= $activity['location'] == 'Barracas' ? 'selected' : '' ?>>Barracas</option>
                    <option value="Belgrano" <?= $activity['location'] == 'Belgrano' ? 'selected' : '' ?>>Belgrano</option>
                    <option value="Boedo" <?= $activity['location'] == 'Boedo' ? 'selected' : '' ?>>Boedo</option>
                    <option value="Caballito" <?= $activity['location'] == 'Caballito' ? 'selected' : '' ?>>Caballito</option>
                    <option value="Chacarita" <?= $activity['location'] == 'Chacarita' ? 'selected' : '' ?>>Chacarita</option>
                    <option value="Coghlan" <?= $activity['location'] == 'Coghlan' ? 'selected' : '' ?>>Coghlan</option>
                    <option value="Colegiales" <?= $activity['location'] == 'Colegiales' ? 'selected' : '' ?>>Colegiales</option>
                    <option value="Constitución" <?= $activity['location'] == 'Constitución' ? 'selected' : '' ?>>Constitución</option>
                    <option value="Flores" <?= $activity['location'] == 'Flores' ? 'selected' : '' ?>>Flores</option>
                    <option value="Floresta" <?= $activity['location'] == 'Floresta' ? 'selected' : '' ?>>Floresta</option>
                    <option value="La Boca" <?= $activity['location'] == 'La Boca' ? 'selected' : '' ?>>La Boca</option>
                    <option value="La Paternal" <?= $activity['location'] == 'La Paternal' ? 'selected' : '' ?>>La Paternal</option>
                    <option value="Liniers" <?= $activity['location'] == 'Liniers' ? 'selected' : '' ?>>Liniers</option>
                    <option value="Mataderos" <?= $activity['location'] == 'Mataderos' ? 'selected' : '' ?>>Mataderos</option>
                    <option value="Monte Castro" <?= $activity['location'] == 'Monte Castro' ? 'selected' : '' ?>>Monte Castro</option>
                    <option value="Montserrat" <?= $activity['location'] == 'Montserrat' ? 'selected' : '' ?>>Montserrat</option>
                    <option value="Nueva Pompeya" <?= $activity['location'] == 'Nueva Pompeya' ? 'selected' : '' ?>>Nueva Pompeya</option>
                    <option value="Núñez" <?= $activity['location'] == 'Núñez' ? 'selected' : '' ?>>Núñez</option>
                    <option value="Palermo" <?= $activity['location'] == 'Palermo' ? 'selected' : '' ?>>Palermo</option>
                    <option value="Parque Avellaneda" <?= $activity['location'] == 'Parque Avellaneda' ? 'selected' : '' ?>>Parque Avellaneda</option>
                    <option value="Parque Chacabuco" <?= $activity['location'] == 'Parque Chacabuco' ? 'selected' : '' ?>>Parque Chacabuco</option>
                    <option value="Parque Chas" <?= $activity['location'] == 'Parque Chas' ? 'selected' : '' ?>>Parque Chas</option>
                    <option value="Parque Patricios" <?= $activity['location'] == 'Parque Patricios' ? 'selected' : '' ?>>Parque Patricios</option>
                    <option value="Puerto Madero" <?= $activity['location'] == 'Puerto Madero' ? 'selected' : '' ?>>Puerto Madero</option>
                    <option value="Recoleta" <?= $activity['location'] == 'Recoleta' ? 'selected' : '' ?>>Recoleta</option>
                    <option value="Retiro" <?= $activity['location'] == 'Retiro' ? 'selected' : '' ?>>Retiro</option>
                    <option value="Saavedra" <?= $activity['location'] == 'Saavedra' ? 'selected' : '' ?>>Saavedra</option>
                    <option value="San Cristóbal" <?= $activity['location'] == 'San Cristóbal' ? 'selected' : '' ?>>San Cristóbal</option>
                    <option value="San Nicolás" <?= $activity['location'] == 'San Nicolás' ? 'selected' : '' ?>>San Nicolás</option>
                    <option value="San Telmo" <?= $activity['location'] == 'San Telmo' ? 'selected' : '' ?>>San Telmo</option>
                    <option value="Versalles" <?= $activity['location'] == 'Versalles' ? 'selected' : '' ?>>Versalles</option>
                    <option value="Villa Crespo" <?= $activity['location'] == 'Villa Crespo' ? 'selected' : '' ?>>Villa Crespo</option>
                    <option value="Villa Devoto" <?= $activity['location'] == 'Villa Devoto' ? 'selected' : '' ?>>Villa Devoto</option>
                    <option value="Villa General Mitre" <?= $activity['location'] == 'Villa General Mitre' ? 'selected' : '' ?>>Villa General Mitre</option>
                    <option value="Villa Lugano" <?= $activity['location'] == 'Villa Lugano' ? 'selected' : '' ?>>Villa Lugano</option>
                    <option value="Villa Luro" <?= $activity['location'] == 'Villa Luro' ? 'selected' : '' ?>>Villa Luro</option>
                    <option value="Villa Ortúzar" <?= $activity['location'] == 'Villa Ortúzar' ? 'selected' : '' ?>>Villa Ortúzar</option>
                    <option value="Villa Pueyrredón" <?= $activity['location'] == 'Villa Pueyrredón' ? 'selected' : '' ?>>Villa Pueyrredón</option>
                    <option value="Villa Real" <?= $activity['location'] == 'Villa Real' ? 'selected' : '' ?>>Villa Real</option>
                    <option value="Villa Riachuelo" <?= $activity['location'] == 'Villa Riachuelo' ? 'selected' : '' ?>>Villa Riachuelo</option>
                    <option value="Villa Santa Rita" <?= $activity['location'] == 'Villa Santa Rita' ? 'selected' : '' ?>>Villa Santa Rita</option>
                    <option value="Villa Soldati" <?= $activity['location'] == 'Villa Soldati' ? 'selected' : '' ?>>Villa Soldati</option>
                    <option value="Villa Urquiza" <?= $activity['location'] == 'Villa Urquiza' ? 'selected' : '' ?>>Villa Urquiza</option>
                    <option value="Villa del Parque" <?= $activity['location'] == 'Villa del Parque' ? 'selected' : '' ?>>Villa del Parque</option>
                    <option value="Vélez Sarsfield" <?= $activity['location'] == 'Vélez Sarsfield' ? 'selected' : '' ?>>Vélez Sarsfield</option>
                </select>

                <label>Lugares disponibles:</label>
                <input type="number" name="available_slots" value="<?= $activity['available_slots'] ?>" required><br>

                <label>Precio:</label>
                <input type="number" name="price" step="0.01" value="<?= $activity['price'] ?>" required><br>

                <label>Descripción:</label>
                <input type="text" name="description" value="<?= $activity['description'] ?>" required><br>

                <label>Imagen 1:</label>
                <input type="file" name="image1" accept="image/*"><br>

                <label>Imagen 2:</label>
                <input type="file" name="image2" accept="image/*"><br>

                <label>Imagen 3:</label>
                <input type="file" name="image3" accept="image/*"><br>

                <button type="submit">Editar</button>

            </form>
        </div>
    <?= $this->endSection() ?>

</body>
</html>