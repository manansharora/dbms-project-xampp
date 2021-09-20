create database studentERP_final;

use studentERP_final;

CREATE TABLE programme (
	prog_id varchar(7),
	progName varchar(15) NOT NULL,
	duration int NOT NULL,
	PRIMARY KEY (prog_id)
);

CREATE TABLE department (
	deptID varchar(7),
	deptName varchar(15) NOT NULL,
	progID varchar(7) NOT NULL,
	PRIMARY KEY (deptID),
    FOREIGN KEY (progID) REFERENCES programme(prog_id)
);

CREATE TABLE student (
	prn int AUTO_INCREMENT,
	studName varchar(20) NOT NULL,
	dob DATE NOT NULL,
	emailID varchar(20) NOT NULL,
	mobNo bigint NOT NULL,
	dept_id varchar(7) NOT NULL,
	PRIMARY KEY (prn),
    FOREIGN KEY (dept_id) REFERENCES department(deptID)
);

ALTER TABLE student AUTO_INCREMENT=1032190000;

CREATE TABLE teacher (
	teacherID int AUTO_INCREMENT,
	teacherName varchar(20) NOT NULL,
	emailID varchar(20) NOT NULL,
	dept_id varchar(7) NOT NULL,
	PRIMARY KEY (teacherID),
    FOREIGN KEY (dept_id) REFERENCES department(deptID)
);

CREATE TABLE subjects (
	subjectID varchar(7),
	subjName varchar(20) NOT NULL,
	availCredits int NOT NULL,
	teacherID int NOT NULL,
	PRIMARY KEY (subjectID),
    FOREIGN KEY (teacherID) REFERENCES teacher(teacherID)
);

CREATE TABLE marks (
	subjectID varchar(7),
	prn int NOT NULL,
	marks int NOT NULL,
	PRIMARY KEY (subjectID),
    FOREIGN KEY (subjectID) REFERENCES subjects(subjectID),
    FOREIGN KEY (prn) REFERENCES student(prn)
);

CREATE TABLE classrooms (	
	subjID varchar(7),
	classroom varchar(5) NOT NULL,
	PRIMARY KEY (subjID),
    FOREIGN KEY (subjID) REFERENCES subjects(subjectID)
);

CREATE TABLE projectsInfo (
	projID int AUTO_INCREMENT,
	projName varchar(20) NOT NULL,
	mentor int,
	PRIMARY KEY (projID),
    FOREIGN KEY (mentor) REFERENCES teacher(teacherID)
);

CREATE TABLE projectStudents (
	prn int,
	projID int,
	started DATE NOT NULL,
	organization varchar(10) NOT NULL DEFAULT 'Self',
	PRIMARY KEY (prn,projID),
    FOREIGN KEY (prn) REFERENCES student(prn),
	FOREIGN KEY (projID) REFERENCES projectsInfo(projID)
);