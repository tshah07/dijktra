<style>
    td{
        border-bottom: 1px solid;

    }
</style>

<image width="750px" src="dijkstra.png">

<?php
require("Dijkstra.php");

function runTest() {
    $g = new Graph();


    //Adding Links from A
    $g->addedge("a", "b", 50);
    $g->addedge("a", "c", 30);
    $g->addedge("a", "d", 100);
    $g->addedge("a", "f", 10);


    //Adding Links from B
    $g->addedge("b", "c", 5);

    //Adding Links from C
    $g->addedge("c", "b", 5);

    //Adding Links from D
    $g->addedge("d", "b", 20);
    $g->addedge("d", "c", 50);
    
    //Adding Links from E
    $g->addedge("e", "f", 15);
    $g->addedge("e", "d", 15);

    //Adding Links from F
    $g->addedge("f", "d", 10);
    //print_r($g->nodes);





    list($distances, $prev) = $g->paths_from("a");

    // Getting paths from a , where $prev = a
    $pathA = $g->paths_to($prev, "a");
    $pathB = $g->paths_to($prev, "b");
    $pathC = $g->paths_to($prev, "c");
    $pathD = $g->paths_to($prev, "d");
    $pathE = $g->paths_to($prev, "e");
    $pathF = $g->paths_to($prev, "f");



   
    //print_r($distances);
    echo '<table><tbody>';


    // Formatted Output
    echo '<tr><td>A To A :';
    echo (str_replace('","', " --> ", json_encode($pathA))) . "</td><td> Distance : " . $distances['a'];
    echo '</tr></td><tr><td>A To B : ';
    echo (str_replace('","', " --> ", json_encode($pathB))) . "</td><td> Distance : " . $distances['b'];
    echo '</tr></td><tr><td>A To C : ';
    echo (str_replace('","', " --> ", json_encode($pathC))) . "</td><td> Distance : " . $distances['c'];
    echo '</tr></td><tr><td>A To D : ';
    echo (str_replace('","', " --> ", json_encode($pathD))) . "</td><td> Distance : " . $distances['d'];
    echo '</tr></td><tr><td>A To E : ';
    echo (str_replace('","', " --> ", json_encode($pathE))) . "</td><td> Distance : Not Reachable";
    echo '</tr></td><tr><td>A To F : ';
    echo (str_replace('","', " --> ", json_encode($pathF))) . "</td><td> Distance : " . $distances['f'];
    echo '</tr></td>';

    echo "</tbody></table>";
    
    
}

runTest();

