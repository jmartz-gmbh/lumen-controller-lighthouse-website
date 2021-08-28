<?php

namespace App\Http\Controllers;

use \http\Env\Response;
use \Illuminate\Http\Request;
use \Illuminate\Support\Facades\DB;

class LighthouseWebsiteController extends Controller
{
    /**
     * @param  Request  $request
     * @return Response
     */
    public function all(Request $request){
        $connection = DB::table('websites');

        $shops = $connection->get();

        $this->addData('websites',$shops);
        $this->addMessage('success','All your Websites.');

        return $this->getResponse();
    }

    /**
     * @param  Request  $request
     * @return Response
     */
    public function id(Request $request, int $id){
        $shop = DB::table('websites')
            ->where('id','=',$id);

        $count = $website->count();

        if($count === 1){
            $this->addData('website',$website->first());
        }
        else{
            $this->addMessage('success','Website doesnt exists.');
        }

        return $this->getResponse();
    }
}
