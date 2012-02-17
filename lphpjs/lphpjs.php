<?php 
/*
Plugin Name: highlight.js for wordpress
Plugin URI: http://lpriori.org/highlightjs
Description: Plugin para colorir códigos publicados com temas personalizáveis. Processamento é feito client-side com javascript por softmagic 	(http://softwaremaniacs.org/soft/highlight/en/).
Author: L. Priori
Version: 0.1
Author URI: http://lpriori.org/
*/



// get_option



function lphpjs_head(){
	$d = get_option('siteurl') .'/wp-content/plugins/' . basename(dirname(__FILE__)) .'/';
	
	$theme = get_option('lphpjs_theme');
	if( !$theme )$theme='default';
	$theme = htmlspecialchars($theme);
	$prefix = get_option('lphpjs_prefix');
	
	// $mode = get_option('lphpjs_mode');
	// if( !$mode )$mode='precode';
	//if( $mode == 'code' )
	//	echo "<link rel=\"stylesheet\" title=\"Default\" href=\"$d/stylescode/styles/$theme.css\"> \n";
	//else
	if( $theme == 'custom_css' ){
		$st = get_option('lphpjs_custom_css');
		if( $st ){
			echo '<style>';
			echo htmlspecialchars( $st );
			echo '</style>';
		}else{
			echo "<link rel=\"stylesheet\" title=\"Default\" href=\"$d/highlight/styles/default.css\"> \n";
		}
	}elseif( $theme == 'custom' ){
			echo '<style>';
			include dirname(__FILE__).'/custom_style.css.php';
			echo '</style>';
	}else{
		echo "<link rel=\"stylesheet\" title=\"Default\" href=\"$d/highlight/styles/$theme.css\"> \n";
	}
	echo "<script type=\"text/javascript\" src=\"$d/highlight/highlight.pack.js\"></script>\n";
}



function lphpjs_footer(){
	$loop = array();
	$loop_end = '}';
	$mode = get_option('lphpjs_mode');
	if( !$mode )$mode='precode';
	
	if( $mode == 'precode' ){
		$loop[] = 'var es = document.getElementsByTagName(\'pre\');';
		$loop[] = 'for( var i2 in es ){';
		$loop[] = 'if( !es[i2] || typeof es[i2] != \'object\' || !es[i2].tagName )continue;';
		$loop[] = 'var es2 = es[i2].getElementsByTagName(\'code\');';
		$loop[] = 'for( var i in es2 ){';
		$loop[] = 'if( !es2[i] || typeof es2[i] != \'object\' || !es2[i].tagName )continue;';
		$loop[] = 'var e = es2[i];';
		
		$loop_end = '}}';
		
	}else if( $mode == 'pre' ){
		$loop[] = 'var es = document.getElementsByTagName(\'pre\');';
		$loop[] = 'for( var i in es ){';
		$loop[] = 'if( !es[i] || typeof es[i] != \'object\' || !es[i].tagName )continue;';
		$loop[] = 'var e = es[i];';
	}else if( $mode == 'code' ){
		$loop[] = 'var es = document.getElementsByTagName(\'code\');';
		$loop[] = 'for( var i in es ){';
		$loop[] = 'if( !es[i] || typeof es[i] != \'object\' || !es[i].tagName )continue;';
		$loop[] = 'var e = es[i];';
	}else if( $mode == 'prename' ){
		$loop[] = 'var es = document.getElementsByTagName(\'pre\');';
		$loop[] = 'for( var i in es ){';
		$loop[] = 'if( !es[i] || typeof es[i] != \'object\' || !es[i].tagName )continue;';
		$loop[] = 'var e = es[i];';
		$loop[] = 'if( e.getAttribute(\'name\') != \'code\' )continue;';
	}
	
	
	
	if( count($loop) == 0 ){
		$loop = 'if(false){';
	}else
		$loop = join($loop,'');
	
	
	$d = get_option('siteurl') .'/wp-content/plugins/' . basename(dirname(__FILE__)) .'/';
	echo "<script type=\"text/javascript\">
	(function(){
		hljs.tabReplace = '    ';
		hljs.initHighlightingOnLoad();
		//	hljs.highlightBlock(e,'    ');
	})();
</script>";
}






//*************** Admin function ***************
function lphpjs_admin() {
	include dirname(__FILE__).'/admin.php';
}
function lphpjs_admin_actions() {
	add_options_page("highlight.js", "highlight.js", 1, "highlight.js", "lphpjs_admin"); 
}

function lphpjs_code( $atts, $content = null ) {
  $content = strtr($content,array("\r\n"=>'',"\r"=>'',"\n"=>'')); // ou tirar os brs
  $c = false;
  if( isset( $atts["class"] ) ){
    $c = $atts["class"];
  }else if( isset( $atts["lang"] ) ){
    $c = $atts["lang"];
  }
  if( $c )
    return "<pre><code class=\"$c\">".$content."</code></pre>";
  else
    return "<pre><code>".$content."</code></pre>";
}









add_shortcode('code', 'lphpjs_code');

add_action('admin_menu', 'lphpjs_admin_actions');
add_action('wp_head','lphpjs_head');
add_action('wp_footer','lphpjs_footer');
?>