SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for recipes
-- ----------------------------
DROP TABLE IF EXISTS `recipes`;
CREATE TABLE `recipes`  (
    `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
    `potion_id` bigint UNSIGNED NOT NULL COMMENT 'Related to Potions table.',
    `ingredient_id` bigint UNSIGNED NOT NULL COMMENT 'Related to Ingredients table.',
    `quantity` int NOT NULL COMMENT 'Quantity of ingredient needed.',
    `created_at` timestamp NOT NULL,
    PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;
