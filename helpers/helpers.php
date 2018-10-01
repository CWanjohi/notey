<?php
	//display errors
	function displayErrors($errors){
		$display ='<ul class="bg-danger">';
		foreach ($errors as $error) {
			$display .='<li class="text-danger">'.$error.'</li>';
		}
		$display .='</ul>';
		return $display;
	}

	//validate user entries
	function cleaner($dirty){
		return htmlentities($dirty,ENT_QUOTES,"UTF-8");
	}

	//format currency
	function money($number){
		return 'Ksh.'.number_format($number,2);
	}

	//login user
	function login($user_id){
		session_start();
		global $db;
		$_SESSION['SBUser'] = $user_id;
		$_SESSION['email'] = $email;
			
		$date = date("Y-m-d H:i:s");
		$_SESSION['successFlash'] ='You are now logged in.';
		header('Location: index.php');
	}

	//check if user is logged in
	function isLoggedIn(){
		if (isset($_SESSION['SBUser']) && $_SESSION['SBUser'] > 0) {
			return true;
		}else{
		return false;
		}
	}

	function loginErrorRedirect($url='login.php'){
		$_SESSION['errorFlash'] ='You must be logged in to access that page!';
		header('Location: '.$url);
	}

	function permissionErrorRedirect($url='login.php'){
		$_SESSION['errorFlash'] ='You do not have permission to access that page!';
		header('Location: '.$url);
	}

	function hasPermission($permission='member'){
		global $userData;
		$permissions =explode(',', $userData['permissions']);
		if (in_array($permission, $permissions, true)) {
			return true;
		}else{
			return false;
		}
	}

	// //keyword search functions
	// // below function removes unnecessary words from the search term and return them as an array
	// function filterSearchKeys($query){
	//     $query = trim(preg_replace("/(\s+)+/", " ", $query));
	//     $words = array();
	//     // expand this list with your words.
	//     $list = array("in","it","a","the","of","or","I","you","he","me","us","they","she","to","but","that","this","those","then");
	//     $c = 0;
	//     foreach(explode(" ", $query) as $key){
	//         if (in_array($key, $list)){
	//             continue;
	//         }
	//         $words[] = $key;
	//         if ($c >= 15){
	//             break;
	//         }
	//         $c++;
	//     }
	//     return $words;
	// }

	// // limit words number of characters
	// function limitChars($query, $limit = 200){
	//     return substr($query, 0,$limit);
	// }

?>