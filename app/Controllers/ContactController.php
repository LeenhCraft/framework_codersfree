<?php

namespace App\Controllers;

use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $model = new Contact();
        $contacts = $model->all();
        return $this->view('contacts.index', compact('contacts'));
    }

    public function create()
    {
        return $this->view('contacts.create');
    }

    public function store()
    {
        $data = $_POST;
        $model = new Contact();
        $model->create($data);
        return $this->redirect('/contacts');
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
