<?php

namespace App\Http\Controllers;

use App\Models\Shipping;
use Illuminate\Http\Request;

class ShippmentController extends Controller
{
    public function shipping(Request $request)
    {
        $request->validate([
            's_name'=>'required',
            's_email'=>'required|email',
            's_num'=>'required',
            's_city'=>'required',
            's_country'=>'required',

            'r_name'=>'required',
            'r_email'=>'required|email',
            'r_num'=>'required',
            'r_h_num'=>'required',
            'r_address'=>'required',
            'r_city'=>'required',
            'r_country'=>'required',

            'ship_title'=>'required',
            'ship_method'=>'required',
            'ship_category'=>'required',
            'ship_p_name'=>'required',
            'ship_weight'=>'required',
            'ship_weight_unit'=>'required',
            'ship_total'=>'required',
            'ship_desc'=>'required',

            'loc_departure'=>'required',
            'loc_d_date'=>'required|date',
            'loc_d_time'=>'required',
            'loc_pickup'=>'required',
            'loc_p_date'=>'required|date',
            'loc_p_time'=>'required',
           
        ]);

        $shipping = new Shipping();
        $shipping->sender_name = $request->s_name;
        $shipping->sender_email = $request->s_email;
        $shipping->sender_num = $request->s_num;
        $shipping->sender_city = $request->s_city;
        $shipping->sender_country = $request->s_country;
        $shipping->reciever_name = $request->r_name;
        $shipping->reciever_email = $request->r_email;
        $shipping->reciever_num = $request->r_num;
        $shipping->reciever_house_num = $request->r_h_num;
        $shipping->reciever_address = $request->r_address;
        $shipping->reciever_city = $request->r_city;
        $shipping->reciever_country = $request->r_country;
        $shipping->shipment_title = $request->ship_title;
        $shipping->shipment_method = $request->ship_method;
        $shipping->shipment_category = $request->ship_category;
        $shipping->shipment_product_name = $request->ship_p_name;
        $shipping->shipment_weight = $request->ship_weight;
        $shipping->shipment_weight_unit = $request->ship_weight_unit;
        $shipping->shipment_total = $request->ship_total;
        $shipping->shipment_desc = $request->ship_desc;
        $shipping->location_departure = $request->loc_departure;
        $shipping->location_d_date = $request->loc_d_date;
        $shipping->location_d_time = $request->loc_d_time;
        $shipping->location_pickup = $request->loc_pickup;
        $shipping->location_p_date = $request->loc_p_date;
        $shipping->location_p_time = $request->loc_p_time;
        $shipping->tracking_id = rand(1000000,9999999);
        if($shipping->save()){
            session()->flash('message', 'Shipment Added Successfully!
            Your Tracking CODE/NUMBER Will Be Communicated To You.');
            session()->flash('messageType', 'success');
            return redirect()->back();
        }else{
            session()->flash('message', 'Email not Sent');
            session()->flash('messageType', 'fail');
            return redirect()->back();
        }													    									
    }
    public function tracking(Request $request)
    {
        $request->validate([
            'tracking_id'=>'required',
        ]);
        $tracking = Shipping::where('tracking_id',$request->tracking_id)->with('status')->get();
        if(!empty($tracking)){
            return back()->with(['status',$tracking]);
        }else{
            session()->flash('message', 'Your Tracking Code/Number is incorrect!
            Please make sure you Enter the right Tracking Code/Number.');
            session()->flash('messageType', 'fail');
            return back();
        }
    }
    public function statusChange($id)
    {
        $tracking = Shipping::where('id',$id)->first();
        if(!empty($tracking)){
            $tracking->status = 'active';
            if($tracking->save()){
                session()->flash('message', 'Status Change');
                session()->flash('messageType', 'success');
                return redirect()->route('dashboard');
            }else{
                session()->flash('message', 'Status not Change');
                session()->flash('messageType', 'success');
                return redirect()->route('dashboard');
            }
        }
            session()->flash('message', 'Action Failed');
            session()->flash('messageType', 'fail');
            return redirect()->route('dashboard');
    }
    public function logStatus(Request $request,)
    {
        $request->validate([
            'status'=>'required',
        ]);
        // $tracking = Shipping::where('id',$id)->first();
        // if(!empty($tracking)){
        //     $tracking->status = 'active';
        //     if($tracking->save()){
        //         session()->flash('message', 'Status Change');
        //         session()->flash('messageType', 'success');
        //         return redirect()->route('dashboard');
        //     }else{
        //         session()->flash('message', 'Status not Change');
        //         session()->flash('messageType', 'success');
        //         return redirect()->route('dashboard');
        //     }
        // }
        //     session()->flash('message', 'Action Failed');
        //     session()->flash('messageType', 'fail');
        //     return redirect()->route('dashboard');
    }
}
