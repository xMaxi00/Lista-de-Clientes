<script>  
    $(document).ready(function () {
        $('#modaleditar').modal('show');
     });
</script>


<?php


include("../Config/conexion.php");

$sql = "select * from tablax where run = " .$_REQUEST['run'];

$res = $conexion ->query($sql);

$campos = $res -> fetch_assoc();
//echo ($campos);

///while ($campos)
//{
 //   echo $campos();
//}




/*$run = $_GET['run'];
$nombre = $_GET['nombre'];
$fono = $_GET['fono'];
$dir = $_GET['direccion'];*/



echo ("negado");
?>
<!-- Caracteristicas del Modal, es un formulario que aparece en forma de ventana sin cambiar de pantalla-->
<form class="modal fade" id="modaleditar" tabindex="-1" aria-labelledby="modaleditar" aria-hidden="true" action="../crud1/crud/editardatos.php" method="POST"> <!-- Con el Id se llama al modal en el Boton de Agregar-->
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modaleditar">Editar Datos</h1> <!-- Titulo del Modal -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> <!-- Boton "x" para cerrar -->
                </div>
                <div class="modal-body"> <!--Cuerpo del Formulario modal-->
            
                    <p>Ingrese Run</p> <!-- Linea de Texto que solicita el run a agregar-->
                    <input type="text" class="form-control" name="run" value = "<?php echo $campos['run']; ?>"/> <!--Espacio para ingresar texto asignando valores buscados-->
                    <div id="msg"></div>
                    <br>
                    <p>Ingrese Nombre</p> <!-- Etiqueta Nombre-->
                    <input type="text" class="form-control" name="nombre" /> <!--Espacio para ingresar texto-->
                    <br>
                    <p>Ingrese Fono</p> <!-- Euqieta fono-->
                    <input type="text" class="form-control" name="fono" /> <!--Espacio para ingresar texto-->
                    <br>
                    <p>Ingrese Dirección</p> <!-- Etiqueta Direccion-->
                    <input type="text" class="form-control" name="direccion" /> <!--Espacio para ingresar texto-->
                </div>
                <div class="modal-footer"> <!-- Botones de Cancelar y Guardar con sus caracteristicas -->
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-dark">Guardar</button>
                </div>
            </div>
        </div>
    </form>