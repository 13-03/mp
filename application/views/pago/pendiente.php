<?php include( realpath( __DIR__ . '/../includes/header.php') ) ?>

<nav id="navbar" class="sticky-top">
	<ul class="nav justify-content-end">
		<li class="nav-item">
			<a class="nav-link active" aria-current="page" href="<?= base_url("index.php/inicio")?>"> Volver al inicio </a>
		</li>
	</ul>
</nav>
<!-- Venta de articulos -->
<section id="pendiente" class=" text-center">
	<h2>Pago pendiente</h2>
    <a href="<?php echo base_url("index.php/inicio")?>">
				  <button type="button" class="btn btn-primary btn-lg">seguir comprando</button>
				</a>
</section>

<?php include( realpath(__DIR__ . '/../includes/footer.php')) ?>