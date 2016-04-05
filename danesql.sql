CREATE TABLE `users` (
  `ident1` int(11) NOT NULL AUTO_INCREMENT,
  `uzer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `haslo1` char(64) COLLATE utf8_unicode_ci NOT NULL,
  `variab` char(16) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ident1`),
  UNIQUE KEY `uzer` (`uzer`),
  UNIQUE KEY `mail` (`mail`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;
