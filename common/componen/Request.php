<?php
namespace common\componen;

class Request extends \yii\web\Request {
    public $web;
    public $adminUrl;

    public function getBaseUrl(){
        return str_replace($this->web, "", parent::getBaseUrl()) . $this->adminUrl;
    }

    /*
        If you don't have this function, the dashboard site will 404 if you leave off 
        the trailing slash.

        E.g.:

        Wouldn't work:
        site.com/dashboard

        Would work:
        site.com/dashboard/

        Using this function, both will work.
    */
    public function resolvePathInfo(){
        if($this->getUrl() === $this->adminUrl){
            return "";
        }else{
            return parent::resolvePathInfo();
        }
    }
} ?>