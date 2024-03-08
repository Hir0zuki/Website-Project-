CREATE DATABASE IF NOT EXISTS artcommunityweb;
USE artcommunityweb;

CREATE TABLE login (
    email VARCHAR(50) PRIMARY KEY,
    password VARCHAR(100)
);

CREATE TABLE register (
    userid INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50),
    email VARCHAR(50) UNIQUE,
    password VARCHAR(100),
    FOREIGN KEY (email) REFERENCES login(email)
);

CREATE TABLE users (
    userid INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50),
    email VARCHAR(50) UNIQUE,
    password VARCHAR(100),
    profilepic VARCHAR(100),
    bio VARCHAR(150),
    joindate datetime,
    FOREIGN KEY (email) REFERENCES login(email)
);

CREATE TABLE commission (
    commissionid INT PRIMARY KEY,
    title VARCHAR(100),
    description TEXT,
    price INT, 
    deadline DATE,
    status VARCHAR(50), 
    clientid INT, 
    artistid INT, 
    FOREIGN KEY (clientid) REFERENCES users(userid),
    FOREIGN KEY (artistid) REFERENCES users(userid)
);

CREATE TABLE event (
    eventid INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(100),
    description TEXT,
    imageurl VARCHAR(200),
    date DATE,
    organizerid INT,
    FOREIGN KEY (organizerid) REFERENCES users(userid)
);
    
CREATE TABLE artwork (
    artworkid INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(100),
    description TEXT,
    imageurl VARCHAR(200),
    upload_date DATE,
    userid INT,
    FOREIGN KEY (userid) REFERENCES users(userid)
);

CREATE TABLE rating (
    ratingid INT PRIMARY KEY AUTO_INCREMENT,
    score INT,
    review TEXT,
    ratingdate DATE,
    rateduserid INT,
    artworkid INT,
    FOREIGN KEY (rateduserid) REFERENCES users(userid),
    FOREIGN KEY (artworkid) REFERENCES artwork(artworkid)
);

CREATE TABLE tag (
    tagid INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50),
    artworkid INT,
    FOREIGN KEY (artworkid) REFERENCES artwork(artworkid)
);

CREATE TABLE artworktag (
    artworktagid INT PRIMARY KEY AUTO_INCREMENT,
    artworkid INT,
    tagid INT,
    FOREIGN KEY (artworkid) REFERENCES artwork(artworkid),
    FOREIGN KEY (tagid) REFERENCES tag(tagid)
);

CREATE TABLE message (
    messageid INT PRIMARY KEY AUTO_INCREMENT,
    senderid INT, 
    receiverid INT, 
    send_date DATETIME,
    message_text TEXT, 
    FOREIGN KEY (senderid) REFERENCES users(userid),
    FOREIGN KEY (receiverid) REFERENCES users(userid)
);


-- Login table
INSERT INTO login (email, password) VALUES
('hiro@gmail.com', 'hiro123'),
('alex@gmail.com', 'alex123'),
('boy@gmail.com', 'boy123');

-- Register Table
INSERT INTO register (username, email, password)
SELECT username, email, password
FROM users;

-- Users table
INSERT INTO users (username, email, password, profilepic, bio, joindate) VALUES
('hiro', 'hiro@gmail.com', 'hiro123', 'hiro.jpg', 'Please buy my art Im hungry.', NOW()),
('alex', 'alex@gmail.com', 'alex123', 'alex.jpg', 'Art is blue!!', NOW()),
('boy', 'boy@gmail.com', 'boy123', 'boy.jpg', 'I\'m just drawing', NOW());

-- Commission table
INSERT INTO commission (commissionid, title, description, price, deadline, status, clientid, artistid) VALUES
(1, 'Dynamic Pose', 'Its so hard to draw hope you like it', 40, '2024-02-15', 'Open', 1, 1),
(2, 'Original Character', 'I love the design so much', 50, '2024-03-10', 'Pending', 2, 2),
(3, 'My Favourite Drawing!!', 'Dont use without permission', 30, '2024-04-05', 'Closed', 3, 3);

-- Event table
INSERT INTO event (title, description, imageurl, date, organizerid) VALUES
('Halloween', 'Make Scary Faces!!', 'halloween.jpg', '2024-10-31', 1),
('Secret Santa', 'HoHoHo Come and Join we give each other drawings', 'secretsanta.jpg', '2024-12-25', 2),
('Winter is Coming', 'Let it Snow', 'winteriscoming.jpg', '2024-12-21', 3);

-- Artwork table
INSERT INTO artwork (title, description, imageurl, upload_date, userid) VALUES
('Give him love', 'He is my newest oc', 'givehimlove.jpg', '2024-01-05', 1),
('first drawing of the year', 'I hope I can draw more', 'firstdrawing.jpg', '2024-01-10', 2),
('Artblock', 'Trying to get out the artblock', 'artblock.jpg', '2024-01-15', 3);

-- Rating table
INSERT INTO rating (score, review, ratingdate, rateduserid, artworkid) VALUES
(4, 'Great work!', '2024-01-07', 2, 1),
(5, 'Absolutely stunning!', '2024-01-12', 3, 2),
(4, 'Amazing piece!', '2024-01-18', 1, 3);

-- Tag table
INSERT INTO tag (name, artworkid) VALUES
('OriginalCharacter', 1),
('FirstDrawing', 2),
('ArtBlock', 3);

-- Artworktag table
INSERT INTO artworktag (artworkid, tagid) VALUES
(1, 1),
(2, 2),
(3, 3);

-- Message table
INSERT INTO message (senderid, receiverid, send_date, message_text) VALUES
(1, 2, '2024-01-08 09:30:00', 'Hi Alex, loved your artwork!'),
(2, 3, '2024-01-09 11:45:00', 'Hey, thanks a lot!'),
(3, 1, '2024-01-10 13:20:00', 'Glad you liked it, Hiro!');

