INSERT INTO `Recipie` (`IDRecipie`,`TitleRecipie`, `DescriptionRecipie`, `Category`, `PrepTime`, `CookTime`, `RestTime`, `Difficulty`, `VideoLink`, `NumberOfServings`, `IsApproved`) VALUES
(1,"M7adjebs", "Des crêpes algériennes farcies qui réconfortent en hiver", "entrées", 60, 20, 30, "Moyenne", "https://www.youtube.com/embed/xEOBgGJyWHk", 6, 1 ),
(2,"Chorba frik","La chorba à l'algérienne est une soupe traditionnelle orientale principalement consommée en Algérie (comme son nom l'indique !) mais également en Tunisie et au Maroc lors de la période du ramadan. C'est une soupe à base de viande d'agneau ou de mouton","entrées",30,20,0,"facile","",4,1),
(3,"7mis","Le goût grillé du poivron, préparé en sauce avec de la tomate et de l’ail, donne une saveur très particulière à cette entrée et la rend très appréciable.Cette entrée se mange tiède ou froide !!","entrées",10,20,0,"facile","",2,1),
(4,"Brik","Le Bourek Annabi aussi appelé brika, est une recette algérienne, originaire de la ville de Annaba. Très présent sur la table du Ftour pendant le mois de Ramadhan, Il fait parti intégrante de la Street food car il se vend aussi dans les rues d’Annaba par des commerçants ambulants à l’ancienne époque.","entrées",20,25,0,"facile","",4,1),
(5,"Ghrayef","Crêpe aux mille trous se consomme au petit déjeuner et est très prisée pendant le mois du Ramadan, accompagnée de miel ou de beurre saupoudré d’un peu de sucre","boissons",10,10,60,"facile","",4,1);

INSERT INTO `Ingredient` (`IDIngredient`,`NameIngredient`, `CategoryIngredient`, `Season`, `IsHealthy`, `CaloriesIngredient`, `TotalFatIngredient`, `TotalProtienIngredient`, `TotalCarbsIngredient`,`WeightOfOne`) VALUES
(1,"Tomate", "vegetable", "estivale", 1, 18, 0.2, 0.9, 3.9,123),
(2,"Oignon", "vegetable", "tout", 1, 40, 0.1, 1.1, 9,110),
(3,"Poivron", "vegetable", "estivale", 1, 20, 0.2, 0.9, 4.6,119),
(4,"Ail", "vegetable", "tout", 1, 149, 1.5, 6.3, 33.1,5),
(5,"Semoule", "grain", "tout", NULL, 360, 1.1, 13, 73,NULL),
(6,"Viande hachée", "meat", "tout", 1, 332, 30, 14, 0,NULL),
(7,"Eau", "drink", "tout", 1, 0, 0, 0, 0,NULL),
(8,"Sel", "spice", "tout", NULL, 0, 0, 0, 0,NULL),
(9,"Poivre", "spice", "tout", NULL, NULL, NULL, NULL, NULL,NULL),
(10,"Poivre rouge", "spice", "tout", NULL, NULL, NULL, NULL, NULL,NULL),
(11,"Laurier", "spice", "tout", NULL, NULL, NULL, NULL, NULL,NULL),
-- ///////////////2nd recipie///////////////// --
(12,"Carotte", "vegetable", "tout", 1, NULL, NULL, NULL, NULL,NULL),
(13,"Céleri", "vegetable", "tout", 1, NULL, NULL, NULL, NULL,NULL),
(14,"Courgette", "vegetable", "estivale", 1, NULL, NULL, NULL, NULL,NULL),
(15,"Navet", "vegetable", "hivernale", 1, NULL, NULL, NULL, NULL,NULL),
(16,"Coriendre", "vegetable", "tout", 1, NULL, NULL, NULL, NULL,NULL),
(17,"Poids chiches", "legume", "tout", 1, NULL, NULL, NULL, NULL,NULL),
(18,"Vermicelles", "grain", "tout", NULL, NULL, NULL, NULL, NULL,NULL),
(19,"Viande rouge", "meat", "tout", 1, NULL, NULL, NULL, NULL,NULL),
(20,"Concentré de tomates", "vegetable", "tout", NULL, NULL, NULL, NULL, NULL,NULL),
(21,"Huile d'olive", "fat", "tout", 1, NULL, NULL, NULL, NULL,NULL),
(22,"Ras el 7anout", "spice", "tout", NULL, NULL, NULL, NULL, NULL,NULL),
(23,"Curcuma", "spice", "tout", NULL, NULL, NULL, NULL, NULL,NULL),

