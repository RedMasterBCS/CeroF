@extends('layouts.app')

@section('page-style-files')
    <!--main booking-->
    <link rel="stylesheet" href="{{url('/css/app.css')}}" type="text/css" media="all">
    <style type="text/css">
        .headerwrapper .textcontainer{ text-align: center}
        .main-primary {
            box-shadow: 0 4px 4px #ccc;
            background: #fff;
        }
        .main-primary h3.header3 {
            margin-bottom: 20px;
            margin-left: -15px;
            margin-right: -15px;
            width: calc(100% + 30px);
            padding-top: 0px;
        }
        div.radio{ float: left; width: 100% }
        .stars{ float: left; width: 100%; height: auto; text-align: center; margin-bottom: 10px; position: relative}
            .stars.withopaque:before{ position: absolute; left: 0px; width: 100%; height: 100%; top:0px; z-index: 2; content:"";}
        .titlesection span{ text-transform: none }
        textarea{color:#333;}
            textarea::placeholder{color:#ccc}

        .starrr {
          display: inline-block; position: relative;}
          .starrr a {
            font-size: 25px;
            padding: 0 3px;
            cursor: pointer;
            color: #FFD119;
            text-decoration: none; position: relative; z-index: 1}   
            .your-choice-was{ margin-top: 10px; float: left; text-align: center; width: 100%; margin-bottom: 0px;display: none; } 
            #star2_input{ position: absolute; left: 0px; width: 100%; height: 1px; bottom:0px; opacity:0; z-index: 0}
        @media only screen and (max-width: 490px){
            .titlesection span{ font-size: 12px; line-height: 20px }
            .stars{ margin-bottom: 20px }
        }
        .mt-45{ margin-top: -45px; z-index: 2; height: auto; float: left; width: 100%; position: relative}
        .errored{ width: 100%; text-align: center; width: 100%; color:#cc0000; margin-bottom: 20px; margin-top: 20px; font-size: 13px}
        .descriptionsection {color:#222;}
        .descriptionsection2{margin-left: 40px; margin-top: -10px; float: left; margin-bottom: 40px; font-size:14px}        
            .descriptionsection2:last-child{ margin-bottom: 20px }
        .megaquote{ background: #eee; padding:15px; border-radius:4px; text-align: center}
    </style>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-155250227-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-155250227-1');
</script>

@endsection

@section('initlink')
<a href="{{route('/')}}" class="small">Regresar a inicio</a>
@endsection

@section('titlebig')
<h5>Cero Filas</h5>
<h1>FAQ</h1>
@endsection

@section('content')
    <div class="loading-main">
        <div class="loader">Cargando...</div>
    </div>

    <div class="responsemessage"></div>

    <div class="requisitoscontainer-holder">
        <div class="requisitoscontainer">
        </div>
    </div>

    <div class="wrappercontainer">
        
        <div class="container">

            
            
            <div class="mt-45">
                
                <div class="main-primary col-sm-8 col-md-8 col-xs-12 br-5 p15 mb-30 col-sm-offset-2">
                    <h3 class="header3">Preguntas Frecuentes</h3>                                        
                    <p class="descriptionsection megaquote">Seguramente has tenido o tienes alguna duda, por ello nos dimos a la tarea de crear esta secci??n de preguntas frecuentes dedicada a resolver tus interrogantes de una manera sencilla.</p>
                    
                    <label class="titlesection"><b>1</b><span> ??Puedo cancelar mi cita?</span></label>
                    <span class="descriptionsection2">S??, ingresando en este link <a href="{{route('/')}}"> [https://cerofilas.veracruzmunicipio.gob.mx]</a> e ingresando tu folio.</span>    
                    
                    <label class="titlesection"><b>2</b><span> ??Qu?? pasa si llego tarde a mi cita?</span></label>
                    <span class="descriptionsection2">Tienes tolerancia de 10 min, de lo contrario, tu cita ser?? cancelada y tendr??s que generar una nueva.</span> 

                    <label class="titlesection"><b>3</b><span> ??Puedo cambiar la fecha y la hora de mi cita?</span></label>
                    <span class="descriptionsection2">No, tendr?? que cancelar la cita y crear una nueva.</span>    

                    <label class="titlesection"><b>4</b><span> ??Qu?? pasa si olvido alg??n documento el d??a de la cita?</span></label>
                    <span class="descriptionsection2">Si hay disponibilidad, se te asignar?? una nueva hora ese mismo d??a o de lo contrario, se reagendar?? tu cita.</span>

                    <label class="titlesection"><b>5</b><span> ??Por qu?? crear un sistema de citas?</span></label>
                    <span class="descriptionsection2">Esta nueva modalidad permitir?? tener un mejor control sobre los tiempos para cada tr??mite y sobre todo, mejorar?? la experiencia del ciudadano a la hora de realizar sus tr??mites.</span> 

                    <label class="titlesection"><b>6</b><span> ??Puedo realizar varios tr??mites el mismo d??a?</span></label>
                    <span class="descriptionsection2">S??, siempre y cuando no se empalme la hora de los tr??mites a realizar.</span>

                    <label class="titlesection"><b>7</b><span> ??Qu?? debo hacer al llegar al lugar de mi cita?</span></label>
                    <span class="descriptionsection2">Deber??s registrarte en alguno de los kioskos, podr??s pasar a ventanilla cuando en la pantalla se muestre tu nombre.</span>   

                    <label class="titlesection"><b>8</b><span> ??Qu?? debo llevar a mi cita?</span></label>
                    <span class="descriptionsection2">Adem??s de todos los requisitos que tu tr??mite demanda, deber??s llevar el folio y c??digo QR que llegar?? a tu correo electr??nico si l ingresaste, o impreso de tu confirmaci??n.</span>

                    <label class="titlesection"><b>9</b><span> ??Puede otra persona realizar el tr??mite por m???</span></label>
                    <span class="descriptionsection2">La persona que se registra, es la que debe acudir a la cita.</span>

                    <label class="titlesection"><b>10</b><span> ??Qu?? hago si no tengo alguno de los requisitos para realizar mi tr??mite?</span></label>
                    <span class="descriptionsection2">Deber??s de cumplir con todos los requisitos antes de acudir a tu cita.</span>

                    <label class="titlesection"><b>11</b><span> ??De qu?? depende que mi cita sea o no exitosa?</span></label>
                    <span class="descriptionsection2">Para que la cita sea exitosa, se recomienda llegar de 10 a 5 min antes de la hora elegida, deber??s cumplir con todos los requisitos que tu tr??mite requiere. La cita no ser?? exitosa si llegas 10 min despu??s de la hora acordada y/o si no cumples con todos los requisitos. En estos casos, se tendr?? que reagendar tu cita.</span>

                    <label class="titlesection"><b>12</b><span> ??C??mo genero mi cita?</span></label>
                    <span class="descriptionsection2">Una vez dentro de la p??gina citas para tr??mites, llena los campos correspondientes y envia los datos. Una vez hecho esto, te llegar?? un correo de confirmaci??n si ingreaste tu correo electr??nico.</span>

                    <label class="titlesection"><b>13</b><span> ??C??mo cancelo mi cita?</span></label>
                    <span class="descriptionsection2">Ingrensado tu folio en el <a href="{{route('/')}}">siguiente link</a>.</span>

                    <label class="titlesection"><b>14</b><span> ??C??mo doy a conocer mis quejas y sugerencias de este servicio?</span></label>
                    <span class="descriptionsection2">Al finalizar el tr??mite, se enviar?? una encuesta al correo que ingresaste, en donde podr??s evaluar la atenci??n, y podr??s dejar tu sugerencia. Esto con el fin de que tus pr??ximas visitas tengas una mejor experiencia. </span>
                    
                </div>
            </div> 
            
                    
        </div>
    </div>
@endsection

@section('page-js-script')
  <script>
    $(document).ready(function(){
      $(".loading-main").fadeOut();      
    });
  </script>
@endsection

