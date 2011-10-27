CREATE TABLE `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(32) NOT NULL,
  `logins` int(10) unsigned DEFAULT '0',
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `song` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uri` varchar(255) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `artist` varchar(255) NOT NULL,
  `album` varchar(255) DEFAULT NULL,
  `length` int(10) unsigned DEFAULT NULL,
  `trackn` int(10) unsigned DEFAULT NULL,
  `discn` int(10) unsigned DEFAULT NULL,
  `found` int(10) unsigned DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `notifications` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `userid` int(10) unsigned NOT NULL,
  `songid` int(10) unsigned NOT NULL,
  `checks` int(10) unsigned DEFAULT '0',
  `notifications` int(10) unsigned DEFAULT '0',
  `lastcheck` int(10) unsigned DEFAULT '0',
  `lastnotication` int(10) unsigned DEFAULT '0',
  UNIQUE KEY `id` (`id`),
  KEY `userid` (`userid`),
  KEY `songid` (`songid`),
  CONSTRAINT `notifications_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `notifications_ibfk_2` FOREIGN KEY (`songid`) REFERENCES `song` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;