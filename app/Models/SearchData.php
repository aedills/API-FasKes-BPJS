<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use stdClass;

class SearchData extends Model
{
    use HasFactory;
    public function Search($q, $limit, $cat)
    {
        $dentist = $this->select('code', 'name', 'address', 'phone', 'coordinates')->from('data_dentist');
        $hospital = $this->select('code', 'name', 'address', 'phone', 'coordinates')->from('data_hospital');
        $optical = $this->select('code', 'name', 'address', 'phone', 'coordinates')->from('data_optical');
        $pharmacy = $this->select('code', 'name', 'address', 'phone', 'coordinates')->from('data_pharmacy');
        $practicing_doctor = $this->select('code', 'name', 'address', 'phone', 'coordinates')->from('data_practicing_doctor');
        $pratama_clinic = $this->select('code', 'name', 'address', 'phone', 'coordinates')->from('data_pratama_clinic');
        $utama_clinic = $this->select('code', 'name', 'address', 'phone', 'coordinates')->from('data_utama_clinic');
        $public_health_center = $this->select('code', 'name', 'address', 'phone', 'coordinates')->from('data_public_health_center');

        if ($limit > 0) {
            $dentist->limit($limit);
            $hospital->limit($limit);
            $optical->limit($limit);
            $pharmacy->limit($limit);
            $practicing_doctor->limit($limit);
            $pratama_clinic->limit($limit);
            $utama_clinic->limit($limit);
            $public_health_center->limit($limit);
        }

        $data = new stdClass();
        if ($cat[0] != '') {
            if (in_array('dentist', $cat)) {
                $dentist = $dentist->get();
            }
            if (in_array('hospital', $cat)) {
                $hospital = $hospital->get();
            }
            if (in_array('optical', $cat)) {
                $optical = $optical->get();
            }
            if (in_array('pharmacy', $cat)) {
                $pharmacy = $pharmacy->get();
            }
            if (in_array('practicing_doctor', $cat)) {
                $practicing_doctor = $practicing_doctor->get();
            }
            if (in_array('utama_clinic', $cat)) {
                $utama_clinic = $utama_clinic->get();
            }
            if (in_array('public_health_center', $cat)) {
                $public_health_center = $public_health_center->get();
            }
            if (in_array('pratama_clinic', $cat)) {
                $pratama_clinic = $pratama_clinic->get();
            }
        } else {
            $dentist = $dentist->get();
            $hospital = $hospital->get();
            $optical = $optical->get();
            $pharmacy = $pharmacy->get();
            $practicing_doctor = $practicing_doctor->get();
            $utama_clinic = $utama_clinic->get();
            $public_health_center = $public_health_center->get();
            $pratama_clinic = $pratama_clinic->get();
        }

        // if (count((array)$dentist) > 0) {
            $data->dentist = $dentist;
        // }
        // if (count($hospital) > 0) {
        //     $data->hospital = $hospital;
        // }
        // if (count($optical) > 0) {
        //     $data->optical = $optical;
        // }
        // if (count($pharmacy) > 0) {
        //     $data->pharmacy = $pharmacy;
        // }
        // if (count($practicing_doctor) > 0) {
        //     $data->practicing_doctor = $practicing_doctor;
        // }
        // if (count($utama_clinic) > 0) {
        //     $data->utama_clinic = $utama_clinic;
        // }
        // if (count($public_health_center) > 0) {
        //     $data->public_health_center = $public_health_center;
        // }
        // if (count($pratama_clinic) > 0) {
        //     $data->pratama_clinic = $pratama_clinic;
        // }

        return $data;
    }
}
