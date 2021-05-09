<?php
    class chart{
    //DB stuff
    private $conn;
    private $table = 'charts' ;

    // chart properties
    public $id;
    public $title_graph;
    public $color_background;
    public $color_graph;
    public $color_axes;
    public $titre_axe_x;
    public $titre_axe_y;

    // constructor with DB
    public function __construct(){

    $this->title_graph = 'title of graph';
    $this->color_background = 'black';
    $this->color_axes = 'black' ;
    $this->titre_axe_x = 'X' ;
    $this->titre_axe_y = 'Y' ;
    }
    //functions 
    function setTitle($title_graph){
    $this->title_graph= $title_graph ;
    }
    
    function setcolorbackground($color_background){
            $this->color_background= $color_background ;
        }
    function setcolor_axesx($color_axes){
            $this->color_axes= $color_axes ;
        }
    function setcolor_axesy($color_axes){
        $this->color_axes= $color_axes ;
    }
        
        
    // fonction qui permet de tracer une courbe 
    function tracercourbe($title_graph,$color_background,$color_axes,$titre_axe_x,$titre_axe_y,$color_graph,$type_graph,$color_text){
        echo '
        <svg  viewbox="0 2 500 370" style="background-color:'. $color_background .' ; font-size:12px ; width:53%;"> 
        <rect x="30"  y="-10"  width="490"  height="280"   style="fill:transparent ; stroke:'.  $color_axes .' ; stoke-width:1 ;"/>
        <text x="0" y="15" fill="'.$color_text.'">'. $titre_axe_y .'</text>
        <text x="470" y="290" fill="'.$color_text.'">'. $titre_axe_x .'</text>
        <g class="graph-x">';

        $array = [2014 => 30, 2012 => 15, 2016 =>10, 2013 => 20, 2015 => 40];
        // savoir le type des cles
        foreach ($array as $key => $value){
            $type=gettype($key);} 
            // si le type est entier on fait le tri
            if($type == "integer"){
                //tri des donnees
                ksort($array);
            }
        $nb = max($array);  
        if ($nb <= 50){
                $mdata = 10 ;
        }else {
                $mdata = 20  ;
        }

        $max_data=max($array) + $mdata;
        $max_width =500;
        $max_height =270;

        $xgap = $max_width / (count($array) + 1);
        $ygap = $max_height / (count($array) + 1);
        $plz= $xgap;
        $plz2= $ygap;
        
        $one_unit =$max_height / $max_data ;
        foreach ($array as $key => $value){
            echo '
            <text x='. $plz .'  y="295" fill="'.$color_text.'" >'. $key.'</text>';
            $plz +=$xgap;
        }
        echo'
        </g>
        <g class="graph-y">';

        foreach ($array as $key => $value){
            $ye = $max_height - ($value * $one_unit );
            $xe = $ye  ;
            echo'
            <text x="0" y='. $xe .' fill="'.$color_text.'" >'. $value .'</text>';
            $xe += $one_unit ;
        }
        echo '</g>';

        $num = $xgap;
        $num2 = $ygap;
        $points="";
        $elements= "";
        foreach ($array as $key => $value){
            $y = $max_height - ($value * $one_unit );
            $y = $y ;
            $elements .= "<polyline points='$num,0 $num,$max_height' style='stroke:#ffffff22;' />";
            $elements .= "<polyline points='0,$y $max_width,$y' style='stroke:#ffffff22;' />";
            // $elements .= "<text x='$num' y='12' style='fill:white;' >$key</text>";
            $elements .= "<text x='$num' y='".($y  - 10)."' style='fill:$color_text;' >$value</text>";
            $points .= " $num,$y ";
            if($type_graph=="courbe"){  // Pour Tracer la courbe
            echo "<polyline points='$points' style='stroke:$color_graph;' />";
            $elements .= "<circle  r='5' cx='$num' cy='$y' style='stroke:white;fill:black ;' />";
            }elseif($type_graph=="bar"){ // Pour tracer l'histogramme
                $height = $max_height - $y; // calculer l'hauteur des bars
            echo "<rect x='$num' y='$y' width='50' height='$height' style='fill:$color_graph;;stroke-width:5;' />";
            }
            $points = " $num,$y ";
            $num +=$xgap;
            $num2 +=$ygap;      
        }

        echo $elements;
        echo '
        <text x="200" y="350" fill="'.$color_text.'">'. $title_graph .'</text>
        </svg>';

    }


}
?>