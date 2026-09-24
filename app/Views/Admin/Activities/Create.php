<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creacion</title>
</head>

<body>

    <?= $this->extend('Layouts/Layout') ?>

    <?= $this->section('content') ?>
        <h1 class="title">Formulario de creación</h1>
        <div class="form">
            <form method="post" action="<?= site_url('/activities/store') ?>" enctype="multipart/form-data">
                <label>Nombre:</label>
                <input type="text" name="name" required><br>

                <label>Categoria:</label>
                <select name="category" required>
                    <option value="">Seleccioná una categoría</option>

                    <option value="Cultural">Cultural</option>
                    <option value="Histórica">Histórica</option>
                    <option value="Gastronómica">Gastronómica</option>
                    <option value="Aire libre">Aire libre</option>
                    <option value="Entretenimiento">Entretenimiento</option>
                    <option value="Deportiva">Deportiva</option>
                    <option value="Turística">Turística</option>
                    <option value="Arte">Arte</option>
                    <option value="Nocturna">Nocturna</option>
                    <option value="Familiar">Familiar</option>
                </select>

                <label>Locacion:</label>
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

                <label>Lugares disponibles:</label>
                <input type="number" name="available_slots" required><br>
                
                <label>Precio:</label>
                <input type="number" name="price"  step="0.01" required><br>
                
                <label>Descripcion:</label>
                <input type="text" name="description" required><br>
                
                <label>Imagen 1:</label>
                <input type="file" name="image1" accept="image/*" required><br>

                <label>Imagen 2:</label>
                <input type="file" name="image2" accept="image/*"><br>

                <label>Imagen 3:</label>
                <input type="file" name="image3" accept="image/*"><br>

                <button type="submit">Guardar</button>
            </form>
        </div>
    <?= $this->endSection() ?>

</body>
</html>