CREATE TABLE movie (
	id int primary key,
	name varchar(100),
	ageGuidanceRating varchar(10),
	duration int,
	genre varchar(100),
	film char(2),
	imgPath varchar(100),
	description varchar(200),
	storyline text
);

CREATE TABLE screening (
	id INT PRIMARY KEY,
	day VARCHAR(10),
	time VARCHAR(5),
	movieId INT,
	priceId INT
);

CREATE TABLE price (
	id INT PRIMARY KEY,
	description varchar(100),
	sa INT,
	sp INT,
	sc INT,
	fa INT,
	fc INT,
	b1 INT,
	b2 INT,
	b3 INT
);

