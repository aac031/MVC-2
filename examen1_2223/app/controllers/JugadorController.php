<?php
namespace App\Controllers;

use App\Models\Jugador;
/**
*
*/
class JugadorController
{

    function __construct()
    {
        // echo "En JugadorController";
    }

    public function index()
    {
        // !!  COMPLETAR  !!
        require "../app/views/jugador/index.php";        
    }

    public function create()
    {
        require "../app/views/jugador/create.php";
    }

    public function edit($arguments)
    {
        // !!  COMPLETAR  !!
        require "../app/views/jugador/create.php";
    }

    public function store()
    {             
        // !!  COMPLETAR  !!
        header('Location: /jugador');
    }

    public function titular($arg)
    {
        // !!  COMPLETAR  !!
        header('Location: /jugador');
    }
    public function titulares()
    {
        // !!  COMPLETAR  !!
        require "../app/views/jugador/titulares.php";        
    }
    public function quitar($arg)
    {
        // !!  COMPLETAR  !!
        header('Location: /jugador/titulares');
    }
}
