<?php

namespace CBA\Http\Controllers;
use CBA\notificacion;
use Illuminate\Http\Request;
use App;
use Carbon\Carbon;

class PageControler extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function welcome()
    {
        $notificaciones = notificacion::all();
        return view ('admin', compact('notificaciones'));
    }
}
