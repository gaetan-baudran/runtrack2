SELECT `salles`.`nom`, `etage`.`nom` FROM `salles` INNER JOIN `etage` ON `salles`.`id_etage` = `etage`.`id`; 