-- Roles Table
CREATE TABLE Roles (
    RoleID INT PRIMARY KEY,
    RoleName VARCHAR(50) NOT NULL
);

-- Users Table
CREATE TABLE Users (
    UserID INT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    RoleID INT,
    FOREIGN KEY (RoleID) REFERENCES Roles(RoleID)
);

-- Populate Roles Table with some initial roles
INSERT INTO Roles (RoleName) VALUES
(1, 'Admin'),
(2, 'Pharmacist'),
(3, 'Staff');

-- Pharmacy Management Table
CREATE TABLE Medicines (
    MedicineID INT PRIMARY KEY,
    Name VARCHAR(255) NOT NULL,
    Manufacturer VARCHAR(255),
    TherapeuticClass VARCHAR(255),
    StockQuantity INT NOT NULL,
    UnitPrice DECIMAL(10, 2) NOT NULL,
    ExpiryDate DATE,
    Description TEXT
);

CREATE TABLE Prescriptions (
    PrescriptionID INT PRIMARY KEY,
    MedicineID INT,
    Quantity INT NOT NULL,
    PrescriptionDate DATE,
    FOREIGN KEY (MedicineID) REFERENCES Medicines(MedicineID)
);

-- Equipment Management Table
CREATE TABLE Equipment (
    EquipmentID INT PRIMARY KEY,
    EquipmentName VARCHAR(255) NOT NULL,
    Quantity INT NOT NULL,
    Description TEXT
);

CREATE TABLE EquipmentLoan (
    LoanID INT PRIMARY KEY,
    UserID INT,
    EquipmentID INT,
    LoanDate DATE,
    ReturnDate DATE,
    FOREIGN KEY (UserID) REFERENCES Users(UserID),
    FOREIGN KEY (EquipmentID) REFERENCES Equipment(EquipmentID)
);
