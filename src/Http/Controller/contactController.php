<?php

namespace haamzaaay\contact\Http\Controller;

use App\Http\Controllers\Controller;
use haamzaaay\contact\Model\Contact;
use Illuminate\Http\Request;

class contactController extends Controller
{


    public function index()
    {
        return view('contact::contact');
    }

    public function store(Request $request)
    {
        try {
            Contact::updateOrCreate([
                'name' => $request->get('name'),
            ], $request->except('name'));

        } catch (\Throwable $e) {
            dd($e);
            return redirect()->back()->withErrors($e->getMessage());
        }
    }
}
