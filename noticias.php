<?php include_once 'includes/templates/header-web.php'; ?>



<?php

// Modal
$displayModal = "d-none";
$idMailRelay = '';
if ($_GET['mailrelay'] == true) {
    $displayModal = '';
    $idMailRelay = "modelMailRealyConfrimacion";
} else {
    $displayModal = "d-none";
    $idMailRelay = '';
}
// Fin Modal

?>


<div class=" container-fluid slider d-flex  justify-content-center align-items-center">



    <!-- Signup Form -->
    <div class="bg-white sombra rounded p-6">

        <form class=" m-4 " id="new_subscriber" novalidate="novalidate" action="https://histomed.ipzmarketing.com/f/jpdaqwpFdAI" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="&#x2713;">
            <div class="mb-3">
                <h6 class="text-info"><i class="far fa-newspaper"></i> Suscribete a nuestro boletín informativo </h6>
            </div>

            <!-- Input -->
            <div class=" mb-3">
                <div class="input-group input-group form">
                    <input type="text" class="form-control form__input" name="subscriber[name]" id="subscriber_name" required placeholder="Nombre" aria-label="Introduce tu nombre">
                </div>
                <p class="mt-1 p-1 text-danger" id="idMensajeValNombre" style="display: none;"> <i class="fas fa-exclamation-triangle"></i> El campo nombre es requerido</p>

            </div>

            <!-- End Input -->

            <!-- Input -->
            <div class=" mb-3">
                <div class="input-group input-group form">
                    <input type="email" class="form-control form__input" name="subscriber[email]" id="subscriber_email" required placeholder="email" aria-label="Introduce tu email">
                </div>
                <p class="mt-1 p-1 text-danger" id="idMensajeValEmail" style="display: none;"> <i class="fas fa-exclamation-triangle"></i> El campo email es requerido</p>
            </div>
            <!-- End Input -->

            <button class="btn btn-block btn-primary" id="idEnviarSuscripcion" name="commit" data-disable-with="Procesando">Suscribirme</button>

        </form>
    </div>
    <!-- End Signup Form -->


    <!-- Modal -->
    <div class="modal fade  <?php echo ($displaymodal) ?> " id="<?php echo ($idMailRelay) ?>" tabindex="-1" aria-labelledby="modelMailRealyConfrimacionLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="alert alert-success m-3" role="alert">

                    <h4 class="alert-heading">¡Gracias!, ya solo estás a un paso</h4>
                    <h6>Por favor, revisa tu email para activar tu cuenta</h6>
                    <hr>
                    <p class="">Si no has podido encontrar nuestro email de activación, por favor
                        revisa tu carpeta de no deseados o spam y añade nuestro email a tu lista de contactos.</p>
                </div>
                <div class="modal-footer">
                    <input class="btn btn-primary" type="button" value="Cerrar" onclick="$(location).attr('href','noticias.php');" data-dismiss="modal">
                    <!-- <button id="cerrarModalMailRealy" type="button" class="btn btn-primary" data-dismiss="modal">Cerrar </button> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Fin Modal -->



</div>


