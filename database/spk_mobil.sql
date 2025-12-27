CREATE DATABASE IF NOT EXISTS spk_mobil;
USE spk_mobil;

CREATE TABLE kriteria (
    id_kriteria INT AUTO_INCREMENT PRIMARY KEY,
    nama_kriteria VARCHAR(50),
    tipe ENUM('benefit','cost'),
    bobot FLOAT
);

CREATE TABLE mobil (
    id_mobil INT AUTO_INCREMENT PRIMARY KEY,
    nama_mobil VARCHAR(50),
    kenyamanan INT,
    keamanan INT,
    performa INT,
    irit_bbm INT,
    harga INT
);
