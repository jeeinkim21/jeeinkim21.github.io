DROP DATABASE IF EXISTS DocOffice2;
CREATE DATABASE DocOffice2;
use DocOffice2;

CREATE TABLE Doctor (
  doctorId int NOT NULL,
  lastName varchar(50) NOT NULL,
  firstName varchar(50) NOT NULL,
  phoneNo varchar(10),
  specialty varchar(15),
  salary decimal(10,2),
  PRIMARY KEY  (doctorId)
);


CREATE TABLE Patient (
  ssn int NOT NULL,
  lastName varchar(50) NOT NULL,
  firstName varchar(50) NOT NULL,
  phoneNo varchar(10),
  insuranceNo varchar(10),
  streetName varchar(25),
  streetNo int,
  city varchar(25),
  zipCode int,
  primaryCareDocId int,
  PRIMARY KEY(ssn),
  Foreign Key (primaryCareDocId) REFERENCES Doctor(doctorID)
);


CREATE TABLE Prescription (
  prescriptionId int NOT NULL,
  drugName varchar(50) NOT NULL,
  dosage int NOT NULL,
  noRefills int,
  datePrescribed date,
  mostRecentFilling date,
  prescribedBy int NOT NULL,
  patientSSN int NOT NULL,
  PRIMARY KEY  (prescriptionId),
  Foreign Key(prescribedBy) references Doctor(doctorId),
  Foreign Key(patientSSN) references Patient(ssn)
);


CREATE TABLE Appointment (
	appointmentId int NOT NULL,
    testGiven int NOT NULL,
    patientSSN int NOT NULL,
    doctorName varchar(50) NOT NULL,
    doctorId int,
    app_time time NOT NULL,
    app_date date not null,
    PRIMARY KEY(appointmentId),
    Foreign Key(patientSSN) references Patient(ssn),
    Foreign Key(doctorId) references Doctor(doctorId)
);


CREATE TABLE Audit (
	audit_id int NOT NULL,
	doctorId int NOT NULL,
    doctorName varchar(50),
    specialty varchar(15),
    date_modified date,
    PRIMARY KEY(audit_id),
    Foreign Key(doctorId) references Doctor(doctorId)
);


CREATE TABLE MedicalTest (
	testId int NOT NULL,
	doctorId int NOT NULL,
	testType varchar(50),
	result varchar(50),
	patientTestSSN int NOT NULL,
	dateGiven date not null,
	PRIMARY KEY (testId),
	Foreign Key(doctorId) references Doctor(doctorId),
	Foreign Key(patientTestSSN) references Patient(ssn),
	Foreign Key(testId) references Appointment(appointmentId)
);


INSERT INTO Doctor 
VALUES('123456789', 'Jones', 'Alyssa', '8588397353', 'Pediatrician', 250000.00);
INSERT INTO Doctor 
VALUES('000007563', 'Long', 'Lisa', '7145263448', 'Urologist', 350000.00);
INSERT INTO Doctor 
VALUES('345458800', 'Ramirez', 'Larissa', '9492290055', 'Neurosurgeon', 555000.00);
INSERT INTO Doctor 
VALUES('228774113', 'Stevens', 'Robert', '5262021345', 'Radiologist', 440000.00);
INSERT INTO Doctor 
VALUES('448978900', 'Foster', 'Jane', '2012233198', 'Cardiologist', 490000.00);

SELECT lastName, firstName, specialty
from doctor
order by lastName; 

SELECT specialty FROM doctor d where d.specialty LIKE '%" . $specialty .  "%';


INSERT INTO Patient
VALUES('011300786', 'Ramos', 'Alejandro', '7145556666', '5265265260', 'Yale Avenue', '1234', 'Pomona', '94545', '000007563');
INSERT INTO Patient
VALUES('558873210', 'Kim', 'Jeein', '9492032008', '1100110088', 'Pomona Lane', '9072', 'Fullerton', '92833', '228774113');
INSERT INTO Patient
VALUES('766554432', 'Tamara', 'Joshua', '8583342001','8899804323', 'Clairemont Way', '33418', 'Fullerton', '92830', '448978900');
INSERT INTO Patient
VALUES('425242330', 'Smith', 'Katrina', '9095487658', '3035450011', 'Pitzer Lane', '12073', 'San Diego', '92128', '345458800');
INSERT INTO Patient
VALUES('232318562', 'Ruiz', 'Rafael', '7140010024', '9513082456', 'Scripps Street', '626', 'Pomona', '94545', '123456789');

SELECT p.lastName, p.firstName, p.phoneNo
from Patient p, Doctor d
where p.primaryCareDocId = d.doctorId;

INSERT INTO Prescription
VALUES('1111111111', 'NyQuil', '300', '2', '2020-04-11', '2022-12-02', '123456789', '425242330');
INSERT INTO Prescription
VALUES('1000000345', 'Morphine', '200', '20', '2022-08-30', '2022-10-12', '345458800', '558873210');
INSERT INTO Prescription
VALUES('1000000678', 'Ibuprofen', '400', '66', '2021-12-06', '2022-12-02', '123456789', '11300786');
INSERT INTO Prescription
VALUES('1000000923', 'Vicodin', '100', '50', '2018-11-21', '2022-08-05', '448978900', '766554432');
INSERT INTO Prescription
VALUES('1000000243', 'Cipro', '500', '9', '2019-01-13', '2021-12-09', '228774113', '232318562');


SELECT drugName, d.firstName, d.lastName
from Prescription p, Doctor d
where p.prescribedBy = d.doctorId;

INSERT INTO Appointment 
VALUES('10034567', '666', '558873210', 'Stevens', '228774113', '12:30:00', '2022-12-12');
INSERT INTO Appointment 
VALUES('10098765', '555', '425242330', 'Ramirez', '345458800', '8:30:00', '2022-12-12');
INSERT INTO Appointment 
VALUES('10045454', '404', '766554432', 'Long', '0000007563', '7:45:00', '2022-12-12');
INSERT INTO Appointment 
VALUES('10088766', '121', '11300786', 'Foster', '448978900', '02:15:00', '2022-12-12');
INSERT INTO Appointment 
VALUES('10050043', '711', '232318562', 'Jones', '123456789', '03:30:00', '2022-12-12');