<?php
include 'header.php';
$student_list = $student_obj->student_list();
?>
<div class="container " > 
    <div class="row content">
        <a  href="create-student-info.php"  class="button button-purple mt-12 pull-right">Añadir Estudiante</a> 
        <h3>Listado de estudiantes</h3>
        <?php
        if (isset($_SESSION['message'])) {
            echo "<p class='custom-alert'>" . $_SESSION['message'] . "</p>";
            unset($_SESSION['message']);
        }
        ?>
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Correo/Email</th>
                    <th>Contacto</th>
                    <th>Genero</th>
                    <th class="text-right">Acción</th>
                </tr>
            </thead>
            <tbody>
<?php
if ($student_list->num_rows > 0) {
  while ($row = $student_list->fetch_assoc()) {
     ?>
             <tr>
                <td><?php echo $row["student_name"] ?></td>
                <td><?php echo $row["email_address"] ?></td>
                <td><?php echo $row["contact"] ?></td>
                <td><?php echo $row["gender"] ?></td>
                <td class="text-right">
                    <a  href="<?php echo 'delete-student-info.php?id=' . $row["student_id"] ?>" class="button button-red">Eliminar</a>  
                    <a  href="<?php echo 'update-student-info.php?id=' . $row["student_id"] ?>" class="button button-blue">Editar</a>  
                    <a href="<?php echo 'read-student-info.php?id=' . $row["student_id"] ?>" class="button button-green">Visualizar</a>
                </td>
            </tr>
    <?php
    }
}
?>
           </tbody>
        </table>

    </div>
</div>
<?php
include 'footer.php';
?>  

