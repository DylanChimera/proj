<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	FUNCTION get_data() {
		$name = "inscrit";
		$file_name = $name . '.json';

		if(file_exists($file_name)) {
			$current_data=file_get_contents("$file_name");
            $array_data=json_decode($current_data, true);
			if(in_array($_POST('email'), $array_data)) {
					echo "Ce mail est déjà utilisé !";
			}
			else {
			$datae = array(
				'nom' => $_POST['nom'],
				'prenom' => $_POST['prenom'],
				'birth' => $_POST['birth'],
				'email' => $_POST['email'],
				'mdp' => $_POST['mdp'],
			);
			$array_data[]=$datae;
            echo "file exist<br/>";
            return json_encode($array_data);
			}
		}
		else {
            $datae=array();
            $datae[]=array(
				'nom' => $_POST['nom'],
				'prenom' => $_POST['prenom'],
				'birth' => $_POST['birth'],
				'email' => $_POST['email'],
				'mdp' => $_POST['mdp'],
            );
            echo "file not exist<br/>";
            return json_encode($datae);   
        }
	
	}

	$file_name='inscrit'. '.json';

	if (file_put_contents($file_name, get_data())) {
		echo $file_name . 'fichier créer';
	}
	else {
		echo 'il y a une erreur';
	}
}
?>