<?php

namespace App\Http\Controllers;

use App\Device;
use App\Transfer;

class JournalController
{
    public function index()
    {
        $dataType = (object) [
            'display_name_singular' => 'journal'
        ];

        $devices = Device::all();

        $transfers = Transfer::all();

        return view('journal.index', compact('devices', 'dataType', 'transfers'));
    }
}
