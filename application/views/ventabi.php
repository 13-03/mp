<?php require('includes/header.php')?>

<nav id="navbar" class="sticky-top">
	<ul class="nav justify-content-end">
		<li class="nav-item">
			<a class="nav-link active" aria-current="page" href="<?= base_url("index.php/inicio")?>"> Volver al inicio </a>
		</li>
	</ul>
</nav>
<!-- Venta de articulos -->
<section id="ventabi" class=" text-center">
	<h2>Solicitud de compra</h2>
	<div class="container">
		<div class="row">
			<div class="col">
				<img src="<?= base_url('public/IMG/bi.png')?>">
			</div>
			<div class="col">
				<p class="text-justify">Estas por adquirir este articulo, no sin antes darte una breve
					descipción:</p>
				<ul class="text-justify">
					<li> ¡RECORRE la ciudad! rodada 26</li>
					<li> ¡Asiento CÓMODO!</li>
					<li> ¡ACELERA en cualquier momento! incluye 6 velocidades</li>
					<li> Diseño liviano</li>
					<li>Precio: $1,000.00</li>
                    </ul>
                   <label for="quantity"><h5>Cantidad</h5></label>
                    <input type="number" id="quantity" value="1" class="form-control">
                    <a href="<?php echo $preference->sandbox_init_point?>">
				  <button type="button" class="btn btn-primary btn-lg">Pagar</button>
				</a>
			</div>
		</div>
</section>
<?php require('includes/footer.php')?>
