<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$customers=DB::table('customers')->get(); //all data dekha jabe
        //$customers=DB::table('customers')->first(); //single data dekha jabe
        //$customers=DB::table('customers')->where('name','shakib')->get();
     //$customers=DB::table('customers')->where('id',3)->first();//ai kajta purata korar jonne function holo ***find(ei khane id dibe 1,2); sei id take dekhake jemon
     //$customers=DB::table('customers')->find(2);
     //$customers=DB::table('customers')->pluck('name');//column guli ke show korar command
       

        //Aggregates: Function
        //$customers=DB::table('customers')->count();
        //$customers=DB::table('customers')->sum('votes');
        //$customers=DB::table('customers')->where('name','shakib')->sum('votes');
        //$customers=DB::table('customers')->min('votes');
        //$customers=DB::table('customers')->avg('votes');
       /*$customers=DB::table('customers')
                            ->select('name','email')
                            ->where('votes',120)
                            ->get();
                             dd($customers); jader votes 120 tader name r email dekhabe*/

     /*$customers=DB::table('customers')
                            ->select('name','email')
                            ->where('votes',120)
                            ->get();
                             dd($customers); jara votes 120 paiche tader  name email dekhabe*/

                            // joni query:   $customers=DB::table('customers')
                            // ->select('customers.email','invoices.amount')
                            // ->rightjoin('invoices', 'customers.id', '=', 'invoices.customer_id')
                            // ->get();
                            /*where cluse: $customers = DB::table('customers')
                                         ->where('votes','<', '150')
                                         ->get();*/
            /*and cluse:$customers = DB::table('customers')
                                         ->where('votes','>', '150')
                                         ->where('votes','<', '250')
                                         ->get();*/

                /*   $customers = DB::table('customers')
                                         ->where('votes','>', '200')
                                         ->orwhere('name', 'shakib')
                                         ->get(); */  

                       /*$customers= DB::table('customers')
                                   ->whereMonth('created_at', '12')
                                                 ->get(); */
                            //ektar por 2 ta data dekhabe  $customers= DB::table('customers')
                            // ->orderBy('id','ASC')
                            // ->offset(1)
                            // ->limit(2)
                            // ->get();
                          $customers=DB::table('customers')
                                      ->where('id',5)->delete();
                                      dd($customers);

                              $customers=DB::table('customers')
                            ->updateOrInsert(
                           ['email' => 'shamin@example.com', 'name' => 'Shamim'],
                            ['votes' => '140']
                           ); 
                                dd($customers);                   

                        $customers= DB::table('customers')
                                 ->where('id',2)
                                 ->update(['name'=>'Rahim']);
                                                            
                             dd($customers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
