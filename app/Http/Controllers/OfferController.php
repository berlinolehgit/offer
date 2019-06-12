<?php

namespace App\Http\Controllers;

use App\Http\Requests\OffersValidation;
use App\Models\Offer;
use App\Http\Requests\OffersRequesr;
use App\Models\User;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class  OfferController extends Controller
{
    public function index()
    {
        $offers = Offer::get();
        return view('offers/index', compact('offers'));
    }

    public function add()
    {
        $users = User::get();
//        dd($users);
        return view('offers/add',compact('users'));
    }
    public function admin()
    {
        return view('admin');
    }

    public function submite(OffersValidation $request)
    {
        $offers = Offer::create([
            'type_object' => $request->input('type_object'),
            'price' => $request->input('price'),
            'type_wall' => $request->input('type_wall'),
            'number_rooms' => $request->input('number_rooms'),
            'user_id' => $request->input('user_id'),

        ]);

        $offers -> save();

        return redirect()->route('offers');
    }

    public function edit(Offer $offer){
        $users = User::get();
        return view('offers/edit',compact('offer','users'));
    }

}
