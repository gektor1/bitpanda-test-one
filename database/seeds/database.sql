INSERT INTO `users` (`id`, `email`, `active`, `created_at`, `updated_at`)
VALUES
	(1,'alex@tempmail.com',1,'2020-01-19 16:08:59','2020-01-19 16:08:59'),
	(2,'maria@tempmail.com',1,'2020-01-19 16:08:59','2020-01-19 16:08:59'),
	(3,'john@tempmail.com',1,'2020-01-19 16:08:59','2020-01-19 16:08:59'),
	(4,'dominik@test.com',0,'2020-01-19 16:08:59','2020-01-19 16:08:59'),
	(5,'andreas@yahoo.de',0,'2020-01-19 16:08:59','2020-01-19 16:08:59'),
	(6,'Taaaaaaa@test.com',1,'2020-01-19 16:08:59','2020-01-19 16:08:59'),
	(7,'rerere@test_mail.com',1,'2020-01-19 16:08:59','2020-01-19 16:08:59');

INSERT INTO `countries` (`id`, `name`, `iso2`, `iso3`)
VALUES
	(1,'Austria','AT','AUT'),
	(2,'France','FR','FRA'),
	(3,'Germany','DE','DEU'),
	(4,'Spain','ES','ESP'),
	(5,'Russian Federation','RU','RUS'),
	(6,'China','CN','CHN');


INSERT INTO `user_details` (`id`, `user_id`, `citizenship_country_id`, `first_name`, `last_name`, `phone_number`)
VALUES
	(1,'1','1','Alex', 'Petro', '0043664111111'),
	(2,'4','1','Dominik', 'Allan', '00436644444444'),
	(3,'5','3','Andreas', 'Snow', '004366455555555'),
	(4,'7','5','Igor', 'Snow', '0043664777777'),
	(5,'6','1','Max', 'Mustermann', '00436646666666');