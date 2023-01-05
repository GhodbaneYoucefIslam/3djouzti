INSERT INTO `Recipie` (`IDRecipie`,`TitleRecipie`, `DescriptionRecipie`, `Category`, `PrepTime`, `CookTime`, `RestTime`, `Difficulty`, `VideoLink`, `NumberOfServings`, `IsApproved`) VALUES
(1,"M7adjebs", "Des crêpes algériennes farcies qui réconfortent en hiver", "entrées", 60, 20, 30, "Moyenne", "https://www.youtube.com/embed/xEOBgGJyWHk", 6, 1 );

INSERT INTO `Ingredient` (`IDIngredient`,`NameIngredient`, `CategoryIngredient`, `Season`, `IsHealthy`, `CaloriesIngredient`, `TotalFat`, `TotalProtien`, `TotalCarbs`,`WeightOfOne`) VALUES
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
(11,"Laurier", "spice", "tout", NULL, NULL, NULL, NULL, NULL,NULL);

INSERT INTO `IngredientInRecipie` (`IDRecipie`, `IDIngredient`, `Quanitity`, `Unit`) VALUES
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
(1, 6, 100, "g");

INSERT INTO `Step` (`IDStep`,`IDRecipie`,`Order`,`DescriptionStep`) VALUES
(1, 1, 1,"Pour la pâte, dans une terrine, mettez la semoule et le sel puis ajoutez-y de l’eau petit à petit jusqu’à obtention d’une pâte assez lisse. Pétrissez-la pendant 30 min."),
(2, 1, 2,"Faites des boules à la grosseur d'un citron, laissez reposer 30 min."),
(3, 1, 3,"Pendant ce temps, préparez la farce dans une poêle. Hachez les oignons, ajoutez-y 2 c. à soupe d'huile et faites dorer à feu doux. Ajoutez les tomates, les poivrons, l'ail, le sel, le poivre rouge, le poivre noir, la viande hachée et le laurier. Laissez le tous cuire pendant 20 min puis laissez refroidir."),
(4, 1, 4,"Prenez une boule de pâte et ouvrez-la avec la paume de la main de façon à avoir une feuille mince. Mettez au milieu 2 c. à soupe bien pleines de la farce et pliez les cotés de la feuille de sorte à avoir un carré."),
(5, 1, 5,"Faites cuire dans un plat de terre (tadjine). Servez chaud.");

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
(1,"Essayer les M7adjebs","Des crêpes algériennes farcies qui réconfortent en hiver",0,1);