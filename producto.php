<?php
    include("php/crud.php");
?>
<!DOCTYPE html>
<html lang="en" xmlns:th="http://www.thymeleaf.org">
<head>
	<title>Producros</title>
	
	<!--JQUERY-->
	<script
		src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
	<!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
	<link rel="stylesheet"
		href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script
		src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script 
		src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script 
		src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	
	<!-- Los iconos tipo Solid de Fontawesome-->
	<link rel="stylesheet"
		href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
	<script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
	
	<!-- Nuestro css-->
        <link rel="stylesheet" href="css/estilos.css">

    <!-- DATA TABLE -->
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">	
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

        <script type="text/javascript">
            $(document).ready(function() {
                //Asegurate que el id que le diste a la tabla sea igual al texto despues del simbolo #
                $('#userList').DataTable();
            } );
        </script>

</head>
<body>
	<!-- Mucho mucho codigo aqui-->
    <div class="contenedor_loader">
		<div class="loader">
		</div>
	</div>
    <div class="hero">
        <nav>
            <a href="inicio.php"><h2 class="logo">Pao's Safe Shop</h2></a>
        </nav>

        <div class="container">
            <div class="mx-auto col-sm-8 main-section" id="myTab" role="tablist">
                <ul class="nav nav-tabs justify-content-end">
                    <li class="nav-item">
                    <a class="nav-link active" id="list-tab" data-toggle="tab" href="#list" role="tab" aria-controls="list" aria-selected="false">Lista</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" id="form-tab" data-toggle="tab" href="#form" role="tab" aria-controls="form" aria-selected="true">Agregar</a>				   	
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="list" role="tabpanel" aria-labelledby="list-tab">
                        <div class="card">
                            <div class="card-header">
                                <h4>Productos en stock</h4>
                            </div>
                            <div class="card-body">
                                <!-- Lista de usuarios-->
                                <div class="table-responsive">
                                    <table id="userList" class="table table-bordered table-hover table-striped">
                                        <thead class="thead-light">
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Descripción</th>
                                            <th scope="col">Precio</th>
                                            <th scope="col">Acción</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row"><?php echo $row['id_prod']?></th>
                                                <td><?php echo $row['nom_prod']?></td>
                                                <td><?php echo $row['desc_prod']?></td>
                                                <td><?php echo $row['pre_prod']?></td>
                                                <td>
                                                    <a href="#form" <?php echo $row['id_prod'] ?>><i class="fas fa-edit"></i></a> | <a href="php/eliminar.php?id_prod= <?php echo $row['id_prod'] ?>"><i class="fas fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <?php
                                                while ($row=mysqli_fetch_array($query)) {
                                            ?>
                                            <tr>
                                                <th scope="row"><?php echo $row['id_prod']?></th>
                                                <td><?php echo $row['nom_prod']?></td>
                                                <td><?php echo $row['desc_prod']?></td>
                                                <td><?php echo $row['pre_prod']?></td>
                                                <td>
                                                    <a href="#form" <?php echo $row['id_prod'] ?>><i class="fas fa-edit"></i></a> | <a href="php/eliminar.php?id_prod= <?php echo $row['id_prod'] ?>"><i class="fas fa-trash"></i></a>
                                                </td>
                                            </tr>
                                        <?php   
                                            }
                                        ?>    
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="tab-pane fade" id="form" role="tabpanel" aria-labelledby="form-tab">
                    <div class="card">
                        <div class="card-header">
                            <h4>Agregar nuevo producto</h4>
                        </div>
                        <div class="card-body">
                        <!-- Formulario de usuarios-->
                            <form class="form" role="form" method="POST" action="php/insertar.php" autocomplete="off">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Nombre</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" name="nom_prod">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Descripción</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" name="desc_prod">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Precio</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" name="pre_prod">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-12 text-center">
                                        <input type="reset" class="btn btn-secondary" value="CANCELAR">
                                        <input type="submit" class="btn btn-primary" value="GUARDAR">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="js/script.js"></script>
</body>
</html>