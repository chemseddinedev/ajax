<title>server</title>
<?php  

$bdd = new PDO('mysql:host=localhost;dbname=crudajax', 'root', '');

$page = isset($_GET['add'])?$_GET['add']:'';

if ($page == 'add') {
	$name = $_POST['nm'];
	$email = $_POST['em'];
	$phone = $_POST['hp'];
	$address = $_POST['al'];
	$stmt = $db->prepare("INSERT INTO crud VALUES ('',$name,$email,$phone,$address) ");
	$stmt->execute(array($name, $email, $phone, $address,));


}elseif ($page == 'edit') {
	# code...
}elseif ($page == 'del') {
	# code...
}


?>