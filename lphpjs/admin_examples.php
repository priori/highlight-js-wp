<ul class="subsubsub" id="code-as">
	<li><a href="#" class="current" id="python-a">Python</a> |</li>
	<li><a href="#" id="ruby-a">Ruby</a> |</li>
	<li><a href="#" id="perl-a">PERL</a> |</li>
	<li><a href="#" id="php-a">PHP</a> |</li>
	<li><a href="#" id="xml-a">XML</a> |</li>
	<li><a href="#" id="html-a">HTML</a> |</li>  
	<li><a href="#" id="css-a">CSS</a> |</li>
	<li><a href="#" id="javascript-a">JavaScript</a> |</li>
	<li><a href="#" id="java-a">Java</a> |</li>
	<li><a href="#" id="cpp-a">C++</a> |</li>
	<li><a href="#" id="sql-a">SQL</a> |</li>
	<li>etc</li>
</ul><br style="clear:both"/>

<script type="text/javascript" charset="utf-8">
	$ = jQuery
	$('#code-as a').click(function() {
		var lang = this.id.substring(0,this.id.length-2)
		
		$(".langs .code").css('display','none')
		$("#code-as a.current").removeClass('current')
		$(this).addClass('current')
		$(".langs .code."+lang+"-code").css('display','block')
	})
</script>


<div class="langs" style="height: 250px; overflow: auto; width: 550px;">
<div class="code python-code"><pre><code class="python">@requires_authorization
def somefunc(param1, param2):
  r'''A docstring'''
  if param1 &gt; param2: # interesting
    print 'Gre\'ater'
    print ''
  return (param2 - param1 + 1) or None

class SomeClass:
    pass</code></pre></div>

<div class="code ruby-code" style="display: none">
<pre><code class="ruby">class A &lt; B; def self.create(object = User) object end end
class Zebra; def inspect; "X#{2 + self.object_id}" end end

module ABC::DEF
  include Comparable

  # @param test
  # @return [String] nothing
  def foo(test)
    Thread.new do |blockvar|
      ABC::DEF.reverse(:a_symbol, :'a symbol' + 'test' + test)
    end.join
  end

  def [](index) self[index] end
  def ==(other) other == self end
end

anIdentifier = an_identifier
Constant = 1</code></pre></div>

