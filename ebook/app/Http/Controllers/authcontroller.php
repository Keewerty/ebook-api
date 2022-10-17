<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class authcontroller extends Controller
{
    public function me()
    {
        return [
            "nis" => 3103120109,
            "Nama" => "Ihza Dzikri Fauzi",
            "phone" => "082322910433",
            "kelas" => "XII RPL 4"

        ];
    }
}
