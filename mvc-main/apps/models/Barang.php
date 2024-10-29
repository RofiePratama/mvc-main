<?php

class Barang {
    private $db;

    public function __construct() {
        $this->db = getDBConnection();
    }

    public function getAll() {
        $stmt = $this->db->prepare("SELECT * FROM barang");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insert($nama, $qty) {
        $stmt = $this->db->prepare("INSERT INTO barang (nama, qty) VALUES (:nama, :qty)");
        return $stmt->execute(['nama' => $nama, 'qty' => $qty]);
    }

    public function update($id, $nama, $qty) {
        $stmt = $this->db->prepare("UPDATE barang SET nama = :nama, qty = :qty WHERE id = :id");
        return $stmt->execute(['id' => $id, 'nama' => $nama, 'qty' => $qty]);
    }

    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM barang WHERE id = :id");
        return $stmt->execute(['id' => $id]);
    }

    public function find($id) {
        $stmt = $this->db->prepare("SELECT * FROM barang WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
