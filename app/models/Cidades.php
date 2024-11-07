<?php

class Cidades {
    public $id;
    public $uf;

    public function getCidades() {
<<<<<<< HEAD
        $sqlQuery = "SELECT id,nome FROM cidade WHERE uf = ?";
=======
        $sqlQuery = "SELECT id, nome FROM cidade WHERE uf = ?";
>>>>>>> 80c5a43 (ii)

        try {
            return Database::query($sqlQuery, [$this->uf]);
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }
    }
}