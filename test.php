
<?php
 require 'connexion.php';
 require 'function.php' ;
 
$graph=new chart();

if(isset($_POST['submit'])) {
    $title = $_POST['title'];
    $color_bg = $_POST['color_bg'];
    $color_cb = $_POST['color_cb'];
    $color_axe = $_POST['color_axe'];
    $axe_x = $_POST['axe_x'];
    $axe_y = $_POST['axe_y']; 
    $type_graph = $_POST['chart'];
    $color_text = $_POST['color_text'];
    $echo = $graph->tracercourbe($title,$color_bg,$color_axe,$axe_x,$axe_y,$color_cb,$type_graph,$color_text);
    echo $echo;
    file_put_contents("graph.png",file_get_contents("config.php"));
 }

echo "<br><a href='config.php'>Retour</a>";

?>
<?php
$array = [2014 => 20, 2012 => 20, 2016 =>20, 2013 => 20, 2015 => 20];
echo'
<svg viewBox="0 0 64 64" class="pie">
<circle r="25%" cx="50%" cy="50%" style="stroke-dasharray: 50 100">
  </circle>
  <circle r="25%" cx="50%" cy="50%" style="stroke-dasharray: 10 100; stroke: green; stroke-dashoffset: -50;">
  </circle>
  <circle r="25%" cx="50%" cy="50%" style="stroke-dasharray: 20 100; stroke: blue; stroke-dashoffset: -60; ">
  </circle>
  <circle r="25%" cx="50%" cy="50%" style="stroke-dasharray: 5 100; stroke: orange; stroke-dashoffset: -80;">
  </circle>
  <circle r="25%" cx="50%" cy="50%" style="stroke-dasharray: 15 100; stroke: red; stroke-dashoffset: -85;">
  </circle>';
// foreach ($array as $key => $value) {
//    echo '<circle r="25%" cx="50%" cy="50%" style="stroke-dasharray: '.( array_search($key,$array)+1).' 100; stroke: green; stroke-dashoffset: -'.($value +20) .';">
//    ';
// }
echo '</svg>';
echo'
<style>
.pie {
  width: 300px;
  border-radius: 50%;
}

.pie circle {
  fill: none;
  stroke: gold;
  stroke-width: 32;
  animation: rotate 1.5s ease-in;
}

@keyframes rotate {
  to {
    x
  } 
}
</style>';

?>