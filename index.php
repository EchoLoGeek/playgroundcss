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
	<title>Playground CSS</title>
	<link rel="stylesheet" type="text/css" href="css/fontawesome.all.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<div id="main-wrapper">

	<h1 style="margin-bottom: 24px;" class="center">
		<span class="fas fa-flask"></span> Playground CSS
	</h1>

	<!-- BUTTONS -->
	<section>
		<h2><span class="fas fa-mouse"></span> Boutons modernes</h2>
		<nav class="buttonslist">
			<ul>
				<li>
					<a href="#" title="Produits | Services">
						<span class="view-icon"><i class="fas fa-cube"></i></span>
						<span class="view-name">Produits | Services</span>
					</a>
				</li>
				<li>
					<a href="#" title="Vue comptes comptables">
						<span class="view-icon"><i class="fas fa-file-invoice-dollar"></i></span>
						<span class="view-name">Vue comptes comptables</span>
					</a>
				</li>
				<li class="active">
					<a href="#" title="Vue projets">
						<span class="view-icon"><i class="fas fa-project-diagram"></i></span>
						<span class="view-name">Vue projets</span>
					</a>
				</li>
			</ul>
		</nav>
	</section>

	<!-- CONTEXTUAL -->
	<section style="margin-top: 50px;">
		<h2><span class="fas fa-bars"></span> Menu Contextuel</h2>
		<div class="flex-wrapper">
			<div class="contextzone has-contextmenu" data-target="contextmenu-one" data-moreparam="id=1&othervar=a">ID 1<br>Menu1</div>
			<div class="contextzone has-contextmenu" data-target="contextmenu-one" data-moreparam="id=2&othervar=b">ID 2<br>Menu1</div>
			<div class="contextzone zonebis has-contextmenu" data-target="contextmenu-two" data-moreparam="id=3&othervar=b">ID 3<br>Menu2</div>
			<div class="contextzone has-contextmenu" data-target="contextmenu-one" data-moreparam="id=4&othervar=c">ID 4<br>Menu1</div>
			<div class="contextzone zonebis has-contextmenu" data-target="contextmenu-two" data-moreparam="id=5&othervar=d">ID 5<br>Menu2</div>
			<div class="contextzone zonebis has-contextmenu" data-target="contextmenu-two" data-moreparam="id=6&othervar=d">ID 6<br>Menu2</div>
		</div>
	</section>

	<div class="contextual-menu" id="contextmenu-one" data-token="1315ded8a4bc849e73260dc1a7c2564a">
		<a class="greenlink" href="#" data-link="monlien.php?action=add&token=TOKEN"><i class="fas fa-plus-square"></i> Ajouter un élément</a>
		<a class="" href="#" data-link="monlien.php"><i class="fas fa-calculator"></i> Modifier</a>
		<a class="warninglink has-separator" href="#" data-link="monlien.php?action=transfer&token=TOKEN"><i class="fas fa-arrow-right"></i> Transférer / Dupliquer</a>
		<a class="redlink" href="#" data-link="monlien.php?action=del&token=TOKEN"><i class="fas fa-trash-alt"></i> Supprimer</a>
	</div>

	<div class="contextual-menu" id="contextmenu-two" data-token="1315ded8a4bc849e73260dc1a7c2564a">
		<a class="greenlink" href="#" data-link="monlien.php?action=actioncustom&token=TOKEN"><i class="fas fa-check"></i> Valider</a>
		<a class="redlink" href="#" data-link="monlien.php?action=del&token=TOKEN"><i class="fas fa-trash-alt"></i> Supprimer</a>
	</div>

	<!--  -->
	<section style="margin-top: 50px;">
		<h2><span class="fas fa-box"></span> BOX</h2>
		<div class="flex-wrapper">
			<div class="box-wrapper">
				<div class="statbox">
					<div class="statbox-header">
						<div class="statbox-icon"><span class="fas fa-building"></span></div>
						<div class="statbox-infos">
			  				<div class="statbox-number">404</div>
							<h3 class="">Tiers clients</h3>
						</div>
						<div class="statbox-right">
							<span class="statbox-success">+ 12.22 %</span> <br>Nouveaux clients 2025
						</div>
					</div>
					<div class="statbox-content">
						<table>
							<thead>
								<tr>
									<th class="left">Mois</th>
									<th class="right">Nouveaux clients</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Janvier 2025</td>
									<td class="right">16</td>
								</tr>
								<tr>
									<td>Février 2025</td>
									<td class="right">10</td>
								</tr>
								<tr>
									<td>Mars 2025</td>
									<td class="right">12</td>
								</tr>
								<tr>
									<td>Avril 2025</td>
									<td class="right">6</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="statbox-footer">
						<a href="#"><span class="fas fa-arrow-right color-gray2 paddingright"></span> Voir tous les tiers</a>
					</div>
				</div>
			</div>
			<div class="box-wrapper">
				<div class="statbox">
					<div class="statbox-header">
						<div class="statbox-icon"><span class="fas fa-server"></span></div>
						<div class="statbox-infos">
							<div class="statbox-number">9</div>
							<h3 class="">serveurs</h3>
						</div>
						<div class="statbox-right">
							<span class="statbox-warning">1 serveur(s) inactif(s)</span>
						</div>
					</div>
					<div class="statbox-content">
						<table>
							<thead>
								<tr>
									<th class="left">Type</th>
									<th class="right">Statut</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Serveur RISE-1</td>
									<td class="right"><span class="statbox-success">4 / 4</span></td>
								</tr>
								<tr>
									<td>Serveur ADVANCE-2</td>
									<td class="right"><span class="statbox-warning">2 / 3</span></td>
								</tr>
								<tr>
									<td>Serveur GAMING</td>
									<td class="right"><span class="statbox-success">1 / 1</span></td>
								</tr>
								<tr>
									<td>VPS XL PRO</td>
									<td class="right"><span class="statbox-success">1 / 1</span></td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="statbox-footer">
					   <a href="#"><span class="fas fa-arrow-right color-gray2 paddingright"></span> Consulter la liste des serveurs</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!--  -->
	<?php $nbcol = 4; ?>
	<section style="margin-top: 50px;">
		<h2><span class="fas fa-table"></span> Tableaux</h2>
		<table class="budget-tabnew" id="tab-budget-new">
			<thead>
				<tr class="left">
					<th><a href="#">Élément <span class="fas fa-caret-down"></span></a></th>
					<th class="right"><a href="#">Budget prévu</a></th>
					<th class="right"><a href="#">Total dépenses</a></th>
					<th class="right"><a href="#">Ecart valeur budget</a> <span class="fas fa-info-circle paddingleft color-secondary" title="MoreInfos" style="font-size: 0.85em;"></span></th>
				</tr>
			</thead>
			<tbody class="tbody-separator">
				<tr>
					<?php for ($i=0; $i < $nbcol; $i++) {
						print '<td></td>';
					} ?>
				</tr>
			</tbody>
			<tbody>
				<tr class="tab-depth-1 tab-toggle" id="groupa" data-depth="1">
					<td class="left">
						<span class="fas fa-chevron-right tab-toggleicon"></span>
						<span class="fas fa-tag color-secondary paddingright"></span>
						<span class="semibold">Label Groupe A</span>
					</td>
					<td class="right">7000,00 €</td>
					<td class="right">8380,00 €</td>
					<td class="right has-hoverpercent">
						<div class="hoverpercent danger">119.71 %</div>
						+ 1380,00 € <span class="color-indicator danger"></span>
					</td>
				</tr>
				<tr class="tab-depth-2 tab-toggle" id="groupa-projecta" data-depth="2" data-parent-1="groupa">
					<td class="left">
						<span class="fas fa-chevron-right tab-toggleicon"></span>
						<span class="fas fa-project-diagram color-secondary paddingright"></span>
						<span class="semibold">Project A</span>
					</td>
					<td class="right">4800,00 €</td>
					<td class="right">6190,00 €</td>
					<td class="right has-hoverpercent">+ 1390,00 € <span class="color-indicator danger"></span></td>
				</tr>
				<tr class="tab-depth-3" id="groupa-projecta-linea" data-depth="3" data-parent-1="groupa" data-parent-2="groupa-projecta">
					<td class="left">
						<span class="fas fa-clipboard-list color-green paddingright"></span> 61105000 - Sous taitance générale
					</td>
					<td class="right">1200,00 €</td>
					<td class="right">990,00 €</td>
					<td class="right has-hoverpercent">- 210,00 € <span class="color-indicator success"></span></td>
				</tr>
				<tr class="tab-depth-3" id="groupa-projecta-lineb" data-depth="3" data-parent-1="groupa" data-parent-2="groupa-projecta">
					<td class="left">
						<span class="fas fa-clipboard-list color-green paddingright"></span> 62570000 - Frais de réception
					</td>
					<td class="right">3600,00 €</td>
					<td class="right">5200,00 €</td>
					<td class="right has-hoverpercent">+ 1600,00 € <span class="color-indicator danger"></span></td>
				</tr>
				<tr class="tab-depth-2 tab-toggle" id="groupa-projectb" data-depth="2" data-parent-1="groupa">
					<td class="left">
						<span class="fas fa-chevron-right tab-toggleicon"></span>
						<span class="fas fa-project-diagram color-secondary paddingright"></span>
						<span class="semibold">Project B</span>
					</td>
					<td class="right">2200,00 €</td>
					<td class="right">2190,00 €</td>
					<td class="right has-hoverpercent">- 10,00 € <span class="color-indicator success"></span></td>
				</tr>
				<tr class="tab-depth-3" id="groupa-projectb-linea" data-depth="3" data-parent-1="groupa" data-parent-2="groupa-projectb">
					<td class="left">
						<span class="fas fa-clipboard-list color-green paddingright"></span> 61105000 - Sous taitance générale
					</td>
					<td class="right">600,00 €</td>
					<td class="right">500,00 €</td>
					<td class="right has-hoverpercent">- 100,00 €</td>
				</tr>
				<tr class="tab-depth-3" id="groupa-projectb-lineb" data-depth="3" data-parent-1="groupa" data-parent-2="groupa-projectb">
					<td class="left">
						<span class="fas fa-clipboard-list color-green paddingright"></span> 62400000 - Transport
					</td>
					<td class="right">600,00 €</td>
					<td class="right">700,00 €</td>
					<td class="right has-hoverpercent">+ 100,00 €</td>
				</tr>
				<tr class="tab-depth-3" id="groupa-projectb-linec" data-depth="3" data-parent-1="groupa" data-parent-2="groupa-projectb">
					<td class="left">
						<span class="fas fa-clipboard-list color-green paddingright"></span> 62570000 - Frais de réception
					</td>
					<td class="right">1000,00 €</td>
					<td class="right">990,00 €</td>
					<td class="right has-hoverpercent">- 10,00 €</td>
				</tr>
			</tbody>
			<tbody>
				<tr class="tab-depth-1 tab-toggle" id="groupb" data-depth="1">
					<td class="left">
						<span class="fas fa-chevron-right tab-toggleicon"></span>
						<span class="fas fa-tag color-secondary paddingright"></span>
						<span class="semibold">Label Groupe B</span>
					</td>
					<td class="right">3200,00 €</td>
					<td class="right">1600,00 €</td>
					<td class="right has-hoverpercent">
						<div class="hoverpercent success">50 %</div>
						- 1600,00 € <span class="color-indicator success"></span>
					</td>
				</tr>
				<tr class="tab-depth-2 tab-toggle" id="groupb-projecta" data-depth="2" data-parent-1="groupb">
					<td class="left">
						<span class="fas fa-chevron-right tab-toggleicon"></span>
						<span class="fas fa-project-diagram color-secondary paddingright"></span>
						<span class="semibold">Project A</span>
					</td>
					<td class="right">2000,00 €</td>
					<td class="right">1200,00 €</td>
					<td class="right has-hoverpercent">- 800,00 € <span class="color-indicator success"></span></td>
				</tr>
				<tr class="tab-depth-3" id="groupb-projecta-linea" data-depth="3" data-parent-1="groupb" data-parent-2="groupb-projecta">
					<td class="left">
						<span class="fas fa-clipboard-list color-green paddingright"></span>
						<span class="semibold">61105000 - Sous taitance générale</span>
					</td>
					<td class="right">1500,00 €</td>
					<td class="right">700,00 €</td>
					<td class="right has-hoverpercent">- 800,00 € <span class="color-indicator success"></span></td>
				</tr>
				<tr class="tab-depth-3" id="groupb-projecta-lineb" data-depth="3" data-parent-1="groupb" data-parent-2="groupb-projecta">
					<td class="left">
						<span class="fas fa-clipboard-list color-green paddingright"></span>
						<span class="semibold">61130000 - Sous-traitance création</span>
					</td>
					<td class="right">500,00 €</td>
					<td class="right">500,00 €</td>
					<td class="right has-hoverpercent">- 0,00 € <span class="color-indicator success"></span></td>
				</tr>
				<tr class="tab-depth-2 tab-toggle" id="groupb-projectb" data-depth="2" data-parent-1="groupb">
					<td class="left">
						<span class="fas fa-chevron-right tab-toggleicon"></span>
						<span class="fas fa-project-diagram color-secondary paddingright"></span>
						<span class="semibold">Project B</span>
					</td>
					<td class="right">1200,00 €</td>
					<td class="right">400,00 €</td>
					<td class="right has-hoverpercent">- 800,00 € <span class="color-indicator success"></span></td>
				</tr>
				<tr class="tab-depth-3" id="groupb-projectb-linea" data-depth="3" data-parent-1="groupb" data-parent-2="groupb-projectb">
					<td class="left">
						<span class="fas fa-clipboard-list color-green paddingright"></span>
						<span class="semibold">Label Groupe A</span>
					</td>
					<td class="right">400,00 €</td>
					<td class="right">200,00 €</td>
					<td class="right has-hoverpercent"> -200,00 € <span class="color-indicator success"></span></td>
				</tr>
				<tr class="tab-depth-3" id="groupb-projectb-lineb" data-depth="3" data-parent-1="groupb" data-parent-2="groupb-projectb">
					<td class="left">
						<span class="fas fa-clipboard-list color-green paddingright"></span>
						<span class="semibold">Label Groupe A</span>
					</td>
					<td class="right">400,00 €</td>
					<td class="right">100,00 €</td>
					<td class="right has-hoverpercent">- 300,00 € <span class="color-indicator success"></span></td>
				</tr>
				<tr class="tab-depth-3" id="groupb-projectb-linec" data-depth="3" data-parent-1="groupb" data-parent-2="groupb-projectb">
					<td class="left">
						<span class="fas fa-clipboard-list color-green paddingright"></span>
						<span class="semibold">Label Groupe A</span>
					</td>
					<td class="right">400,00 €</td>
					<td class="right">100,00 €</td>
					<td class="right has-hoverpercent">- 300,00 € <span class="color-indicator success"></span></td>
				</tr>
			</tbody>
			<tbody class="tbody-separator">
				<tr>
					<?php for ($i=0; $i < $nbcol; $i++) {
						print '<td></td>';
					} ?>
				</tr>
			</tbody>
			<tfoot>
				<tr>
					<td>Total</td>
					<td class="right">10 200,00 €</td>
					<td class="right">9 980,00 €</td>
					<td class="right has-hoverpercent">
						<div class="hoverpercent success">97,85 %</div>
						-220,00 € <span class="color-indicator success"></span>
					</td>
				</tr>
			</tfoot>
		</table>
	</section>

