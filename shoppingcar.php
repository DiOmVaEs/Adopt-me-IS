<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="utf-8">
        <title>Carrito</title>
        <link href="css/shoppingcar.css" rel="stylesheet" type="text/css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </head>

<body>

    <nav class="navbar navbar-expand-xl navbar-light bg-light " aria-label="Eleventh navbar example">
        <div class="container-fluid">
            <h1 class="navbar-brand" href="#">Adopt - Me |</h1>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample09">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="uhome.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="posts.php">Publicaciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="createpost.php">Publicar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="products.php">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="vetsnear.html">Cerca de mi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="aboutus.html">Acerca de</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="profile.php">Mi perfil</a>
                    </li>
                </ul>
                <a class="navbar-brand rounded-pill" href="shoppingcar.php"><img src="images/sc.png" width="50px" class="lefticon d-inline-block align-top bg-info btn-lg" alt="Logo Adopt-Me"></a>
            </div>

        </div>
    
    </nav>

    <div id="divProductos" class="border shadow-lg">
        <h1 id="tituloProductos">Tus productos</h1>
        
        <article class="articulo border shadow-sm rounded-pill">
            <img class="pi" src = "images/product.png" width="60px" height="60px">
            <label id="producto">Descripcion</label>
            <br>
            <label id="costo">Costo</label>
            <br>
            <label id="cantidad">Cantidad</label>
        </article>
        

        <br><br><br>
        <p class="total border shadow-sm">TOTAL A PAGAR</p>
        
        
    </div>
    <!-- Contenedor de "ENVIO" -->
    <div id="divEnvio">
        <h1 id="titulosEnvio">ENVIO</h1>

        <div class="scform form-floating">
            <input type="text" class="form-control inpustStyle" placeholder="Estado" id="country" name="country">
            <label for="country">Estado</label>
        </div>
        <div class="scform form-floating">
            <input type="text" class="form-control inpustStyle" placeholder="Ciudad" id="city" name="city">
            <label for="city">Ciudad</label>
        </div>
        <div class="scform form-floating">
            <input type="text" class="form-control inpustStyle" placeholder="Colonia" id="village" name="village">
            <label for="village">Colonia</label>
        </div>
        <div class="scform form-floating">
            <input type="text" class="form-control inpustStyle" placeholder="Calle" id="street" name="street">
            <label for="street">Calle</label>
        </div>
        <div class="scform form-floating">
            <input type="num" class="form-control inpustStyle" placeholder="Numero de casa" id="streetn" name="streetn">
            <label for="streetn">Numero de casa</label>
        </div>
        <div class="scform form-floating">
            <input type="tel" class="form-control inpustStyle" placeholder="Numero de telefono" id="phonen" name="phonen">
            <label for="phonen">Numero de telefono</label>
        </div>

        <h1 id="titulosEnvio">MÉTODO DE PAGO</h1>

        <div class="scform form-floating">
            <input type="text" class="form-control inpustStyle" placeholder="Numero de tarjeta (16 digitos)" id="cc" name="cc">
            <label for="cc">Numero de tarjeta (16 digitos)</label>
        </div>
        <div class="scform form-floating">
            <input type="text" class="form-control inpustStyle" placeholder="fecha de vencimiento (mm/aa)" id="expiredt" name="expiredt">
            <label for="expiredt">Fecha de vencimiento (mm/aa)</label>
        </div>
        <div class="scform form-floating">
            <input type="text" class="form-control inpustStyle" placeholder="cvv" id="cvv" name="cvv">
            <label for="cvv">CVV</label>
        </div>
        <br><br>
        <button class="scform btn btn-success btn-lg">PAGAR</button>
    </div>
    

</body>