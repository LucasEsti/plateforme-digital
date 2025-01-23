<?php

/**

 * The template for displaying 404 pages (Not Found).

 *

 * @package sparkling

 */



get_header(); ?>

	

	

	?>

<!-- Banniere -->

<section id="banniere" class="container">



	
</section>



<!-- Breadcrumb -->

<nav aria-label="breadcrumb" class="container">

	<ol class="breadcrumb">

		<li class="breadcrumb-item"><a href="<?php echo get_home_url(); ?>">Accueil</a></li>

		<li class="breadcrumb-item" aria-current="page">Page non trouvée

		</li>

	</ol>

</nav>





<section id="nouveaux" class="container" style="margin-top: 3rem;">

	<div class="row">

		<div class="container text-center">

			<div class="col-sm-12">

					<span>Erreur 404. La page appelée n’existe pas. </span>

					<br>

					<!-- Pour trouver les informations souhaitées, reportez-vous aux pages suivantes:<br>

					<ul>

					<li><a href="/">Accueil</a></li>

					<li><a href="/entreprise/actualites/">Actualités</a></li>

					<li><a href="/liste-alphabetique-des-produits/">Produits</a></li>

					<li><a href="/entreprise/contactez-nous/">Contact</a></li>

					</ul> -->

			</div>

		</div>

	</div>

</section>



<?php get_footer(); ?>

