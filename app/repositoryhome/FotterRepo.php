<?php


namespace App\repositoryhome;


use App\BrandName;
use App\Fruits;
use App\Gallary;
use App\OurServices;
use App\Partner;
use App\repository\AboutUsRepositry;
use App\repository\AddressRepository;
use App\repository\certificatesRepositry;
use App\repository\CrudRepository;
use App\repository\MailRepository;
use App\repository\Missionrepositry;
use App\repository\newsRepository;
use App\repository\PhoneRepository;
use App\repository\prouductsRepository;
use App\repository\QrCodeRepository;
use App\repository\ScoialRepository;
use App\repository\SliderRepositry;
use App\Sale;
use App\Seo;
use App\Features;
use App\Map;

class FotterRepo
{
    public function getSeoData( )
    {
        return Seo::all();

    }
    public function getSale()
    {
        return Sale::where('off', '=', null)->paginate(4,['*'],'offers');
    }
    public function getServices()
    {
        return OurServices::all();
    }
    function getFeaturesData()
    {
        return Features::all();
    }
    /**
     * @param QrCodeRepository $qrcode
     * @return QrCodeRepository[]|\Illuminate\Database\Eloquent\Collection
     */
    public function QrCodeData ( )
    {
        $qrcode=new QrCodeRepository();

        return $qrcode->getAllData();
    }

    /**
     * @return PhoneRepository[]|\Illuminate\Database\Eloquent\Collection
     */
    public function  getPhoneData()
    {
        $phone=new PhoneRepository();
        return $phone->getAllPhoneData();
    }

    /**
     * @return AddressRepository[]|\Illuminate\Database\Eloquent\Collection
     */

    public function getAddressData()
    {
        $address=new AddressRepository();
        return $address->getAllAddressData();
    }

    public function emailsData(){
        $email=new MailRepository();
        return $email->getAllMailData();
    }
    public function getScoialData(){
        $data=new ScoialRepository();
        return $data->getAllSocialData();
    }
    public function sliderData(){
        $data=new SliderRepositry();
        return $data->getAllSlidesFromDb();
    }
    public function aboutus()
    {
        $data=new AboutUsRepositry();
        return $data->AboutUsData();
    }
    public function maissonandvission()
    {
        $data=new Missionrepositry();
        return $data->MissionData();
    }

    public  function  certificates()
    {
        $data=new certificatesRepositry();
        return $data->certificatesData();
    }
    public function newsData()
    {
        $data=new newsRepository();
        return $data->getAllDataAsasc();
    }
    public function allnewsdata()

    {
        $data=new newsRepository();
        return $data->hendelnewsdata();
    }
    public function productData()
    {
//        return Fruits::paginate(4);
       return Fruits::where('is_available', '=', 1)->paginate(6,['*'],'cars');
    }

    public function getGallery()
    {
        return Gallary::all();
    }

    public function carGallery()
    {
        return Fruits::all();
    }
    public  function  getPartener()
    {
        return Partner::all();
    }
    public function getBrands(){
       return BrandName::all();
     }
     public  function getMapData(){
        return Map::all();
     }
    /**
     * @return array
     */
    public function footerCollection(){
        return [
            'seo'=>$this->getSeoData()[0],
            'sale'=>$this->getSale(),
            'serv'=>$this->getServices(),
            'gal'=>$this->getGallery(),
            'Partner'=>$this->getPartener(),
            'qrcode'=>$this->QrCodeData(),
            'phone'=>$this->getPhoneData(),
            'address'=>$this->getAddressData()[0],
            'email'=>$this->emailsData()[0],
            'social'=>$this->getScoialData(),
            'slides'=>$this->sliderData(),
            'about'=>$this->aboutus()[0],
            'mission'=>$this->maissonandvission()[0],
            'certificates'=>$this->certificates(),
            'news'=>$this->newsData(),
            'hnews'=>$this->allnewsdata(),
            'products'=>$this->productData(),
            'brands'=>$this->getBrands(),
            'offer'=>$this->getSale(),
            'map'=>$this->getMapData()[0],
        ];
    }
}
