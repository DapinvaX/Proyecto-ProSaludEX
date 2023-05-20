
<div class="p-5 mx-auto mx-md-0 ml-md-auto col-10 col-md-9">
            <form class="form-inline">
                <div class="input-group">
                <input type="text" class="form-control rounded border-info text-center" id="inlineFormInputGroup"> <script>//Input de fecha deshabilitadoS</script>
                <div class="input-group-prepend"><input type="date" name="calendarioCita" id="calendarioCita" class="mx-2 rounded border border-info text-center" ></div>
                
                <select id="selectCita" class="btn btn-info rounded" onchange="actualizarCalendario()">
                    <option value="1" selected>Consultar Cita</option>
                    <option value="2">Pedir Cita</option>
                </select>

                <div class="input-group-append"><button class="btn btn-info rounded" id="btnSubmit" type="submit" style="margin-left: 10px;">Consultar Cita<i class="fa fa-search"></i></button>

                </div>
                
                
                <script>

                    function actualizarCalendario() {
                        var tipoCita = document.getElementById("selectCita").value;
                        var calendarioCita = document.getElementById("calendarioCita");
                        var boton = document.getElementById("btnSubmit");
                                   
                            //Pedir Cita
                            if (tipoCita === "2") {
                                calendarioCita.type="datetime-local";
                               boton.innerHTML="Pedir Cita"
                               console.log("Boton:"+boton.value)
                                console.log("Pedir Cita")
                                        
                            //Consultar Cita
                            } else {
                                calendarioCita.type="date";
                                boton.innerHTML="Consultar Cita"
                                console.log("Boton:"+boton.value)
                                console.log("Consultar Cita")

                            };
                            console.log(tipoCita)
                        }

                </script>

                <!-- <script>window.onload = function(){
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
                }</script>  -->