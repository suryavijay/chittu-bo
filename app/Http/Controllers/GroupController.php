<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loan;
use App\Models\GroupCount;


class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $groupDetails = GroupCount::all();
        return response()->json($groupDetails);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        
     
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->only(['GROUP_NAME','GROUP_COUNT','USER_ID']);
        GroupCount::create($data);
        $insert_id = GroupCount::get()->last();
        return response(['Status'=>'Success','Insert_id'=>$insert_id->GROUP_ID],200 );
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
