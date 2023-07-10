<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use stdClass;

class GetData extends Model
{
    public function getAllData($rand)
    {
        $dentist = $this->select('code', 'name', 'address', 'phone', 'coordinates')->from('data_dentist')->inRandomOrder()->get();
        $hospital = $this->select('code', 'name', 'address', 'phone', 'coordinates')->from('data_hospital')->inRandomOrder()->get();
        $optical = $this->select('code', 'name', 'address', 'phone', 'coordinates')->from('data_optical')->inRandomOrder()->get();
        $pharmacy = $this->select('code', 'name', 'address', 'phone', 'coordinates')->from('data_pharmacy')->inRandomOrder()->get();
        $practicing_doctor = $this->select('code', 'name', 'address', 'phone', 'coordinates')->from('data_practicing_doctor')->inRandomOrder()->get();
        $pratama_clinic = $this->select('code', 'name', 'address', 'phone', 'coordinates')->from('data_pratama_clinic')->inRandomOrder()->get();
        $utama_clinic = $this->select('code', 'name', 'address', 'phone', 'coordinates')->from('data_utama_clinic')->inRandomOrder()->get();
        $public_health_center = $this->select('code', 'name', 'address', 'phone', 'coordinates')->from('data_public_health_center')->inRandomOrder()->get();
        
        if ($rand == true) {
            $dentist->inRandomOrder();
            $hospital->inRandomOrder();
            $optical->inRandomOrder();
            $pharmacy->inRandomOrder();
            $practicing_doctor->inRandomOrder();
            $pratama_clinic->inRandomOrder();
            $utama_clinic->inRandomOrder();
            $public_health_center->inRandomOrder();
        }
        
        $data = new stdClass();
        $data->dentist = $dentist;
        $data->hospital = $hospital;
        $data->optical = $optical;
        $data->pharmacy = $pharmacy;
        $data->practicing_doctor = $practicing_doctor;
        $data->pratama_clinic = $pratama_clinic;
        $data->utama_clinic = $utama_clinic;
        $data->public_health_center = $public_health_center;
        // $data = $dentist->union($hospital)->union($optical)->union($pharmacy)->union($practicing_doctor)->union($pratama_clinic)->union($utama_clinic)->union($public_health_center);
        return $data;
    }

    public function getData($limit, $cat, $rand)
    {
        $dentist = $this->select('code', 'name', 'address', 'phone', 'coordinates')->from('data_dentist');
        $hospital = $this->select('code', 'name', 'address', 'phone', 'coordinates')->from('data_hospital');
        $optical = $this->select('code', 'name', 'address', 'phone', 'coordinates')->from('data_optical');
        $pharmacy = $this->select('code', 'name', 'address', 'phone', 'coordinates')->from('data_pharmacy');
        $practicing_doctor = $this->select('code', 'name', 'address', 'phone', 'coordinates')->from('data_practicing_doctor');
        $pratama_clinic = $this->select('code', 'name', 'address', 'phone', 'coordinates')->from('data_pratama_clinic');
        $utama_clinic = $this->select('code', 'name', 'address', 'phone', 'coordinates')->from('data_utama_clinic');
        $public_health_center = $this->select('code', 'name', 'address', 'phone', 'coordinates')->from('data_public_health_center');

        if (isset($limit) or $limit > 0) {
            $dentist->limit($limit);
            $hospital->limit($limit);
            $optical->limit($limit);
            $pharmacy->limit($limit);
            $practicing_doctor->limit($limit);
            $pratama_clinic->limit($limit);
            $utama_clinic->limit($limit);
            $public_health_center->limit($limit);
        }

        if ($rand == true) {
            $dentist->inRandomOrder();
            $hospital->inRandomOrder();
            $optical->inRandomOrder();
            $pharmacy->inRandomOrder();
            $practicing_doctor->inRandomOrder();
            $pratama_clinic->inRandomOrder();
            $utama_clinic->inRandomOrder();
            $public_health_center->inRandomOrder();
        }

        $data = new stdClass();

        if ($cat[0] != '') {
            if (in_array('dentist', $cat)) {
                $data->dentist = $dentist->get();
            }
            if (in_array('hospital', $cat)) {
                $data->hospital = $hospital->get();
            }
            if (in_array('optical', $cat)) {
                $data->optical = $optical->get();
            }
            if (in_array('pharmacy', $cat)) {
                $data->pharmacy = $pharmacy->get();
            }
            if (in_array('practicing_doctor', $cat)) {
                $data->practicing_doctor = $practicing_doctor->get();
            }
            if (in_array('utama_clinic', $cat)) {
                $data->utama_clinic = $utama_clinic->get();
            }
            if (in_array('public_health_center', $cat)) {
                $data->public_health_center = $public_health_center->get();
            }
            if (in_array('pratama_clinic', $cat)) {
                $data->pratama_clinic = $pratama_clinic->get();
            }
        } else {
            $data->dentist = $dentist->get();
            $data->hospital = $hospital->get();
            $data->optical = $optical->get();
            $data->pharmacy = $pharmacy->get();
            $data->practicing_doctor = $practicing_doctor->get();
            $data->utama_clinic = $utama_clinic->get();
            $data->public_health_center = $public_health_center->get();
            $data->pratama_clinic = $pratama_clinic->get();
        }

        return $data;
    }

    public function getDetail($code){
        $dentist = $this->select('code', 'name', 'address', 'phone', 'category', 'coordinates', 'latitude', 'longitude')->from('data_dentist')->where('code', $code)->get();
        $hospital = $this->select('code', 'name', 'address', 'phone', 'category', 'coordinates', 'latitude', 'longitude')->from('data_hospital')->where('code', $code)->get();
        $optical = $this->select('code', 'name', 'address', 'phone', 'category', 'coordinates', 'latitude', 'longitude')->from('data_optical')->where('code', $code)->get();
        $pharmacy = $this->select('code', 'name', 'address', 'phone', 'category', 'coordinates', 'latitude', 'longitude')->from('data_pharmacy')->where('code', $code)->get();
        $practicing_doctor = $this->select('code', 'name', 'address', 'phone', 'category', 'coordinates', 'latitude', 'longitude')->from('data_practicing_doctor')->where('code', $code)->get();
        $pratama_clinic = $this->select('code', 'name', 'address', 'phone', 'category', 'coordinates', 'latitude', 'longitude')->from('data_pratama_clinic')->where('code', $code)->get();
        $utama_clinic = $this->select('code', 'name', 'address', 'phone', 'category', 'coordinates', 'latitude', 'longitude')->from('data_utama_clinic')->where('code', $code)->get();
        $public_health_center = $this->select('code', 'name', 'address', 'phone', 'category', 'coordinates', 'latitude', 'longitude')->from('data_public_health_center')->where('code', $code)->get();

        $data = new stdClass();
        $data = $dentist->union($hospital)->union($optical)->union($pharmacy)->union($practicing_doctor)->union($pratama_clinic)->union($utama_clinic)->union($public_health_center);
        return $data;
    }


    // public function __call($method, $parameters)
    // {
    //     if($method === 'getData'){
    //         switch(count($parameters)){
    //             case 1:
    //                 // 
    //                 break;
    //             case 2:
    //                 // 
    //                 break;
    //         }
    //     }
    // }


}