<div class=" mt-4 container">
    <h1>Blog</h1>
    <p>Escrito por: Ing. Victor Daniel Perez Vargas</p>
    <hr>

    <div class="row">

        <!-- Articulos -->
        <div class=" col-12 col-sm-9">

            <!-- Un articulo  -->
            <div class="row mb-5">
                <div class="col-3">
                    <img src="img/slider-1.png" alt="" class=" img-fluid">
                    <p class=" text-center">Fecha</p>
                </div>
                <div class="col-9">
                    <a href="">
                        <h3>Lorem ipsum dolor sit amet.</h3>
                    </a>
                    <a href=""><span class="badge badge-primary">Primary</span></a>
                    <a href=""><span class="badge badge-secondary">Secondary</span></a>
                    <a href=""><span class="badge badge-success">Success</span></a>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam quibusdam laudantium nisi eaque nemo excepturi fugit facere. Aliquam obcaecati temporibus fuga itaque maiores, modi neque voluptate asperiores repudiandae est quaerat nam doloremque, atque, doloribus deserunt ab magnam corporis ut impedit maxime dolorem adipisci debitis ad? Ex eveniet eos incidunt beatae!</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, praesentium!</p>
                    <a href="" class="btn btn-warning btn-sm">Leer más...</a>
                </div>
            </div>
            <!-- fin un articulo  -->

            <!-- Un articulo  -->
            <div class="row mb-5">
                <div class="col-3">
                    <img src="img/slider-1.png" alt="" class=" img-fluid">
                    <p class=" text-center">Fecha</p>
                </div>
                <div class="col-9">
                    <a href="">
                        <h3>Lorem ipsum dolor sit amet.</h3>
                    </a>
                    <a href=""><span class="badge badge-primary">Primary</span></a>
                    <a href=""><span class="badge badge-secondary">Secondary</span></a>
                    <a href=""><span class="badge badge-success">Success</span></a>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam quibusdam laudantium nisi eaque nemo excepturi fugit facere. Aliquam obcaecati temporibus fuga itaque maiores, modi neque voluptate asperiores repudiandae est quaerat nam doloremque, atque, doloribus deserunt ab magnam corporis ut impedit maxime dolorem adipisci debitis ad? Ex eveniet eos incidunt beatae!</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, praesentium!</p>
                    <a href="" class="btn btn-warning btn-sm">Leer más...</a>
                </div>
            </div>
            <!-- fin un articulo  -->

            <!-- Un articulo  -->
            <div class="row mb-5">
                <div class="col-3">
                    <img src="img/slider-1.png" alt="" class=" img-fluid">
                    <p class=" text-center">Fecha</p>
                </div>
                <div class="col-9">
                    <a href="">
                        <h3>Lorem ipsum dolor sit amet.</h3>
                    </a>
                    <a href=""><span class="badge badge-primary">Primary</span></a>
                    <a href=""><span class="badge badge-secondary">Secondary</span></a>
                    <a href=""><span class="badge badge-success">Success</span></a>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam quibusdam laudantium nisi eaque nemo excepturi fugit facere. Aliquam obcaecati temporibus fuga itaque maiores, modi neque voluptate asperiores repudiandae est quaerat nam doloremque, atque, doloribus deserunt ab magnam corporis ut impedit maxime dolorem adipisci debitis ad? Ex eveniet eos incidunt beatae!</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, praesentium!</p>
                    <a href="" class="btn btn-warning btn-sm">Leer más...</a>
                </div>
            </div>
            <!-- fin un articulo  -->

            <!-- Un articulo  -->
            <div class="row mb-5">
                <div class="col-3">
                    <img src="img/slider-1.png" alt="" class=" img-fluid">
                    <p class=" text-center">Fecha</p>
                </div>
                <div class="col-9">
                    <a href="">
                        <h3>Lorem ipsum dolor sit amet.</h3>
                    </a>
                    <a href=""><span class="badge badge-primary">Primary</span></a>
                    <a href=""><span class="badge badge-secondary">Secondary</span></a>
                    <a href=""><span class="badge badge-success">Success</span></a>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam quibusdam laudantium nisi eaque nemo excepturi fugit facere. Aliquam obcaecati temporibus fuga itaque maiores, modi neque voluptate asperiores repudiandae est quaerat nam doloremque, atque, doloribus deserunt ab magnam corporis ut impedit maxime dolorem adipisci debitis ad? Ex eveniet eos incidunt beatae!</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, praesentium!</p>
                    <a href="" class="btn btn-warning btn-sm">Leer más...</a>
                </div>
            </div>
            <!-- fin un articulo  -->

            <!-- Un articulo  -->
            <div class="row mb-5">
                <div class="col-3">
                    <img src="img/slider-1.png" alt="" class=" img-fluid">
                    <p class=" text-center">Fecha</p>
                </div>
                <div class="col-9">
                    <a href="">
                        <h3>Lorem ipsum dolor sit amet.</h3>
                    </a>
                    <a href=""><span class="badge badge-primary">Primary</span></a>
                    <a href=""><span class="badge badge-secondary">Secondary</span></a>
                    <a href=""><span class="badge badge-success">Success</span></a>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam quibusdam laudantium nisi eaque nemo excepturi fugit facere. Aliquam obcaecati temporibus fuga itaque maiores, modi neque voluptate asperiores repudiandae est quaerat nam doloremque, atque, doloribus deserunt ab magnam corporis ut impedit maxime dolorem adipisci debitis ad? Ex eveniet eos incidunt beatae!</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, praesentium!</p>
                    <a href="" class="btn btn-warning btn-sm">Leer más...</a>
                </div>
            </div>
            <!-- fin un articulo  -->

            <!-- Paginacion  -->
            <nav aria-label="..." class="d-flex justify-content-center">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link active" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active" aria-current="page">
                        <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link active" href="#">Next</a>
                    </li>
                </ul>
            </nav>
            <!-- Fin Paginacion  -->



        </div>
        <!-- Fin Articulos  -->


        <!-- aside  -->
        <div class="col-12 col-sm-3">

            <!-- Cards -->
            <div class="card text-white mb-3">
                <div class="card-header">Header</div>
                <div class="card-body">
                    <h5 class="card-title">Primary card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card text-white  mb-3">
                <div class="card-header">Header</div>
                <div class="card-body">
                    <h5 class="card-title">Secondary card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card text-white   mb-3">
                <div class="card-header">Header</div>
                <div class="card-body">
                    <h5 class="card-title">Success card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card text-white   mb-3">
                <div class="card-header">Header</div>
                <div class="card-body">
                    <h5 class="card-title">Danger card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card text-white  mb-3">
                <div class="card-header">Header</div>
                <div class="card-body">
                    <h5 class="card-title">Warning card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>


            <!-- Fin cards  -->

        </div>
        <!-- Fin aside  -->

    </div>


</div>

<!-- Fin Main  -->




<?php include_once 'includes/templates/footer-web.php'; ?>