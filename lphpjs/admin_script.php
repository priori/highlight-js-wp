<script>
	$ = jQuery
	
	var old = $('link[title=<?php echo $theme ?>]')
	
	
	// custom css code
	var custom_css = <?php echo $theme == 'custom_css'? 'true':'false'; 
		// php tira a minha quebra de linha 
	?>; 
	var custom_css_listener_val = ''
	var custom_css_listener = function(){
		var c = $('#lphpjs_custom_css');
		var v = c.val()
		var style = $('#style_custom_css')
		if( v && custom_css_listener_val != v || !style.length ){
			custom_css_listener_val = v
			
			if( !style.length ){
				style = $('<style></style>');
				style.attr('id','style_custom_css')
				style.appendTo('body')
			}
			style.text(custom_css_listener_val)
		}
	};
	$('#lphpjs_custom_css').keydown(custom_css_listener).keyup(custom_css_listener).keypress(custom_css_listener)
	if( custom_css ){
		custom_css_listener()
	}
	// end custom css code
	
	
	// custom style
	var custom_style = <?php echo $theme == 'custom'? 'true':'false'; 
		// php tira a minha quebra de linha 
	?>;
	var build_css = function() {
		
		var lphpjs_bg_color = $('#lphpjs_bg_color'), 
			lphpjs_color5 = $('#lphpjs_color5'), 
			lphpjs_string_color = $('#lphpjs_string_color'), 
			lphpjs_comment_color = $('#lphpjs_comment_color'), 
			lphpjs_number_color = $('#lphpjs_number_color'), 
			lphpjs_color6 = $('#lphpjs_color6');
		
		var a = [];
		/*
		a[a.length] = 'pre code[class]:after {';
		a[a.length] = '  content: \'highlight: \' attr(class);';
		a[a.length] = '  display: block; text-align: right;';
		a[a.length] = '  font-size: smaller;';
		a[a.length] = '  color: #CCC; background: white;';
		a[a.length] = '  border-top: solid 1px;';
		a[a.length] = '  padding-top: 0.5em;';
		a[a.length] = '}';
		*/
		a[a.length] = 'pre code { display: block;';
		if( lphpjs_bg_color.val() )
			a[a.length] = '  background: '+lphpjs_bg_color.val();
		a[a.length] = '}';
		
		if( lphpjs_color5.val() ){
			a[a.length] = 'pre code, pre .ruby .subst, pre .xml .title, pre .lisp .title {';
			a[a.length] = '  color: '+lphpjs_color5.val();
			a[a.length] = '}';
		}
		
		if( lphpjs_string_color.val() ){
			a[a.length] = 'pre .string, pre .title, pre .constant, pre .parent, pre .tag .attribute .value, pre .rules .value, pre .rules .value .number,';
			a[a.length] = 'pre .preprocessor, pre .ruby .symbol, pre .ruby .symbol .string, pre .ruby .symbol .keyword, pre .ruby .symbol .keymethods,';
			a[a.length] = 'pre .instancevar,  pre .aggregate, pre .template_tag, pre .django .variable, pre .smalltalk .class, pre .addition, pre .flow,';
			a[a.length] = 'pre .stream, pre .bash .variable, pre .apache .tag, pre .apache .cbracket, pre .tex .command, pre .tex .special {';
			a[a.length] = '  color: '+lphpjs_string_color.val();
			a[a.length] = '}';
		}
		
		if( lphpjs_comment_color.val() ){
			a[a.length] = 'pre .comment, pre .annotation, pre .template_comment, pre .diff .header, pre .chunk {';
			a[a.length] = '  color: '+lphpjs_comment_color.val();
			a[a.length] = '}';
		}
		
		if( lphpjs_number_color.val() ){
			a[a.length] = 'pre .number, pre .date, pre .regexp, pre .literal, pre .smalltalk .symbol, pre .smalltalk .char, pre .change {';
			a[a.length] = '  color: '+lphpjs_number_color.val();
			a[a.length] = '}';
		}
		
		if( lphpjs_color6.val() ){
			a[a.length] = 'pre .label, pre .javadoc, pre .ruby .string, pre .decorator, pre .filter .argument, pre .localvars,';
			a[a.length] = 'pre .array, pre .attr_selector, pre .pseudo, pre .pi, pre .doctype, pre .deletion, pre .envvar,';
			a[a.length] = 'pre .shebang, pre .apache .sqbracket, pre .nginx .built_in, pre .tex .formula {';
			a[a.length] = '  color: '+lphpjs_color6.val();
			a[a.length] = '}';
		}
		a[a.length] = 'pre .javadoctag, pre .phpdoc, pre .yardoctag {';
		a[a.length] = '  font-weight: bold;';
		a[a.length] = '}';
		a[a.length] = 'pre .keyword, pre .id, pre .phpdoc, pre .title, pre .built_in, pre .aggregate, pre .smalltalk .class,';
		a[a.length] = 'pre .winutils, pre .bash .variable, pre .apache .tag, pre .tex .command {';
		a[a.length] = '  font-weight: bold;';
		a[a.length] = '}';
		a[a.length] = 'pre .nginx .built_in {';
		a[a.length] = '  font-weight: normal;';
		a[a.length] = '}';
		a[a.length] = 'pre .html .css, pre .html .javascript, pre .html .vbscript, pre .tex .formula {';
		a[a.length] = '  opacity: 0.5;';
		a[a.length] = '}';
		return a.join('')
	}
	var custom_style_val = ''
	var custom_style_listener = function(){
		var v = build_css()
		var style = $('#style_custom_css')
		if( v && custom_style_val != v || !style.length ){
			custom_style_val = v
			
			if( !style.length ){
				style = $('<style></style>');
				style.attr('id','style_custom_css')
				style.appendTo('body')
			}
			style.text(custom_style_val)
		}
	};
	$('#lphpjs-custom-div input').each(function(index, el){
		el = $(el)
		el.ColorPicker({
			color: el.val()||"#4444dd",
			onShow: function (colpkr) {
				$(colpkr).fadeIn(200);
				return false;
			},
			onHide: function (colpkr) {
				$(colpkr).fadeOut(200);
				return false;
			},
			onChange: function (hsb, hex, rgb) {
				el.val( "#"+hex );
				// el.css("background",'#'+hex)
				// el.css('color','')
				custom_style_listener()
			}
		})
		// el.css("background",'#'+hex)
		// el.css('color','')
		
	});
	if( custom_style ){
		custom_style_listener()
	}
	// custom style end
	
	
	
	
	
	
	var changeListener = function() {
		var v = $('#lphpjs_theme').val()
		
		if( v == 'custom_css' ){
			if( $('#lphpjs_custom_css').val() ){
				
				if( custom_style ){
					$('div.custom-div').slideUp()
					$('#style_custom_css').remove()
					custom_style = false
				}else{
					//old.attr('rel',"alternate stylesheet")
					old[0].disabled = true
				}
				
				custom_css = true
				var ta = $('div.custom-css-div')
				ta.slideDown()
				custom_css_listener()
				old = false
			}else{
				$.get('<?php echo $default_theme ?>',function( v ) {
					custom_css = true
					$('#lphpjs_custom_css').val( v )
					
					if( custom_style ){
						$('div.custom-div').slideUp()
						$('#style_custom_css').remove()
						custom_style = false
					}else{
						//old.attr('rel',"alternate stylesheet") // error
						old[0].disabled = true
					}
					custom_css = true
					var ta = $('div.custom-css-div')
					ta.slideDown()
					custom_css_listener()
					old = false
				})
			}
			
		}else if( v == 'custom' ){
			if( custom_css ){
				$('div.custom-css-div').slideUp()
				$('#style_custom_css').remove()
				custom_css = false
			}else if( old.length ){
				//old.attr('rel',"alternate stylesheet")
				old[0].disabled = true
			}
			custom_style = true
			var ta = $('div.custom-div')
			ta.slideDown()
			custom_style_listener()
			old = false
			
			
		}else{ 
			var newlink = $('link[title='+v+']')
			//old.attr('rel',"stylesheet")
			newlink[0].disabled = false
			if( custom_css ){
				$('div.custom-css-div').slideUp()
				$('#style_custom_css').remove()
				custom_css = false
			}else if( custom_style ){
				$('div.custom-div').slideUp()
				$('#style_custom_css').remove()
				custom_style = false
			}else{
				//old.attr('rel',"alternate stylesheet")
				old[0].disabled = true
			}
			old = newlink
			
			// para o chrome, maldito!!!
			//old.attr('rel',"alternate stylesheet")
			old[0].disabled = true
			//old.attr('rel',"stylesheet")
			old[0].disabled = false
			// if( !custom_css && !custom_style )
			// setTimeout(function() {
			// 	old.attr('rel',"alternate stylesheet")
			// 	old[0].disabled = true
			// 	old.attr('rel',"stylesheet")
			// 	old[0].disabled = false
			// },1)
		}
	}
	
	
	
	if( $('#lphpjs_theme').val() != '<?php echo $theme ?>' ){
		changeListener()
	}
	$('#lphpjs_theme').change(changeListener)
</script>