<?php
include 'header.php';
if (isset($_POST['create_student'])) {
    $student_obj->create_student_info($_POST);
}
?>
<div class="container"> 
    <div class="row content">
        <a  href="index.php"  class="button button-purple mt-12 pull-right">Lista de Estudiantes</a> 
        <h3>Informacion del Estudiante</h3>
        <hr/>
        <form method="post" action="">
            <div class="form-group">
                <label for="student_name">Nombre:</label>
                <input type="text" name="student_name" id="student_name" class="form-control" required maxlength="50"
                pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" required/>            </div>
            <div class="form-group">
                <label for="email_address">Correo/Gmail:</label>
                <input type="email" class="form-control" placeholder="ejemplo@gmail.com" name="email_address" id="email_address" required maxlength="50">
            </div>
            <div class="form-group">
                <label for="contact">Contacto:</label>
                <input type="number" class="form-control" name="contact" id="contact"  maxlength="10" required>
            </div>
            <div class="form-group">
                <label for="gender">Genero:</label>
                <select class="form-control" name="gender" id="gender" required> 
                    <option value="" selected>Seleccione:</option>
                    <option value="Hombre" >Hombre</option>
                    <option value="Female" >Mujer</option>
                    <option value="Undefined">Indefinido</option>
                </select>
            </div> 
            <div class="form-group">
                <label for="country">Ciudad:</label>
                <input type="text" name="country"  id="country" class="form-control"  maxlength="50" required>
            </div>
            <input type="submit" class="button button-green  pull-right" name="create_student" value="Enviar"/>
        </form> 
    </div>
</div>
<hr/>
<?php
include 'footer.php';
?>

