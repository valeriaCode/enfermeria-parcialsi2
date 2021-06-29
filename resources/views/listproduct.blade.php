<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

<!-- Custom styles for this template-->
<link href="css/sb-admin-2.min.css" rel="stylesheet">
<div class="container">
  <li><a href="{{route('volverLogin')}}"><font color="black">Menu</font></a></li>
<h1>listado de productos</h1>
<div class="container">
<table class="table table-sm">
<thead>
  <tr>
  <th scope="col">idInsumo</th>
  <th scope="col">nombre</th>
  <th scope="col">categoria</th>
  <th scope="col">descripcion</th>
  <th scope="col">precio</th>
  </tr>
</thead>
 <tbody>
  @foreach ($datos as $dato )
   <tr>
   
   <th>{{$dato->idInsumo}}</th>
   <th>{{$dato->nombre}}</th>
   <th>{{$dato->categoria}}</th>
   <th>{{$dato->descripcion}}</th>
   <th>{{$dato->precio}}</th>
   
   </tr>
   @endforeach
 </tbody>
</table>
</div>
</div>