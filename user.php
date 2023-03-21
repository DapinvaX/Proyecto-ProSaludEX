<!DOCTYPE html>
<html>

<head>
  <title>Inicio</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body style="width: 100%; background-image: url(https://image.freepik.com/foto-gratis/fondo-abstracto-degradado-azul-turquesa_8087-3920.jpg);	background-position: right bottom;	background-size: cover;	background-repeat: repeat; background-attachment: fixed;"class="">

    <!-- Navbar -->
    <?php 
        include("navbar.html")
    ?>

    <div class="container" style="width: 100%;min-width: 100%;max-width: 100%;">
        <div class="row">
        <div class="col-xs- col-sm- col-md- col-lg-">
        </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <div class="py-5 text-center">
        <div class="container">
        </div>
    </div>
    <div class="py-5 text-center text-md-right">
        <div class="container">
        <div class="row">
            <div class="p-5 mx-auto mx-md-0 ml-md-auto col-10 col-md-9">
            <form class="form-inline">
                <div class="input-group">
                <input type="text" class="form-control rounded border-info text-center" id="inlineFormInputGroup"> <script>//Input de fecha deshabilitadoS</script>
                <div class="input-group-prepend"><input type="date" name="f_cita" id="f_cita" class="mx-2 rounded border border-info text-center" ></div>
                <script>window.onload = function(){
                    var fecha = new Date(); //Fecha actual
                    var mes = fecha.getMonth()+1; //Obtenemos el mes
                    var dia = fecha.getDate(); //Obtenemos el dia
                    var anio = fecha.getFullYear(); //Obtenemos el año
                    if(dia<10)
                    dia='0'+dia; //Agrega un cero si tiene una sola cifra
                    if(mes<10)
                    mes='0'+mes //Agrega un cero si tiene una sola cifra

                    var mesLetra="";
                    switch(mes){
                        case 1: mesLetra  == "Enero";
                        case 2: mesLetra  == "Febrero";
                        case 3: mesLetra  == "Marzo";
                        case 4:mesLetra   == "Abril";
                        case 5:mesLetra   == "Mayo";
                        case 6:mesLetra   == "Junio";
                        case 7:mesLetra   == "Julio";
                        case 8:mesLetra   == "Agosto";
                        case 9:mesLetra   == "Septiembre";
                        case 10:mesLetra  == "Octubre";
                        case 11:mesLetra  == "Noviembre";
                        case 12:mesLetra  == "Diciembre"
                    }
                    document.getElementById('f_cita').value=anio+"-"+mesLetra+"-"+dia;
                }</script>
                <select id="selectCita" class="btn btn-info rounded">
                    <option value="1" selected>Consultar Cita</option>
                    <option value="2">Pedir Cita</option>
                </select>
                <div class="input-group-append"><button class="btn btn-info rounded" type="button" style="margin-left: 10px;">Aceptar<i class="fa fa-search"></i></button>

                </div>
                </div>
            </form>
            </div>
        </div>
        </div>
    </div>
    <div class="py-5 text-center">
        <div class="container">
        </div>
    </div>
    <div class="py-5 text-center">
        <div class="container">
        </div>
    </div>
   

    <!-- Footer -->
    <?php
        include("footer.html")
    ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous" ></script>
 
</body>

</html>

