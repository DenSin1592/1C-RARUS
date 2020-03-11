<?php

namespace App\Http\Controllers;

use App\Models\Call;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Phone;

class MainController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $calls = function($query)
                 {
                     $query->where('date', '>', Carbon::today())
                    ->where('status', 'abandon');
                 };

        $model = new Client();
        $clients = $model->whereHas('calls', $calls)->with(['calls'=>$calls])->paginate(10);

        return view('main', compact('clients'));
    }
}
