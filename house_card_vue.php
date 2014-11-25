<!DOCTYPE html>
	<html>
		<head>
                    <link rel="stylesheet" href="css_house_card.css" />
                    <meta charset="utf-8">
                    <title> Fiche maison </title> 
		</head>
                
		<body>
                    <section class="RightCol">
			<article class="PhotosButtons"> <!-- Mettre ici les photos et les 2 boutons -->
				<aside class="PhotosMM"> 
					<p>
						<a href="Photos_exemple/maison1.png"><img src="Photos_exemple/tn_maison1.png" alt="Photo maison"></a>
						<a href="Photos_exemple/maison2.jpg"><img src="Photos_exemple/tn_maison2.jpg" alt="Photo maison"></a>
						<a href="Photos_exemple/maison3.jpg"><img src="Photos_exemple/tn_maison3.jpg" alt="Photo maison"></a>
					</p>
				<div class="ButtonMM">
					<input type="button" name="DatePick" value="Choisir une date" onclick="self.location.href='test n3bis.html'" style="width:130px" /> <!--Menu déroulant avec les dates possibles ???-->
						<br />
					<input type="button" name="SaveHouse" value="Sauvegarder" onclick="self.location.href='test n3bis.html'" style="width:130px" /> <!-- Javascript ou PHP ici ?? -->
				</div>
				</aside>
			</article>
                        
		
			<article class="DescriptionMM"> <!--Mettre ici la description de la maison-->
                            <p class="TxtDesc">
                                <?php
                                    function ShowDesc ($desc)
                                        {
                                            while ($desk=$askdesc->fetch())
                                                {
                                                    echo "Descrition du bien : $desc";
                                                }
                                        }
                                ?>
                            </p>
			</article>
                        

			<article class="ComMM"> <!-- Mettre ici les commentaires -->
				<p class="TxtCom"> Liste de 3-4 commentaires (les mieux notés ??)
				</p>
			</article>
                    </section>
                    
		
                    <section class="LeftCol">
			<article class="RapProf"> <!--Rappel du profil du membre-->
			<p> Rappel du profil du propriétaire du logement
			</p>
			</article>
			
			<article class="DateMM"> <!-- Mettre ici les dates -->
                            <?php
                                function ShowDate ($datebegin,$dateend)
                                    {
                                        while($datebegin=$askdatebegin ->fetch()AND $dateend=$askdateend ->fetch())
                                            {
                                                echo"du $datebegin au $dateend";
                                            }
                                    }
                            ?>
			</article>
                    </section>                    
                </body>
			