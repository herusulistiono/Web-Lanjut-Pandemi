--
-- Database: `web2`
--

CREATE TABLE `mahasiswa`(
    `id` INT(8) NOT NULL AUTO_INCREMENT,
    `npm` CHAR(20) NOT NULL,
    `nama` VARCHAR(40) NOT NULL,
    PRIMARY KEY(`id`),
    UNIQUE KEY `npm`(`npm`)
) ENGINE = INNODB;

INSERT INTO `mahasiswa` (`id`, `npm`, `nama`) VALUES
(1, '201401', 'Jokowi'),
(2, '201402', 'Prabowo'),
(3, '201403', 'Mandra'),
(2, '201404', 'Parjo');
