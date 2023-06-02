<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{
    use HasFactory;

    public static function data(){
       return [

             [
            'img_url_1' => 'assets/imgs/brands/brands (9).png',
            'company_name_1' => 'CAMBRIA',
            'img_url_2' => 'assets/imgs/brands/brands (14).png',
            'company_name_2' => 'CAESARSTONE',
           
            
           ],
            [
             
             'img_url_1' => 'assets/imgs/brands/brands (2).png',
             'company_name_1' => 'WILSONART',
             'img_url_2' => 'assets/imgs/brands/brands (15).png',
             'company_name_2' => 'SILE STONE',
             
            ],

            [
                'img_url_1' => 'assets/imgs/brands/brands (1).png',
                'company_name_1' => 'PENTAL QUARTZ',
                'img_url_2' => 'assets/imgs/brands/brands (1).svg',
                'company_name_2' => 'MSI Q QUARTS',
               
                
               ],

            [
                
                'img_url_1' => 'assets/imgs/brands/brands (5).png',
                'company_name_1' => 'SPECTRUM QUARTZ',
                'img_url_2' => 'assets/imgs/brands/brands (6).png',
                'company_name_2' => 'VADARA QUARTZ',
               ],

               [
                'img_url_1' => 'assets/imgs/brands/brands (7).png',
                'company_name_1' => 'RELIANCE STONE',
                'img_url_2' => 'assets/imgs/brands/brands (8).png',
                'company_name_2' => 'ALLEANZA QUARTZ',
                
               ],

               

               [
                
                'img_url_1' => 'assets/imgs/brands/brands (11).png',
                'company_name_1' => 'SOLERA STONE',
                'img_url_2' => 'assets/imgs/brands/brands (12).png',
                'company_name_2' => 'LEAD STONE',
               ],

               [
                'img_url_1' => 'assets/imgs/brands/brands (13).png',
                'company_name_1' => 'CITI QUARTZ',
                'img_url_2' => 'assets/imgs/brands/brands (10).png',
                'company_name_2' => 'RAPHAEAL STONE',               
                
               ],

               [
                'img_url_1' => 'assets/imgs/brands/brands (3).png',
                'company_name_1' => 'CORIAN',
                'img_url_2' => 'assets/imgs/brands/brands (4).png',
                'company_name_2' => 'COMPAC',
               
                
               ],

               [
                
                'img_url_1' => 'assets/imgs/brands/brands (2).svg',
                'company_name_1' => 'LG HAUSYS  VIATERA',
                'img_url_2' => 'assets/imgs/brands/brands (3).svg',
                'company_name_2' => 'EMER STONE',
               ],

            
            ];
    }
}
