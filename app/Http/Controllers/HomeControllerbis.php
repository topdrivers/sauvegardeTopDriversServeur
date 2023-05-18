<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeControllerbis extends Controller
{
    protected $UserAPI;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(UserApiController $UserAPI)
    {
        //$this->middleware('auth');
        $this->UserAPI = $UserAPI;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function confirm_ride()
    {
        $Response = $this->UserAPI->request_status_check()->getData();
		//$request = $this->_client->getLastRawRequest();
		//$fare = $this->UserAPI->estimated_fare($request)->getData();

        if(empty($Response->data))
        {
            $services = $this->UserAPI->services();
            return view('index',compact('services'));
        }else{
            return view('user.ride.waiting')->with('request',$Response->data[0]);
        }
    }
	
	/**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function confirm_tp()
    {
        $Response = $this->UserAPI->request_status_check()->getData();
		//$request = $this->_client->getLastRawRequest();
		//$fare = $this->UserAPI->estimated_fare($request)->getData();

        if(empty($Response->data))
        {
            $services = $this->UserAPI->services();
            return view('tp',compact('services'));
        }else{
            return view('user.ride.waiting')->with('request',$Response->data[0]);
        }
    }
	
	 public function index(Request $request)
    {
        $fare = $this->UserAPI->estimated_fare($request)->getData();
        //$service = (new Resource\ServiceResource)->show($request->service_type);
		
		$Response = $this->UserAPI->request_status_check()->getData();
		

        if(empty($Response->data))
        {
            $services = $this->UserAPI->services();
            return view('tp',compact('services'));
        }else{
            return view('user.ride.waiting')->with('request',$Response->data[0]);
        }
		
		//return view('index',compact('fare'));
		
		
		
	}
	
	
	/* ajout personnel de la page web /taxi-longue-distance */
	
	public function index2()
    {
        $Response = $this->UserAPI->request_status_check()->getData();

        if(empty($Response->data))
        {
            $services = $this->UserAPI->services();
            return view('taxi-longue-distance',compact('services'));
        }else{
            return view('user.ride.waiting')->with('request',$Response->data[0]);
        }
    }
	
	public function test()
    {
        $Response = $this->UserAPI->request_status_check()->getData();

        if(empty($Response->data))
        {
            $services = $this->UserAPI->services();
            return view('test',compact('services'));
        }else{
            return view('user.ride.waiting')->with('request',$Response->data[0]);
        }
    }

    /**
     * Show the application profile.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
        return view('user.account.profile');
    }

    /**
     * Show the application profile.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit_profile()
    {
        return view('user.account.edit_profile');
    }

    /**
     * Update profile.
     *
     * @return \Illuminate\Http\Response
     */
    public function update_profile(Request $request)
    {
        return $this->UserAPI->update_profile($request);
    }

    /**
     * Show the application change password.
     *
     * @return \Illuminate\Http\Response
     */
    public function change_password()
    {
        return view('user.account.change_password');
    }

    /**
     * Change Password.
     *
     * @return \Illuminate\Http\Response
     */
    public function update_password(Request $request)
    {
        return $this->UserAPI->change_password($request);
    }

    /**
     * Trips.
     *
     * @return \Illuminate\Http\Response
     */
    public function trips()
    {
        $trips = $this->UserAPI->trips();
        // dd($trips);
        return view('user.ride.trips',compact('trips'));
    }

     /**
     * Payment.
     *
     * @return \Illuminate\Http\Response
     */
    public function payment()
    {
        $cards = (new Resource\CardResource)->index();
        return view('user.account.payment',compact('cards'));
    }


    /**
     * Wallet.
     *
     * @return \Illuminate\Http\Response
     */
    public function wallet(Request $request)
    {
        $cards = (new Resource\CardResource)->index();
        return view('user.account.wallet',compact('cards'));
    }

    /**
     * Promotion.
     *
     * @return \Illuminate\Http\Response
     */
    public function promotions_index(Request $request)
    {
        $promocodes = $this->UserAPI->promocodes();
        return view('user.account.promotions', compact('promocodes'));
    }

    /**
     * Add promocode.
     *
     * @return \Illuminate\Http\Response
     */
    public function promotions_store(Request $request)
    {
        return $this->UserAPI->add_promocode($request);
    }

    /**
     * Upcoming Trips.
     *
     * @return \Illuminate\Http\Response
     */
    public function upcoming_trips()
    {
        $trips = $this->UserAPI->upcoming_trips();
        return view('user.ride.upcoming',compact('trips'));
    }
}
