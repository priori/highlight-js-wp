<?php 
	$mode = false;
	
	$custom_css = '';
	
	if($_POST['lphpjs_hidden'] == 'Y') {
		$theme = $_POST['lphpjs_theme'];
		update_option('lphpjs_theme',$theme);
		
		if( $theme == 'custom_css' ){
			$custom_css = $_POST['lphpjs_custom_css'];
			update_option('lphpjs_custom_css',$custom_css);
		}
		
		if( $theme == 'custom' ){
			$lphpjs_bg_color = $_POST['lphpjs_bg_color'];
			$lphpjs_string_color = $_POST['lphpjs_string_color'];
			$lphpjs_comment_color = $_POST['lphpjs_comment_color'];
			$lphpjs_number_color = $_POST['lphpjs_number_color'];
			$lphpjs_color5 = $_POST['lphpjs_color5'];
			$lphpjs_color6 = $_POST['lphpjs_color6'];
			
			update_option('lphpjs_bg_color',$lphpjs_bg_color);
			update_option('lphpjs_string_color',$lphpjs_string_color);
			update_option('lphpjs_comment_color',$lphpjs_comment_color);
			update_option('lphpjs_number_color',$lphpjs_number_color);
			update_option('lphpjs_color5',$lphpjs_color5);
			update_option('lphpjs_color6',$lphpjs_color6);
		}
		
		
		// $mode = $_POST['lphpjs_mode'];
		// update_option('lphpjs_mode',$mode);
		
		
		?>
		<div class="updated"><p><strong><?php _e('Options saved.' ); ?></strong></p></div>
		<?php
	} else {
		$theme = get_option('lphpjs_theme');
		if( !$theme )$theme='default';
		
		$custom_css = get_option('lphpjs_custom_css');
		
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
	
	
	}
	
	
	
	
	$d = get_option('siteurl') .'/wp-content/plugins/' . basename(dirname(__FILE__)) .'/';
	
	
	
?>
<link rel="stylesheet" media="screen" type="text/css" href="<?php echo $d ?>colorpicker/css/colorpicker.css" />
<script type="text/javascript" src="<?php echo $d ?>colorpicker/js/colorpicker.js"></script>
<style>
	.form-table th {
		width: 100px;
		width: 100px !important;
	}
</style>
<div class="wrap">
	<div id="icon-options-general" class="icon32"><br /></div>
<h2>highlight.js Options</h2>


	<div id="poststuff" class="metabox-holder has-right-sidebar">
		
	<div class="inner-sidebar" id="side-info-column">
		<div class="postbox">
		  <h3 class="hndle"><span>Mais Informações</span></h3>
		  <div class="inside">
            <ul>
            <li><a target="_blank" title="All in One Webmaster" href="http://lpriori.org/">lpriori.org</a></li>
            <li><a target="_blank" title="Visit Arpit's Personal Site" href="http://softwaremaniacs.org/soft/highlight/en/">softwaremaniacs.org</a></li>
            </ul>
          </div>
		</div>
		<div class="postbox">
		  <h3 class="hndle"><span>Linguagens Aceitas</span></h3>
		  <div class="inside">
            <ul>
            1C, AVR Assembler, Apache, Axapta, Bash, C#, C++, CSS, Diff, DOS .bat, Delphi, Django, HTML, XML, Ini, Java, JavaScript, Lisp, Lua, MEL (Maya Embedded Language), Nginx, Parser3, PHP, Perl, Python, Python profile, RenderMan (RIB, RSL), Ruby, Scala, SQL, Smalltalk, TeX, VBScript.
            </ul>
          </div>
		</div>
     </div>


<p>Para usar coloque as tags pre e code no html (ou a pseudo tag [code]). Assim: </p>
<div style="width: 550px;"><pre><code>&lt;pre&gt;&lt;code&gt;
	// some code
&lt;/pre&gt;&lt;/code&gt;</code></pre></div>
	
	</p>
		
     
		<div style="float:left">
<form name="lphpjs_form" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
	<input type="hidden" name="lphpjs_hidden" value="Y">

