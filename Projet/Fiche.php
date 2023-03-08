<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="stylefiche.css"/>
        <title>Guenego Billot Noé</title>
    </head>
    <body>
		<header> <p1> </br><strong>Objets Trouvés CIV</strong></p1>
		</header>
		<section>
			<article>
				<p2>
					<label>Type d'objet:<span class="marge"></span></label>
                    <?php
                    $fp=file("data.txt");
                    echo $fp[0];
                    ?> 
				</p2>
			</article>
			<article>
				<p4>
					<label>Où le trouver:<span class="marge"></span></label> 
                    <?php
                    $fp=file("data.txt");
                    echo $fp[2];
                    ?>
				</p4>
			</article>
			<article>
				<p3>
					<label>description/éléments reconnaissables:</br><span class="marge"></span></label> 
                    <?php
                    $fp=file("data.txt");
                    echo $fp[1];
                    ?>
				</p3>
				<nav></br><img src=<?php
                    $fp=file("data.txt");
                    echo $fp[3];
                    ?> /></nav>
				</br>
			</article>
			
		</section>
		
		<aside>
			<img src="Image/CIV_logo.png" >
			<p>
				<strong>Cette page est une page de regroupement des objets/vêtements trouvés du Centre Internationnal de Valbonne, en général les objets se trouveront dans deux endroits possibles, les boites derrière la vie scolaire ou bien le bureau des professeurs de physique.</strong>
			</p>		
		</aside>

	</body>
</html>