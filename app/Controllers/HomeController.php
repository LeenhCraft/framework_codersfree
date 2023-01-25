<?php

namespace App\Controllers;

use App\Models\Contact;

class HomeController extends Controller
{
    public function index()
    {
        $contactModel = new Contact();
        // return $contactModel->where("name","LIKE","%leenh%")->get();
        // return $contactModel->find(2);
        // return $contactModel->create([
        //     "name" => "fake name",
        //     "email" => "fake@email.com",
        //     "phone" => "123456789"
        // ]);
        // return $contactModel->update(16, [
        //     "name" => "fake name",
        //     "email" => "fake gmail"
        // ]);
        // return $contactModel->delete(13);


        return $this->view("home", [
            "title" => "Home",
            "description" => "Esta es la página home",
            "data" => $contactModel->all()
        ]);
    }
}
