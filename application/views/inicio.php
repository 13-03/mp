
<?php  defined('BASEPATH') OR exit('No direct script access allowed');
require('includes/header.php')?>

<nav id="navbar" class="sticky-top">
	<ul class="nav justify-content-end">
		<li class="nav-item">
			<a class="nav-link active" aria-current="page" href="#Inicio">Inicio</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#Nosotros">Nosotros</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#Catalogo">Catálogo</a>
		</li>
	</ul>
</nav>

<!-- Inicio -->
<section id="Inicio" class=" main style1 dark fullscreen text-center">
	<h2>Bienvenidos</h2>
	<h3>Venta de accesorios vintage</h3>
	<svg xmlns="http://www.w3.org/2000/svg" width="90" height="90" viewBox="0 0 93.136 87.333">
		<g id="Icon_feather-arrow-down-circle" data-name="Icon feather-arrow-down-circle"
			transform="translate(-1.5 -1.5)">
			<path id="Trazado_1" data-name="Trazado 1"
				d="M93.136,45.167c0,23.288-20.178,42.167-45.068,42.167S3,68.455,3,45.167,23.178,3,48.068,3,93.136,21.879,93.136,45.167Z"
				fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" />
			<path id="Trazado_2" data-name="Trazado 2" d="M12,18l6,6,6-6" transform="translate(30.068 33.958)"
				fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" />
			<path id="Trazado_3" data-name="Trazado 3" d="M18,12V24" transform="translate(30.068 27.167)" fill="none"
				stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" />
		</g>
	</svg>
</section>

<!-- Nosotros -->
<section id="Nosotros" class="main style2 right dark fullscreen text-center">
	<h2>Nosotros</h2>
	<div class="content box style2">
		<p>Queremos dar a los artículos de este negocio
			un aire fresco, genial, y moderno
			con una mezcla de vintage y no que solo lo vean como
			algo viejo y pasado de moda. </p>
	</div>
</section>

<!-- Catalogo -->
<section id="Catalogo" class="main style3 primary text-center ">
	<h2>Catálogo</h2>
	<!-- Catalogo  -->
	<div class="container">
		<div class="row">
			<form action="<?= base_url('index.php/comprar')?>" method="post">
				<input type="hidden" name="articulo" value="camara">
				<div class="col"><img src="<?= base_url('public/IMG/image1.jpg')?>" class="rounded float-left">
					<div class="boton1"><button type="submit" class="btn btn-outline-dark">Comprar</button></div>
				</div>
			</form>
			<form action="<?= base_url('index.php/comprar')?>" method="post">
				<input type="hidden" name="articulo" value="focos">
				<div class="col"><img src="<?= base_url('public/IMG/image2.jpg')?>" class="rounded float-left">
					<div class="boton2"><button type="submit" class="btn btn-outline-dark">Comprar</button></div>
				</div>
			</form>
			
			<div class="w-100"> </div>
			<form action="<?= base_url('index.php/comprar')?>" method="post">
				<input type="hidden" name="articulo" value="bicicleta">
				<div class="col"><img src="<?= base_url('public/IMG/image3.jpg')?>" class="rounded float-left">
					<div class="boton3"><button type="submit" class="btn btn-outline-dark">Comprar</button></div>
				</div>
			</form>
			<form action="<?= base_url('index.php/comprar')?>" method="post">
				<input type="hidden" name="articulo" value="chamarra">
				<div class="col"><img src="<?= base_url('public/IMG/image4.png')?>" class="rounded float-left">
					<div class="boton4"><button type="submit" class="btn btn-outline-dark">Comprar</button></div>
				</div>
			</form>
		</div>
	</div>
</section>
<?php require('includes/footer.php')?>