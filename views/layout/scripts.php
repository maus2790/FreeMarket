    <!-- jQuery -->
    <script src="../assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../assets/dist/js/adminlte.js"></script>


    <script>
        function cargarContenido(contenedor, contenido) {
            $("." + contenedor).load(contenido);
        }
    </script>

    <!-- DATATABLES JS -->
    <script src="../assets/datatables/datatables.min.js" type="text/javascript"></script>
    <!-- SweetAlert2 -->
    <script src="../assets/plugins/sweetalert2/sweetalert2.min.js"></script>
    <script src="../assets/js/menuDesplegablePerfil.js"></script>
    <script src="../assets/js/buscador.js"></script>

    <script>
        $(document).ready(function() {
            // Al hacer clic en el elemento con ID "ofertas"
            $("#ofertas").click(function(e) {
                e.preventDefault();
                // Mostrar el margen inferior de color success
                $("#margenInferiorOfertas").removeClass("d-none");
                // Ocultar los demás márgenes inferiores
                $("#margenInferiorHome").addClass("d-none");
                $("#margenInferiorMercado").addClass("d-none");
                $("#margenInferiorMiTienda").addClass("d-none");
                $("#margenInferiorADD").addClass("d-none");

                // Mostrar el contenido de ofertas
                $("#contOfertas").removeClass("d-none");
                $("#contOfertas").addClass("col-md-12");
                $("#contTargetasOfertas").addClass("row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3");

                // Ocultar el contenido de mercado
                $("#contMercado").addClass("d-none");
                $("#contTargetasMercado").removeClass("row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3");

                // Mostrar el contenido de home
                $("#home").removeClass("d-none");
                // Ocultar el contenido de mi tienda
                $("#contMiTienda").addClass("d-none");
                // Ocultar el contenido de mi ADD
                $("#contADD").addClass("d-none");


                // Actualizar colores de texto
                $(".ofertas").removeClass("text-white");
                $(".ofertas").css("color", "#55ff7c");
                $(".miTienda, .mercado, .home, .ADD").css("color", "#ffffff");
            });

            // Al hacer clic en el elemento con ID "Mercado"
            $("#mercado").click(function(e) {
                e.preventDefault();
                // Mostrar el margen inferior de color success
                $("#margenInferiorMercado").removeClass("d-none");
                // Ocultar los demás márgenes inferiores
                $("#margenInferiorHome").addClass("d-none");
                $("#margenInferiorOfertas").addClass("d-none");
                $("#margenInferiorMiTienda").addClass("d-none");
                $("#margenInferiorADD").addClass("d-none");

                // Mostrar el contenido de mercado
                $("#contMercado").removeClass("d-none");
                $("#contMercado").addClass("col-md-12");
                $("#contTargetasMercado").addClass("row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-3");

                // Ocultar el contenido de ofertas
                $("#contOfertas").addClass("d-none");
                $("#contOfertas").removeClass("col-md-12");
                $("#contOfertas").removeClass("d-md-block");
                $("#contTargetasOfertas").removeClass("col-md-4 d-none mx-auto d-md-block bg-body-tertiary rounded shadow");

                // Mostrar el contenido de home
                $("#home").removeClass("d-none");
                // Ocultar el contenido de mi tienda
                $("#contMiTienda").addClass("d-none");
                // Ocultar el contenido de mi ADD
                $("#contADD").addClass("d-none");


                // Actualizar colores de texto
                $(".mercado").removeClass("text-white");
                $(".mercado").css("color", "#55ff7c");
                $(".miTienda, .ofertas, .home, .ADD").css("color", "#ffffff");
            });

            // Al hacer clic en el elemento con ID "ADD"
            $("#ADD").click(function(e) {
                e.preventDefault();
                // Mostrar el margen inferior de color success
                $("#margenInferiorADD").removeClass("d-none");
                // Ocultar los demás márgenes inferiores
                $("#margenInferiorHome").addClass("d-none");
                $("#margenInferiorOfertas").addClass("d-none");
                $("#margenInferiorMiTienda").addClass("d-none");
                $("#margenInferiorMercado").addClass("d-none");

                // Mostrar el contenido de ADD
                $("#contADD").removeClass("d-none");


                // Ocultar el contenido de mercado
                $("#contMercado").addClass("d-none");
                $("#contTargetasMercado").removeClass("row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3");

                // Ocultar el contenido de ofertas
                $("#contOfertas").addClass("d-none");
                $("#contOfertas").removeClass("col-md-12");
                $("#contOfertas").removeClass("d-md-block");
                $("#contTargetasOfertas").removeClass("col-md-4 d-none mx-auto d-md-block bg-body-tertiary rounded shadow");

                // Mostrar el contenido de home
                $("#home").removeClass("d-none");
                // Ocultar el contenido de mi tienda
                $("#contMiTienda").addClass("d-none");

                // Actualizar colores de texto
                $(".ADD").removeClass("text-white");
                $(".ADD").css("color", "#55ff7c");
                $(".miTienda, .ofertas, .mercado, .home").css("color", "#ffffff");
            });

            // Al hacer clic en elementos con la clase "miTienda"
            $(".miTienda").click(function(e) {
                e.preventDefault();
                // Mostrar el margen inferior de color success
                $("#margenInferiorMiTienda").removeClass("d-none");
                // Ocultar los demás márgenes inferiores
                $("#margenInferiorHome").addClass("d-none");
                $("#margenInferiorOfertas").addClass("d-none");
                $("#margenInferiorMercado").addClass("d-none");
                $("#margenInferiorADD").addClass("d-none");

                // Mostrar el contenido de mi tienda
                $("#contMiTienda").removeClass("d-none");
                // Ocultar el contenido de home
                $("#home").addClass("d-none");
                // Ocultar el contenido de mi ADD
                $("#contADD").addClass("d-none");


                // Actualizar colores de texto
                $(".miTienda").removeClass("text-white");
                $(".miTienda").css("color", "#55ff7c");
                $(".ofertas, .mercado, .home, .ADD").css("color", "#ffffff");
            });
        });
    </script>
