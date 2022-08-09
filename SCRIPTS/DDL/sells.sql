SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for sells
-- ----------------------------
DROP TABLE IF EXISTS `sells`;
CREATE TABLE `sells`  (
    `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
    `client_id` bigint UNSIGNED NOT NULL COMMENT 'Related to Clients table.',
    `sell_at` timestamp NOT NULL,
    `created_at` timestamp NOT NULL,
    PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;
