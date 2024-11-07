<?php
<<<<<<< HEAD
class Estado extends Controller {
    public function getEstados() {
        $estados = $this->model("Estados");
=======

Class Estado extends Controller {
    public function getEstados() {
        $estados = $this->model("Estados");
        
>>>>>>> 80c5a43 (ii)

        $estadosData = $estados->getEstados();

        return $estadosData;
    }
}