<?php

    /**
     * Created by PhpStorm.
     * User: muttalebm
     * Date: 11-Aug-16
     * Time: 11:11 PM
     */
    class Url_replace {

        public function replace ($url)
        {

            $ci = & get_instance();
            $replace =$ci->config->item("initiate_actors") ;

            foreach ( $replace as $key =>$value)
            {

                $count= count($replace[$key])-1;
                srand($this->make_seed());

                $url = str_replace($key, $value[rand(0,$count)], $url);
            }


            return $url;
        }
        function make_seed()
        {
            list($usec, $sec) = explode(' ', microtime());
            return (float) $sec + ((float) $usec * 100000);
        }
    }