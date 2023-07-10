<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CloseFaskes extends Model
{
    use HasFactory;
    public function getClosest($lat, $long, $count)
    {
        $dentist = $this->select('code', 'name', 'address', 'phone', 'category', 'coordinates', 'latitude', 'longitude')->from('data_dentist')->get();
        $hospital = $this->select('code', 'name', 'address', 'phone', 'category', 'coordinates', 'latitude', 'longitude')->from('data_hospital')->get();
        $optical = $this->select('code', 'name', 'address', 'phone', 'category', 'coordinates', 'latitude', 'longitude')->from('data_optical')->get();
        $pharmacy = $this->select('code', 'name', 'address', 'phone', 'category', 'coordinates', 'latitude', 'longitude')->from('data_pharmacy')->get();
        $practicing_doctor = $this->select('code', 'name', 'address', 'phone', 'category', 'coordinates', 'latitude', 'longitude')->from('data_practicing_doctor')->get();
        $pratama_clinic = $this->select('code', 'name', 'address', 'phone', 'category', 'coordinates', 'latitude', 'longitude')->from('data_pratama_clinic')->get();
        $utama_clinic = $this->select('code', 'name', 'address', 'phone', 'category', 'coordinates', 'latitude', 'longitude')->from('data_utama_clinic')->get();
        $public_health_center = $this->select('code', 'name', 'address', 'phone', 'category', 'coordinates', 'latitude', 'longitude')->from('data_public_health_center')->get();

        $data = $dentist->concat($utama_clinic)->concat($optical)->concat($pharmacy)->concat($practicing_doctor)->concat($pratama_clinic)->concat($hospital)->concat($public_health_center);

        $distances = [];
        foreach ($data as $field) {
            $distance = $this->calculateDistance($lat, $long, (float)$field['latitude'], (float)$field['longitude']);
            // $distances[$field['code']] = array($distance, $field['code']);
            $distances[$field['code']] = $distance;
        }

        asort($distances);

        $distanceData = array_slice($distances, 0, $count, true);

        $closestData = [];
        foreach ($data as $entry) {
            $code = $entry["code"];
            if (array_key_exists($code, $distanceData)) {
                $value_a = $distanceData[$code];
                $entry["distance"] = (string)$value_a;
                $closestData[] = $entry;
            }
        }

        usort($closestData, function ($a, $b) {
            $distanceA = floatval($a['distance']);
            $distanceB = floatval($b['distance']);
            
            if ($distanceA == $distanceB) {
                return 0;
            } elseif ($distanceA < $distanceB) {
                return -1;
            } else {
                return 1;
            }
        });

        return $closestData;
    }

    function calculateDistance($lat1, $lon1, $lat2, $lon2)
    {
        $earthRadius = 6371;

        $dLat = deg2rad($lat2 - $lat1);
        $dLon = deg2rad($lon2 - $lon1);

        $a = sin($dLat / 2) * sin($dLat / 2) + cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * sin($dLon / 2) * sin($dLon / 2);
        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));

        $distance = $earthRadius * $c;

        return $distance;
    }
}
