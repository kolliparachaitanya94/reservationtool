CREATE DATABASE DeviceReservationSystem;
USE DeviceReservationSystem;

CREATE TABLE DeviceReservations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    deviceName VARCHAR(255) NOT NULL,
    availability VARCHAR(50) NOT NULL,
    userName VARCHAR(255),
    teamName VARCHAR(255),
    timeReserved DATETIME
);
