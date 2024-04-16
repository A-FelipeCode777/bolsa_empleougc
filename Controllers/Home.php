<?php
class Home extends Controller
{
    public function __construct() {
        parent::__construct();
        session_start();
    }
    public function index()
    {
        $data['title'] = 'Pagina Principal';
        $data['categorias'] = $this->model->getCategorias();
        $data['nuevoTrabajos'] = $this->model->getNuevosTrabajos();
        $this->views->getView('home', "index", $data);
    }

    
}