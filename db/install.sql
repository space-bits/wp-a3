CREATE TABLE movie (
	id INTEGER primary key AUTOINCREMENT,
	name VARCHAR(100),
	ageGuidanceRating VARCHAR(10),
	duration INTEGER,
	genre VARCHAR(100),
	film CHAR(2),
	imgPath VARCHAR(100),
	description VARCHAR(200),
	storyline TEXT,
	trailer VARCHAR(255),
	relDate VARCHAR(25),
	active INTEGER NOT NULL DEFAULT 1
);

CREATE TABLE screening (
	id INTEGER PRIMARY KEY AUTOINCREMENT,
	day VARCHAR(10),
	time VARCHAR(5),
	movieId INTEGER,
	priceId INTEGER,
	active INTEGER NOT NULL DEFAULT 1
);

CREATE TABLE price (
	id INTEGER PRIMARY KEY AUTOINCREMENT,
	description VARCHAR(100),
	sa INTEGER,
	sp INTEGER,
	sc INTEGER,
	fa INTEGER,
	fc INTEGER,
	b1 INTEGER,
	b2 INTEGER,
	b3 INTEGER,
	active INTEGER NOT NULL DEFAULT 1
);

CREATE TABLE user (
	id INTEGER PRIMARY KEY AUTOINCREMENT,
	username VARCHAR(50),
	password VARCHAR(200),
	firstname VARCHAR(50),
	lastname VARCHAR(50),
	phone VARCHAR(50),
	email VARCHAR(50),
	active INTEGER NOT NULL DEFAULT 1
);
