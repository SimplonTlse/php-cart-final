<?php $this->layout('layout', ['title' => 'Super boutique']) ?>

<div class="ui container">
	<div class="ui grid two columns">
		<div class="column">
			<h1 class="ui container">Mon Panier</h1>
			<div class="ui list">
				<div class="item">
					<a href="/cart/checkout" class="ui button">Finaliser ma commande</a>
				</div>
				<h4 class="item header">Montant total : ??? &euro;</h4>
				<h4 classs="item header">Nombre produits : ???</h4>
			</div>
		</div>
		<div class="column">
			<table class="ui table compact">
				<!-- une boucle ! -->
			</table>
		</div>
	</div>


</div>