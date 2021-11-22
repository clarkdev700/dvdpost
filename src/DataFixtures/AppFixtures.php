<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Actor;
use App\Entity\Producer;
use App\Entity\Product;
use App\Entity\ProductActor;
use App\Entity\Category;


class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
    	//category
    	$category_1 = new Category("Comédie");
    	$manager->persist($category_1);

    	$category_2 = new Category("Action");
    	$manager->persist($category_2);

    	$category_3 = new Category("Animé");
    	$manager->persist($category_3);

    	$category_4 = new Category("Documentaire");
    	$manager->persist($category_4);

    	//Actor
    	$actor_1 = new Actor("Calista Flockhart");
    	$manager->persist($actor_1);
    	
    	$actor_2 = new Actor("Jeremy Jordan");
    	$manager->persist($actor_2);
    	
    	$actor_3 = new Actor("Mehcad Brooks");
    	$manager->persist($actor_3);
    	
    	$actor_4 = new Actor("Melissa Benoist");
    	$manager->persist($actor_4);
    	
    	$actor_5 = new Actor("Chyler Leigh");
    	$manager->persist($actor_5);

    	$actor_6 = new Actor("Jet Li");
    	$manager->persist($actor_6);
    	
    	$actor_7 = new Actor("Gong Li");
    	$manager->persist($actor_7);
    	
    	$actor_8 = new Actor("Donnie Yen");
    	$manager->persist($actor_8);
    	
    	$actor_9 = new Actor("Yifei Liu");
    	$manager->persist($actor_9); 
    	
    	$actor_10 = new Actor("Matthew Davis");
    	$manager->persist($actor_10);
    	
    	$actor_11 = new Actor("Danielle Rose Russell");
    	$manager->persist($actor_11);
    	
    	$actor_12 = new Actor("Aria Shahghasemi");
    	$manager->persist($actor_12);
    	
    	$actor_13 = new Actor("Quincy Fouse");
    	$manager->persist($actor_13);
    	
    	$actor_14 = new Actor("Milla Jovovich"); 
    	$manager->persist($actor_14);
    	
    	$actor = new Actor("Ron Perlman");
    	$manager->persist($actor);    	    	    	    	    	    	    
     	
     	$actor_15 = new Actor("Meagan Good");
    	$manager->persist($actor_15);
     	
     	$actor_16 = new Actor("Tony Jaa");
    	$manager->persist($actor_16); 
    	
    	$actor_17 = new Actor("Chris Rock");
    	$manager->persist($actor_17);
     	
     	$actor_18 = new Actor("Stanley Tucci");
    	$manager->persist($actor_18);
    	
    	$actor_19 = new Actor("Anne Hathaway");
    	$manager->persist($actor_19);
    	
    	$actor_20 = new Actor("Octavia Spencer");
    	$manager->persist($actor_20); 
        //Producteur
        $producer_1 = new Producer("Enrico Casarosa");
        $manager->persist($producer_1);

        $producer_2 = new Producer("Aurel");
        $manager->persist($producer_2);

        $producer_3 = new Producer("Rémi Chayé");
        $manager->persist($producer_3);

        $producer_4 = new Producer("Joann Sfar");
        $manager->persist($producer_4);

        $producer_5 = new Producer("Lorenzo Mattotti");
        $manager->persist($producer_5);

        $producer_6 = new Producer("Makoto Shinkai");
        $manager->persist($producer_6);

        $producer_7 = new Producer("Mari Okada");
        $manager->persist($producer_7);

        $producer_8 = new Producer("Makoto Shinkai");
        $manager->persist($producer_8);

        $producer_9 = new Producer("Various");
        $manager->persist($producer_9);

        $producer_10 = new Producer("Niki Caro");
        $manager->persist($producer_10);

        $producer_11 = new Producer("Niki Caro");
        $manager->persist($producer_11);

        $producer_12 = new Producer("Roel Reiné");
        $manager->persist($producer_12);

        $producer_13 = new Producer("Hark Tsui");
        $manager->persist($producer_13);

        $producer_14 = new Producer("Prachya Pinkaew");
        $manager->persist($producer_14);

        $producer_15 = new Producer("Keanu Reeves");
        $manager->persist($producer_15);

        $producer_16 = new Producer("Keishi Ohtomo");
        $manager->persist($producer_16);

        $producer_17 = new Producer("Wong Kar Wai");
        $manager->persist($producer_17);

        $producer_18 = new Producer("Leonardo D'Agostini");
        $manager->persist($producer_18);

        $producer_19 = new Producer("Judd Apatow");
        $manager->persist($producer_19);

        $producer_20 = new Producer("Claude Lelouch");
        $manager->persist($producer_20);

        $producer_21 = new Producer("Richard Linklater");
        $manager->persist($producer_21);


    	//Product
     	$product_1 = new Product("Luca", $category_3,"2:15min","Dans une très jolie petite ville côtière de la Riviera italienne, un jeune garçon, Luca, vit un été inoubliable, ponctué de délicieux gelato, de savoureuses pasta et de longues balades en scooter. Il partage ses aventures avec son nouveau meilleur ami, mais ce bonheur est menacé par un...", new \DateTime("2020-03-14"), 10, $producer_1, '1.jpg');
    	$manager->persist($product_1); 
    	
    	$product_2 = new Product("Josep", $category_3,"1:15min","Février 1939. Submergé par le flot de Républicains fuyant la dictature franquiste, le gouvernement français les parque dans des camps. Deux hommes séparés par les barbelés vont se lier d'amitié. L'un est gendarme, l'autre est dessinateur. De Barcelone à New York, l'histoire vraie de...", new \DateTime("2020-03-14"), 10, $producer_2, '2.jpg');
    	$manager->persist($product_2);  

    	$product_3 = new Product("Raya et le Dernier Dragon", $category_3,"1:45min","Il y a de cela fort longtemps, au royaume imaginaire de Kumandra, humains et dragons vivaient en harmonie. Mais un jour, une force maléfique s'abattit sur le royaume et les dragons se sacrifièrent pour sauver l'humanité.
Lorsque cette force réapparait cinq siècles plus tard, Raya, une...", new \DateTime("2019-03-18"), 10, $producer_3, '3.jpg');
    	$manager->persist($product_3);  

    	$product_35 = new Product("Yakari", $category_3,"2:01min","Yakari fait partie des grands héros de la littérature enfantine. C'est un enfant sioux heureux, courageux et généreux, doté du fabuleux pouvoir de parler et de comprendre le langage des animaux. Mais Yakari n'a pas toujours eu ce don...", new \DateTime("2020-10-20"), 10, $producer_4, '35.jpg');
    	$manager->persist($product_35);  

    	$product_4 = new Product("Calamity", $category_3,"1:15min","1863, États-Unis d'Amérique. Dans un convoi qui progresse vers l'Ouest avec l'espoir d'une vie meilleure, le père de Martha Jane se blesse. C'est elle qui doit conduire le chariot familial et soigner les chevaux. L'apprentissage est rude et pourtant Martha Jane ne s'est jamais sentie aussi...", new \DateTime("2020-03-18"), 10, $producer_4, '4.jpg');
    	$manager->persist($product_4);  

    	$product_5 = new Product("Petit Vampire
", $category_3,"1:34min","Petit Vampire vit dans une maison hantée avec une joyeuse bande de monstres, mais il s'ennuie terriblement... Cela fait maintenant 300 ans qu'il a 10 ans, alors les bateaux de pirates, et le cinéclub, ça fait bien longtemps que ça ne l'amuse plus. Son rêve ? Aller à l'école pour se faire...", new \DateTime("2020-03-14"), 10, $producer_5, '5.jpg');
    	$manager->persist($product_1);  

    	$product_6 = new Product("Soul", $category_3,"1:50min","Passionné de jazz et professeur de musique dans un collège, Joe Gardner a enfin l'opportunité de réaliser son rêve : jouer dans le meilleur club de jazz de New York. Mais un malencontreux faux pas le précipite dans le « Grand Avant » ? un endroit fantastique où les nouvelles âmes...", new \DateTime("2020-03-14"), 10, $producer_6, '6.jpg');
    	$manager->persist($product_6);  

    	$product_7 = new Product("La Fameuse Invasion des Ours en Sicile", $category_3,"2:15min","Tout commence en Sicile, le jour où Tonio, le fils de Léonce, roi des ours, est enlevé par des chasseurs... Profitant de la rigueur d'un hiver qui menace son peuple de famine, le roi Léonce décide de partir à la recherche de Tonio et d'envahir la plaine où habitent les hommes. Avec l'aide...", new \DateTime("2020-03-22"), 10, $producer_7, '7.jpg');
    	$manager->persist($product_7);  

    	$product_8 = new Product("Midway", $category_2,"1:15min","MIDWAY présente l'histoire épique et vraie d'une flotte américaine sous-équipée qui, contre toute attente, a vaincu son puissant adversaire grâce à ses pilotes courageux et à ses commandants intelligents. La démocratie et la liberté en jeu, ces frères d'armes américains ont vaincu la...", new \DateTime("2019-01-10"), 10, $producer_8, '8.jpg');
    	$manager->persist($product_8);  

    	$product_9 = new Product("Overlord", $category_2,"1:15min","À la veille du débarquement, un groupe de parachutistes est largué en France occupée. Alors qu'ils luttent pour accomplir ce qui ressemble à une mission impossible, ils tombent sur un laboratoire secret dans lequel sont menées des expériences surnaturelles, aussi étranges que", new \DateTime("10/01/2020"), 10, $producer_9, '9.jpg');
    	$manager->persist($product_9);  

    	$product_10 = new Product("12 Strong", $category_2,"1:15min","Le capitaine Mitch Nelson est le chef de l'unité des Forces Spéciales qui a été choisie pour une périlleuse mission secrète. Son détachement et lui sont envoyés en Afghanistan, en plein conflit armé, pour apporter leur aide aux Afghans dans leur lutte contre les talibans.", new \DateTime("2020-02-11"), 10, $producer_10, '10.jpg');
    	$manager->persist($product_10);  

    	$product_11 = new Product("Dunkerque", $category_2,"2:10min","Le récit de la fameuse évacuation des troupes alliées de Dunkerque en mai 1940.", new \DateTime("2020-05-16"), 10, $producer_11, '11.jpg');
    	$manager->persist($product_11);  

    	$product_12 = new Product("HhhH", $category_2,"1:15min","L'ascension fulgurante de Reinhard Heydrich, militaire déchu, entraîné vers l'idéologie nazie par sa femme Lina. Bras droit d'Himmler et chef de la gestapo, Heydrich devient l'un des hommes les plus dangereux du régime. Hitler le nomme à Prague pour prendre le commandement de la...", new \DateTime("2020-03-14"), 10, $producer_12, '12.jpg');
    	$manager->persist($product_12);  

    	$product_13 = new Product("Un Jour dans la Vie de Billy Lynn", $category_2,"2:15min","En 2005, Billy Lynn, un jeune Texan de 19 ans, fait partie d'un régiment d'infanterie en Irak victime d'une violente attaque. Ayant survécu à l'altercation, il est érigé en héros, ainsi que plusieurs de ses camarades. Et c'est avec ce statut qu'ils sont rapatriés aux Etats-Unis par...", new \DateTime("2020-08-16"), 10, $producer_13, '13.jpg');
    	$manager->persist($product_13);  

    	$product_14 = new Product("Free State of Jones", $category_2,"2:15min","En pleine guerre de Sécession, Newton Knight, courageux fermier du Mississippi, prend la tête d'un groupe de modestes paysans blancs et d'esclaves en fuite pour se battre contre les États confédérés. Formant un régiment de rebelles indomptables, Knight et ses hommes ont l'avantage...", new \DateTime("2020-06-11"), 10, $producer_14,'14.jpg');
    	$manager->persist($product_14);  

    	$product_15 = new Product("Land of Mine", $category_2,"1:25min","1945. Danemark.
Fin de la Seconde Guerre Mondiale.
Plusieurs soldats allemands, à peine sortis de l'adolescence, sont faits prisonniers par l'armée danoise et envoyés en première ligne pour désamorcer les mines enfouies le long de la côte. Pour eux, la guerre est loin d'être terminée....", new \DateTime("2020-03-14"), 10, $producer_15, '15.jpg');
    	$manager->persist($product_15);  

    	$product_16 = new Product("Jarhead 3 : Le Siège", $category_2,"2:15min","Le caporal Evn Albright a joint les Marines pour sauver le monde et pour voir un peu d'action, mais pas nécessairement dans cet ordre. Mais, à sa première mission, protéger une ambassade américaine dans une capitale pacifique du Moyen-Orient, son unité est assignée à la protection des...", new \DateTime("2020-09-12"), 10, $producer_16, '16.jpg');
    	$manager->persist($product_16); 

    	$product_17 = new Product("Saints and Soldiers: War Pigs", $category_2,"01:15min","Une unité de soldats marginaux connus comme les cochons de guerre doit aller derrière les lignes ennemies pour exterminer les Nazis par tous les moyens nécessaires.", new \DateTime("2020-05-05"), 10, $producer_17, '17.jpg');
    	$manager->persist($product_17);  

    	$product_18 = new Product("Fury", $category_2,"2:15min","Avril 1945, Alors que les Alliés font leur dernière avancée en Europe, l'impitoyable sergent Wardaddy et ses 4 hommes sont envoyés en mission derrière les lignes ennemies, aux commandes d'un char Sherman.
En dépit de leur nombre et de leur armement, ils vont tenter de frapper l'Allemagne...", new \DateTime("2020-03-14"), 10,$producer_18 ,'18.jpg');
    	$manager->persist($product_18); 

    	$product_19 = new Product("300 : La Naissance d'un Empire", $category_2,"2:10min","En l'an 490 avant J.C., les troupes athéniennes doivent contrer les attaques de l'empire Perse. Une grande bataille se prépare. Non loin d'Athènes, à 42 km au nord, Marathon est l'un des derniers remparts protégeant la grande Athènes. Les Perses sont nombreux, beaucoup plus nombreux que les...", new \DateTime("2020-10-14"), 10, $producer_19, '19.jpg');
    	$manager->persist($product_19);  

    	$product_20 = new Product("The Monuments Men", $category_2,"2:20min","Venus de 13 pays différents les Monuments Men se lancent dans la plus grande chasse au trésor du XXème siècle : retrouver les oeuvres d'art volées par les nazis durant la seconde guerre mondiale.", new \DateTime("2020-03-14"), 10, $producer_20, '20.jpg');
    	$manager->persist($product_20);  

    	$product_21 = new Product("The Messenger", $category_2,"2:30min","Jeune officier, Will Montgomery est chargé d'une mission délicate: annoncer aux familles la nouvelle du décès d'un des leurs au combat. Il est formé par Anthony Stone, un partenaire de travail avec qui les relations sont tendues.", new \DateTime("2020-11-14"), 10, $producer_21, '21.jpg');
    	$manager->persist($product_21);  

    	$product_22 = new Product("Au Pays du Sang et du Miel", $category_2,"1:35min","Alors que la guerre fait rage en Bosnie, Danijel et Ajla se retrouvent dans des camps opposés malgré ce qu'ils ont vécu. Danijel est un soldat serbe et Ajla une prisonnière bosniaque retenue dans le camp qu'il surveille. Pourtant, avant le conflit, l'un et l'autre partageaient d'autres...", new \DateTime("2020-11-19"), 10, $producer_1,'22.jpg');
    	$manager->persist($product_22);  

    	$product_23 = new Product("Cheval de Guerre", $category_2,"2:15min","Une histoire d'amitié entre Albert, un jeune garçon, et son cheval Joey. Vendu à la cavalerie britannique dans les premières heures de la Première Guerre mondiale, Joey est directement envoyé au front. Mais il est capturé par les Allemands qui n'hésitent pas à s'en servir dans les...", new \DateTime("2020-08-11"), 10,$producer_3 ,'23.jpg');
    	$manager->persist($product_23);  

    	$product_24 = new Product("Occupation", $category_2,"1:15min","L’occupation de l’Irak en 2003 par les anglais et les américains, à travers le parcours de trois soldats britanniques.", new \DateTime("2020-06-18"), 10, $producer_7, '24.jpg');
    	$manager->persist($product_24);  

    	$product_25 = new Product("An Empress and the Warriors", $category_2,"2:15min","Dans la Chine Ancienne, Yen Fei-Er accède au trône après la mort de son père sur le champ de bataille. La jeune femme, accompagnée du général Muyong Xuehu doit faire face à son cousin qui revendique le trône.", new \DateTime("2020-03-18"), 10, $producer_20, '25.jpg');
    	$manager->persist($product_25);  

    	$product_26 = new Product("Luca", $category_3,"1:15min","Dans une très jolie petite ville côtière de la Riviera italienne, un jeune garçon, Luca, vit un été inoubliable, ponctué de délicieux gelato, de savoureuses pasta et de longues balades en scooter. Il partage ses aventures avec son nouveau meilleur ami, mais ce bonheur est menacé par un...", new \DateTime("2019-02-01"), 10, $producer_7, '26.jpg');
    	$manager->persist($product_26);  

    	$product_27 = new Product("La Bataille de Passchendaele", $category_2,"3:15min","1917. Blessé lors des combats en Europe, le sergent Michael Dunne est rapatrié au Canada. A l'hôpital, il rencontre Sarah, une jeune infirmière dont il tombe amoureux. Lorsque le jeune frère de Sarah, s'enrôle pour combattre, Michael repart au front pour le protéger. Comme des milliers...", new \DateTime("2020-04-14"), 10, $producer_9, '27.jpg');
    	$manager->persist($product_27);  

    	$product_28 = new Product("Everyman's War", $category_2,"1:15min","1944. Comme de nombreux autres jeunes soldats américains, Don Smith, 19 ans débarque en Normandie. A ses côtés, de nombreux jeunes de tous milieux, de toutes origines. Jour après jour les alliés progressent, les nouvelles recrues découvrent la peur, la mort, l'horreur des combats, mais...", new \DateTime("2018-08-14"), 10, $producer_15, '28.jpg');
    	$manager->persist($product_28);  

    	$product_29 = new Product("L'honneur des Guerriers", $category_2,"2:10min","Na de aanval op Pearl Harbor worden Japanse Amerikanen massaal in kampen geplaatst. Om hun loyaliteit te bewijzen schrijven 1400 van hen zich in bij het Amerikaanse leger. Zij vechten de rest van de tweede wereldoorlog in Noord Afrika, Italie en Frankrijk bij het honderdste infanterie bataljon.", new \DateTime("2019-05-11"), 10, $producer_2, '29.jpg');
    	$manager->persist($product_29);  

    	$product_30 = new Product("Shell Shock", $category_2,"2:10min","Photographes de guerre chevronnés, Mark et David sont en mission au Kurdistan. Tandis que le premier décide de rester sur place quelques jours encore en quête du cliché susceptible de le rendre célèbre, le second ne supporte plus la violence et le désespoir quotidiens. Surtout, il veut...", new \DateTime("2021-05-13"), 10, $producer_1, '30.jpg');
    	$manager->persist($product_30);  

    	$product_31 = new Product("Le Prince Oublié", $category_2,"1:20min","La vie de Djibi tourne autour de sa fille Sofia, qu'il élève seul. Tous les soirs, il lui invente une histoire pour l'endormir. Ses récits extraordinaires prennent vie dans un monde imaginaire où l'héroïne est toujours la princesse Sofia, et son père, le Prince courageux. Mais l'entrée au...", new \DateTime("2020-07-07"), 10, $producer_6, '31.jpg');
    	$manager->persist($product_31);  

    	$product_32 = new Product("Green Zone", $category_2,"1:15min","Pendant l'occupation américaine de Bagdad en 2003, l'adjudant-chef Roy Miller et ses hommes ont pour mission de trouver des armes de destruction massive censées être stockées dans le désert iraquien. Ballotés d'un site piégé à un autre, les militaires découvrent rapidement une...", new \DateTime("2021-09-15"), 10, $producer_5, '32.jpg');
    	$manager->persist($product_32);  

    	$product_33 = new Product("J'Espère que tu Crèveras la Prochaine fois !", $category_1,"2:00min","Eszter, 16 ans, est amoureuse de son professeur d'anglais. Un jour, celui-ci annonce son départ pour l'étranger, et Eszter reçoit un curieux mail de sa part. Commence alors dans le plus grand secret une romance par textos et chats vidéo. Mais l'idylle devient de plus en plus possessive, puis...", new \DateTime("2017-06-11"), 10, $producer_11, '33.jpg');
    	$manager->persist($product_33);  

    	$product_34 = new Product("The Climb", $category_1,"2:15min","Kyle et Mike sont deux meilleurs amis aux tempéraments très différents mais dont l'amitié a toujours résisté aux épreuves de la vie. Jusqu'au jour où Mike couche avec la fiancée de Kyle…
Alors que l'amitié qui les lie aurait dû être irrémédiablement rompue, un événement...", new \DateTime("2021-04-17"), 10, $producer_13, '34.jpg');
    	$manager->persist($product_34);       	

    	//Product and actor relation
    	$productActor_1 = new ProductActor($product_1, $actor_1); 
    	$manager->persist($productActor_1);

    	$productActor_2 = new ProductActor($product_1, $actor_2); 
    	$manager->persist($productActor_2);

    	$productActor_3 = new ProductActor($product_2, $actor_3); 
    	$manager->persist($productActor_3);

    	$productActor_4 = new ProductActor($product_2, $actor_4); 
    	$manager->persist($productActor_4);

    	$productActor_5 = new ProductActor($product_3, $actor_5); 
    	$manager->persist($productActor_5);

    	$productActor_6 = new ProductActor($product_3, $actor_6); 
    	$manager->persist($productActor_6);

    	$productActor_7 = new ProductActor($product_4, $actor_7); 
    	$manager->persist($productActor_7);

    	$productActor_8 = new ProductActor($product_5, $actor_8); 
    	$manager->persist($productActor_8);

    	$productActor_9 = new ProductActor($product_5, $actor_9); 
    	$manager->persist($productActor_9);

    	$productActor_10 = new ProductActor($product_6, $actor_10); 
    	$manager->persist($productActor_10);

    	$productActor_11 = new ProductActor($product_6, $actor_11); 
    	$manager->persist($productActor_11);

    	$productActor_12 = new ProductActor($product_6, $actor_12); 
    	$manager->persist($productActor_12);

    	$productActor_13 = new ProductActor($product_7, $actor_13); 
    	$manager->persist($productActor_13);

    	$productActor_14 = new ProductActor($product_7, $actor_14); 
    	$manager->persist($productActor_14);
    	
        $productActor_15 = new ProductActor($product_8, $actor_15); 
    	$manager->persist($productActor_15);

    	$productActor_16 = new ProductActor($product_9, $actor_16); 
    	$manager->persist($productActor_16);

    	$productActor_17 = new ProductActor($product_10, $actor_17); 
    	$manager->persist($productActor_17);

    	$productActor_18 = new ProductActor($product_10, $actor_18); 
    	$manager->persist($productActor_18);

    	$productActor_19 = new ProductActor($product_11, $actor_19); 
    	$manager->persist($productActor_19);

    	$productActor_20 = new ProductActor($product_11, $actor_11); 
    	$manager->persist($productActor_20);

    	$productActor_21 = new ProductActor($product_11, $actor_20); 
    	$manager->persist($productActor_21);

        $productActor_22 = new ProductActor($product_12, $actor_9); 
        $manager->persist($productActor_22);

        $productActor_23 = new ProductActor($product_12, $actor_10); 
        $manager->persist($productActor_23);

        $productActor_24 = new ProductActor($product_13, $actor_3); 
        $manager->persist($productActor_24);

        $productActor_25 = new ProductActor($product_13, $actor_6); 
        $manager->persist($productActor_25);

        $productActor_26 = new ProductActor($product_14, $actor_7); 
        $manager->persist($productActor_26); 

        $productActor_27 = new ProductActor($product_14, $actor_7); 
        $manager->persist($productActor_27); 

        $productActor_28 = new ProductActor($product_15, $actor_8); 
        $manager->persist($productActor_28); 

        $productActor_29 = new ProductActor($product_15, $actor_1); 
        $manager->persist($productActor_29); 

        $productActor_30 = new ProductActor($product_15, $actor_6); 
        $manager->persist($productActor_30); 

        $productActor_31 = new ProductActor($product_16, $actor_8); 
        $manager->persist($productActor_31);

        $productActor_32 = new ProductActor($product_16, $actor_16); 
        $manager->persist($productActor_32);                                 	   	  		    	    	    	    	    	    
        $manager->flush();
    }
}
