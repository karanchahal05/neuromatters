create table articles (
	id int(11) not null PRIMARY KEY AUTO_INCREMENT,
	title varchar(100) not null,
	summary varchar(500) not null,
	link varchar(300) not null,
	image varchar(300) not null,
	topics varchar(500) not null
);

create table projects (
	id int(11) not null PRIMARY KEY AUTO_INCREMENT,
	title varchar(100) not null,
	description varchar(1000) not null,
	linkname varchar(500) not null,
	link varchar(500) not null,
	image varchar(500) not null,
	startval varchar(500) not null,
	endval varchar(500) not null
);

create table objects (
  id int(11) not null PRIMARY KEY AUTO_INCREMENT,
  srcname varchar(500) not null
);

/*Database Hostinger info:*/
/*Servername = localhost*/
/*Username = u737487946_karan*/
/*Password = ilUhF)I.W[-Na33skf?d*/
/*dbName = u737487946_neuromatters/


/* Data Insertion for Articles*/
INSERT INTO articles (title, summary, link, image, topics) VALUES ('Parkinson’s Disease: A Closer Look', 'Understanding Parkinson’s Disease Parkinson’s disease is a long-term progressive disorder of the central nervous system primarily affecting movement. Initially, the disorder may present symptoms such', 'https://medium.com/@neuromatters.canada/a-dive-into-parkinsons-disease-e14797fa37c8?source=user_profile---------2----------------------------', 'Parkinsons', 'neuroscience, parkinsons, parkinson’s, disease, neurobiology, neurological, disorder, movement, diseases, movement, neurodegenerative');

INSERT INTO articles (title, summary, link, image, topics) VALUES ('A World With Ataxia', 'LEARNING ABOUT ATAXIA Ataxia; the inability to coordinate voluntary muscle movements, is a detrimental neurodegenerative disease affecting nearly 1 in 40 000–100 000 individuals worldwide. Ataxia typically', 'https://medium.com/@neuromatters.canada/a-world-with-ataxia-b891e0edf701?source=user_profile---------1----------------------------', 'Ataxia', 'neuroscience, Ataxia, disease, neurobiology, neurological, disorder, movement, diseases, movement, neurodegenerative, disease,');

INSERT INTO articles (title, summary, link, image, topics) VALUES ('Exploring Huntington’s Disease', 'Huntington’s disease is a genetically inherited disease that results in the degeneration of nerve cells within the brain. The root cause of Huntington’s Disease is the defective gene on chromosome 4.', 'https://medium.com/@neuromatters.canada/exploring-huntingtons-disease-18f3d507adb0?source=user_profile---------0----------------------------', 'Huntingtons', 'neuroscience, huntington’s, disease, neurobiology, neurological, disorder, neurodegenerative, genetic, huntington');

/* Data Insertion for Projects*/
INSERT INTO projects (title, description, linkname, link, image, startval, endval) VALUES ('Neuroheal', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Play Now', 'neuroheal.php', 'neuroheal1.png', 'Jul 2022', 'PRESENT');

/* Data Insertion for objects*/
INSERT INTO objects (srcname) VALUES ('apple.png');
INSERT INTO objects (srcname) VALUES ('atom.png');
INSERT INTO objects (srcname) VALUES ('banana.png');
INSERT INTO objects (srcname) VALUES ('books.png');
INSERT INTO objects (srcname) VALUES ('bread.png');
INSERT INTO objects (srcname) VALUES ('broccoli.png');
INSERT INTO objects (srcname) VALUES ('camera.png');
INSERT INTO objects (srcname) VALUES ('car.png');
INSERT INTO objects (srcname) VALUES ('curry.png');
INSERT INTO objects (srcname) VALUES ('dog.png');
INSERT INTO objects (srcname) VALUES ('eiffeltower.png');
INSERT INTO objects (srcname) VALUES ('einstein.png');
INSERT INTO objects (srcname) VALUES ('family.png');
INSERT INTO objects (srcname) VALUES ('father.png');
INSERT INTO objects (srcname) VALUES ('kiwi.png');
INSERT INTO objects (srcname) VALUES ('laptop.png');
INSERT INTO objects (srcname) VALUES ('lettuce.png');
INSERT INTO objects (srcname) VALUES ('lion.png');
INSERT INTO objects (srcname) VALUES ('mango.png');
INSERT INTO objects (srcname) VALUES ('math.png');
INSERT INTO objects (srcname) VALUES ('money.png');
INSERT INTO objects (srcname) VALUES ('mother.png');
INSERT INTO objects (srcname) VALUES ('orange.png');
INSERT INTO objects (srcname) VALUES ('peach.png');
INSERT INTO objects (srcname) VALUES ('pepper.png');
INSERT INTO objects (srcname) VALUES ('snake.png');
INSERT INTO objects (srcname) VALUES ('student.png');
INSERT INTO objects (srcname) VALUES ('tiger.png');
INSERT INTO objects (srcname) VALUES ('truck.png');
