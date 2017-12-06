<?php
use Illuminate\Support\Facades\DB;
use App\Booking;
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class TimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $Bookings = \DB::table('booking')->where('Name', 'jill')->first();  
              
        //     echo $Bookings->RoomType;   
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
        $item = \DB::table('Booking')
         ->where('Name','=',$request->input('StartDate'));       
        
        $tableBooking = new \App\Booking;
        $tableBooking->Name = Auth::user()->name;
        $tableBooking->RoomType = $request->input('RoomType');
        $tableBooking->DateStart = $request->input('StartDate');
        $tableBooking->DateEnd = $request->input('EndDate');
        $tableBooking->Optional1 = $request->input('Breakfast');
        $tableBooking->Optional2 = $request->input('Dinner');
        $tableBooking->Optional3 = $request->input('Bed');
        $tableBooking->Optional4 = $request->input('Wifi');        
        $tableBooking->save();

        $start = 'StartDate';
        $end = 'EndDate';
      
        $start = strtotime($_GET['StartDate']);
        $end = strtotime($_GET['EndDate']);             
        $currentdate = $start;

        while($currentdate <= $end)
        {
            
            $currentdate = strtotime('+1 days', $currentdate);
            $item2 = \DB::table('Status')
            ->where('Date','=', $currentdate)->first();
       
            if($item2 === NULL){
                
                $tableStatus = new \App\Status;
                if($request->input('RoomType') == 'Single' ){
                    $tableStatus->Date = $currentdate;
                    $tableStatus->Single = 1;
                    $tableStatus->Duo = 0;
                    $tableStatus->Family = 0;
                    $tableStatus->Group = 0;
                    $tableStatus->save();
                }
                elseif($request->input('RoomType') == 'Duo'){
                    $tableStatus->Date = $currentdate;
                    $tableStatus->Single = 0;
                    $tableStatus->Duo = 1;
                    $tableStatus->Family = 0;
                    $tableStatus->Group = 0;
                    $tableStatus->save();
                }
                elseif($request->input('RoomType') == 'Family'){
                    $tableStatus->Date = $currentdate;
                    $tableStatus->Single = 0;
                    $tableStatus->Duo = 0;
                    $tableStatus->Family = 1;
                    $tableStatus->Group = 0;
                    $tableStatus->save();
                }
                else{
                    $tableStatus->Date = $currentdate;
                    $tableStatus->Single = 0;
                    $tableStatus->Duo = 0;
                    $tableStatus->Family = 0;
                    $tableStatus->Group = 1;
                    $tableStatus->save();
                }              
           
            }
            else{

                $tableStatus = new \App\Status;
                // $tableStatus->Date = $currentdate;
                $type = $request->input('RoomType');
              
                if($item2->$type > 5){
                    return view('menu');
                } 
                else{
                     \DB::table('status')->where('Date','=', $currentdate)->increment($type,1);  
                }
                              
            }
        }
        return view('complete');
    }
 

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $booking = Auth::user();

        return view('delete', ['booking' => $booking]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request,$id,$DateStart,$DateEnd,$RoomType)
    {
             
        \DB::table('Booking')->where('Booking_id',$id)->delete();    
        
        // \DB::table('status')->increment($type,1);
              
        $date1 = strtotime($DateStart);
        $date2 = strtotime($DateEnd); 
        $current = $date1;
        while($current <= $date2)
        {
            $current = strtotime('+1 days', $current);
            $item3 = \DB::table('Status')->where('Date','=', $current)->first();
            \DB::table('status')->where('Date','=', $current)->decrement($RoomType,1);
        }
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