<table class="form-table">
	<tr valign="top"> 
		<th scope="row"><label for="lphpjs_theme">Theme</label></th> 
		<td><select name="lphpjs_theme" id="lphpjs_theme">
				<option <?php if($theme=='default')echo'selected="selected"'; ?> value="default">Default</option>
				<option <?php if($theme=='dark')echo'selected="selected"'; ?> value="dark">Dark</option>
				<option <?php if($theme=='far')echo'selected="selected"'; ?> value="far">FAR</option>
				<option <?php if($theme=='idea')echo'selected="selected"'; ?> value="idea">IDEA</option>
				<option <?php if($theme=='sunburst')echo'selected="selected"'; ?> value="sunburst">Sunburst</option>
				<option <?php if($theme=='zenburn')echo'selected="selected"'; ?> value="zenburn">Zenburn</option>
				<option <?php if($theme=='vs')echo'selected="selected"'; ?> value="vs">Visual Studio</option>
				<option <?php if($theme=='ascetic')echo'selected="selected"'; ?> value="ascetic">Ascetic</option>
				<option <?php if($theme=='magula')echo'selected="selected"'; ?> value="magula">Magula</option>
				<option <?php if($theme=='github')echo'selected="selected"'; ?> value="github">GitHub</option>
				<option <?php if($theme=='brown_paper')echo'selected="selected"'; ?> value="brown_paper">Brown Paper</option>
				<option <?php if($theme=='school_book')echo'selected="selected"'; ?> value="school_book">School Book</option>
				<option <?php if($theme=='ir_black')echo'selected="selected"'; ?> value="ir_black">IR_Black</option>
				
				
				<option <?php if($theme=='custom')echo'selected="selected"'; ?> value="custom">Custom</option>
				
				<option <?php if($theme=='custom_css')echo'selected="selected"'; ?> value="custom_css">Custom CSS</option>
			</select>
		</td>
	</tr>
</table> 


<div id="lphpjs-custom-div" class="custom-div" <?php if($theme!="custom")echo 'style="display: none"' ?>>
<table class="form-table">
	<tr valign="top"> 
		<th scope="row"><label for="lphpjs_bg_color">Background Color</label></th> 
		<td><input name="lphpjs_bg_color" id="lphpjs_bg_color" type="text" value="<?php echo $lphpjs_bg_color ?>" />
		</td>
	</tr>
	<tr valign="top"> 
		<th scope="row"><label for="lphpjs_string_color">String Color</label></th> 
		<td><input name="lphpjs_string_color" id="lphpjs_string_color" type="text" value="<?php echo $lphpjs_string_color ?>" />
		</td> 
	</tr>
	<tr valign="top"> 
		<th scope="row"><label for="lphpjs_comment_color">Comment Color</label></th> 
		<td><input name="lphpjs_comment_color" id="lphpjs_comment_color" type="text" value="<?php echo $lphpjs_comment_color ?>" />
		</td>
	</tr>
	<tr valign="top"> 
		<th scope="row"><label for="lphpjs_number_color">Number Color</label></th> 
		<td><input name="lphpjs_number_color" id="lphpjs_number_color" type="text" value="<?php echo $lphpjs_number_color ?>" />
		</td>
	</tr>
	<tr valign="top"> 
		<th scope="row"><label for="lphpjs_color5">Color 5</label></th> 
		<td><input name="lphpjs_color5" id="lphpjs_color5" type="text" value="<?php echo $lphpjs_color5 ?>" />
		</td>
	</tr>
	<tr valign="top"> 
		<th scope="row"><label for="lphpjs_color6">Color 6</label></th> 
		<td><input name="lphpjs_color6" id="lphpjs_color6" type="text" value="<?php echo $lphpjs_color6 ?>" />
		</td>
	</tr>
</table> 
</div>

<div class="custom-css-div" <?php if($theme!="custom_css")echo 'style="display: none"' ?>>
<table class="form-table">
	<tr valign="top"> 
		<th scope="row"><label for="lphpjs_custom_css">Custom CSS</label></th> 
		<td><textarea name="lphpjs_custom_css" id="lphpjs_custom_css" 
				style="width: 400px; height: 290px; font-size: 11px"><?php echo htmlspecialchars($custom_css) ?></textarea>
		</td>
	</tr>
</table> 
</div>

<p class="submit"> 
<input type="submit" name="Submit" class="button-primary" value="Save Changes" /> 
</p> 
</form>







</div></div><!-- has side bar --><br style="clear: both"/>

<h3>Examples</h3>
<?php
	
	
	
	$theme = get_option('lphpjs_theme');
	if( !$theme )$theme='default';
	$theme = htmlspecialchars($theme);
	$prefix = get_option('lphpjs_prefix');
	
	$mode = get_option('lphpjs_mode');
	if( !$mode )$mode='precode';

	$themes = array( 'default', 'dark', 'far', 'idea', 'sunburst', 'zenburn', 'vs', 'ascetic', 
		'magula', 'github', 'brown_paper', 'school_book', 'ir_black');
	$default_theme = $d.'/highlight/styles/default.css';
	foreach( $themes as $t ){
		if( $t == $theme ){
			echo "<link rel=\"stylesheet\" title=\"$t\" href=\"$d/highlight/styles/$theme.css\" /> \n";
		}else
			echo '<link rel="alternate stylesheet" title="'.$t.'" href="'.$d.'/highlight/styles/'.$t.'.css" /> '."\n";
	}	
	echo "<script type=\"text/javascript\" src=\"$d/highlight/highlight.pack.js\"></script>\n";
	
	
	
	
?><style type="text/css" media="screen">
pre{}
code {
	background: none repeat scroll 0 0 transparent;
	padding: 0;
	 margin: 0
}
</style>
<?php include dirname(__FILE__).'/admin_script.php'; ?>

<?php include dirname(__FILE__).'/admin_examples.php'; ?>



</div>