</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script type="text/javascript">

		// RIGHT CLICK
		$(".has-contextmenu").bind('contextmenu', function (e) {

			// Hide menu
			$(".contextual-menu").hide();

			// Get coords of mouse
			var top = e.pageY+5;
			var left = e.pageX;

			// Get informations
			var targetMenu = '#' + $(this).data('target');
			var moreParam = $(this).data('moreparam');

			console.log(targetMenu);

			if(moreParam != null){
			   $(targetMenu).find('a').each(function(i,elem){
					var href = $(this).data('link');
					var separator = href.indexOf('?') !== -1 ? '&' : '?'; // Détermine si on doit utiliser ? ou &
					var newHref = href + separator + moreParam;
					$(this).attr('href', newHref);
				});
			}

			// Show contextmenu
			$(targetMenu).slideToggle(0).css({
				top: top + "px",
				left: left + "px"
			});

			// disable default context menu
			return false;
		});

		// Hide context menu
		$(document).bind('contextmenu click',function(){
			$(".contextual-menu").hide();
		});

	  	// disable context-menu from custom menu
	  	$('.contextual-menu').bind('contextmenu',function(){return false;});

	   	// DEPTH LIST
		$('.budget-tabnew').on('click','.tab-toggle',function(e){
			var click_depth = parseInt($(this).data('depth'));
			var parent_direct = $(this).attr('id')
			var sub_depth = click_depth + 1;
			var listparent = '';

			//
			$(this).toggleClass('open');
			if($(this).hasClass('open')){
				if(click_depth > 1){
					listparent = '[data-parent-'+click_depth+'="'+parent_direct+'"]';
					var n = click_depth;
					while (n > 1){
						n--;
						var parent = $(this).data('parent-'+n);
						listparent += '[data-parent-'+n+'="'+parent+'"]';
					}
				}
				$(this).parent('tbody').find('.tab-depth-'+sub_depth+listparent+'').show();
			} else {
				$(this).parent('tbody').find('tr[data-parent-'+click_depth+'="'+parent_direct+'"]').hide().removeClass('open');
			}
		});
</script>

</body>
</html>