<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Okres;
use CodeIgniter\HTTP\RequestInterface;
use Psr\Log\LoggerInterface;
use App\Models\Obec;

class Main extends BaseController
{
    var $okres;
    var $data;
    var $obec;

    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
        $this->obec = new Obec();
        $this->okres = new Okres();
        $this->data["okresy"] = $okresy = $this->okres->where("kraj", 141)->findAll();
        


        
    }
    
    public function index()
    {
        echo view("Index.php", $this->data);
    }

    public function okres($kod){
        $this->data["obce"] = $this->obec->join("cast_obce", "obec.kod=cast_obce.obec", "inner")->join("ulice", "cast_obce.obec=ulice.cast_obce", "inner")->join("adresni_misto", "ulice.cast_obce=adresni_misto.ulice", "inner")->join("okres", "okres.kod=obec.okres")->where("okres.kod", $kod)->orderBy("pocet", "desc")->paginate(20);
        return view("okres", $this->data);
    }
}
