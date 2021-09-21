CREATE TABLE `users` (
   `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
    `email`varchar(255) NOT NULL,
    PRIMARY KEY (`id`),
    UNIQUE KEY `email` (`email`)
);

CREATE TABLE `posts`(
	`id` int(10) unsigned NOT NULL AUTO_INCREMENT,
    `user_id` int(10) unsigned NOT NULL,
    `message` text NOT NULL,
    `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`)
);

SELECT *
FROM posts 
INNER JOIN
    (SELECT id
    FROM users
    WHERE users.email = 'EMAIL') idd 
WHERE posts.user_id = idd;