-- /////////////////////////3rd recipie////////////////////////////--
(24,"Piment", "vegetable", "estivale", 1, NULL, NULL, NULL, NULL,NULL),
(25,"Citron", "fruit", "tout", 1, NULL, NULL, NULL, NULL,NULL),
-- /////////////////////////4th recipie////////////////////////////--
(26,"Crevette", "seafood", "tout", 1, NULL, NULL, NULL, NULL,NULL),
(27,"Mozzarella", "fruit", "tout", 1, NULL, NULL, NULL, NULL,NULL),
(28,"Feuilles de bourek", "grain", "tout", NULL, NULL, NULL, NULL, NULL,NULL),
(29,"Oeuf", "meat", "tout", 1, NULL, NULL, NULL, NULL,NULL),
(30,"Huile", "fat", "tout", NULL, NULL, NULL, NULL, NULL,NULL),




INSERT INTO `IngredientInRecipie` (`IDRecipie`, `IDIngredient`, `Quantity`, `Unit`) VALUES
(1, 1, 3, NULL),
(1, 2, 3, NULL),
(1, 3, 3, NULL),
(1, 4, 2, "gousse"),
(1, 5, 500, "g"),
(1, 7, NULL, NULL),
(1, 8, NULL, NULL),
(1, 11, 3, "feuille"),
(1, 9, 0.5, "c. à café"),
(1, 10, 0.5, "c. à café"),
(1, 6, 100, "g"),
-- ///////////////2nd recipie///////////////// --
(2, 1, 3, NULL),
(2, 14, 1, NULL),
(2, 15, 1, NULL),
(2, 2, 2, NULL),
(2, 19, 250, "g"),
(2, 13, 2, "branche"),
(2, 18, 70, "g"),
(2, 21, 5, "cl"),
(2, 10, 1, "c. à café"),
(2, 16, 2, "branches"),
(2, 9, NULL, NULL),
(2, 17, 100, "g"),
(2, 20, 2, "c. à soupe"),
(2, 22, 1, "c. à café"),
(2, 23, 1, "c. à café"),
(2, 8, NULL, NULL),
-- ///////////////3rd recipie///////////////// --
(3, 1, 4, NULL),
(3, 3, 3, NULL),
(3, 4, 4, "gousses"),
(3, 25, 1, NULL),
(3, 21, 4, "c. à soupe"),
(3, 8, NULL, NULL),
(3, 9, NULL, NULL),

-- ///////////////4th recipie///////////////// --
(4, 28, 4, "feuille"),
(4, 27, 1, "boule"),
(4, 2, 4, NULL),
(4, 30, 1, "L"),
(4, 26, 24, NULL),
(4, 29,4, NULL),
(4, 8, NULL, NULL),
(4, 9, NULL, NULL);

