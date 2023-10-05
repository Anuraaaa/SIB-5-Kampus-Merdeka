<?php
$validPages = [ 'dashboard', 'pages-profile'];
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

if (in_array($page, $validPages))
{
    include 'page/' . $page . '.php';
} 
else 
{
    include 'page/dashboard.php';
}
?>