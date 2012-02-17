<?php 
	
	$lphpjs_bg_color = get_option('lphpjs_bg_color');
	$lphpjs_string_color = get_option('lphpjs_string_color');
	$lphpjs_comment_color = get_option('lphpjs_comment_color');
	$lphpjs_number_color = get_option('lphpjs_number_color');
	$lphpjs_color5 = get_option('lphpjs_color5');
	$lphpjs_color6 = get_option('lphpjs_color6');
	
	if( !$lphpjs_bg_color && !$lphpjs_comment_color && !$lphpjs_number_color && 
			!$lphpjs_string_color && !$lphpjs_color5 && !$lphpjs_color6 ){
		
		$lphpjs_bg_color = '#F0F0F0';
		$lphpjs_string_color = '#800';
		$lphpjs_comment_color = '#888';
		$lphpjs_number_color = '#080';
		$lphpjs_color5 = '#88F';
		$lphpjs_color6 = 'black';
	}
	
	
?>
pre code {
  display: block;
<?php if($lphpjs_bg_color): ?>
  background: <?php echo $lphpjs_bg_color ?>;
<?php endif; ?>
}

<?php if($lphpjs_color5): ?>
pre code,
pre .ruby .subst,
pre .xml .title,
pre .lisp .title {
  color: <?php echo lphpjs_color5 ?>;
}
<?php endif; ?>

<?php if($lphpjs_string_color): ?>
pre .string,
pre .title,
pre .constant,
pre .parent,
pre .tag .attribute .value,
pre .rules .value,
pre .rules .value .number,
pre .preprocessor,
pre .ruby .symbol,
pre .ruby .symbol .string,
pre .ruby .symbol .keyword,
pre .ruby .symbol .keymethods,
pre .instancevar,
pre .aggregate,
pre .template_tag,
pre .django .variable,
pre .smalltalk .class,
pre .addition,
pre .flow,
pre .stream,
pre .bash .variable,
pre .apache .tag,
pre .apache .cbracket,
pre .tex .command,
pre .tex .special {
  color: <?php echo $lphpjs_string_color ?>;
}
<?php endif; ?>

<?php if($lphpjs_comment_color): ?>
pre .comment,
pre .annotation,
pre .template_comment,
pre .diff .header,
pre .chunk {
  color: <?php echo $lphpjs_comment_color ?>;
}
<?php endif; ?>

<?php if($lphpjs_number_color): ?>
pre .number,
pre .date,
pre .regexp,
pre .literal,
pre .smalltalk .symbol,
pre .smalltalk .char,
pre .change {
  color: <?php echo $lphpjs_number_color ?>;
}
<?php endif; ?>

<?php if($lphpjs_color6): ?>
pre .label,
pre .javadoc,
pre .ruby .string,
pre .decorator,
pre .filter .argument,
pre .localvars,
pre .array,
pre .attr_selector,
pre .pseudo,
pre .pi,
pre .doctype,
pre .deletion,
pre .envvar,
pre .shebang,
pre .apache .sqbracket,
pre .nginx .built_in,
pre .tex .formula {
  color: <?php echo $lphpjs_color6 ?>;
}
<?php endif; ?>

pre .javadoctag,
pre .phpdoc,
pre .yardoctag {
  font-weight: bold;
}

pre .keyword,
pre .id,
pre .phpdoc,
pre .title,
pre .built_in,
pre .aggregate,
pre .smalltalk .class,
pre .winutils,
pre .bash .variable,
pre .apache .tag,
pre .tex .command {
  font-weight: bold;
}

pre .nginx .built_in {
  font-weight: normal;
}

pre .html .css,
pre .html .javascript,
pre .html .vbscript,
pre .tex .formula {
  opacity: 0.5;
}