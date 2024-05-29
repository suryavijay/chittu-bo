<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loan;
use App\Models\GroupCount;
use Illuminate\Support\Facades\DB;



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
        echo 'am in create';die;
     
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'GROUP_NAME' => 'required|string|max:255',
            'GROUP_COUNT' => 'required|integer',
            'USER_ID' => 'required|integer',
        ]);

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
        $results = DB::table('group_loans as gl')
                        ->join('group_counts as gc','gc.GROUP_ID', '=', 'gl.GROUP_ID')
                        ->select('gl.*','gc.*')
                        ->where('gl.GROUP_ID', '=', $id)
                        ->get();

        $res = [];
        foreach ($results as $key => $value) {
            $test = array(
                'labelName' =>  $value->NAME,
                'formName' => 'NAME',
                'loanAmount' => round($value->LOAN_AMOUNT / $value->NO_OF_WEEKS)
            );
            $res[] = $test;
        }
        if($results->isNotEmpty()){
            return response()->json(['Status'=>'Success','data'=>$res],200 );
        }else{
            return response()->json(['Status'=>'False','error' => 'Group no not exist'], 200);
        }
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
        echo 'am in update';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function getGroupById($id){
        print_r($id);  echo '---';die;
        $group_details = GroupCount::find($id);
        if($group_details){
            return response()->json($group_details, 200);
        }else{
            return response()->json(['error' => 'Product not found'], 404);
        }
    }
}
