
----------------------------------

create database registration;

use registration;


CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-----------------------------------------------------------

create database codexworld;

use codexworld;

CREATE TABLE `images` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `image` longblob NOT NULL,
 `created` datetime NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-------------------------------------------------------------

create database sole;

use sole;

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  'message' text not null,
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
	
 