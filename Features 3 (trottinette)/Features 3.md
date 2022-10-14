
<h1 align="center">Features 3 GSB (Trotinette)</h1>


<h2>Fichier a modifier</h2>



<h1> c_connexion.php : </h1>
 



```php
# else{
			$id = $visiteur['id'];
			$nom =  $visiteur['nom'];
			$prenom = $visiteur['prenom'];
			$modele = $visiteur['modele'];
			$vitesseMax = $visiteur['vitesseMax'];
			$autonomie = $visiteur['autonomie'];
			connecter($id,$nom,$prenom,$modele,$vitesseMax,$autonomie);
			include("vues/v_sommaire.php");
		}

```

<h1> class.pdogsb.inc.php :  </h1>

```php
public function getInfosVisiteur($login, $mdp){
		$req = "SELECT Visiteur.nom as nom, Visiteur.prenom as prenom, Trottinette.id as id, Trottinette.modele
		as modele, trottinette.vitesseMax as vitesseMax, trottinette.autonomie as autonomie from Visiteur
		INNER JOIN Trottinette ON Trottinette.id = Visiteur.idTrottinette
		where Visiteur.login='$login' and Visiteur.mdp='$mdp'";
		$rs = PdoGsb::$monPdo->query($req);
		$ligne = $rs->fetch();
		return $ligne;
	}
```


<h1> fct.inc.php : </h1>



```php
function connecter($id,$nom,$prenom,$modele,$vitesseMax,$autonomie){
	$_SESSION['idVisiteur']= $id; 
	$_SESSION['nom']= $nom;
	$_SESSION['prenom']= $prenom;
	$_SESSION['modele']= $modele;
	$_SESSION['vitesseMax']= $vitesseMax;
	$_SESSION['autonomie']= $autonomie;

}
```

<h1> v_sommaire.php :  </h1>



```php
<br>
         <li>
		<b>Modele de la trottinette :</b><br>
		<?php echo $_SESSION['modele']?>
	 </li>
<br>
         <li >
		<b>VitesseMax de la trottinette :</b><br>
		<?php echo $_SESSION['vitesseMax']?>
	 </li>
<br>
         <li >
		<b>Autonomie de la trottinette :</b><br>
		<?php echo $_SESSION['autonomie'] ?> mAh
	 </li>
<br>
```

A INSERER EN DESSOUS DE LA LIGNE : 


```php
<li >
	Visiteur :<br>
	<?php echo $_SESSION['prenom']."  ".$_SESSION['nom']  ?>
</li>
```



SI SA MARCHE PAS REARDER LE DOSSIER FEATURES 3 GSB SUR NOTION
