<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<br>
<h4>Catalogo de Usuarios </h4>
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Usuario</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Correo</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($sqlUsuarios as $usuarioview) {
        ?>
            <tr>
                <td><?php echo $usuarioview->id; ?></td>
                <td><?php echo $usuarioview->nombreUser; ?></td>
                <td><?php echo $usuarioview->nombre; ?></td>
                <td><?php echo $usuarioview->apellido; ?></td>
                <td><?php echo $usuarioview->correo; ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<br><!-- comment -->