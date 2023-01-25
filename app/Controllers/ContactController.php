<?php

namespace App\Controllers;

class ContactController extends Controller
{
    public function index()
    {
        return 'aqui se mostrara la lista de contactos';
    }

    public function store()
    {
        return 'aqui se procesara el formulario de crear contacto';
    }

    public function show($id)
    {
        return 'aqui se mostrara el detalle del contact con id ' . $id;
    }

    public function edit($id)
    {
        return 'aqui se mostrara el formulario para editar contact';
    }

    public function update($id)
    {
        return 'aqui se procesara el formulario de editar contacto';
    }

    public function destroy($id)
    {
        return 'aqui se procesara el formulario de eliminar contacto';
    }
}
