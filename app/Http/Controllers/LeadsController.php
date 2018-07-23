<?php

namespace App\Http\Controllers;

use App\Lead;
use Illuminate\Http\Request;

class LeadsController extends Controller
{

    /**
     * LeadsController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth')->except('create', 'store');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $leads = Lead::with('telephone_number')->get();
        return view('leads', compact('leads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lead_collection');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $lead = Lead::create([
            'full_name' => $request->lead_full_name,
            'email_address' => $request->lead_email_address,
            'postal_code' => $request->lead_postal_code,
        ]);
        $lead->telephone_number()->create(['telephone_number' => $request->lead_telephone_number]);
        return view('thankyou');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lead = Lead::destroy($id);
    }
}
