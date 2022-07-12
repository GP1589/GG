<?php

namespace App\Models;


class Listing {
    public static function all(){
        return [
            [
                'id'=>'1',
                'title'=>'Listing One',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam metus velit, fermentum sit amet sagittis et, pharetra at sem. Maecenas egestas placerat consequat. Mauris id lectus urna.'
            ],
            [
                'id'=>'2',
                'title'=>'Listing Two',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam metus velit, fermentum sit amet sagittis et, pharetra at sem. Maecenas egestas placerat consequat. Mauris id lectus urna.'
            ]
            ];
    }

    public static function find($id){
        $listings=self::all();
        foreach($listings as $listing){
            if($listing['id']==$id){
                return $listing;
            }
        }
    }
}


?>
