<link href= {{asset("vendor/fontawesome-free/css/all.min.css")}} rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href={{asset("css/sb-admin-2.min.css")}} rel="stylesheet">
    <div class="container">
<h1>listado de pacientes</h1>
<li><a href="{{route('volverLogin')}}"><font color="black">Menu</font></a></li>
<div class="container">
<table class="table table-sm">
    <thead>
      <tr>
      <th scope="col">idReserva</th>
      <th scope="col">paciente</th>
      
      <th  scope="col">rango_edad</th>
      <th scope="col">servicio</th>
      <th>paquete</th>
      <th>fecha_Reserva</th>
      <th scope="col">Opcion</th>
      </tr>
    </thead>
     <tbody>
      @foreach ($datos as $dato )
       <tr>
        
       <th>{{$dato->idReserva}}</th>
       <th>{{$dato->paciente}}</th>
       
       <th>{{$dato->rango_edad}}</th>
       <th>{{$dato->servicio}}</th>
       <th>{{$dato->paquete}}</th>
       <th>{{$dato->fecha_Reserva}}</th>
       <td>
        <a href="{{$dato->destino}}"target="_blank"><button type="button" class="btn btn-warning">Ir</button></a>
        <form action={{route('deletereserv',$dato->idReserva)}} method="POST">
            @csrf
            <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt" >Terminar</i>
      </form>
    </td>
       </tr>
       @endforeach
     </tbody>
  </table>
  
  <H1 align="center"> Controlar Tiempo </H1>
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@100&display=swap" rel="stylesheet">
    <link href={{asset("styles.css")}} rel="stylesheet">
    <script src={{asset("script.js")}} defer></script>
</head>
<body>
    <main>
        <div class="circle">
            <div id="stopwatch" class="stopwatch">00:00</div>
            <div class="buttons">
                <div class="stop" onclick="stop()"></div>
                <div id="play-pause" class="paused" onclick="playPause()"></div>
            </div>
        </div>
        <div id="seconds-sphere" class="seconds-sphere"></div>
    </main>
</body>
</html>