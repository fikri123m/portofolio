<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendidikan;
use App\Models\Pelatihan;
use App\Models\Project;

class DashboardController extends Controller
{
    public function index()
    {
        $pendidikan = Pendidikan::all();
        $pelatihan = Pelatihan::all();
        $projek = Project::all();
        return view('welcome', compact('pendidikan', 'pelatihan', 'projek'));
    }
}