INSERT INTO `Step` (`IDStep`,`IDRecipie`,`StepOrder`,`DescriptionStep`) VALUES
(1, 1, 1,"Pour la pâte, dans une terrine, mettez la semoule et le sel puis ajoutez-y de l’eau petit à petit jusqu’à obtention d’une pâte assez lisse. Pétrissez-la pendant 30 min."),
(2, 1, 2,"Faites des boules à la grosseur d'un citron, laissez reposer 30 min."),
(3, 1, 3,"Pendant ce temps, préparez la farce dans une poêle. Hachez les oignons, ajoutez-y 2 c. à soupe d'huile et faites dorer à feu doux. Ajoutez les tomates, les poivrons, l'ail, le sel, le poivre rouge, le poivre noir, la viande hachée et le laurier. Laissez le tous cuire pendant 20 min puis laissez refroidir."),
(4, 1, 4,"Prenez une boule de pâte et ouvrez-la avec la paume de la main de façon à avoir une feuille mince. Mettez au milieu 2 c. à soupe bien pleines de la farce et pliez les cotés de la feuille de sorte à avoir un carré."),
(5, 1, 5,"Faites cuire dans un plat de terre (tadjine). Servez chaud."),
-- ///////////////2nd recipie///////////////// --
(1, 2, 1,"La veille, mettre les pois chiches à tremper dans un grand volume d'eau. Le jour de la recette, les égoutter et réserver."),
(2, 2, 2,"Epluchez les légumes et coupez-les en dés grossiers."),
(3, 2, 3,"Coupez la viande en petits morceaux. Dans une grande cocotte, faites chauffer l'huile d'olive et faites caraméliser la viande 2 minutes de chaque côté."),
(4, 2, 4,"Parallèlement, pelez et émincez l'oignon, râpez les tomates."),
(5, 2, 5,"Ajoutez les légumes, les tomates et l'oignon à la viande puis laissez revenir 5 minutes."),
(6, 2, 6,"Ajoutez toutes les épices, salez et poivrez."),
(7, 2, 7,"Ciselez la coriandre et versez la moitié dans la cocotte avec les légumes et la viande. Réservez le reste pour la décoration."),
(8, 2, 8,"Ajoutez 1,5 litre d'eau dans la cocotte et faites mijoter votre chorba algérienne à feu fort durant 20 minutes."),
(9, 2, 9,"Ajoutez le concentré de tomates, les vermicelles et les pois chiches et rectifiez l'assaisonnement."),
(10, 2, 10,"Poursuivre la cuisson durant 10 minutes à couvert."),
(11, 2, 11,"Servez aussitôt votre chorba algérienne en décorant d'un peu de coriandre fraîche."),
-- ///////////////3rd recipie///////////////// --
(1, 3, 1,"Laver les tomates, les poivrons et le piment, et essuyez-les avec du papier absorbant."),
(2, 3, 2,"Disposez-les dans un plat, ainsi que l'ail, et mettez le tout au four pour les faire griller.La cuisson doit durer environ 15 à 20 minutres."),
(3, 3, 3,"Une fois que les légumes sont cuits, retirez-les et épluchez-le."),
(4, 3, 4,"Coupez les poivrons en deux pour en retirer la queue et les pépins."),
(5, 3, 5,"Mettez les légumes dans un saladier et concassez-les grossièrement."),
(5, 3, 6," Ajoutez l'huile d'olive, le jus de citron, salez, poivrer, mélangez bien et servez frais."),

-- ///////////////4th recipie///////////////// --
(1, 4, 1,"Nettoyez les crevettes , décortiquez-les et faites-les revenir 2 min dans une poêle menu d'une noix de beurre ou un filet d'huile (cette étape est facultative, ne pas les cuire et les ajouter crues). Entre temps, Préparez les légumes, épluchez les oignons et lavez-les. Rincez la coriandre et ciselez-la."),
(2, 4, 2,"Étalez une feuille de brick dans une assiette puis cassez un œuf au milieu. Ajoutez sur l'oeuf entier, six crevettes, un oignon frais coupés en dés et des morceaux de mozzarella. Parsemez de coriandre. Salez et poivrez à votre convenance. Pliez la feuille de brik en quatre. Procédez de la même façon avec les feuilles de dioul qui reste."),
(3, 4, 3,"Dans une poêle munie d'une noix de beurre ou un filet d'huile. Faites cuire les bricks sur feu doux une minute de chaque côtés, elles doivent être bien dorées et croustillantes en fin de cuisson (si vous aimez les oeufs bien cuits, augmentez le temps de cuisson). Égouttez les bricks sur du papier absorbant et dégustez-les aussitôt avec du citron et une salade de votre choix.");
-- ///////////////5th recipie///////////////// --

INSERT INTO `CookingMethod` (`IDCookingMethod`,`NameCookingMethod`,`IsHealthy`) VALUES
(1,"Sauter",1);


