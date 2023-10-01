<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use stdClass;
use App\Models\GetData;
use App\Models\SearchData;
use App\Models\CloseFaskes;

class Api extends Controller
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

    public function getDetail(Request $request)
    {
        $GetData = new GetData();
        $data = new stdClass();

        $code = $request->input('code');
        if (!isset($code) or $code == '') {
            $data = [
                "status" => array(
                    "code" => 400,
                    "message" => "Please provide FasKes Code"
                )
            ];
            return response()->json($data, 400);
        } else {
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

    public function search(Request $request)
    {
        $Search = new SearchData();

        $cat = explode(';', $request->input('category'));

        $limit = $request->input('limit');
        if (!isset($limit) or $limit <= 0) {
            $limit = 0; 
        }

        $q = $request->input('q');
        if (!isset($q) or $q == '') {
            $data = [
                "status" => array(
                    "code" => 400,
                    "message" => "Please provide search query"
                )
            ];
            return response()->json($data, 400);
        }

        // return array("q" => $q, "limit" => $limit, "cat" => $cat);

        $result = $Search->search($q, $limit, $cat);
        $data = [
            "status" => array(
                "code" => 200,
                "message" => "Success"
            ),
            "result" => $result
        ];
        return response()->json($data, 200);
    }

    public function closest(Request $request){
        $cls = new CloseFaskes();
        $data = new stdClass();

        $lat = $request->input('lat');
        $long = $request->input('long');

        $count = $request->input('count');
        if(!isset($count) OR $count <= 0){
            $count = 10;
        }

        if((!isset($lat) OR $lat == '') OR (!isset($long) OR $long == '')){
            $data = [
                "status" => array(
                    "code" => 400,
                    "message" => "Please provide the required data!"
                )
            ];
            return response()->json($data, 400);
        }else{
            $result = $cls->getClosest($lat, $long, $count);
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
