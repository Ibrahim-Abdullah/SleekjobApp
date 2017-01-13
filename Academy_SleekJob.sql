##Create Database for all application data

##Create Database Academy_SleekJob;

Use Academy_SleekJob;


##Create student database
Create Table student (
  `Record_ID` int(11) UNSIGNED NOT NULL,
  `Student_ID` varchar(8) CHARACTER SET utf8 DEFAULT NULL,
  `First_Name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Last_Name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Phone_Number` varchar(10) CHARACTER SET utf8 NOT NULL,
  `Last_School_Attended` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Course_Last_School` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Payment_Status` varchar(20) CHARACTER SET utf8 NOT NULL DEFAULT 'No Payment Made',
  `Amount_Paid` double NOT NULL,
  `Admission_Status` varchar(30) CHARACTER SET utf8 DEFAULT 'Admission in Progress',
  `Date_of_Registration` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Date_of_Admission` date NOT NULL,
  `Course_of_Study` varchar(255) CHARACTER SET utf8 NOT NULL
); ENGINE=InnoDB DEFAULT CHARSET=latin1;


##Create Admin database 
Create Table admin(
 `username` varchar(20) NOT NULL,
 `password` varchar(32) NOT NULL
); ENGINE=InnoDB DEFAULT CHARSET=utf8;
