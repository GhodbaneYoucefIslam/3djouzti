DROP TABLE IF EXISTS `Recipie`;
CREATE TABLE IF NOT EXISTS `Recipie`(
    `IDRecipie` INT(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `TitleRecipie` VARCHAR(100) NOT NULL UNIQUE,
    `DescriptionRecipie` TEXT(1000),
    `Category` VARCHAR(50) NOT NULL,
    `PrepTime` INT(10),
    `CookTime` INT(10),
    `RestTime` INT(10),
    `Difficulty` VARCHAR(10),
    `CaloriesRecipie` SMALLINT(10),
    `TotalFatRecipie` FLOAT(10),
    `TotalProtienRecipie` FLOAT(10),
    `TotalCarbsRecipie` FLOAT(10),
    `Rating` TINYINT(5),
    `VideoLink` VARCHAR(100),
    `NumberOfServings` TINYINT(5),
    `IDUser` INT(10),
    `IsApproved` BOOLEAN NOT NULL
);


DROP TABLE IF EXISTS `Ingredient`;
CREATE TABLE IF NOT EXISTS `Ingredient`(
    `IDIngredient` INT(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `NameIngredient` VARCHAR(20),
    `CategoryIngredient` VARCHAR(50),
    `Season` VARCHAR(50),
    `IsHealthy` BOOLEAN,
    `CaloriesIngredient` SMALLINT(10),
    `TotalFatIngredient` FLOAT(10),
    `TotalProtienIngredient` FLOAT(10),
    `TotalCarbsIngredient` FLOAT(10),
    `WeightOfOne` SMALLINT(10)
);

DROP TABLE IF EXISTS `Step`;
CREATE TABLE IF NOT EXISTS `Step`(
    `IDStep` INT(10) NOT NULL AUTO_INCREMENT,
    `DescriptionStep` TEXT(1000) NOT NULL,
    `IDRecipie` INT(10) NOT NULL,
    `StepOrder` SMALLINT(10),
    PRIMARY KEY(`IDRecipie`,`IDStep`),
    FOREIGN KEY(`IDRecipie`) REFERENCES `Recipe`(`IDRecipie`)
);

DROP TABLE IF EXISTS `Festivity`;
CREATE TABLE IF NOT EXISTS `Festivity`(
    `IDFestivity` INT(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `NameFestivity` VARCHAR(20) NOT NULL UNIQUE
);

DROP TABLE IF EXISTS `Micronutrient`;
CREATE TABLE IF NOT EXISTS `Micronutrient`(
    `IDMicronutrient` INT(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `NameMicronutrient` VARCHAR(20) NOT NULL UNIQUE,
    `Type` VARCHAR(20)
);

DROP TABLE IF EXISTS `CookingMethod`;
CREATE TABLE IF NOT EXISTS `CookingMethod`(
    `IDCookingMethod` INT(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `NameCookingMethod` VARCHAR(20) NOT NULL UNIQUE,
    `IsHealthy` BOOLEAN
);

DROP TABLE IF EXISTS `User`;
CREATE TABLE IF NOT EXISTS `User`(
    `IDUser` INT(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `FirstName` VARCHAR(20) NOT NULL,
    `LastName` VARCHAR(20) NOT NULL,
    `Sex` BIT(1) NOT NULL,
    `email` VARCHAR(20) NOT NULL,
    `DateOfBirth` DATE NOT NULL,
    `Password` VARCHAR(20) NOT NULL,
    `isApproved` BOOLEAN NOT NULL
);

DROP TABLE IF EXISTS `Admin`;
CREATE TABLE IF NOT EXISTS `Admin`(
    `IDAdmin` INT(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `NameAdmin` VARCHAR(20) NOT NULL,
    `Password` VARCHAR(20) NOT NULL
);




DROP TABLE IF EXISTS `IngredientInRecipie`;
CREATE TABLE IF NOT EXISTS `IngredientInRecipie`(
    `IDRecipie` INT(10) NOT NULL,
    `IDIngredient` INT(10) NOT NULL,
    `Quantity` FLOAT(10),
    `Unit` VARCHAR(10),
    PRIMARY KEY(`IDRecipie`,`IDIngredient`),
    FOREIGN KEY(`IDRecipie`) REFERENCES `Recipe`(`IDRecipie`),
    FOREIGN KEY(`IDIngredient`) REFERENCES `Ingredient`(`IDIngredient`)
);

DROP TABLE IF EXISTS `MicronutrientInIngredient`;
CREATE TABLE IF NOT EXISTS `MicronutrientInIngredient`(
    `IDMicronutrient` INT(10) NOT NULL,
    `IDIngredient` INT(10) NOT NULL,
    `DailyValue` SMALLINT(10),
    PRIMARY KEY(`IDMicronutrient`,`IDIngredient`),
    FOREIGN KEY(`IDMicronutrient`) REFERENCES `Micronutrient`(`IDMicronutrient`),
    FOREIGN KEY(`IDIngredient`) REFERENCES `Ingredient`(`IDIngredient`)
);

DROP TABLE IF EXISTS `CookingMethodInRecipie`;
CREATE TABLE IF NOT EXISTS `CookingMethodInRecipie`(
    `IDRecipie` INT(10) NOT NULL,
    `IDCookingMethod` INT(10) NOT NULL,
    PRIMARY KEY( `IDCookingMethod`,`IDRecipie`),
    FOREIGN KEY(`IDRecipie`) REFERENCES `Recipe`(`IDRecipie`),
    FOREIGN KEY(`IDCookingMethod`) REFERENCES `CookingMethod`(`IDCookingMethod`)
);

DROP TABLE IF EXISTS `RecipieInFestivity`;
CREATE TABLE IF NOT EXISTS `RecipieInFestivity`(
    `IDRecipie` INT(10) NOT NULL,
    `IDFestivity` INT(10) NOT NULL,
    PRIMARY KEY(`IDRecipie`,`IDFestivity`),
    FOREIGN KEY(`IDRecipie`) REFERENCES `Recipe`(`IDRecipie`),
    FOREIGN KEY(`IDFestivity`) REFERENCES `Festivity`(`IDFestivity`)
);

DROP TABLE IF EXISTS `UserRatesRecipie`;
CREATE TABLE IF NOT EXISTS `CookingMethodInRecipie`(
    `IDRecipie` INT(10) NOT NULL,
    `IDUser` INT(10) NOT NULL,
    PRIMARY KEY(`IDRecipie`,`IDUser`),
    FOREIGN KEY(`IDRecipie`) REFERENCES `Recipe`(`IDRecipie`),
    FOREIGN KEY(`IDUser`) REFERENCES `User`(`IDUser`)
);

DROP TABLE IF EXISTS `UserFavorsRecipie`;
CREATE TABLE IF NOT EXISTS `CookingMethodInRecipie`(
    `IDUser` INT(10) NOT NULL,
    `IDRecipie` INT(10) NOT NULL,
    PRIMARY KEY(`IDUser`,`IDRecipie`),
    FOREIGN KEY(`IDRecipie`) REFERENCES `Recipe`(`IDRecipie`),
    FOREIGN KEY(`IDUser`) REFERENCES `User`(`IDUser`)
);

DROP TABLE IF EXISTS `News`;
CREATE TABLE IF NOT EXISTS `News`(
    `IDNews` INT(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `TitleNews` VARCHAR(100) NOT NULL UNIQUE,
    `DescriptionNews` TEXT(1000),
    `ImageLinkNews` VARCHAR(100),
    `VideoLinkNews` VARCHAR(100)
);

DROP TABLE IF EXISTS `Diaporama`;
CREATE TABLE IF NOT EXISTS `Diaporama`(
    `IDDiaporama` INT(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `TitleDiaporama` VARCHAR(100) NOT NULL UNIQUE,
    `DescriptionDiaporama` TEXT(1000),
    `IsNews` BOOLEAN NOT NULL, 
    `IDNewsOrRecipie` VARCHAR(100) NOT NULL
);