INSERT INTO `Micronutrient` (`IDMicronutrient`,`NameMicronutrient`,`Type`) VALUES
(1,"Soduim","mineral"),
(2,"Calcium","mineral"),
(3,"Fer","mineral"),
(4,"Magnésium","mineral"),
(5,"Vitamine C","vitamine"),
(6,"Vitamine D","vitamine"),
(7,"Vitamine A","vitamine");


INSERT INTO `MicronutrientInIngredient` (`IDMicronutrient`, `IDIngredient`, `DailyValue`) VALUES
(1,1,0), -- Soduim --
(2,1,1), -- Calcium --
(3,1,1), -- Fer --
(4,1,2),  -- Magnésium --
(5,1,22), -- Vitamine C --
(6,1,0), -- Vitamine D --
(7,1,27), -- Vitamine A --

(1,2,0), -- Soduim --
(2,2,2), -- Calcium --
(3,2,1), -- Fer --
(4,2,2), -- Magnésium --
(5,2,12), -- Vitamine C --
(6,2,0), -- Vitamine D --
(7,2,0), -- Vitamine A --

(1,3,0), -- Soduim --
(2,3,1), -- Calcium --
(3,3,1), -- Fer --
(4,3,2), -- Magnésium --
(5,3,134), -- Vitamine C --
(6,3,0), -- Vitamine D --
(7,3,12), -- Vitamine A --

(1,4,1), -- Soduim --
(2,4,18), -- Calcium --
(3,4,9), -- Fer --
(4,4,6), -- Magnésium --
(5,4,52), -- Vitamine C --
(6,4,0), -- Vitamine D --
(7,4,0), -- Vitamine A --

(1,5,0), -- Soduim --
(2,5,2), -- Calcium --
(3,5,7), -- Fer --
(4,5,12), -- Magnésium --
(5,5,0), -- Vitamine C --
(6,5,0), -- Vitamine D --
(7,5,0), -- Vitamine A --

(1,6,1), -- Soduim --
(2,6,1), -- Calcium --
(3,6,3), -- Fer --
(4,6,1), -- Magnésium --
(5,6,0), -- Vitamine C --
(6,6,0), -- Vitamine D --
(7,6,0), -- Vitamine A --

(1,7,0), -- Soduim --
(2,7,0), -- Calcium --
(3,7,0), -- Fer --
(4,7,0), -- Magnésium --
(5,7,0), -- Vitamine C --
(6,7,0), -- Vitamine D --
(7,7,0), -- Vitamine A --

(1,8,1615), -- Soduim --
(2,8,2), -- Calcium --
(3,8,2), -- Fer --
(4,8,0), -- Magnésium --
(5,8,0), -- Vitamine C --
(6,8,0), -- Vitamine D --
(7,8,0); -- Vitamine A --

INSERT INTO `News` (`IDNews`, `TitleNews`, `DescriptionNews`,`ImageLinkNews`,`VideoLinkNews`) VALUES
(1,"Avez vous une intolérance au lactose? Essayez les laits végétaux!", "Aujourd’hui, le lait de vache peut parfois présenter des inconvénients : intolérance au lactose ou troubles digestifs, sans parler de la transformation des laits industriels qui sont standardisés et peuvent renfermer des pesticides, OGM, hormones de croissance. Seul le lait bio (ou de petits producteurs de qualité) est l’assurance d’avoir une boisson sans aucun contaminant. Pour autant, le lait a mauvaise presse, il ne serait pas aussi bon qu’on le prétend. Pour diversifier ses apports nutritionnels, les laits végétaux sont une ressource idéale de nutriments et de saveurs.","https://media.nutrition.org/wp-content/uploads/2019/01/Non-Dairy-Milk-S.Ferreira-2-768x576.jpg","https://www.youtube.com/embed/gsmFhedk4N8");

INSERT INTO `Diaporama` (`IDDiaporama`,`TitleDiaporama`,`DescriptionDiaporama`,`IsNews`,`IDNewsOrRecipie`) VALUES
(1,"Avez vous une intolérance au lactose? Essayez les laits végétaux!","Comment bien choisir un remplacant du lait",1,1),
(2,"Essayer les M7adjebs","Des crêpes algériennes farcies qui réconfortent en hiver",0,1);