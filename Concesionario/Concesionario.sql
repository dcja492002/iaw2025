-- Tabla Vehiculos
CREATE TABLE Vehiculos (
    Matricula VARCHAR(15) PRIMARY KEY,
    Marca VARCHAR(50) NOT NULL,
    Modelo VARCHAR(50) NOT NULL,
    Precio DECIMAL(10,2) NOT NULL CHECK (Precio > 0)
);

-- Tabla Usuarios
CREATE TABLE Usuarios (
    DNI VARCHAR(9) PRIMARY KEY,
    Nombre VARCHAR(50) NOT NULL,
    Apellidos VARCHAR(100) NOT NULL,
    Telefono VARCHAR(15) UNIQUE NOT NULL,
    Correo_Electronico VARCHAR(100) UNIQUE NOT NULL
);

-- Tabla Compras
CREATE TABLE Compras (
    ID_Compra INT AUTO_INCREMENT PRIMARY KEY,
    Matricula VARCHAR(15) NOT NULL,
    DNI VARCHAR(9) NOT NULL,
    Fecha_Compra DATE DEFAULT CURDATE() NOT NULL,
    FOREIGN KEY (Matricula) REFERENCES Vehiculos(Matricula) ON DELETE CASCADE,
    FOREIGN KEY (DNI) REFERENCES Usuarios(DNI) ON DELETE CASCADE
);