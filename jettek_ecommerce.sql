/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 80027
 Source Host           : localhost:3306
 Source Schema         : jettek_ecommerce

 Target Server Type    : MySQL
 Target Server Version : 80027
 File Encoding         : 65001

 Date: 16/09/2022 18:44:57
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for bundle
-- ----------------------------
DROP TABLE IF EXISTS `bundle`;
CREATE TABLE `bundle`  (
  `bundle_id` bigint NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `price` decimal(10, 2) NOT NULL,
  `status` tinyint(1) NULL DEFAULT 1,
  PRIMARY KEY (`bundle_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bundle
-- ----------------------------
INSERT INTO `bundle` VALUES (1, 'Örnek Bundle 1', 0.00, 1);
INSERT INTO `bundle` VALUES (2, 'Örnek Bundle 2', 0.00, 1);

-- ----------------------------
-- Table structure for bundle_product_option
-- ----------------------------
DROP TABLE IF EXISTS `bundle_product_option`;
CREATE TABLE `bundle_product_option`  (
  `bundle_id` bigint NOT NULL,
  `option_id` bigint NOT NULL,
  `in_bundle_quantity` int NOT NULL,
  PRIMARY KEY (`bundle_id`, `option_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Fixed;

-- ----------------------------
-- Records of bundle_product_option
-- ----------------------------
INSERT INTO `bundle_product_option` VALUES (2, 3, 1);
INSERT INTO `bundle_product_option` VALUES (2, 2, 1);
INSERT INTO `bundle_product_option` VALUES (2, 4, 1);
INSERT INTO `bundle_product_option` VALUES (1, 5, 1);
INSERT INTO `bundle_product_option` VALUES (1, 6, 2);
INSERT INTO `bundle_product_option` VALUES (1, 7, 3);

-- ----------------------------
-- Table structure for product_options
-- ----------------------------
DROP TABLE IF EXISTS `product_options`;
CREATE TABLE `product_options`  (
  `option_id` bigint NOT NULL AUTO_INCREMENT,
  `product_id` bigint NULL DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `quantity` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `status` tinyint(1) NULL DEFAULT NULL,
  PRIMARY KEY (`option_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of product_options
-- ----------------------------
INSERT INTO `product_options` VALUES (3, 2, 'XL Yeşil', '3', 1);
INSERT INTO `product_options` VALUES (4, 3, 'XL Siyah', '3', 1);
INSERT INTO `product_options` VALUES (2, 1, '34 Beden', '3', 1);
INSERT INTO `product_options` VALUES (5, 4, '40 Mavi', '1', 1);
INSERT INTO `product_options` VALUES (6, 3, 'S Siyah', '2', 1);
INSERT INTO `product_options` VALUES (7, 2, 'M Yeşil', '3', 1);

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products`  (
  `product_id` bigint NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `quantity` int NULL DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `price` decimal(10, 2) NULL DEFAULT NULL,
  `status` tinyint(1) NULL DEFAULT 1,
  PRIMARY KEY (`product_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES (1, 'Kot Pantolon', 'kot kumaştan pantolon.', 1, NULL, 100.00, 1);
INSERT INTO `products` VALUES (3, 'Mont', NULL, 1, NULL, 170.00, 1);
INSERT INTO `products` VALUES (2, 'T-shirt', '', 1, NULL, 160.00, 1);
INSERT INTO `products` VALUES (4, 'Ayakkabı', NULL, 1, NULL, 200.00, 1);

SET FOREIGN_KEY_CHECKS = 1;
