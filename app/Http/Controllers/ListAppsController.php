<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListApps;

class ListAppsController extends Controller
{
    public function index()
    {
        // Ambil data dari database
        $listApps = ListApps::all(); // Menggunakan huruf besar "L"
        return view('listapps.index', ['listApps' => $listApps]); // Pastikan nama variabel sama
    }

    public function landingpage()
    {
        return view('task.landingpage');
    }
}