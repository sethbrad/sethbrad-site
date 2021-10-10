<?php

include("./header.php");

$page = $_GET['page'] ?? null;
?>
<body>
<?php

if($page == 'about'){
    include('./components/about.html');
}elseif($page == 'projects'){
    include('./components/projects.html');
}elseif($page == 'reflection') {
    include('./components/reflection.html');
}elseif($page == 'resources') {
    include('./components/resources.html');
}else{
    include('./components/about.html');
}

?>
</body></html>
<?php

include("./footer.php");