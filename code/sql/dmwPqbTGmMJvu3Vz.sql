
CREATE TABLE ib (
	id serial,
	city varchar(12),
	state varchar(50)
);

INSERT INTO ib (city, state) VALUES ('Adelaide','South Australia');
INSERT INTO ib (city, state) VALUES ('Perth','Western Australia');
INSERT INTO ib (city, state) VALUES ('Canberra','Australian Capital Territory');
INSERT INTO ib (city, state) VALUES ('Brisbane','Queensland');
INSERT INTO ib (city, state) VALUES ('Melbourne','Victoria');
INSERT INTO ib (city, state) VALUES ('Sydney','New South Wales');
INSERT INTO ib (city, state) VALUES ('Hobart','Tasmania');


CREATE TABLE blind (
	id serial,
	username varchar(32),
	password varchar(64)
);

INSERT INTO blind (username, password) VALUES ('vortex',md5('password1'));
INSERT INTO blind (username, password) VALUES ('jack',md5('imjack'));
INSERT INTO blind (username, password) VALUES ('st0rm', md5('wasntme'));

