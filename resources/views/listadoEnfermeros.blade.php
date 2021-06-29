<link href={{asset("vendor/fontawesome-free/css/all.min.css")}} rel="stylesheet" type="text/css">
<link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

<!-- Custom styles for this template-->
<link href={{asset("css/sb-admin-2.min.css")}} rel="stylesheet">
<div class="container">
  <li><a href="{{route('volverLogin')}}"><font color="black">Menu</font></a></li>
<h1>listado de Enfermeros</h1>
<div class="container">
<table class="table table-sm">
<thead>
  <tr>
  <th scope="col">idEnfermera</th>
  <th scope="col">nombre</th>
  <th scope="col">activo</th>
  </tr>
</thead>
 <tbody>
  @foreach ($datos as $dato )
   <tr>
   
   <th>{{$dato->idEnfermera}}</th>
   <th>{{$dato->nombre}}</th>
   <th>{{$dato->activo}}</th>
   
   </tr>
   @endforeach
 </tbody>
</table>
</div>
</div>