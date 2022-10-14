    <!-- Division pour le sommaire -->
    <div id="menuGauche">
     <div id="infosUtil">
    
        <h2>
    
</h2>
    
      </div>  
   <ul id="menuList">
			<li >
				  Visiteur :<br>
				<?php echo $_SESSION['prenom']."  ".$_SESSION['nom']  ?>
			</li>
<br>
         <li >
				  <b>Modele de la trottinette :</b><br>
				<?php echo $_SESSION['modele']?>
			</li>
<br>
         <li >
				  <b>VitesseMax de la trottinette :</b><br>
				<?php echo $_SESSION['vitesseMax']?> km/h
			</li>
<br>
         <li >
				  <b>Autonomie de la trottinette :</b><br>
				<?php echo $_SESSION['autonomie'] ?> Wh
			</li>
<br>

           <li class="smenu">
              <a href="index.php?uc=gererFrais&action=saisirFrais" title="Saisie fiche de frais ">Saisie fiche de frais</a>
           </li>
<br>
           <li class="smenu">
              <a href="index.php?uc=etatFrais&action=selectionnerMois" title="Consultation de mes fiches de frais">Mes fiches de frais</a>
           </li>
<br>
 	        <li class="smenu">
              <a href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter">Déconnexion</a>
           </li>

   </ul>
        
    </div>
    
    