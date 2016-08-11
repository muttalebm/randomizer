<?php
    use GuzzleHttp\Client;
    use GuzzleHttp\Psr7\Request;


    if ( !defined('BASEPATH') ) exit('No direct script access allowed');

    class Random_number extends CI_Controller {


        public function __construct ()
        {
            parent::__construct();
            $this->load->library("url_replace");


        }

        public function index ()
        {
            $client = new Client();
//            client = new Client();

            $host = "https://www.foaas.com";

            $optionsJson = $client->request('GET', $host . "/operations")->getBody();

            $options = json_decode($optionsJson);

            foreach ( $options as $option )
            {
                $url = $this->url_replace->replace($option->url);
                $response = $client->request('GET', $host . "" . $url,["headers"=>["Accept"=>"application/json"]]);
                $message[]= json_decode($response->getBody());

            }

//            echo var_dump($message);exit;
            $total_count=count($message);
            $img=[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15];
            srand($total_count);
            $random_message= array_rand($message,$total_count);

            $data["messages"]=$message;
            $data["total_count"]=$total_count;
            $data["random_imgs"]=array_rand($img,15);

            $this->load->view("add_to_insult",$data);

//            $this->test(0,$data["messages"],array_rand($img,15));
        }

//        public function test ($count,$mesg,$rand)
//        {
//
//            echo var_dump($mesg);exit;
//            echo $this->meme->generate_slide($count,$mesg,$rand);
//        }




    }

    /* End of file welcome.php */
    /* Location: ./application/controllers/welcome.php */
