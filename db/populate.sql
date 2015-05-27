
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
	'yISKeT6sDOg',
	'March 26, 2015',
	'',
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
	'FUS_Q7FsfqU',
	'April 10, 2015',
	'',
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
	'MyqZf8LiWvM',
	'March 27, 2015',
	'',
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
	'tn2-GSqPyl0',
	'December 5, 2014',
	'',
	1
);


INSERT INTO screening VALUES (1, 'Monday', '1pm', 3, 1, 1, 1), (2, 'Monday', '6pm', 4, 1, 1, 1), (3, 'Monday', '9pm', 2, 1, 1, 1);
INSERT INTO screening VALUES (4, 'Tuesday', '1pm', 3, 1, 1, 1), (5, 'Tuesday', '6pm', 4, 1, 1, 1), (6, 'Tuesday', '9pm', 2, 1, 1, 1);
INSERT INTO screening VALUES (7, 'Wednesday', '1pm', 2, 1, 1, 1), (8, 'Wednesday', '6pm', 3, 2, 1, 1), (9, 'Wednesday', '9pm', 1, 2, 1, 1);
INSERT INTO screening VALUES (10, 'Thursday', '1pm', 2, 1, 1, 1), (11, 'Thursday', '6pm', 3, 2, 1, 1), (12, 'Thursday', '9pm', 1, 2, 1, 1);
INSERT INTO screening VALUES (13, 'Friday', '1pm', 2, 1, 1, 1), (14, 'Friday', '6pm', 3, 2, 1, 1), (15, 'Friday', '9pm', 1, 2, 1, 1);
INSERT INTO screening VALUES (16, 'Saturday', '12pm', 3, 2, 1, 1), (17, 'Saturday', '3pm', 4, 2, 1, 1), (18, 'Saturday', '6pm', 2, 2, 1, 1), (19, 'Saturday', '9pm', 1, 2, 1, 1);
INSERT INTO screening VALUES (20, 'Sunday', '12pm', 3, 2, 1, 1), (21, 'Sunday', '3pm', 4, 2, 1, 1), (22, 'Sunday', '6pm', 2, 2, 1, 1), (23, 'Sunday', '9pm', 1, 2, 1, 1);


INSERT INTO price VALUES (1, 'Discount', 12, 10, 8, 25, 20, 20, 20, 20, 1);
INSERT INTO price VALUES (2, 'Full fare', 18, 15, 12, 30, 25, 30, 30, 30, 1);


INSERT INTO user VALUES (1, 'admin', '$2y$10$0.Pgp5gBfFE.PvUY.qwsEear0McoPVcqX5Cy9HUWGQ6vgflhNWyKG', '', '', '', 'admin@email.com', 1);


INSERT INTO room VALUES (1, 'Main room', 1);


INSERT INTO sector VALUES (1, 'Left', 1, 1);
INSERT INTO sector VALUES (2, 'Middle', 1, 1);
INSERT INTO sector VALUES (3, 'Right', 1, 1);
INSERT INTO sector VALUES (4, 'Front', 1, 1);


INSERT INTO seat VALUES (1, 'H', '1', 1, 1), (2, 'H', '2', 1, 1), (3, 'H', '3', 1, 1), (4, 'H', '4', 1, 1), (5, 'H', '5', 1, 1);
INSERT INTO seat VALUES (6, 'G', '1', 1, 1), (7, 'G', '2', 1, 1), (8, 'G', '3', 1, 1), (9, 'G', '4', 1, 1), (10, 'G', '5', 1, 1);
INSERT INTO seat VALUES (11, 'F', '1', 1, 1), (12, 'F', '2', 1, 1), (13, 'F', '3', 1, 1), (14, 'F', '4', 1, 1), (15, 'F', '5', 1, 1);
INSERT INTO seat VALUES (16, 'E', '1', 1, 1), (17, 'E', '2', 1, 1), (18, 'E', '3', 1, 1), (19, 'E', '4', 1, 1), (20, 'E', '5', 1, 1);

INSERT INTO seat VALUES (21, 'H', '6', 2, 1), (22, 'H', '7', 2, 1), (23, 'H', '8', 2, 1), (24, 'H', '9', 2, 1);
INSERT INTO seat VALUES (25, 'G', '6', 2, 1), (26, 'G', '7', 2, 1), (27, 'G', '8', 2, 1), (28, 'G', '9', 2, 1);
INSERT INTO seat VALUES (29, 'F', '6', 2, 1), (30, 'F', '7', 2, 1), (31, 'F', '8', 2, 1), (32, 'F', '9', 2, 1);
INSERT INTO seat VALUES (33, 'E', '6', 2, 1), (34, 'E', '7', 2, 1), (35, 'E', '8', 2, 1), (36, 'E', '9', 2, 1);

INSERT INTO seat VALUES (37, 'H', '10', 3, 1), (38, 'H', '11', 3, 1), (39, 'H', '12', 3, 1), (40, 'H', '13', 3, 1), (41, 'H', '14', 3, 1);
INSERT INTO seat VALUES (42, 'G', '10', 3, 1), (43, 'G', '11', 3, 1), (44, 'G', '12', 3, 1), (45, 'G', '13', 3, 1), (46, 'G', '14', 3, 1);
INSERT INTO seat VALUES (47, 'F', '10', 3, 1), (48, 'F', '11', 3, 1), (49, 'F', '12', 3, 1), (50, 'F', '13', 3, 1), (51, 'F', '14', 3, 1);
INSERT INTO seat VALUES (52, 'E', '10', 3, 1), (53, 'E', '11', 3, 1), (54, 'E', '12', 3, 1), (55, 'E', '13', 3, 1), (56, 'E', '14', 3, 1);

INSERT INTO seat VALUES (57, 'D', '01', 4, 1), (58, 'D', '02', 4, 1), (59, 'D', '03', 4, 1), (60, 'D', '04', 4, 1);
INSERT INTO seat VALUES (61, 'C', '01', 4, 1), (62, 'C', '02', 4, 1), (63, 'C', '03', 4, 1), (64, 'C', '04', 4, 1);
INSERT INTO seat VALUES (65, 'B', '01', 4, 1), (66, 'B', '02', 4, 1), (67, 'B', '03', 4, 1);
INSERT INTO seat VALUES (68, 'A', '01', 4, 1), (69, 'A', '02', 4, 1);
