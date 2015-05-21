
insert into movie values(
	1,
	'Furious 7',
	'PG-13',
	137,
	'Action, Crime, thriller',
	'AC',
	'/static/img/movies/furious-7.jpg',
	'Deckard Shaw seeks revenge against Dominic Toretto and his family for his comatose brother.',
	'Dominic Torretto and his crew thought they left the criminal mercenary life behind. They defeated an international terrorist named Owen Shaw and went their seperate ways. But now, Shaw''s brother, Deckard Shaw is out killing the crew one by one for revenge. Worse, a Somalian terrorist called Jakarde, and a shady government official called "Mr. Nobody" are both competing to steal a computer terrorism program called God''s Eye, that can turn any technological device into a weapon. Torretto must reconvene with his team to stop Shaw and retrieve the God''s Eye program while caught in a power struggle between terrorist and the United States government.',
	'www.youtube.com/watch?v=Skpu5HaVkOc',
	'March 26, 2015',
	1
);

insert into movie values(
	2,
	'The Longest Ride',
	'PG-13',
	139,
	'Drama, Romance',
	'RC',
	'/static/img/movies/the-longest-ride.jpg',
	'After an automobile crash, the lives of a young couple intertwine with a much older man, as he reflects back on a past love.',
	'Based on the bestselling novel by master storyteller Nicholas Sparks, THE LONGEST RIDE centers on the star-crossed love affair between Luke, a former champion bull rider looking to make a comeback, and Sophia, a college student who is about to embark upon her dream job in New York City''s art world. As conflicting paths and ideals test their relationship, Sophia and Luke make an unexpected and fateful connection with Ira, whose memories of his own decades-long romance with his beloved wife deeply inspire the young couple. Spanning generations and two intertwining love stories, THE LONGEST RIDE explores the challenges and infinite rewards of enduring love. Written by 20th Century Fox',
	'www.youtube.com/watch?v=FUS_Q7FsfqU',
	'April 10, 2015',
	1
);

insert into movie values(
	3,
	'Home',
	'PG',
	94,
	'Childrens, Animation, Comedy',
	'CH',
	'/static/img/movies/home.jpg',
	'Oh, an alien on the run from his own people, lands on Earth and makes friends with the adventurous Tip, who is on a quest of her own.',
	'When Oh, a loveable misfit from another planet, lands on Earth and finds himself on the run from his own people, he forms an unlikely friendship with an adventurous girl named Tip who is on a quest of her own. Through a series of comic adventures with Tip, Oh comes to understand that being different and making mistakes is all part of being human. And while he changes her planet and she changes his world, they discover the 1 meaning of the word HOME. Written by 20th Century Fox.',
	'https://www.youtube.com/watch?v=MyqZf8LiWvM',
	'March 27, 2015',
	1
);

insert into movie values(
	4,
	'Wild',
	'R',
	115,
	'Biography, Drama',
	'AF',
	'/static/img/movies/wild.jpg',
	'A chronicle of one woman''s 1,100-mile solo hike undertaken as a way to recover from a recent catastrophe.',
	'With the dissolution of her marriage and the death of her mother, Cheryl Strayed has lost all hope. After years of reckless, destructive behavior, she makes a rash decision. With absolutely no experience, driven only by sheer determination, Cheryl hikes more than a thousand miles of the Pacific Crest Trail, alone. Wild powerfully captures the terrors and pleasures of one young woman forging ahead against all odds on a journey that maddens, strengthen, and ultimately heals her. Written by Spencer Higham.',
	'www.youtube.com/watch?v=tn2-GSqPyl0',
	'December 5, 2014',
	1
);


INSERT INTO screening VALUES (1, 'Monday', '1pm', 3, 1, 1), (2, 'Monday', '6pm', 4, 1, 1), (3, 'Monday', '9pm', 2, 1, 1);
INSERT INTO screening VALUES (4, 'Tuesday', '1pm', 3, 1, 1), (5, 'Tuesday', '6pm', 4, 1, 1), (6, 'Tuesday', '9pm', 2, 1, 1);
INSERT INTO screening VALUES (7, 'Wednesday', '1pm', 2, 1, 1), (8, 'Wednesday', '6pm', 3, 2, 1), (9, 'Wednesday', '9pm', 1, 2, 1);
INSERT INTO screening VALUES (10, 'Thursday', '1pm', 2, 1, 1), (11, 'Thursday', '6pm', 3, 2, 1), (12, 'Thursday', '9pm', 1, 2, 1);
INSERT INTO screening VALUES (13, 'Friday', '1pm', 2, 1, 1), (14, 'Friday', '6pm', 3, 2, 1), (15, 'Friday', '9pm', 1, 2, 1);
INSERT INTO screening VALUES (16, 'Saturday', '12pm', 3, 2, 1), (17, 'Saturday', '3pm', 4, 2, 1), (18, 'Saturday', '6pm', 2, 2, 1), (19, 'Saturday', '9pm', 1, 2, 1);
INSERT INTO screening VALUES (20, 'Sunday', '12pm', 3, 2, 1), (21, 'Sunday', '3pm', 4, 2, 1), (22, 'Sunday', '6pm', 2, 2, 1), (23, 'Sunday', '9pm', 1, 2, 1);


INSERT INTO price VALUES (1, 'Discount', 12, 10, 8, 25, 20, 20, 20, 20, 1);
INSERT INTO price VALUES (2, 'Full fare', 18, 15, 12, 30, 25, 30, 30, 30, 1);


INSERT INTO user VALUES (1, 'admin', 'password', '', '', '', 'admin@email.com', 1);
