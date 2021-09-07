<html lang="es">

    <head>
        <title>CONSULT BD AJAX</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
        <link href="css/estilos.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    </head>
    <body>
        <header>
            <div class="well well-sm">
                <h2>CONSULT A DB IN REAL TIME WITH AJAX</h2>
            </div>
        </header>                   
          
       
        <!--Formulario de envio de datos-->
        <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" id="frmajax" method="POST">
                    <fieldset>
                        <legend class="text-center header">post a publication</legend>  

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="name" name="name" type="text" placeholder="User" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                            <div class="col-md-8">
                                <textarea class="form-control" id="description" name="description" placeholder="Enter your massage or comment" rows="7"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button id="btnguardar" type="submit" class="btn btn-primary btn-lg">Send Comment</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
        <script type="text/javascript">
            $(document).ready(function () {
                //insersion de datos por medio de ajax
                $('#btnguardar').click(function () {
                    var datos = $('#frmajax').serialize();
                    $.ajax({
                        type: "POST",
                        url: "insertar.php",
                        data: datos,
                        success: function (r) {
                            if (r == 1) {

                            } else {
                                alert("Error: Date Null");
                            }
                        }
                    });

                    return false;
                });
            });
        </script>

       
        <br><hr><br>
          <script type="text/javascript">
            //consulta lisatado en tiempo real
            function tiempoReal()
            {
                var tabla = $.ajax({
                    url: 'tablaConsulta.php',
                    dataType: 'text',
                    async: false
                }).responseText;

                document.getElementById("miTabla").innerHTML = tabla;
            }
            setInterval(tiempoReal, 500);
        </script> 
        <section id="miTabla">
        </section>

        
        <footer>
        </footer>
    </body>
</html>





