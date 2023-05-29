<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function Ramsey\Uuid\v1;

class Portfolio extends Model
{
    use HasFactory;

    public static function data(){
        return [
            '420-gates' => [
              'img_src' => '/assets/imgs/portfolio/420-gates/main.jpeg',
              'title' => '420 Gates - 44 Units',
              'link' => '/portfolio/420-gates',
              'img_1' => '/assets/imgs/portfolio/420-gates/1.jpeg',
              'img_2' => '/assets/imgs/portfolio/420-gates/2.jpeg',
              'type' => 'commercial'
              
             ],
        '10lexington81units' => [
                'img_src' => '/assets/imgs/portfolio/10lexington81units/main.jpeg',
              'title' => '10 Lexington - 81 Units',
              'link' => '/portfolio/10lexington81units',
              'img_1' => '/assets/imgs/portfolio/10lexington81units/1.jpeg',
              'img_2' => '/assets/imgs/portfolio/10lexington81units/2.jpeg',
              'type' => 'residential'
                
               ],

               '22centralave200units' => [
                'img_src' => '/assets/imgs/portfolio/22centralave200units/main.jpeg',
              'title' => '22 Central Ave - 200 Units',
              'link' => '/portfolio/22centralave200units',
              'img_1' => '/assets/imgs/portfolio/22centralave200units/1.jpeg',
              'img_2' => '/assets/imgs/portfolio/22centralave200units/2.jpeg',
              'type' => 'commercial'
                
               ],

               '99pratt99units' => [
                'img_src' => '/assets/imgs/portfolio/99pratt99units/main.jpeg',
              'title' => '99 Pratt - 99 Units',
              'link' => '/portfolio/99pratt99units',
              'img_1' => '/assets/imgs/portfolio/99pratt99units/1.jpeg',
              'img_2' => '/assets/imgs/portfolio/99pratt99units/2.jpeg',
              'type' => 'commercial'
                
               ],

               '200e135240units' => [
                'img_src' => '/assets/imgs/portfolio/200e135240units/main.jpeg',
              'title' => '200 E 135 - 240 Units',
              'link' => '/portfolio/200e135240units',
              'img_1' => '/assets/imgs/portfolio/200e135240units/1.jpeg',
              'img_2' => '/assets/imgs/portfolio/200e135240units/2.jpeg',
              'type' => 'commercial'
                
               ],
               '380grove39units' => [
                'img_src' => '/assets/imgs/portfolio/380grove39units/main.jpeg',
                'title' => '380 Grove - 39 Units',
                'link' => '/portfolio/380grove39units',
                'img_1' => '/assets/imgs/portfolio/380grove39units/1.jpeg',
                'img_2' => '/assets/imgs/portfolio/380grove39units/2.jpeg',
                'type' => 'residential'
                
               ],

               '715park70units' => [
                'img_src' => '/assets/imgs/portfolio/715park70units/main.jpeg',
                'title' => '715 Park - 70 Units',
                'link' => '/portfolio/715park70units',
                'img_1' => '/assets/imgs/portfolio/715park70units/1.jpeg',
                'img_2' => '/assets/imgs/portfolio/715park70units/2.jpeg',
                'type' => 'residential'
                
               ],

               '933rogers64units' => [
                'img_src' => '/assets/imgs/portfolio/933rogers64units/main.jpeg',
                'title' => '933 Rogers - 64 Units',
                'link' => '/portfolio/933rogers64units',
                'img_1' => '/assets/imgs/portfolio/933rogers64units/1.jpeg',
                'img_2' => '/assets/imgs/portfolio/933rogers64units/2.jpeg',
                'type' => 'residential'
                
               ],

               '1120stjohns76units' => [
                'img_src' => '/assets/imgs/portfolio/1120stjohns76units/main.jpeg',
                'title' => '1120 st Johns - 76 Units',
                'link' => '/portfolio/1120stjohns76units',
                'img_1' => '/assets/imgs/portfolio/1120stjohns76units/1.jpeg',
                'img_2' => '/assets/imgs/portfolio/1120stjohns76units/2.jpeg',
                'type' => 'residential'
                
               ],

               '1351brooklyn44units' => [
                'img_src' => '/assets/imgs/portfolio/1351brooklyn44units/main.jpeg',
                'title' => '1351 Brooklyn - 44 Units',
                'link' => '/portfolio/1351brooklyn44units',
                'img_1' => '/assets/imgs/portfolio/1351brooklyn44units/1.jpeg',
                'img_2' => '/assets/imgs/portfolio/1351brooklyn44units/2.jpeg',
                'type' => 'residential'
                
               ],

               '1543e_1950units' => [
                'img_src' => '/assets/imgs/portfolio/1543e_1950units/main.jpeg',
                'title' => '1543 E 19 - 50 Units',
                'link' => '/portfolio/1543e_1950units',
                'img_1' => '/assets/imgs/portfolio/1543e_1950units/1.jpeg',
                'img_2' => '/assets/imgs/portfolio/1543e_1950units/2.jpeg',
                'type' => 'residential'
                
               ],

               '2069honeywell51units' => [
                'img_src' => '/assets/imgs/portfolio/2069honeywell51units/main.jpeg',
                'title' => '2069 Honey Well - 51 Units',
                'link' => '/portfolio/2069honeywell51units',
                'img_1' => '/assets/imgs/portfolio/2069honeywell51units/1.jpeg',
                'img_2' => '/assets/imgs/portfolio/2069honeywell51units/2.jpeg',
                'type' => 'commercial'
                
               ],

               '4557davis158units' => [
                'img_src' => '/assets/imgs/portfolio/4557davis158units/main.jpeg',
                'title' => '4557 Davis - 158 Units',
                'link' => '/portfolio/4557davis158units',
                'img_1' => '/assets/imgs/portfolio/4557davis158units/1.jpeg',
                'img_2' => '/assets/imgs/portfolio/4557davis158units/2.jpeg',
                'type' => 'residential'
                
               ],

               '103Liberty54Units' => [
                'img_src' => '/assets/imgs/portfolio/103Liberty54Units/main.jpeg',
                'title' => '103 Liberty - 54 Units',
                'link' => '/portfolio/103Liberty54Units',
                'img_1' => '/assets/imgs/portfolio/103Liberty54Units/1.jpeg',
                'img_2' => '/assets/imgs/portfolio/103Liberty54Units/2.jpeg',
                'type' => 'residential'
                
               ],

               '136Summit99Units' => [
                'img_src' => '/assets/imgs/portfolio/136Summit99Units/main.jpeg',
                'title' => '136 Summit - 99 Units',
                'link' => '/portfolio/136Summit99Units',
                'img_1' => '/assets/imgs/portfolio/136Summit99Units/1.jpeg',
                'img_2' => '/assets/imgs/portfolio/136Summit99Units/2.jpeg',
                'type' => 'commercial'
                
               ],

               '169johnson52units' => [
                'img_src' => '/assets/imgs/portfolio/169johnson52units/main.jpeg',
                'title' => '169 John - 52 Units',
                'link' => '/portfolio/169johnson52units',
                'img_1' => '/assets/imgs/portfolio/169johnson52units/1.jpeg',
                'img_2' => '/assets/imgs/portfolio/169johnson52units/2.jpeg',
                'type' => 'commercial'
                
               ],

               '26quincy43units' => [
                'img_src' => '/assets/imgs/portfolio/26quincy43units/main.jpeg',
                'title' => '26 Quincy - 43 Units',
                'link' => '/portfolio/26quincy43units',
                'img_1' => '/assets/imgs/portfolio/26quincy43units/1.jpeg',
                'img_2' => '/assets/imgs/portfolio/26quincy43units/2.jpeg',
                'type' => 'residential'
                
               ],

               '89Bartlett58Units' => [
                'img_src' => '/assets/imgs/portfolio/89Bartlett58Units/main.jpeg',
                'title' => '89 Bartlett - 58 Units',
                'link' => '/portfolio/89Bartlett58Units',
                'img_1' => '/assets/imgs/portfolio/89Bartlett58Units/1.jpeg',
                'img_2' => '/assets/imgs/portfolio/89Bartlett58Units/2.jpeg',
                'type' => 'commercial'
                
               ],

               '91attorney42units' => [
                'img_src' => '/assets/imgs/portfolio/91attorney42units/main.jpeg',
                'title' => '91 Attorney - 42 Units',
                'link' => '/portfolio/91attorney42units',
                'img_1' => '/assets/imgs/portfolio/91attorney42units/1.jpeg',
                'img_2' => '/assets/imgs/portfolio/91attorney42units/2.jpeg',
                'type' => 'residential'
                
               ],

               '223n_8th95units' => [
                'img_src' => '/assets/imgs/portfolio/223n_8th95units/main.jpeg',
                'title' => '223 N 8th - 95 Units',
                'link' => '/portfolio/223n_8th95units',
                'img_1' => '/assets/imgs/portfolio/223n_8th95units/1.jpeg',
                'img_2' => '/assets/imgs/portfolio/223n_8th95units/2.jpeg',
                'type' => 'commercial'
                
               ],

               '445Vanderbilt44Units' => [
                'img_src' => '/assets/imgs/portfolio/445Vanderbilt44Units/main.jpeg',
                'title' => '455 Vanderbilt - 44 Units',
                'link' => '/portfolio/445Vanderbilt44Units',
                'img_1' => '/assets/imgs/portfolio/445Vanderbilt44Units/1.jpeg',
                'img_2' => '/assets/imgs/portfolio/445Vanderbilt44Units/2.jpeg',
                'type' => 'commercial'
                
               ],

               '564st_johns200units' => [
                'img_src' => '/assets/imgs/portfolio/564st_johns200units/main.jpeg',
                'title' => '564st Johns - 200 Units',
                'link' => '/portfolio/564st_johns200units',
                'img_1' => '/assets/imgs/portfolio/564st_johns200units/1.jpeg',
                'img_2' => '/assets/imgs/portfolio/564st_johns200units/2.jpeg',
                'type' => 'residential'
                
               ],

               '979Pacific69Units' => [
                'img_src' => '/assets/imgs/portfolio/979Pacific69Units/main.jpeg',
                'title' => '979 Pacific - 69 Units',
                'link' => '/portfolio/979Pacific69Units',
                'img_1' => '/assets/imgs/portfolio/979Pacific69Units/1.jpeg',
                'img_2' => '/assets/imgs/portfolio/979Pacific69Units/2.jpeg',
                'type' => 'residential'
                
               ],

               '1875atlantic118units' => [
                'img_src' => '/assets/imgs/portfolio/1875atlantic118units/main.jpeg',
                'title' => '1875 Atlantic - 118 Units',
                'link' => '/portfolio/1875atlantic118units',
                'img_1' => '/assets/imgs/portfolio/1875atlantic118units/1.jpeg',
                'img_2' => '/assets/imgs/portfolio/1875atlantic118units/2.jpeg',
                'type' => 'commercial'
                
               ],

               '8754thAve150Units' => [
                'img_src' => '/assets/imgs/portfolio/8754thAve150Units/main.jpeg',
                'title' => '875 4th Ave - 150 Units',
                'link' => '/portfolio/8754thAve150Units',
                'img_1' => '/assets/imgs/portfolio/8754thAve150Units/1.jpeg',
                'img_2' => '/assets/imgs/portfolio/8754thAve150Units/2.jpeg',
                'type' => 'residential'
                
               ],

               '156060th143Units' => [
                'img_src' => '/assets/imgs/portfolio/156060th143Units/main.jpeg',
                'title' => '1560 60th - 143 Units',
                'link' => '/portfolio/156060th143Units',
                'img_1' => '/assets/imgs/portfolio/156060th143Units/1.jpeg',
                'img_2' => '/assets/imgs/portfolio/156060th143Units/2.jpeg',
                'type' => 'commercial'
                
               ],

               
              
              
              
 
            
             ];
     }
}
