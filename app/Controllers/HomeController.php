<?php

namespace App\Controllers;

use App\Models\Contact;

class HomeController extends Controller
{
    public function index()
    {
        $contactModel = new Contact();
        return $contactModel->create([
            "name" => "Juan",
            "email" => "2018100486@ucss.pe",
            "phone" => "123456789",
        ]);

        return $this->view("home", [
            "title" => "Home",
            "description" => "Esta es la página home",
            "data" => $contactModel->get()
        ]);
    }
}
