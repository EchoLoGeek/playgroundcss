<?php
/* Copyright (C) 2025  Anthony Damhet <a.damhet@progiseize.fr>
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <https://www.gnu.org/licenses/>.
 */
?>

<!DOCTYPE html>

<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>UI / UX</title>
	<link rel="stylesheet" type="text/css" href="css/fontawesome.all.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<!--  -->
<div id="menu-one">
	<div id="logo"></div>
	<ul>
		<li class="level-one" data-target="submenu-apps">
			<span class="fas fa-th-large"></span>
		</li>
		<li class="level-one" data-target="submenu-societe"><span class="fas fa-building"></span></li>
		<li class="level-one" data-target="submenu-products"><span class="fas fa-cube" style="color:#a69944;"></span> Produits / services</li>
		<li class="level-one" data-target="submenu-societe"><span class="fas fa-project-diagram"></span></li>
	</ul>
</div>

<div id="submenu-societe" class="submenu">

	<div class="zone">
		<ul>
			<li>
				<div class="m-icon"><span class="fas fa-building"></span></div>
				<div class="m-content">
					<div class="mc-title">Société</div>
					<ul>
						<li>Nouveau</li>
						<li>Liste :: Clients | Fournisseurs</li>
					</ul>
				</div>
			</li>
			<li>
				<div class="m-icon"><span class="fas fa-users"></span></div>
				<div class="m-content">
					<div class="mc-title">Contacts</div>
					<ul>
						<li>Nouveau</li>
						<li>Liste</li>
					</ul>
				</div>
			</li>
			<li>
				<div class="m-icon"><span class="fas fa-handshake"></span></div>
				<div class="m-content">
					<div class="mc-title">Partenariats</div>
					<ul>
						<li>Nouveau</li>
						<li>Liste des partenariats</li>
					</ul>
				</div>
			</li>
		</ul>
	</div>
	<!-- <div class="zone zone-b"></div>
	<div class="zone zone-c"></div> -->

</div>
<div id="submenu-products" class="submenu">

	<div class="zone zone-b">
		<ul>
			<li>
				<div class="m-icon"><span class="fas fa-cube"></span></div>
				<div class="m-content">
					<div class="mc-title">Produits | Services</div>
					<ul>
						<li>Nouveau</li>
						<li>Liste :: Produits | Services</li>
						<li>Attributs de variantes</li>
						<li>Lots / séries</li>
					</ul>
				</div>
			</li>
			<li>
				<div class="m-icon"><span class="fas fa-box-open"></span></div>
				<div class="m-content">
					<div class="mc-title">Entrepôts</div>
					<ul>
						<li>Nouveau</li>
						<li>Liste</li>
						<li>Mouvements</li>
						<li>Transfert de stock en masse</li>
						<li>Inventaires</li>
					</ul>
				</div>
			</li>
		</ul>
	</div>
	<div class="zone zone-c">
		<ul>
			<li>
				<div class="m-icon"><span class="fas fa-dolly"></span></div>
				<div class="m-content">
					<div class="mc-title">Expéditions</div>
					<ul>
						<li>Nouveau</li>
						<li>Liste</li>
					</ul>
				</div>
			</li>
			<li>
				<div class="m-icon"><span class="fas fa-dolly"></span></div>
				<div class="m-content">
					<div class="mc-title">Réceptions</div>
					<ul>
						<li>Nouveau</li>
						<li>Liste</li>
					</ul>
				</div>
			</li>
		</ul>
	</div>
	<div class="zone zone-a">Raccourcis rapides</div>
</div>

<div id="submenu-apps" class="submenu">
	<div class="zone">
		<h3>Gestion des tiers</h3>
		<ul class="list-apps">
			<li>
				<div class="m-icon"><span class="fas fa-building"></span></div>
				<div class="m-content">Sociétés</div>
			</li>
			<li>
				<div class="m-icon"><span class="fas fa-users"></span></div>
				<div class="m-content">Contacts</div>
			</li>
			<li>
				<div class="m-icon"><span class="fas fa-handshake"></span></div>
				<div class="m-content">Partenariats</div>
			</li>
		</ul>
		<h3>Gestion des produits / services</h3>
		<ul class="list-apps">
			<li>
				<div class="m-icon"><span class="fas fa-cube"></span></div>
				<div class="m-content">Produits</div>
			</li>
			<li>
				<div class="m-icon"><span class="fas fa-concierge-bell"></span></div>
				<div class="m-content">Services</div>
			</li>
			<li>
				<div class="m-icon"><span class="fas fa-box-open"></span></div>
				<div class="m-content">Entrepôts</div>
			</li>
			<li>
				<div class="m-icon"><span class="fas fa-dolly"></span></div>
				<div class="m-content">Expeditions</div>
			</li>
			<li>
				<div class="m-icon"><span class="fas fa-dolly"></span></div>
				<div class="m-content">Receptions</div>
			</li>
		</ul>
		<h3>Projets</h3>
		<ul class="list-apps">
			<li>
				<div class="m-icon"><span class="fas fa-project-diagram"></span></div>
				<div class="m-content">Projets</div>
			</li>
			<li>
				<div class="m-icon"><span class="fas fa-tasks"></span></div>
				<div class="m-content">Tâches</div>
			</li>
			<li>
				<div class="m-icon"><span class="far fa-clock"></span></div>
				<div class="m-content">Suivi du temps</div>
			</li>
			<li>
				<div class="m-icon"><span class="fas fa-project-diagram"></span></div>
				<div class="m-content">Événements organisés</div>
			</li>
			<li>
				<div class="m-icon"><span class="fas fa-chalkboard-teacher"></span></div>
				<div class="m-content">Conférence ou stand</div>
			</li>
		</ul>
		<h3>Commerce</h3>
		<ul class="list-apps">
			<li>
				<div class="m-icon"><span class="fas fa-file-signature"></span></div>
				<div class="m-content">Devis</div>
			</li>
			<li>
				<div class="m-icon"><span class="fas fa-file-invoice"></span></div>
				<div class="m-content">Commandes</div>
			</li>
		</ul>
	</div>
</div>

<div id="sidebar" style="background:#fff;border-radius: 8px;width: 64px;height: 80vh;margin: 16px;box-shadow: 8px 8px 17px rgba(0, 0, 0, 0.05);">
	<ul>
		<li><span class="fas fa-plus-circle"></span></li>
		<li><span class="fas fa-pencil-alt"></span></li>
		<li><span class="fas fa-trash"></span></li>
	</ul>
</div>

<!--  -->
<div id="main-wrapper">

</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script type="text/javascript">
	$(document).ready(function() {

		$(document).on('click', 'li.level-one', function(e){
			//alert('ok');
			let target = $(this).attr('data-target');
			console.log(target);

			$('#'+target).slideToggle(200);
		});

		/*$(document).on('mouseleave', 'li.level-one', function(e){
			//alert('ok');
			let target = $(this).attr('data-target');
			console.log(target);

			$('#'+target).css('display', 'none');
		});*/


	});
</script>

</body>
</html>