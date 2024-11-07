<?php

class Estados {
<<<<<<< HEAD

    public function getEstados() {
        $sqlQuery = "SELECT id,nome,uf FROM estado WHERE id <> 99";

        try {
            return Database::query($sqlQuery);
=======
  //  public $id;
    //public $uf;

    public function getEstados() {
        $sqlQuery = "SELECT id, nome, uf FROM estado WHERE id <> 99";

        try {
            return Database::query($sqlQuery,);
>>>>>>> 80c5a43 (ii)
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }
    }
}