<?php  defined('BASEPATH') OR exit('No direct script access allowed');
require('includes/header.php')?>

<nav id="navbar" class="sticky-top">
	<ul class="nav justify-content-end">
		<li class="nav-item">
			<a class="nav-link active" aria-current="page" href="<?= base_url("index.php/inicio")?>">Volver al inicio</a>
		</li>
	</ul>
</nav>
<!-- Venta de articulos -->
<section id="ventafo" class=" text-center">
	<h2>Solicitud de compra</h2>
	<div class="container">
		<div class="row">
			<div class="col">
				<img src="<?= base_url('public/IMG/fo.jpg')?>">
			</div>
			<div class="col">
				<p class="text-justify">Estas por adquirir este articulo, no sin antes darte una breve
					descipción:</p>
				<ul class="text-justify">
					<li> Dimensiones de 9.5 x 9.5 x 11.2cm </li>
					<li> 120 volts</li>
					<li> Luces LED con compatibilidad con interruptor regulable</li>
					<li> Perfectas para su uso en lámparas de araña </li>
					<li>Larga duracion, ¡¡ahorra dinero!!</li>
					<li>Precio: $1,000.00</li>
				</ul>
				<label for="quantity">
					<h5>Cantidad</h5>
				</label>
				<input type="number" id="quantity" value="1" class="form-control">
				<a href="<?php echo $preference->sandbox_init_point?>">
					<button type="button" class="btn btn-primary btn-lg">Pagar</button>
				</a>
			</div>
		</div>
</section>

<?php require('includes/footer.php')?>
