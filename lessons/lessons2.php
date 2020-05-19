<!-- Here we will add two snippets from each lesson. One of the code within php tags
at the top of the .php file
and the other snippet will be of the body tag in the html with whatever php code -->

<!-- Difference between Constant and regular variables -->
<?php
$season = "winter";
const location = "beach";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      echo "<h1>I like hot tea during the {$season}<h1>";
      From my research you cant add constant in a string like this see a few sections down
      echo "I like to relax at the location"
     ?>
  </body>
</html>

<!-- Global Scope and Function or local scope -->

<?php
$money = 125;
function printMoney() {
  $money = 888;
}
 ?>

 <body>
   <!-- Here you would get back 125 -->
   <?php echo $money; ?>
   <!-- Here you would get back 888 -->
   <?php echo printMoney(); ?>
 </body>

<!-- Explaining how to use global scope, global variables are not implicit without help -->
 <?php
 $money = 125;
   function printMoney() {
     // this will not work
     return $money;
     // declare it first
     global $money;
     // now it returns 125
     return $money;
   }
?>

<body>
  <!-- Here you would get back 125 -->
  <?php echo $money; ?>
  <!-- Here you would get back 888 -->
  <?php echo printMoney(); ?>
</body>

<!-- While developing to see errors -->
Go to your php.ini file and hit ctrl+f to search for display_errors
Turn them on and they will display errors in the browser. NOT SAFE FOR LIVE SITES THOUGH!


Like superglobals, the scope of a constant is global. You can access constants anywhere in your script without regard to scope.
<?php
To use constants inside strings you can use the following method:

define( 'IceCream', 'mint-choclate-chip' );
$constant = 'constant';

echo "I like {$constant('IceCream')}";

?>

<!-- few examples of using string methods but not the ones from the course. Some weird ones -->


<?php
print_r (get_html_translation_table(HTML_ENTITIES));
?>

<!-- outputs: -->

