<?php

namespace LinkAcademy\Gadgets\Commons\Http;

class HomeController
{
    /**
     * get home page
     *
     * @return void
     */
    public function index()
    {
        return view('index.html');
    }
}
