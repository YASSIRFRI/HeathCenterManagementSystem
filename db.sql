-- Roles Table
CREATE TABLE Roles (
    RoleID INT AUTO_INCREMENT PRIMARY KEY,
    RoleName VARCHAR(50) NOT NULL
);

-- Users Table
CREATE TABLE Users (
    UserID INT AUTO_INCREMENT PRIMARY KEY,
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
    MedicineID INT AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(255) NOT NULL,
    Manufacturer VARCHAR(255),
    TherapeuticClass VARCHAR(255),
    StockQuantity INT NOT NULL,
    UnitPrice DECIMAL(10, 2) NOT NULL,
    ExpiryDate DATE,
    Description TEXT
);

CREATE TABLE Prescriptions (
    PrescriptionID INT AUTO_INCREMENT PRIMARY KEY,
    MedicineID INT,
    Quantity INT NOT NULL,
    PrescriptionDate DATE,
    FOREIGN KEY (MedicineID) REFERENCES Medicines(MedicineID)
);

-- Equipment Management Table
CREATE TABLE Equipment (
    EquipmentID INT AUTO_INCREMENT PRIMARY KEY,
    EquipmentName VARCHAR(255) NOT NULL,
    Quantity INT NOT NULL,
    Description TEXT
);

CREATE TABLE EquipmentLoan (
    LoanID INT AUTO_INCREMENT PRIMARY KEY,
    UserID INT,
    EquipmentID INT,
    LoanDate DATE,
    ReturnDate DATE,
    FOREIGN KEY (UserID) REFERENCES Users(UserID),
    FOREIGN KEY (EquipmentID) REFERENCES Equipment(EquipmentID)
);


------------------------------

INSERT INTO Medicines (Name, Manufacturer, TherapeuticClass, StockQuantity, UnitPrice, ExpiryDate, Description) VALUES
('Paracetamol', 'Pharma Inc.', 'Analgesic', 100, 0.25, '2025-12-31', 'Used to treat pain and fever.'),
('Ibuprofen', 'BestMed', 'Anti-inflammatory', 200, 0.50, '2024-11-30', 'Used for treating pain, fever, and inflammation.'),
('Amoxicillin', 'HealthCorp', 'Antibiotic', 50, 1.20, '2023-05-15', 'Used to treat a number of bacterial infections.'),
('Metformin', 'Global Meds', 'Antidiabetic', 150, 0.80, '2025-01-01', 'Used to treat type 2 diabetes.'),
('Amlodipine', 'CardioPharma', 'Antihypertensive', 75, 0.90, '2024-10-20', 'Used to treat high blood pressure and coronary artery disease.'),
('Simvastatin', 'Pharma Inc.', 'Lipid-lowering', 20, 2.50, '2025-07-09', 'Used to control elevated cholesterol, or hypercholesterolemia.'),
('Loratadine', 'BestMed', 'Antihistamine', 8, 0.75, '2023-12-31', 'Used to treat allergies.'),
('Aspirin', 'HealthCorp', 'Analgesic', 5, 0.10, '2025-03-21', 'Used as an analgesic to relieve minor aches and pains.'),
('Albuterol', 'Global Meds', 'Bronchodilator', 30, 4.00, '2024-08-15', 'Used to treat conditions such as asthma.'),
('Lisinopril', 'CardioPharma', 'Antihypertensive', 100, 1.10, '2025-02-28', 'Used to treat high blood pressure and heart failure.');
