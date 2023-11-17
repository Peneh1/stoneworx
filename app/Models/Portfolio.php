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

          '200e135240units' => [
            'img_src' => '/assets/imgs/portfolio/200e135240units/main.jpeg',
          'title' => '200 E 135 <br> 240 Units',
          'link' => '/portfolio/200e135240units',
          'type' => 'commercial',
          'inside_img_src' => [
             '/assets/imgs/portfolio/200e135240units/1.jpeg',
             '/assets/imgs/portfolio/200e135240units/2.jpeg',
          ],
            
            
           ],

           '2069honeywell51units' => [
            'img_src' => '/assets/imgs/portfolio/2069honeywell51units/main.jpeg',
            'title' => '2069 Honey Well <br> 51 Units',
            'link' => '/portfolio/2069honeywell51units',
            'type' => 'commercial',
            'inside_img_src' => [
              '/assets/imgs/portfolio/2069honeywell51units/1.jpeg',
              '/assets/imgs/portfolio/2069honeywell51units/2.jpeg',
           ],
            
           ],
           '103Liberty54Units' => [
            'img_src' => '/assets/imgs/portfolio/103Liberty54Units/main.jpeg',
            'title' => '103 Liberty <br> 54 Units',
            'link' => '/portfolio/103Liberty54Units',
            'type' => 'commercial',
            'inside_img_src' => [
           ],
            
           ],

           '1120stjohns76units' => [
            'img_src' => '/assets/imgs/portfolio/1120stjohns76units/main.jpeg',
            'title' => '1120 st Johns <br> 76 Units',
            'link' => '/portfolio/1120stjohns76units',
            'type' => 'commercial',
            'inside_img_src' => [
              '/assets/imgs/portfolio/1120stjohns76units/1.jpeg',
              '/assets/imgs/portfolio/1120stjohns76units/2.jpeg',
           ],
            
           ],
           '136Summit99Units' => [
            'img_src' => '/assets/imgs/portfolio/136Summit99Units/main.jpeg',
            'title' => '136 Summit <br> 99 Units',
            'link' => '/portfolio/136Summit99Units',
            'type' => 'commercial',
            'inside_img_src' => [
           ],
            
           ],
           '91attorney42units' => [
            'img_src' => '/assets/imgs/portfolio/91attorney42units/main.jpeg',
            'title' => '91 Attorney <br> 42 Units',
            'link' => '/portfolio/91attorney42units',
            'type' => 'commercial',
            'inside_img_src' => [
              '/assets/imgs/portfolio/91attorney42units/1.jpeg',
              '/assets/imgs/portfolio/91attorney42units/2.jpeg',
           ],
            
           ],

           '71-82Parsons94Units' => [
            'img_src' => '/assets/imgs/portfolio/71-82Parsons94Units/main.jpeg',
            'title' => '71-82cParsons <br> 94 Units',
            'link' => '/portfolio/71-82Parsons94Units',
            'type' => 'commercial',
            'inside_img_src' => [
           ],
            
           ],
           '8754thAve150Units' => [
            'img_src' => '/assets/imgs/portfolio/8754thAve150Units/main.jpeg',
            'title' => '875 4th Ave <br> 150 Units',
            'link' => '/portfolio/8754thAve150Units',
            'type' => 'commercial',
            'inside_img_src' => [
           ],
            
           ],
           '564st_johns200units' => [
            'img_src' => '/assets/imgs/portfolio/564st_johns200units/main.jpeg',
            'title' => '564st Johns <br> 200 Units',
            'link' => '/portfolio/564st_johns200units',
            'type' => 'commercial',
            'inside_img_src' => [
              '/assets/imgs/portfolio/564st_johns200units/1.jpeg',
              '/assets/imgs/portfolio/564st_johns200units/2.jpeg',
           ],
            
           ],
           '715park70units' => [
            'img_src' => '/assets/imgs/portfolio/715park70units/main.jpeg',
            'title' => '715 Park <br> 70 Units',
            'link' => '/portfolio/715park70units',
            'type' => 'commercial',
            'inside_img_src' => [
              '/assets/imgs/portfolio/715park70units/1.jpeg',
              '/assets/imgs/portfolio/715park70units/2.jpeg',
           ],
            
           ],

            '420-gates' => [
              'img_src' => '/assets/imgs/portfolio/420-gates/main.jpeg',
              'title' => '420 Gates <br> 44 Units',
              'link' => '/portfolio/420-gates',
              'type' => 'commercial',
              'inside_img_src' => [
                '/assets/imgs/portfolio/420-gates/1.jpeg',
                '/assets/imgs/portfolio/420-gates/2.jpeg',
             ],
              
             ],
        '10lexington81units' => [
                'img_src' => '/assets/imgs/portfolio/10lexington81units/main.jpeg',
              'title' => '10 Lexington <br> 81 Units',
              'link' => '/portfolio/10lexington81units',
              'type' => 'commercial',
              'inside_img_src' => [
                '/assets/imgs/portfolio/10lexington81units/1.jpeg',
                '/assets/imgs/portfolio/10lexington81units/2.jpeg',
             ],
                
               ],

               '22centralave200units' => [
                'img_src' => '/assets/imgs/portfolio/22centralave200units/main.jpeg',
              'title' => '22 Central Ave <br> 200 Units',
              'link' => '/portfolio/22centralave200units',
              'type' => 'commercial',
              'inside_img_src' => [
                '/assets/imgs/portfolio/22centralave200units/1.jpeg',
                '/assets/imgs/portfolio/22centralave200units/2.jpeg',
             ],
                
               ],

               '99pratt99units' => [
              'img_src' => '/assets/imgs/portfolio/99pratt99units/main.jpeg',
              'title' => '99 Pratt <br> 99 Units',
              'link' => '/portfolio/99pratt99units',
              'type' => 'commercial',
              'inside_img_src' => [
                '/assets/imgs/portfolio/99pratt99units/1.jpeg',
                '/assets/imgs/portfolio/99pratt99units/2.jpeg',
             ],
                
               ],

               
               '380grove39units' => [
                'img_src' => '/assets/imgs/portfolio/380grove39units/main.jpeg',
                'title' => '380 Grove <br> 39 Units',
                'link' => '/portfolio/380grove39units',
                'type' => 'commercial',
                'inside_img_src' => [
                  '/assets/imgs/portfolio/380grove39units/1.jpeg',
                  '/assets/imgs/portfolio/380grove39units/2.jpeg',
               ],
                
               ],

              

               '933rogers64units' => [
                'img_src' => '/assets/imgs/portfolio/933rogers64units/main.jpeg',
                'title' => '933 Rogers <br> 64 Units',
                'link' => '/portfolio/933rogers64units',
                'type' => 'commercial',
                'inside_img_src' => [
                  '/assets/imgs/portfolio/933rogers64units/1.jpeg',
                  '/assets/imgs/portfolio/933rogers64units/2.jpeg',
               ],
                
               ],

               
               '1351brooklyn44units' => [
                'img_src' => '/assets/imgs/portfolio/1351brooklyn44units/main.jpeg',
                'title' => '1351 Brooklyn <br> 44 Units',
                'link' => '/portfolio/1351brooklyn44units',
                'type' => 'commercial',
                'inside_img_src' => [
                  '/assets/imgs/portfolio/1351brooklyn44units/1.jpeg',
                  '/assets/imgs/portfolio/1351brooklyn44units/2.jpeg',
               ],
                
               ],

               '1543e_1950units' => [
                'img_src' => '/assets/imgs/portfolio/1543e_1950units/main.jpeg',
                'title' => '1543 E 19 <br> 50 Units',
                'link' => '/portfolio/1543e_1950units',
                'type' => 'commercial',
                'inside_img_src' => [
                  '/assets/imgs/portfolio/1543e_1950units/1.jpeg',
                  '/assets/imgs/portfolio/1543e_1950units/2.jpeg',
               ],
                
               ],

               

               '4557davis158units' => [
                'img_src' => '/assets/imgs/portfolio/4557davis158units/main.jpeg',
                'title' => '4557 Davis <br> 158 Units',
                'link' => '/portfolio/4557davis158units',
                'type' => 'commercial',
                'inside_img_src' => [
                  '/assets/imgs/portfolio/4557davis158units/1.jpeg',
                  '/assets/imgs/portfolio/4557davis158units/2.jpeg',
               ],
                
               ],

               
               '169johnson52units' => [
                'img_src' => '/assets/imgs/portfolio/169johnson52units/main.jpeg',
                'title' => '169 John <br> 52 Units',
                'link' => '/portfolio/169johnson52units',
                'type' => 'commercial',
                'inside_img_src' => [
                  '/assets/imgs/portfolio/169johnson52units/1.jpeg',
                  '/assets/imgs/portfolio/169johnson52units/2.jpeg',
               ],
                
               ],

               '26quincy43units' => [
                'img_src' => '/assets/imgs/portfolio/26quincy43units/main.jpeg',
                'title' => '26 Quincy <br> 43 Units',
                'link' => '/portfolio/26quincy43units',
                'type' => 'commercial',
                'inside_img_src' => [
                  '/assets/imgs/portfolio/26quincy43units/1.jpeg',
                  '/assets/imgs/portfolio/26quincy43units/2.jpeg',
               ],
                
               ],

               '89Bartlett58Units' => [
                'img_src' => '/assets/imgs/portfolio/89Bartlett58Units/main.jpeg',
                'title' => '89 Bartlett <br> 58 Units',
                'link' => '/portfolio/89Bartlett58Units',
                'type' => 'commercial',
                'inside_img_src' => [
               ],
                
               ],
             

               '223n_8th95units' => [
                'img_src' => '/assets/imgs/portfolio/223n_8th95units/main.jpeg',
                'title' => '223 N 8th <br> 95 Units',
                'link' => '/portfolio/223n_8th95units',
                'type' => 'commercial',
                'inside_img_src' => [
                  '/assets/imgs/portfolio/223n_8th95units/1.jpeg',
                  '/assets/imgs/portfolio/223n_8th95units/2.jpeg',
               ],
                
               ],

               '445Vanderbilt44Units' => [
                'img_src' => '/assets/imgs/portfolio/445Vanderbilt44Units/main.jpeg',
                'title' => '455 Vanderbilt <br> 44 Units',
                'link' => '/portfolio/445Vanderbilt44Units',
                'type' => 'commercial',
                'inside_img_src' => [
               ],
                
               ],

           

               '979Pacific69Units' => [
                'img_src' => '/assets/imgs/portfolio/979Pacific69Units/main.jpeg',
                'title' => '979 Pacific <br> 69 Units',
                'link' => '/portfolio/979Pacific69Units',
                'type' => 'commercial',
                'inside_img_src' => [
               ],
                
               ],

               '1875atlantic118units' => [
                'img_src' => '/assets/imgs/portfolio/1875atlantic118units/main.jpeg',
                'title' => '1875 Atlantic <br> 118 Units',
                'link' => '/portfolio/1875atlantic118units',
                'type' => 'commercial',
                'inside_img_src' => [
                  '/assets/imgs/portfolio/1875atlantic118units/1.jpeg',
                  '/assets/imgs/portfolio/1875atlantic118units/2.jpeg',
               ],
                
               ],

               
               '156060th143Units' => [
                'img_src' => '/assets/imgs/portfolio/156060th143Units/main.jpeg',
                'title' => '1560 60th <br> 143 Units',
                'link' => '/portfolio/156060th143Units',
                'type' => 'commercial',
                'inside_img_src' => [
               ],
                
               ],

               '39high84units' => [
                'img_src' => '/assets/imgs/portfolio/39high84units/main.jpeg',
                'title' => '39 High <br> 84 Units',
                'link' => '/portfolio/39high84units',
                'type' => 'commercial',
                'inside_img_src' => [
                  '/assets/imgs/portfolio/39high84units/1.jpeg',
                  '/assets/imgs/portfolio/39high84units/2.jpeg',
               ],
                
               ],

               '2913snyder41units' => [
                'img_src' => '/assets/imgs/portfolio/2913snyder41units/main.jpeg',
                'title' => '2913 snyder - 41 Units',
                'link' => '/portfolio/2913snyder41units',
                'type' => 'commercial',
                'inside_img_src' => [
                  '/assets/imgs/portfolio/2913snyder41units/1.jpeg',
                  '/assets/imgs/portfolio/2913snyder41units/2.jpeg',
               ],
                
               ],

              
               '219Lenox50Units' => [
                'img_src' => '/assets/imgs/portfolio/219Lenox50Units/main.jpeg',
                'title' => '219 Lenox - 50 Units',
                'link' => '/portfolio/219Lenox50Units',
                'type' => 'commercial',
                'inside_img_src' => [
               ],
                
               ],

               '26-304th100Units' => [
                'img_src' => '/assets/imgs/portfolio/26-304th100Units/main.jpeg',
                'title' => '26-30 4th <br> 100 Units',
                'link' => '/portfolio/26-304th100Units',
                'type' => 'commercial',
                'inside_img_src' => [
               ],
                
               ],

               '2045ocean51units' => [
                'img_src' => '/assets/imgs/portfolio/2045ocean51units/main.jpeg',
                'title' => '2045 Ocean <br> 51 Units',
                'link' => '/portfolio/2045ocean51units',
                'type' => 'commercial',
                'inside_img_src' => [
                  '/assets/imgs/portfolio/2045ocean51units/1.jpeg',
                  '/assets/imgs/portfolio/2045ocean51units/2.jpeg',
               ],
                
               ],

               '2001nostrand53units' => [
                'img_src' => '/assets/imgs/portfolio/2001nostrand53units/main.jpeg',
                'title' => '2001 Nostround <br> 53 Units',
                'link' => '/portfolio/2001nostrand53units',
                'type' => 'commercial',
                'inside_img_src' => [
                  '/assets/imgs/portfolio/2001nostrand53units/1.jpeg',
                  '/assets/imgs/portfolio/2001nostrand53units/2.jpeg',
               ],
                
               ],

               '2flanders80units' => [
                'img_src' => '/assets/imgs/portfolio/2flanders80units/main.jpeg',
                'title' => '2 Flanders <br> 80 Units',
                'link' => '/portfolio/2flanders80units',
                'type' => 'commercial',
                'inside_img_src' => [
                  '/assets/imgs/portfolio/2flanders80units/1.jpeg',
                  '/assets/imgs/portfolio/2flanders80units/2.jpeg',
               ],
                
               ],

               '832lexington46units' => [
                'img_src' => '/assets/imgs/portfolio/832lexington46units/main.jpeg',
                'title' => '832 Lexington <br> 46 Units',
                'link' => '/portfolio/832lexington46units',
                'type' => 'commercial',
                'inside_img_src' => [
                  '/assets/imgs/portfolio/832lexington46units/1.jpeg',
                  '/assets/imgs/portfolio/832lexington46units/2.jpeg',
               ],
                
               ],

               '1sullivanpl52units' => [
                'img_src' => '/assets/imgs/portfolio/1sullivanpl52units/main.jpeg',
                'title' => '1 Sullivan Pl <br> 52 Units',
                'link' => '/portfolio/1sullivanpl52units',
                'type' => 'commercial',
                'inside_img_src' => [
                  '/assets/imgs/portfolio/1sullivanpl52units/1.jpeg',
                  '/assets/imgs/portfolio/1sullivanpl52units/2.jpeg',
               ],
                
               ],

               '375dean143units' => [
                'img_src' => '/assets/imgs/portfolio/375dean143units/main.jpeg',
                'title' => '375 Dean <br> 143 Units',
                'link' => '/portfolio/375dean143units',
                'type' => 'commercial',
                'inside_img_src' => [
               ],
                
               ],

               '1' => [
                'img_src' => '/assets/imgs/portfolio/residential/main1.jpeg',
                'title' => '',
                'link' => '/portfolio/1',
                'type' => 'residential',
                'inside_img_src' => [
                  '/assets/imgs/portfolio/residential/1.jpeg',
               ],
                
               ],

               '2' => [
                'img_src' => '/assets/imgs/portfolio/residential/main2.jpeg',
                'title' => '',
                'link' => '/portfolio/2',
                'type' => 'residential',
                'inside_img_src' => [
                  '/assets/imgs/portfolio/residential/2.jpeg',
                  '/assets/imgs/portfolio/residential/4.jpeg',

               ],
                
               ],

               '3' => [
                'img_src' => '/assets/imgs/portfolio/residential/main3.jpeg',
                'title' => '',
                'link' => '/portfolio/3',
                'type' => 'residential',
                'inside_img_src' => [
                  '/assets/imgs/portfolio/residential/3.jpeg',
                  '/assets/imgs/portfolio/residential/5.jpeg',

               ],
                
               ],

               

                        
              
              
              
 
            
             ];
     }
}
