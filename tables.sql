create table Projects(
projectID int primary key NOT NULL auto_increment,
title char(100) NOT NULL,
description longtext NOT NULL,
github longtext,
website longtext,
img1 longtext,
img2 longtext,
img3 longtext,
category char(100) NOT NULL);

create table Skills(
skillID int primary key NOT NULL auto_increment,
skill longtext);