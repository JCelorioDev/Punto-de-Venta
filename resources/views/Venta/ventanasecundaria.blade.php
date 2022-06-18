@extends('layouts.app')
@section('header-title')
Hola, Bienvenido a la Edición de Ventas!
@endsection
@section('content')
<div class="row">

						<div class="col-12 col-xl-6">
						<br>
						<br>
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Formulario de Edición de Facturas</h5>
									<h6 class="card-subtitle text-muted">Tiene un Plazo de 30 Días para Reclamar su Respectiva Factura.</h6>
								</div>
								<div class="card-body">
									<form method = "post" action = "{{url('VentasEdicion-update'.$Ventas->id)}}"> 
										@csrf
										<div class="mb-4">
											<label class="form-label">Nombre del Producto</label>
											<input type="text" value="{{$Ventas->Nombre_Producto}}" name= "nombre_produc" class="form-control" placeholder="Ejm: Queso">
										</div>
										<div class="mb-4">
											<label class="form-label">Cantidad</label>
											<input type="text" class="form-control" name="cantidad_produc" placeholder="Ejm: 15">
										</div>
                                        <div class="mb-4">
											<label class="form-label">Imagen Del Producto</label>
											<input type="text" class="form-control" name="imagen_produc" placeholder="Formato: .jpg .png .pdf">
										</div>
										<button type="submit" class="btn btn-primary">Actualizar Producto</button>
									</form>
								</div>
							</div>
						</div>

						<div class="container-fluid">
</div>
@endsection