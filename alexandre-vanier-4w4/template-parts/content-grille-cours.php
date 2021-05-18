<?php
/**
 * Template part l'affichage des bloc de cours dans category-cours.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme4w4
 */
global $tPropriété;
?>

<article class="bloc-cours">
			<p><?php echo $tPropriété['typeCours'];?></p>
      <p class="sigle"><a href="<?php echo get_permalink() ?>"><?php echo $tPropriété['sigle'] ;?></a></p>
      <p><?php echo $tPropriété['nbHeure'];?> </p>
</article> 