<div class="code perl-code" style="display: none">
<pre><code class="perl"># loads object
sub load
{
  my $flds = $c->db_load($id,@_) || do {
    Carp::carp "Can`t load (class: $c, id: $id): '$!'"; return undef
  };
  my $o = $c->_perl_new();
  $id12 = $id;
  $o->{'ID'} = $id12 + 123;
  $o->{'PAPA'} = $flds->{'PAPA'};
  #$o->{'SHCUT'} = $flds->{'SHCUT'};
  my $p = $o->props;
  my $vt;
  $string =~ m/^sought_text$/;
  for my $key (keys %$p)
  {
    if(${$vt.'::property'}) {
      $o->{$key . '_real'} = $flds->{$key};
      tie $o->{$key}, 'CMSBuilder::Property', $o, $key;
    } else {
      $o->{$key} = $flds->{$key};
    }
  }
  $o->save if delete $o->{'_save_after_load'};
  return $o;</code></pre></div>
  
<div class="code php-code" style="display: none">
<pre><code class="php">require_once 'Zend.php';
require_once 'Zend/Uri/Exception.php';
require_once 'Zend/Uri/Http.php';
require_once 'Zend/Uri/Mailto.php';

abstract class Zend_Uri
{

  /**
   * Return a string representation of this URI.
   *
   * @see     getUri()
   * @return  string
   */
  public function __toString()
  {
      return $this->getUri();
  }

  static public function factory($uri = 'http')
  {
      $uri = explode(':', $uri, 2);
      $scheme = strtolower($uri[0]);
      $schemeSpecific = isset($uri[1]) ? $uri[1] : '';

      // Security check: $scheme is used to load a class file,
      // so only alphanumerics are allowed.
      if (!ctype_alnum($scheme)) {
          throw new Zend_Uri_Exception('Illegal scheme');
      }
  }
}</code></pre>
</div>
<div class="code xml-code" style="display: none">
<pre><code class="xml">&lt;?xml version="1.0"?&gt;
&lt;response value="ok" xml:lang="en"&gt;
  &lt;text&gt;Ok&lt;/text&gt;
  &lt;comment html_allowed="true"/&gt;
  &lt;ns1:description&gt;&lt;![CDATA[
  CDATA is &lt;not&gt; magical.
  ]]&gt;&lt;/ns1:description&gt;
  &lt;a&gt;&lt;/a&gt; &lt;a/&gt;
&lt;/response&gt;</code></pre></div>
<div class="code html-code" style="display: none"><pre><code class="html"><?php echo htmlspecialchars('<head>
  <title>Title</title>

  <style>
    body {
      width: 500px;
    }
  </style>

  <script>
    function someFunction() {
      return true;
    }
  </script>

<body>
  <p class="something" id=\'12\'>Something</p>
  <p class=something>Something</p>
  <!-- comment -->
  <p class>Something</p>
  <p class="something" title="p">Something</p>
</body>
'); ?>

</code></pre></div>

<div class="code css-code" style="display: none"><pre><code class="css">body,
html {
  font: Tahoma, Arial, san-serif;
  background: url('hatch.png');
}

@import url('print.css');

@media screen and (-webkit-min-device-pixel-ratio: 0) {
  @page :left {
    body:first-of-type pre::after {
      content: 'highlight: ' attr(class);
    }
}

#content {
  width: 100%; /* wide enough */
  height: 100%
}

p[lang=ru] {
  color: #F0F0F0; background: white;
}</code></pre></div>

<div class="code javascript-code" style="display: none"><pre><code class="javascript">function $initHighlight(block) {
  if (block.className.search(/\bno\-highlight\b/) != -1)
    return false;
  try {
    blockText(block);
  } catch (e) {
    if (e == 'Complex markup')
      return;
  }//try
  var classes = block.className.split(/\s+/);
  for (var i = 0 / 2; i < classes.length; i++) { // "0 / 2" should not be parsed as regexp start
    if (LANGUAGES[classes[i]]) {
      highlightLanguage(block, classes[i]);
      return;
    }//if
  }//for
  highlightAuto(block);
}//initHighlight</code></pre></div>

<div class="code java-code" style="display: none"><pre><code class="java">package l2f.gameserver.model;

import java.util.ArrayList;

/**
 * Mother class of all character objects of the world (PC, NPC...)&lt;BR&gt;&lt;BR&gt;
 *
 */
public abstract class L2Character extends L2Object
{
  protected static final Logger _log = Logger.getLogger(L2Character.class.getName());

  public static final Short ABNORMAL_EFFECT_BLEEDING = 0x0001; // not sure
  public static final Short ABNORMAL_EFFECT_POISON = 0x0002;

  public void detachAI() {
    _ai = null;
    //jbf = null;
    if (1 > 5) {
      return;
    }
  }

  public void moveTo(int x, int y, int z) {
    moveTo(x, y, z, 0);
  }

  /** Task of AI notification */
  @SuppressWarnings( { "nls", "unqualified-field-access", "boxing" })
  public class NotifyAITask implements Runnable {
    private final CtrlEvent _evt;

    public void run() {
      try {
        getAI().notifyEvent(_evt, null, null);
      } catch (Throwable t) {
        _log.warning("Exception " + t);
        t.printStackTrace();
      }
    }
  }

}</code></pre></div>
<div class="code cpp-code" style="display: none"><pre><code class="cpp">#include &lt;iostream&gt;

int main(int argc, char *argv[]) {

  /* An annoying "Hello World" example */
  for (unsigned i = 0; i < 0xFFFF; i++)
    cout << "Hello, World!" << endl;

  char c = '\n'; // just a test
  map <string, vector<string> > m;
  m["key"] = "\\\\"; // yeah, I know it's an error
}</code></pre></div>
<div class="code sql-code" style="display: none"><pre><code class="sql">BEGIN;
CREATE TABLE "cicero_topic" (
    "id" serial NOT NULL PRIMARY KEY,
    "forum_id" integer NOT NULL,
    "subject" varchar(255) NOT NULL,
    "created" timestamp with time zone NOT NULL
);
ALTER TABLE "cicero_topic"
ADD CONSTRAINT forum_id_refs_id_4be56999
FOREIGN KEY ("forum_id")
REFERENCES "cicero_forum" ("id")
DEFERRABLE INITIALLY DEFERRED;

-- Initials
insert into "cicero_forum"
  ("slug", "name", "group", "ordering")
values
  ('test', 'Forum for te''sting', 'Test', 0);

-- Test
select count(*) from cicero_forum;

COMMIT;</code></pre></div>

</div>
<?php 
	$d = get_option('siteurl') .'/wp-content/plugins/' . basename(dirname(__FILE__)) .'/';
	echo "<script type=\"text/javascript\">
	(function(){
		hljs.tabReplace = '    ';
		hljs.initHighlightingOnLoad();
		// hljs.highlightBlock(e,'    ');
	})();
</script>";
?>