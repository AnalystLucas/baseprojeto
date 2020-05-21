<?php

namespace Helpers;

use Config\Info;

class Util {
    public function assets($url){
        
        return Info::$url.$url;
    }
}