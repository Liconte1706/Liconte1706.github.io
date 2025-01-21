<?php
$contactos = json_decode(file_get_contents("contactos.json"), true);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mostrar Contactos</title>
    <style>
        .contacto {
            border: 1px solid #000;
            padding: 10px;
            margin: 10px;
        }
        .redes-sociales {
            text-align: center;
            margin-top: 20px;
        }
        .redes-sociales h2 {
            margin-bottom: 10px;
        }
        .redes-sociales div {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <?php foreach ($contactos as $contacto): ?>
        <div class="contacto">
            <p>Nombre: <?php echo $contacto["nombre"]; ?></p>
            <p>Teléfono: <?php echo $contacto["telefono"]; ?></p>
            <p>Red Social: <?php echo $contacto["red_social"]; ?></p>
            <img src="<?php echo $contacto["icono"]; ?>" alt="Icono" width="20" height="20">
        </div>
    <?php endforeach; ?>

    <div class="redes-sociales">
        <h2>Redes Sociales</h2>
        <div>
            <img src="whatsapp_icon_url" alt="WhatsApp" width="20" height="20">
            <span>+123456789</span>
        </div>
        <div>
            <img src="facebook_icon_url" alt="Facebook" width="20" height="20">
            <span>facebook_username</span>
        </div>
        <div>
            <img src="instagram_icon_url" alt="Instagram" width="20" height="20">
            <span>instagram_username</span>
        </div>
    </div>
</body>
</html>
