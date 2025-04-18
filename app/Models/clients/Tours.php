<?php

namespace App\Models\clients;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Tours extends Model
{
    use HasFactory;
    protected $table = 'tbl_tours';
    public function getALlTours(){
        $allTours = DB::table($this->table)->get();
        foreach($allTours as $tour){
            $tour->images= DB::table('tbl_images')
                ->where( 'tourId', $tour->tourId)
                ->pluck('imageUrl');

        }
        return $allTours;
    }



    // lấy chi tiết tours
    public function getTourDetail($id)
    {
        $getTourDetail = DB::table($this->table)->where('tourId', $id)->first();

        if ($getTourDetail) {
            $getTourDetail->images = DB::table('tbl_images') // Changed from 'image' to 'images'
                ->where('tourId', $getTourDetail->tourId)
                ->limit(5)
                ->pluck('imageUrl');
            $getTourDetail->timeline = DB::table('tbl_timeline')
                ->where('tourId', $getTourDetail->tourId)
                ->get();
        }
        return $getTourDetail;
    }
}
