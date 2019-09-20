-- MySQL dump 10.13  Distrib 8.0.17, for Win64 (x86_64)
--
-- Host: localhost    Database: lara_admin
-- ------------------------------------------------------
-- Server version	8.0.17

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `pricetypes`
--

DROP TABLE IF EXISTS `pricetypes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pricetypes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ident` int(11) NOT NULL,
  `code_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rxml` blob NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pricetypes`
--

LOCK TABLES `pricetypes` WRITE;
/*!40000 ALTER TABLE `pricetypes` DISABLE KEYS */;
INSERT INTO `pricetypes` VALUES (1,1,3,'Main',_binary '<?xml version=\"1.0\" encoding=\"utf-8\"?> <RK7QueryResult ServerVersion=\"7.5.7.75\" XmlVersion=\"231\" NetName=\"SERV\" Status=\"Ok\" CMD=\"GetRefData\" ErrorText=\"\" DateTime=\"2019-08-06T15:44:15\" WorkTime=\"0\" Processed=\"1\"> 	<RK7Reference DataVersion=\"5\" ClassName=\"TPriceTypes\" Name=\"PRICETYPES\" MinIdent=\"1\" MaxIdent=\"0\" ViewRight=\"0\" UpdateRight=\"25\" ChildRight=\"25\" DeleteRight=\"25\" XMLExport=\"true\" XMLMask=\"*\" LeafCollectionCount=\"0\"> 		<Items> 			<Item Ident=\"3\" ItemIdent=\"3\" SourceIdent=\"0\" GUIDString=\"{30CF7B8A-3F50-4527-AE62-A2C6F0C08682}\" AssignChildsOnServer=\"false\" ActiveHierarchy=\"true\" Name=\"Основная\" AltName=\"Main\" Code=\"1\" MainParentIdent=\"0\" Status=\"rsActive\" EditRight=\"1\" Flags=\"[ptConsumPercent, ptBonusPercent, ptStoreHousePrice, ptUseDefBonusPercent, ptUseDefConsumPercent]\" RoundRule=\"rr1Cent\" DefBonusPercent=\"0\" DefConsumPercent=\"0\" DefComboPercent=\"0\" PriceTypeType=\"pttUsual\" ParentPriceType=\"0\" AllowOverridings=\"false\" SHSettingsLink=\"0\" SHCommodityGroup=\"\" SHStoreHouse=\"\" ModiPercent=\"false\" ConsumPercent=\"true\" BonusPercent=\"true\" NotPrice=\"false\" StoreHousePrice=\"true\" ComboPercent=\"false\" LoLimitPercent=\"false\" DenyManualInput=\"false\" SpecialCalcMode=\"false\" Add2ReportsData=\"false\" LocalDataValues=\"false\" UseDefBonusPercent=\"true\" UseDefConsumPercent=\"true\" UseDefComboPercent=\"false\"> 				<Childs ClassName=\"tChildCollection\"/> 			</Item> 			<Item Ident=\"4\" ItemIdent=\"4\" SourceIdent=\"0\" GUIDString=\"{6934C78F-A101-4C1F-81D3-F791578670F1}\" AssignChildsOnServer=\"false\" ActiveHierarchy=\"true\" Name=\"Себестоимость\" AltName=\"Self-Cost\" Code=\"2\" MainParentIdent=\"0\" Status=\"rsActive\" EditRight=\"0\" Flags=\"[]\" RoundRule=\"rr1Cent\" DefBonusPercent=\"0\" DefConsumPercent=\"0\" DefComboPercent=\"0\" PriceTypeType=\"pttCosts\" ParentPriceType=\"0\" AllowOverridings=\"false\" SHSettingsLink=\"0\" SHCommodityGroup=\"\" SHStoreHouse=\"\" ModiPercent=\"false\" ConsumPercent=\"false\" BonusPercent=\"false\" NotPrice=\"false\" StoreHousePrice=\"false\" ComboPercent=\"false\" LoLimitPercent=\"false\" DenyManualInput=\"false\" SpecialCalcMode=\"false\" Add2ReportsData=\"false\" LocalDataValues=\"false\" UseDefBonusPercent=\"false\" UseDefConsumPercent=\"false\" UseDefComboPercent=\"false\"> 				<Childs ClassName=\"tChildCollection\"/> 			</Item> 		</Items> 	</RK7Reference> </RK7QueryResult>','2019-08-19 13:58:44','2019-08-19 13:58:44');
/*!40000 ALTER TABLE `pricetypes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-08-20 10:04:28
