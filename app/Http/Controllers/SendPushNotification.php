<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\ProviderDevice;
use Exception;
use Log;
use Setting;

use Edujugon\PushNotification\PushNotification;

class SendPushNotification extends Controller
{
    /**
     * New Ride Accepted by a Driver.
     *
     * @return void
     */
    public function RideAccepted($request){

        return $this->sendPushToUser($request->user_id, trans('api.push.request_accepted'));
    }

    /**
     * Driver Arrived at your location.
     *
     * @return void
     */
    public function user_schedule($user){

        return $this->sendPushToUser($user, trans('api.push.schedule_start'));
    }

    /**
     * New Incoming request
     *
     * @return void
     */
    public function provider_schedule($provider){

        return $this->sendPushToProvider($provider, trans('api.push.schedule_start'));

    }

    /**
     * New Ride Accepted by a Driver.
     *
     * @return void
     */
    public function UserCancellRide($request){

        return $this->sendPushToProvider($request->provider_id, trans('api.push.user_cancelled'),$is_cancelled='YES');
    }


    /**
     * New Ride Accepted by a Driver.
     *
     * @return void
     */
    public function ProviderCancellRide($request){

        return $this->sendPushToUser($request->user_id, trans('api.push.provider_cancelled'),$is_cancelled='YES');
    }

     /**
     * Driver Arrived at your location.
     *
     * @return void
     */
    public function Arrived($request){

        return $this->sendPushToUser($request->user_id, trans('api.push.arrived'));
    }

     /**
     * Driver Arrived at your location.
     *
     * @return void
     */
    public function Dropped($request){

        Log::info( trans('api.push.dropped').Setting::get('currency').$request->payment->total.' by '.$request->payment_mode);

        return $this->sendPushToUser($request->user_id, trans('api.push.dropped').Setting::get('currency').$request->payment->total.' by '.$request->payment_mode);
    }

    /**
     * Money added to user wallet.
     *
     * @return void
     */
    public function ProviderNotAvailable($user_id){

        return $this->sendPushToUser($user_id,trans('api.push.provider_not_available'));
    }

    /**
     * New Incoming request
     *
     * @return void
     */
    public function IncomingRequest($provider){

        return $this->sendPushToProvider($provider, trans('api.push.incoming_request'));

    }
    

    /**
     * Driver Documents verfied.
     *
     * @return void
     */
    public function DocumentsVerfied($provider_id){

        return $this->sendPushToProvider($provider_id, trans('api.push.document_verfied'));
    }


    /**
     * Money added to user wallet.
     *
     * @return void
     */
    public function WalletMoney($user_id, $money){

        return $this->sendPushToUser($user_id, $money.' '.trans('api.push.added_money_to_wallet'));
    }

    /**
     * Money charged from user wallet.
     *
     * @return void
     */
    public function ChargedWalletMoney($user_id, $money){

        return $this->sendPushToUser($user_id, $money.' '.trans('api.push.charged_from_wallet'));
    }

    /**
     * Sending Push to a user Device.
     *
     * @return void
     */
    public function sendPushToUser($user_id, $push_message,$is_cancelled ='NO'){

        try{

           

            $user = User::findOrFail($user_id);

            if($user->device_token != ""){

                \Log::info('sending push for user : '. $user->first_name);



                    if($is_cancelled=='NO')
                        $cancel_status = false;
                    else
                        $cancel_status = true;



                if($user->device_type == 'ios'){
                     if(env('IOS_USER_ENV')=='development'){
                        $crt_user_path=app_path().'/apns/user/user.pem';
                        $crt_provider_path=app_path().'/apns/provider/provider.pem';
                        $dry_run = true;
                    }
                    else{
                        $crt_user_path=app_path().'/apns/user/user.pem';
                        $crt_provider_path=app_path().'/apns/provider/provider.pem';
                        $dry_run = false;
                    }
                    
                   $push = new PushNotification('apn');

                    $push->setConfig([
                            'certificate' => $crt_user_path,
                            'passPhrase' => env('IOS_USER_PUSH_PASS', 'apple'),
                            'dry_run' => $dry_run
                        ]);

                   $send=  $push->setMessage([
                            'aps' => [
                                'alert' => [
                                    'body' => $push_message
                                ],
                                'sound' => 'default',
                                'badge' => 1

                            ],
                            'extraPayLoad' => [
                                'custom' => $push_message,
                                'is_cancelled' => $cancel_status
                            ]
                        ])
                        ->setDevicesToken($user->device_token)->send();
                        \Log::info('sent');
                    //send fcm 
$push  = new PushNotification('fcm');
                        $send=  $push->setMessage([
					'notification' => [

       
                  				'title'=>$push_message ,
                   					 'body'=>$push_message,
							//message'=>$push_message,
                                    			'is_cancelled'=>$cancel_status,
                   			//		'sound' => 'default'
                   					]
,'priority' => 'high',  'content_available' => true,
 
                              		  'data' => [
                                  		  'message'=>$push_message,
                                    		 'is_cancelled'=>$cancel_status
                               		 ]
                       		 ])
                        ->setDevicesToken($user->device_token)->send();

                    
                    return $send;

                }elseif($user->device_type == 'android'){

                   $push = new PushNotification('fcm');

                    $send=  $push->setMessage(['message'=>$push_message,'is_cancelled'=>$cancel_status,'sound'=>'ride_cancelled','android_channel_id'=>'123456'])
                        ->setDevicesToken($user->device_token)->send();
                        /* $send=  $push->setMessage([
					'notification' => [
                   					'title'=>$push_message,
                   					'body'=>'This is the message',
							'message'=>$push_message,
                                    			'is_cancelled'=>$cancel_status,
                   					'sound' => 'default'
                   					],
                              		  'data' => [
                                  		  'message'=>$push_message,
                                    		 'is_cancelled'=>$cancel_status
                               			 ]
                       		 ])
                        ->setDevicesToken($provider->token)->send();*/

                    return $send;


                }
            }

        } catch(Exception $e){
            return $e;
        }

    }