Array
(
 ["] => &quot;
 [&] => &amp;
 [<] => &lt;
 [>] => &gt;
 [ ] => &nbsp;
 [¡] => &iexcl;
 [¢] => &cent;
 [£] => &pound;
 [¤] => &curren;
 [¥] => &yen;
 [¦] => &brvbar;
 [§] => &sect;
 [¨] => &uml;
 [©] => &copy;
 [ª] => &ordf;
 [«] => &laquo;
 [¬] => &not;
 [�­] => &shy;
 [®] => &reg;
 [¯] => &macr;
 [°] => &deg;
 [±] => &plusmn;
 [²] => &sup2;
 [³] => &sup3;
 [´] => &acute;
 [µ] => &micro;
 [¶] => &para;
 [·] => &middot;
 [¸] => &cedil;
 [¹] => &sup1;
 [º] => &ordm;
 [»] => &raquo;
 [¼] => &frac14;
 [½] => &frac12;
 [¾] => &frac34;
 [¿] => &iquest;
 [À] => &Agrave;
 [Á] => &Aacute;
 [Â] => &Acirc;
 [Ã] => &Atilde;
 [Ä] => &Auml;
 [Å] => &Aring;
 [Æ] => &AElig;
 [Ç] => &Ccedil;
 [È] => &Egrave;
 [É] => &Eacute;
 [Ê] => &Ecirc;
 [Ë] => &Euml;
 [Ì] => &Igrave;
 [Í] => &Iacute;
 [Î] => &Icirc;
 [Ï] => &Iuml;
 [Ð] => &ETH;
 [Ñ] => &Ntilde;
 [Ò] => &Ograve;
 [Ó] => &Oacute;
 [Ô] => &Ocirc;
 [Õ] => &Otilde;
 [Ö] => &Ouml;
 [×] => &times;
 [Ø] => &Oslash;
 [Ù] => &Ugrave;
 [Ú] => &Uacute;
 [Û] => &Ucirc;
 [Ü] => &Uuml;
 [Ý] => &Yacute;
 [Þ] => &THORN;
 [ß] => &szlig;
 [à] => &agrave;
 [á] => &aacute;
 [â] => &acirc;
 [ã] => &atilde;
 [ä] => &auml;
 [å] => &aring;
 [æ] => &aelig;
 [ç] => &ccedil;
 [è] => &egrave;
 [é] => &eacute;
 [ê] => &ecirc;
 [ë] => &euml;
 [ì] => &igrave;
 [í] => &iacute;
 [î] => &icirc;
 [ï] => &iuml;
 [ð] => &eth;
 [ñ] => &ntilde;
 [ò] => &ograve;
 [ó] => &oacute;
 [ô] => &ocirc;
 [õ] => &otilde;
 [ö] => &ouml;
 [÷] => &divide;
 [ø] => &oslash;
 [ù] => &ugrave;
 [ú] => &uacute;
 [û] => &ucirc;
 [ü] => &uuml;
 [ý] => &yacute;
 [þ] => &thorn;
 [ÿ] => &yuml;
 [Œ] => &OElig;
 [œ] => &oelig;
 [Š] => &Scaron;
 [š] => &scaron;
 [Ÿ] => &Yuml;
 [ƒ] => &fnof;
 [ˆ] => &circ;
 [˜] => &tilde;
 [Α] => &Alpha;
 [Β] => &Beta;
 [Γ] => &Gamma;
 [Δ] => &Delta;
 [Ε] => &Epsilon;
 [Ζ] => &Zeta;
 [Η] => &Eta;
 [Θ] => &Theta;
 [Ι] => &Iota;
 [Κ] => &Kappa;
 [Λ] => &Lambda;
 [Μ] => &Mu;
 [Ν] => &Nu;
 [Ξ] => &Xi;
 [Ο] => &Omicron;
 [Π] => &Pi;
 [Ρ] => &Rho;
 [Σ] => &Sigma;
 [Τ] => &Tau;
 [Υ] => &Upsilon;
 [Φ] => &Phi;
 [Χ] => &Chi;
 [Ψ] => &Psi;
 [Ω] => &Omega;
 [α] => &alpha;
 [β] => &beta;
 [γ] => &gamma;
 [δ] => &delta;
 [ε] => &epsilon;
 [ζ] => &zeta;
 [η] => &eta;
 [θ] => &theta;
 [ι] => &iota;
 [κ] => &kappa;
 [λ] => &lambda;
 [μ] => &mu;
 [ν] => &nu;
 [ξ] => &xi;
 [ο] => &omicron;
 [π] => &pi;
 [ρ] => &rho;
 [ς] => &sigmaf;
 [σ] => &sigma;
 [τ] => &tau;
 [υ] => &upsilon;
 [φ] => &phi;
 [χ] => &chi;
 [ψ] => &psi;
 [ω] => &omega;
 [ϑ] => &thetasym;
 [ϒ] => &upsih;
 [ϖ] => &piv;
 [ ] => &ensp;
 [ ] => &emsp;
 [ ] => &thinsp;
 [‌] => &zwnj;
 [‍] => &zwj;
 [‎] => &lrm;
 [‏] => &rlm;
 [–] => &ndash;
 [—] => &mdash;
 [‘] => &lsquo;
 [’] => &rsquo;
 [‚] => &sbquo;
 [“] => &ldquo;
 [”] => &rdquo;
 [„] => &bdquo;
 [†] => &dagger;
 [‡] => &Dagger;
 [•] => &bull;
 […] => &hellip;
 [‰] => &permil;
 [′] => &prime;
 [″] => &Prime;
 [‹] => &lsaquo;
 [›] => &rsaquo;
 [‾] => &oline;
 [⁄] => &frasl;
 [€] => &euro;
 [ℑ] => &image;
 [℘] => &weierp;
 [ℜ] => &real;
 [™] => &trade;
 [ℵ] => &alefsym;
 [←] => &larr;
 [↑] => &uarr;
 [→] => &rarr;
 [↓] => &darr;
 [↔] => &harr;
 [↵] => &crarr;
 [⇐] => &lArr;
 [⇑] => &uArr;
 [⇒] => &rArr;
 [⇓] => &dArr;
 [⇔] => &hArr;
 [∀] => &forall;
 [∂] => &part;
 [∃] => &exist;
 [∅] => &empty;
 [∇] => &nabla;
 [∈] => &isin;
 [∉] => &notin;
 [∋] => &ni;
 [∏] => &prod;
 [∑] => &sum;
 [−] => &minus;
 [∗] => &lowast;
 [√] => &radic;
 [∝] => &prop;
 [∞] => &infin;
 [∠] => &ang;
 [∧] => &and;
 [∨] => &or;
 [∩] => &cap;
 [∪] => &cup;
 [∫] => &int;
 [∴] => &there4;
 [∼] => &sim;
 [≅] => &cong;
 [≈] => &asymp;
 [≠] => &ne;
 [≡] => &equiv;
 [≤] => &le;
 [≥] => &ge;
 [⊂] => &sub;
 [⊃] => &sup;
 [⊄] => &nsub;
 [⊆] => &sube;
 [⊇] => &supe;
 [⊕] => &oplus;
 [⊗] => &otimes;
 [⊥] => &perp;
 [⋅] => &sdot;
 [⌈] => &lceil;
 [⌉] => &rceil;
 [⌊] => &lfloor;
 [⌋] => &rfloor;
 [〈] => &lang;
 [〉] => &rang;
 [◊] => &loz;
 [♠] => &spades;
 [♣] => &clubs;
 [♥] => &hearts;
 [♦] => &diams;
)

<!-- This is implode() reminds me of something from javascript .join()
Separate the array elements with different characters: -->

<?php
$arr = array('Make','Me','A','SAndwich!');
echo implode("@",$arr)."<br>";
echo implode("&cent;",$arr)."<br>";
echo implode("-",$arr)."<br>";
echo implode("X",$arr);
?>
