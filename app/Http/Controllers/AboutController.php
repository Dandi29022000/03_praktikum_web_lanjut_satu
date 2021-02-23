<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function aboutus() {
        $data = array ( 'nama' => 'Dandi Agung Setiawan',
                        'nim' => '1941720009',
                        'kelas' => 'TI-2D');
        return view ('about-us', $data);
    }
}
