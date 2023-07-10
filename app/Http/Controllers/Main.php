<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use stdClass;
use App\Models\GetData;

class Main extends Controller
{
    public function getData(Request $request)
    {
        $GetData = new GetData();

        $rand = $request->input('rand');
        if (isset($rand)) {
            if (strtolower($rand) == 'no') {
                $rand = false;
            } else {
                $rand = true;
            }
        } else {
            $rand = true;
        }

        $cat = explode(';', $request->input('category'));
        $limit = $request->input('limit');

        if (isset($limit) or isset($cat)) {
            $result = $GetData->getData($limit, $cat, $rand);
        } else {
            $result = $GetData->getAllData($rand);
        }

        $data = new stdClass();
        $data = [
            "status" => array(
                "code" => 200,
                "message" => "Success"
            ),
            "result" => $result
        ];
        
        return response()->json($data, 200);
    }
    
    public function getDetail(Request $request){
        // 
        $GetData = new GetData();
        $data = new stdClass();

        $code = $request->input('code');
        if(!isset($code) OR $code == ''){
            $data = [
                "status" => array(
                    "code" => 400,
                    "message" => "Please provide FasKes Code"
                )
            ];
            return response()->json($data, 400);
        }else{
            $result = $GetData->getDetail($code);
            
            $data = [
                "status" => array(
                    "code" => 200,
                    "message" => "Success"
                ),
                "result" => $result
            ];
            return response()->json($data, 200);
        }
    }
}
