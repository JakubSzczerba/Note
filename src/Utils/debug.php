<?php
declare(strict_types=1);            //wlaczenie trybu statycznego

error_reporting(E_ALL);             // dwie komendy do zglaszana bledow
ini_set('display_error', '1');
/*
error_reporting(0);                 // wylaczenie zglaszania bledow
ini_set('display_error', '0');
*/

function dump($data)
{
    echo '</br><div 
    style="          
        background: lightgrey;
        display: inline-block;
        padding: 0 10px;
        border: 1px solid gray;
    "
    >
    <pre>';
    print_r($data);
    echo '</div>
    </pre>
    </br>';
}


