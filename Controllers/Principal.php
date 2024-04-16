<?php
class Principal extends Controller
{
    public function __construct() {
        parent::__construct();
        session_start();
    }
    public function index()
    {
        
    }

    //Vista Nosostros about
    public function about()
    {
        $data['title'] = 'Nosotros';
        $this->views->getView('principal', "about", $data);
    }
    //Vista Trabajos
    public function trabajos()
    {
        $data['title'] = 'Trabajos';
        $this->views->getView('principal', "trabajos", $data);
    }

    //Vista Detalle trabajo
    public function details($id_trabajo)
    {
    $data['title'] = '------------';
    $this->views->getView('principal', "details", $data);
    }
    //Vista Contacto
    public function contactos()
    {
    $data['title'] = 'Contactos';
    $this->views->getView('principal', "contact", $data);
    }
     //Vista HojaVIDA
     public function hoja()
     {
     $data['title'] = 'Hoja';
     $this->views->getView('principal', "hoja", $data);
     }
}