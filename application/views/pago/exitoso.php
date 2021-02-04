<?php require('../includes/header.php')?>

<nav id="navbar" class="sticky-top">
	<ul class="nav justify-content-end">
		<li class="nav-item">
			<a class="nav-link active" aria-current="page" href="<?= base_url("index.php/inicio")?>"> Volver al inicio </a>
		</li>
	</ul>
</nav>
<!-- Venta de articulos -->
<section id="exitoso" class=" text-center">
	<h2>Pago Exitoso</h2>
<div class="container">
		<div class="row">
			<div class="col">
				<img src="<?= base_url('public/IMG/gri.png')?>">
			</div>
			<div class="col">
				<p class="text-justify">Detalle de tu compra:</p>
				<ul class="text-justify">
					<li> ID: <?php echo $payment_method_id;?></li>
					<li> Referencia externa:<?php echo $external_reference;?></li>
					<li> ID de pago: <?php echo $payment_id;?></li>
                    </ul>
                   <a href="<?php echo site_url('inicio/index')?>">
				  <button type="button" class="btn btn-primary btn-lg">seguir comprando</button>
				</a>
			</div>
		</div>
        </section>
     
<?php require('../includes/footer.php')?>