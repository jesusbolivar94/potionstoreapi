SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for sells_items
-- ----------------------------
DROP TABLE IF EXISTS `sells_items`;
CREATE TABLE `sells_items`  (
    `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
    `sell_id` bigint UNSIGNED NOT NULL COMMENT 'Related to Sells table.',
    `potion_id` bigint UNSIGNED NOT NULL COMMENT 'Related to Potions table.',
    `quantity` int NOT NULL COMMENT 'Quantity of potions bought.',
    `created_at` timestamp NULL DEFAULT NULL,
    `updated_at` timestamp NULL DEFAULT NULL,
    PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;
