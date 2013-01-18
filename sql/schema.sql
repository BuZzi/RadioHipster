
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

-- ---------------------------------------------------------------------
-- song
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `song`;

CREATE TABLE `song`
(
    `song_id` INTEGER NOT NULL AUTO_INCREMENT,
    `song_name` VARCHAR(255) NOT NULL,
    `song_year` INTEGER(4) NOT NULL,
    `song_duration` VARCHAR(255) NOT NULL,
    `user_id` INTEGER(255) NOT NULL,
    `artiste_id` INTEGER(255) NOT NULL,
    `album_id` INTEGER(255) NOT NULL,
    `sort_id` INTEGER(255) NOT NULL,
    `playlist_id` INTEGER(255) NOT NULL,
    PRIMARY KEY (`song_id`),
    INDEX `song_FI_1` (`user_id`),
    INDEX `song_FI_2` (`artiste_id`),
    INDEX `song_FI_3` (`album_id`),
    INDEX `song_FI_4` (`sort_id`),
    INDEX `song_FI_5` (`playlist_id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- user
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user`
(
    `user_id` INTEGER NOT NULL AUTO_INCREMENT,
    `user_name` VARCHAR(255) NOT NULL,
    `user_email` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`user_id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- playlist
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `playlist`;

CREATE TABLE `playlist`
(
    `playlist_id` INTEGER NOT NULL AUTO_INCREMENT,
    `playlist_order` INTEGER NOT NULL,
    PRIMARY KEY (`playlist_id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- artiste
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `artiste`;

CREATE TABLE `artiste`
(
    `artiste_id` INTEGER NOT NULL AUTO_INCREMENT,
    `artiste_name` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`artiste_id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- album
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `album`;

CREATE TABLE `album`
(
    `album_id` INTEGER NOT NULL AUTO_INCREMENT,
    `album_name` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`album_id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- sort
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `sort`;

CREATE TABLE `sort`
(
    `sort_id` INTEGER NOT NULL AUTO_INCREMENT,
    `sort_name` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`sort_id`)
) ENGINE=MyISAM;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
