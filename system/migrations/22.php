<?php

if(!tableExist('z_polls'))
	$db->query('
CREATE TABLE `z_polls` (
  `id` int(11) NOT NULL auto_increment,
  `question` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `end` int(11) NOT NULL DEFAULT 0,
  `start` int(11) NOT NULL DEFAULT 0,
  `answers` int(11) NOT NULL DEFAULT 0,
  `votes_all` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;');

if(!tableExist('z_polls_answers'))
$db->query('
	CREATE TABLE `z_polls_answers` (
  `poll_id` int(11) NOT NULL,
  `answer_id` int(11) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `votes` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;');

if(!fieldExist('vote', 'accounts'))
	$db->query('ALTER TABLE `accounts` ADD `vote` INT( 11 ) DEFAULT 0 NOT NULL ;');
else {
	$db->query('ALTER TABLE `accounts` MODIFY `vote` INT( 11 ) DEFAULT 0 NOT NULL ;');
}