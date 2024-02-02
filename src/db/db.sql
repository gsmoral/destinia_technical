-- To create the data base
CREATE DATABASE IF NOT EXISTS dev_gsm_destinia CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- Select the database
USE dev_gsm_destinia;

-- Main table for accommodations
CREATE TABLE IF NOT EXISTS accommodations (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    type VARCHAR(20) NOT NULL, -- Could be 'Hotel' or 'Apartamento'
    city VARCHAR(100) NOT NULL,
    province VARCHAR(100) NOT NULL
);

-- Table for hotels
CREATE TABLE IF NOT EXISTS hotels (
    id INT PRIMARY KEY,
    stars INT,
    room_type VARCHAR(50),
    FOREIGN KEY (id) REFERENCES accommodation(id)
);

-- Table for apartments
CREATE TABLE IF NOT EXISTS apartments (
    id INT PRIMARY KEY,
    apartments_availables INT,
    adult_capacity INT,
    FOREIGN KEY (id) REFERENCES accommodation(id)
);

-- Insertar datos de ejemplo
INSERT INTO accommodations (id, name, type, city, province) VALUES
    (1, 'Hotel Azul', 'Hotel', 'Valencia', 'Valencia'),
    (2, 'Apartamentos Beach', 'Apartamento', 'Almeria', 'Almeria'),
    (3, 'Hotel Blanco', 'Hotel', 'Mojacar', 'Almeria'),
    (4, 'Hotel Rojo', 'Hotel', 'Sanlucar', 'Cádiz'),
    (5, 'Apartamentos Sol y playa', 'Apartamento', 'Málaga', 'Málaga');

INSERT INTO hotels (id, stars, room_type) VALUES
    (1, 3, 'Habitación doble con vistas'),
    (3, 5, 'Habitación doble'),
    (4, 4, 'Habitación sencilla');

INSERT INTO apartments (id, apartments_availables, adult_capacity) VALUES
    (2, 10, 4),
    (5, 50, 6);

