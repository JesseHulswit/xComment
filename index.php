<?

if(empty($_GET['p'])){
	
		include('pages/home.php');

}



if(!empty($_GET['p'])){

$page = $_GET['p'];

if ($page == "home") {
	include('pages/home.php');
}

/* ============================================================================================================== */
/* ============================================================================================================== */



else if ($page == "page2") {
	include('pages/page2.php');
}








/* ============================================================================================================== */
/* ============================================================================================================== */



else {
	include('pages/home.php');

}

}

?>