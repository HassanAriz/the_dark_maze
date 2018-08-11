<html>
<body>

<link rel="stylesheet" type="text/css" href="labyrinthe_affichage.css">
<?php
 




function generer_tableau($col,$lig)
{
	

	
	//$position_colonne = 3;
	//$position_ligne = 2;
	


	session_start();

	//$_SESSION['position_ligne'] = $position_ligne;
	//$_SESSION['position_colonne'] = $position_colonne;

	
	$hasrd = rand(1,5);
	
	switch($hasrd)
	{
		case 1 :
	
		$laby[0][0] = 13;
		$laby[0][1] = 4;
		$laby[0][2] = 6;
		$laby[0][3] = 12;
		$laby[0][4] = 6;
		$laby[1][0] = 12;
		$laby[1][1] = 2;
		$laby[1][2] =9;
		$laby[1][3] = 3;
		$laby[1][4] = 10;
		$laby[2][0] = 10;
		$laby[2][1] = 9;
		$laby[2][2] = 5;
		$laby[2][3] = 7;
		$laby[2][4] = 10;
		$laby[3][0] = 10;
		$laby[3][1] = 12;
		$laby[3][2] = 4;
		$laby[3][3] = 5;
		$laby[3][4] = 3;
		$laby[4][0] = 9;
		$laby[4][1] = 3;
		$laby[4][2] = 9;
		$laby[4][3] = 5;
		$laby[4][4] = 7;
		break;

		case 2:

		 $laby[0][0] = 14;
		 $laby[0][1] = 14;
		 $laby[0][2] = 14;
		 $laby[0][3] = 13;
		 $laby[0][4] = 6;
		 $laby[1][0] = 10;
		 $laby[1][1] = 9;
		 $laby[1][2] = 0;
		 $laby[1][3] = 5;
		 $laby[1][4] = 2;
		 $laby[2][0] = 9;
		 $laby[2][1] = 6;
		 $laby[2][2] = 10;
		 $laby[2][3] = 14;
		 $laby[2][4] = 10;
		 $laby[3][0] = 14;
		 $laby[3][1] = 9;
		 $laby[3][2] = 3;
		 $laby[3][3] = 10;
		 $laby[3][4] = 10;
		 $laby[4][0] = 9;
		 $laby[4][1] = 5;
		 $laby[4][2] = 5;
		 $laby[4][3] = 1;
		 $laby[4][4] = 3;
		 break;
		 
		 case 3:
		 
		 $laby[0][0] = 12; 
		 $laby[0][1] = 6;
		 $laby[0][2] = 12;
		 $laby[0][3] = 5;
		 $laby[0][4] = 7;
		 $laby[1][0] = 11;
		 $laby[1][1] = 9;
		 $laby[1][2] = 1;
		 $laby[1][3] = 4;
		 $laby[1][4] = 7;
		 $laby[2][0] = 14;
		 $laby[2][1] = 12;
		 $laby[2][2] = 4;
		 $laby[2][3] = 3;
		 $laby[2][4] = 14;
		 $laby[3][0] = 9;
		 $laby[3][1] = 3;
		 $laby[3][2] = 8;
		 $laby[3][3] = 7;
		 $laby[3][4] = 10;
		 $laby[4][0] = 13;
		 $laby[4][1] = 5;
		 $laby[4][2] = 1;
		 $laby[4][3] = 5;
		 $laby[4][4] = 3;
			break;
			
		case 4:
		$laby[0][0] = 13; 
		 $laby[0][1] = 5;
		 $laby[0][2] = 4;
		 $laby[0][3] = 5;
		 $laby[0][4] = 6;
		 $laby[1][0] = 14;
		 $laby[1][1] = 12;
		 $laby[1][2] = 3;
		 $laby[1][3] = 13;
		 $laby[1][4] = 2;
		 $laby[2][0] = 10;
		 $laby[2][1] = 9;
		 $laby[2][2] = 6;
		 $laby[2][3] = 14;
		 $laby[2][4] = 10;
		 $laby[3][0] = 8;
		 $laby[3][1] = 7;
		 $laby[3][2] = 10;
		 $laby[3][3] = 10;
		 $laby[3][4] = 11;
		 $laby[4][0] = 9;
		 $laby[4][1] = 5;
		 $laby[4][2] = 1;
		 $laby[4][3] = 1;
		 $laby[4][4] = 7;
		 break;
		 
		 case 5:
		 $laby[0][0] = 14; 
		 $laby[0][1] = 13;
		 $laby[0][2] = 4;
		 $laby[0][3] = 5;
		 $laby[0][4] = 7;
		 $laby[1][0] = 8;
		 $laby[1][1] = 7;
		 $laby[1][2] = 8;
		 $laby[1][3] = 5;
		 $laby[1][4] = 6;
		 $laby[2][0] = 10;
		 $laby[2][1] = 12;
		 $laby[2][2] = 3;
		 $laby[2][3] = 14;
		 $laby[2][4] = 10;
		 $laby[3][0] = 8;
		 $laby[3][1] = 3;
		 $laby[3][2] = 12;
		 $laby[3][3] = 2;
		 $laby[3][4] = 10;
		 $laby[4][0] = 9;
		 $laby[4][1] = 5;
		 $laby[4][2] = 3;
		 $laby[4][3] = 11;
		 $laby[4][4] = 11;
		 break;
 
 }
 

	

	$cr = "\n";
	// Initialise un nouveau tableau avec le code HTML requis : balise <table>
	$tableau = '<table border="1" cellspacing=0 class ="tablecenter">'.$cr;
	for ($l = 0; $l < $lig ; $l++)
	{
		// Initialise une nouvelle ligne avec le code HTML requis : balise <tr>
		$ligne = '<tr>';
		for ($c = 0; $c < $col ; $c++)
		{
			// Ajoute la colonne dans la ligne avec le code HTML requis : balise <td> .... </td>
		//	$ligne .= '<td>&nbsp;&nbsp;&nbsp;&nbsp;';
			$labysave = $laby[$l][$c];
			$ligne .= ' <td class="C';
			$ligne .= $labysave;
		
                       

		$ligne .='"> </td>';
	}
		// Ferme la ligne avec le code HTML requis : balise </tr>
		$ligne .= '</tr> '.$cr;

		// Ajoute la ligne au tableau
		$tableau .= $ligne;
	}
	// Ferme le tableau avec le code HTML requis : balise </table>
	$tableau .= '</table>'.$cr;
	
	return $tableau;	

}

// RÃ©cuperer le code HTML du tableau dans une variable
$tableau = generer_tableau(5,5);

// Afficher ce tableau ce qui l'ajoute Ã  la page
echo $tableau;


?>


</body>
</html>
