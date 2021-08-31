<?php

include("./header.php");

$action = $_GET['action'] ?? null;

if($action == 'about'){
    include('./components/about.html');
}elseif($action == 'projects'){
    include('./components/projects.html');
}elseif($action == 'reflection'){
    include('./components/reflection.html');
}else{
    include('./components/about.html');
}

include("./footer.php");