<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;

use App\Client;

/**
 * Description of AdminController
 *
 * @author abdullah_alfar
 */
class AdminController extends Controller{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $clients = Client::paginate(15);
        return view('admin.home', compact('clients'));
    }
}
