<?php
function isUrl($uri)
{
return $uri === $_SERVER['REQUEST_URI'];}

function dd($data)


{
    echo '<pre>';
    var_dump($data);
    echo '</pre>';

    die();
}
