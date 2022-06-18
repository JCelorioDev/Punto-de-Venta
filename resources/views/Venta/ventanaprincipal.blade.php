@extends('layouts.app')
@section('header-title')
Hola, Bienvenido a Ventas!
@endsection
@section('content')
<div class="row">

						<div class="col-12 col-xl-6">
						<br>
						<br>
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Formulario de Gestión de Facturas</h5>
									<h6 class="card-subtitle text-muted">Tiene un Plazo de 30 Días para Reclamar su Respectiva Factura.</h6>
								</div>
								<div class="card-body">
									<form method = "post" action = "{{url('Ventas/Registrar')}}"> 
										@csrf
										<div class="mb-4">
											<label class="form-label">Nombre del Producto</label>
											<input type="text" name= "nombre_produc" class="form-control" placeholder="Ejm: Queso">
										</div>
										<div class="mb-4">
											<label class="form-label">Cantidad</label>
											<input type="text" class="form-control" name="cantidad_produc" placeholder="Ejm: 15">
										</div>
                                        <div class="mb-4">
											<label class="form-label">Imagen Del Producto</label>
											<input type="text" class="form-control" name="imagen_produc" placeholder="Formato: .jpg .png .pdf">
										</div>
										<button type="submit" class="btn btn-primary">Registrar Producto</button>
									</form>
								</div>
							</div>
						</div>

						<div class="container-fluid">
</div>
<div class="row">
	<div class="col-12">
		<div class="card" style="border: rgb(55, 255, 0) solid 2px">
			<div class="card-header">
				<h5 class="card-title">Lista de Registro Factura</h5>
				<h6 class="card-subtitle text-muted">Para mayor información ingresa a la documentación de equipos de la Espam MFL
					    <a href="http://www.espam.edu.ec/web/universidad/calendario.aspx" target="_blank"
						>Aquí</a>.</h6>
			</div>
			<div class="card-body">
				<table id="datatables-reponsive" class="table table-striped" style="width:100%">
					<thead style="background: lightcoral">
						<tr>
							<th>Nombre Producto</th>
							<th>Cantidad</th>
                            <th>Imagen</th>
							<th>Acciones</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($V as $item)
						<tr>
							<td>{{$item->Nombre_Producto}}</td>
							<td>{{$item->Cantidad}}</td>
                            <td>{{$item->Foto}}</td>
					        <td>
								<a href="{{url('VentasEdicion'. $item->id)}}"><i class="align-middle fas fa-fw fa-pen"></i></a>
								<a href="#"><i class="align-middle fas fa-fw fa-trash"></i></a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection