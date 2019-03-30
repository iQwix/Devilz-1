<?php 
    /* 
    ** هذا الفنكشن يحول المتغير الي تكتبه في اي صفحة الى عنوان الصفحة 
    ** مثال " $pageTitle = 'home' == <title>home</title>"
    ** إذا المتغير ما انكتب بيكتب <title>Devilz</title>
    */

    function getTitle() {
        
        global $pageTitle;

		if (isset($pageTitle)) {

			echo $pageTitle;	

		} else {

			echo "Devilz";

		}
	}

?>