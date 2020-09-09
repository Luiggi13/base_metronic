<?php
//app/Helpers/Nixus/User.php
namespace App\Helpers\Nixus;
 
use Illuminate\Support\Facades\DB;
 
class NixusHelpers {
    /**
     * @param string $name
     * 
     * @return string return first letter of $name
     */
    public static function get_first_letter_string($name) {
        return $name[0];
    }
}