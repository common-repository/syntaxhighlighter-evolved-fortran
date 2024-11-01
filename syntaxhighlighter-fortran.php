<?php
/*
Plugin Name:	SyntaxHighlighter Evolved: Fortran
Plugin URI:	http://jonlandrum.com/downloads/syntaxhighlighter-evolved-fortran/
Description:	Adds support for the Fortran language to the SyntaxHighlighter Evolved plugin.
Author:		Jonathan Landrum
Version:	2.0
Author URI:	http://jonlandrum.com/
License:	GPLv3
*
This work is based on the Fortran brush released by:
	- Shawn Chin:			https://gist.github.com/517349

This work is based on the PHP5 brush released by:
	- Sandro Bilbeisi:		http://www.sandrobilbeisi.org/wp/web-development/syntaxhighlighter-evolved-php5/
*/

// SyntaxHighlighter Evolved doesn't do anything until early in the "init" hook, so best to wait until after that
add_action( 'init', 'syntaxhighlighter_fortran_regscript' );

// Tell SyntaxHighlighter Evolved about this new language/brush
add_filter( 'syntaxhighlighter_brushes', 'syntaxhighlighter_fortran_addlang' );

// Register the brush file with WordPress
function syntaxhighlighter_fortran_regscript() {
	wp_register_script( 'syntaxhighlighter-brush-fortran', plugins_url('syntaxhighlighter-evolved-fortran/scripts/shBrushFortran.js'), array('syntaxhighlighter-core'), '2.0');
}

// Filter SyntaxHighlighter Evolved's language array
function syntaxhighlighter_fortran_addlang( $brushes ) {
	$brushes['fortran'] = 'fortran';
	$brushes['Fortran'] = 'fortran';
	return $brushes;
}
?>