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
        $records = [
            'device' => [
                'serial_number',
            ],
            'received' => [
                'from',
                'details',
            ],
            'send' => [
                'to',
                'send_details',
                'receive_details',
            ],
            'return' => [
                'send_details',
                'receive_details',
            ],
            'date_created',
            'date_destroyed',
            'destruction' => [
                'destroyed_at',
                'details',
            ],
            'comment',
        ];

        $devices = Device::all();
        return view('journal.index', compact('devices', 'dataType'));
    }
}
