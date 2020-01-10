<?php

namespace App\Http\Controllers;

use App\Device;

class JournalController
{
    public function index()
    {
        $dataType = (object) [
            'display_name_singular' => 'journal'
        ];

        $devices = Device::all();
        return view('journal.index', compact('devices', 'dataType'));
    }
}
