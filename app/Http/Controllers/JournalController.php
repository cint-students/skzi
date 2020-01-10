<?php

namespace App\Http\Controllers;

use App\Device;

class JournalController
{
    public function index()
    {
        $devices = Device::all();
        return view('journal.index', compact($devices));
    }
}