    /**
     * Sending Push to a user Device.
     *
     * @return void
     */
    public function sendPushToProvider($provider_id, $push_message,$is_cancelled ='NO'){


        try{          

            

            $provider = ProviderDevice::where('provider_id',$provider_id)->with('provider')->first();           

            if($provider->token != ""){


                    if($is_cancelled=='NO')
                        $cancel_status = false;
                    else
                        $cancel_status = true;



                if($provider->type == 'ios'){

                    if(env('IOS_USER_ENV')=='development'){
                        $crt_user_path=app_path().'/apns/user/user.pem';
                        $crt_provider_path=app_path().'/apns/provider/provider.pem';
                        $dry_run = true;
                    }
                    else{
                        $crt_user_path=app_path().'/apns/user/user.pem';
                        $crt_provider_path=app_path().'/apns/provider/provider.pem';
                        $dry_run = false;
                    }

                   $push = new PushNotification('apn');
                   $push->setConfig([
                            'certificate' => $crt_provider_path,
                            'passPhrase' => env('IOS_PROVIDER_PUSH_PASS', 'apple'),
                            'dry_run' => $dry_run
                        ]);
                   $send=  $push->setMessage([
                            'aps' => [
                                'alert' => [
                                    'body' => $push_message
                                ],
                                'sound' => 'default',
                                'badge' => 1

                            ],
                            'extraPayLoad' => [
                                'custom' => $push_message,
                                'is_cancelled' => $cancel_status
                            ]
                        ])
                        ->setDevicesToken($provider->token)->send();
  $push = new  PushNotification('fcm');                     
 $send=  $push->setMessage([
		             'notification' => [
                   					'title'=>$push_message,
                   				'body'=>$push_message,
							'message'=>$push_message,
                                    			'is_cancelled'=>$cancel_status,
                   			//		'sound' => 'default'
                   					],
'priority' => 'high',  'content_available' => true,
                              		  'data' => [
                                  		  'message'=>$push_message,
                                    		 'is_cancelled'=>$cancel_status
                               			 ]
                       		 ])
                        ->setDevicesToken($provider->token)->send();           
                
                    
                    return $send;

                }elseif($provider->type == 'android'){
                    
                   $push = new PushNotification('fcm');
                  $send=  $push->setMessage(['message'=>$push_message,'is_cancelled'=>$cancel_status])
                        ->setDevicesToken($provider->token)->send();

                      /*$send=  $push->setMessage([
					'notification' => [
                   					'title'=>$push_message,
                   					'body'=>'This is the message',
							'message'=>$push_message,
                                    			'is_cancelled'=>$cancel_status,
                   					'sound' => 'default'
                   					],
                              		  'data' => [
                                  		  'message'=>$push_message,
                                    		 'is_cancelled'=>$cancel_status
                               			 ]
                       		 ])
                        ->setDevicesToken($provider->token)->send(); */                 
                    return $send;
                        

                }
            }
        } catch(Exception $e){           
            return $e;
        }


    }

}
