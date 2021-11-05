<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme4w4
 */

get_header();
?>
	<main class="grille-cours">
	<header class="page-header">
		<h1 class="page-title">Cours</h1>
		<?php
		//the_archive_title( '<h1 class="page-title">', '</h1>' );
		the_archive_description( '<div class="archive-description">', '</div>' );
		?>
	</header><!-- .page-header -->
		<?php if ( have_posts() ) : ?>
			<?php
			/* Start the Loop */
            $precedent = "XXXXXX";
			//global $tProprieté;
			while ( have_posts() ) :
				the_post();
                convertirTableau($tPropriété);
				//print_r($tPropriété);
				if ($tPropriété['session'] != $precedent): 
					if ("XXXXXX" != $precedent)	: ?>
					</div>
						</section>
					<?php endif; ?>
					<section>
						<h1><?php echo $tPropriété['session'];?></h1>
						<div>
				<?php endif;?>
				<div <?php echo class_composant($tPropriété['typeCours']) ?>>
				<?php
					get_template_part( 'template-parts/content', 'grille-cours' ); 
					$precedent = $tPropriété['session'];?>
				</div>
			<?php endwhile;?>
		<?php endif; ?>
	</main><!-- #main -->

<?php 
// get_sidebar();
get_footer();

function convertirTableau(&$tPropriété)
{
	/*
	$titre = get_the_title(); 
	// 582-1W1 Mise en page Web (75h)
	$sigle = substr($titre, 0, 7);
	$nbHeure = substr($titre,-4,3);
	$titrePartiel =substr($titre,8,-6);
	$session = substr($titre, 4,1);
	// $contenu = get_the_content();
	// $resume = substr($contenu, 0, 200);
	$typeCours = get_field('type_de_cours');
*/

	$tPropriété['titre'] = get_the_title(); 
	$tPropriété['sigle'] = substr($tPropriété['titre'], 0, 7);
	$tPropriété['nbHeure'] = substr($tPropriété['titre'],-4,3);
	$tPropriété['titrePartiel'] = substr($tPropriété['titre'],8,-6);
	$tPropriété['session'] = substr($tPropriété['titre'], 4,1);
	$tPropriété['typeCours'] = get_field('type_de_cours');
}

function class_composant($typeCours){
	switch($typeCours) {
		case 'Web':
			return 'class="web typeCours"';
			break;
		case 'Jeu':
			return 'class="jeu typeCours"';
			break;
		case 'Spécifique':
			return 'class="specifique typeCours"';
			break;
		case 'Image 2d/3d':
			return 'class="image typeCours"';
			break;
		case 'Conception':
			return 'class="conception typeCours"';
			break;
			
	}
}

function classBloc($typeCours){
	switch($typeCours) {
		case 'Web':
			return '.web';
			break;
		case 'Jeu':
			return '.jeu';
			break;
		case 'Spécifique':
			return '.specifique';
			break;
		case 'Image 2d/3d':
			return '.image';
			break;
		case 'Conception':
			return '.conception';
			break;
	}
}
?>

<script>
	function typeDeCours(elm){
		let cours = document.querySelectorAll(elm)
		console.log(elm)
		for (const element of cours){
			element.style.backgroundColor = "gray"
		}
	}
</script>
