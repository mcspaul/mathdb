<?php


//user profile
include("cookie_check.php");
//print "<br>after [cookie_check.php] username = ".$username.'<br>';

//utility for clean up files?
//include("cleanup/autoclean.php");

//functions.php needed to be tested for sequel connections
include("functions.php");

/***************************/
//	User Accesses
/***************************/
?>


<script type="text/x-mathjax-config">
  MathJax.Hub.Config({
    extensions: ["tex2jax.js"],
    jax: ["input/TeX","output/HTML-CSS"],
    tex2jax: {inlineMath: [["$","$"],["\\(","\\)"]]}
  });
</script>
<script type="text/javascript" src="/mopped/MathJax/MathJax.js"></script>


<html class="main">
<head>
<title>Math Placement Test Problem Database</title>

<link href="greybox/gb_styles.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<script type="text/javascript" defer="defer"> var GB_ROOT_DIR = "http://mathqs.mcdaniel.edu/~clin/mopped/greybox/"; </script>
<script type="text/javascript" src="greybox/AJS.js" defer="defer"></script>
<script type="text/javascript" src="greybox/AJS_fx.js" defer="defer"></script>
<script type="text/javascript" src="greybox/gb_scripts.js" defer="defer"></script>
<script type="text/javascript" src="/jquery/jquery.js"></script>
<!--
<script type="text/javascript" src="/jquery/jquery.autocomplete.js"></script>
-->

<script src="toggle.js" type="text/javascript" defer="defer"></script>
<script src="ajax_magic.js" type="text/javascript" defer="defer"></script>


<script type="text/x-mathjax-config">
	MathJax.Hub.Config({"HTML-CSS": { preferredFont: "TeX", availableFonts: ["STIX","TeX"] },
	tex2jax: { inlineMath: [ ["$", "$"], ["\\\\(","\\\\)"] ], displayMath: [ ["$$","$$"], ["\\[", "\\]"] ], processEscapes: true, ignoreClass: "tex2jax_ignore|dno" },
        TeX: { noUndefined: { attributes: { mathcolor: "red", mathbackground: "#FFEEEE", mathsize: "90%" } } },
        messageStyle: "none"
        });
</script>    
<!-- <script type="text/javascript" src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS_HTML"></script> -->
<!-- <script type="text/javascript" src="/umathdb/MathJax-2.7.2/MathJax.js?config=TeX-AMS_HTML-full"></script> -->


</head>
<body class="main" onload="javascript:page_load();">


Editing it now....<br>

<?php include("topbar.php"); ?>
Editing it now after including topbar.php<br>


<noscript>
<div style="color:#CC0000; text-align:center">
<b>Warning: <a href="http://www.mathjax.org/">MathJax</a>
requires JavaScript to process the mathematics on this page.<br />
If your browser supports JavaScript, be sure it is enabled.</b>
</div>
<hr>
</noscript>

<h1>Sample MathJax Equations</h1>

<blockquote>

<h2>The Lorenz Equations</h2>

<p>
\begin{align}
\dot{x} & = \sigma(y-x) \\
\dot{y} & = \rho x - y - xz \\
\dot{z} & = -\beta z + xy
\end{align}
</p>

<h2>A Cross Product Formula</h2>

<p>\[
  \mathbf{V}_1 \times \mathbf{V}_2 =
   \begin{vmatrix}
    \mathbf{i} & \mathbf{j} & \mathbf{k} \\
    \frac{\partial X}{\partial u} & \frac{\partial Y}{\partial u} & 0 \\
    \frac{\partial X}{\partial v} & \frac{\partial Y}{\partial v} & 0 \\
   \end{vmatrix}
\]</p>



<h2>Maxwell's Equations</h2>

<p>
\begin{align}
  \nabla \times \vec{\mathbf{B}} -\, \frac1c\, \frac{\partial\vec{\mathbf{E}}}{\partial t} & = \frac{4\pi}{c}\vec{\mathbf{j}} \\
  \nabla \cdot \vec{\mathbf{E}} & = 4 \pi \rho \\
  \nabla \times \vec{\mathbf{E}}\, +\, \frac1c\, \frac{\partial\vec{\mathbf{B}}}{\partial t} & = \vec{\mathbf{0}} \\
  \nabla \cdot \vec{\mathbf{B}} & = 0
\end{align}
</p>




<table width=100%>
<tr>
<td valign=top>
<span id="d_query">
</span> 
<!-- end d_query span -->

</td>
</tr>
</table>
