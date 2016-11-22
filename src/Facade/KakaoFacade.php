<?php 
namespace tyleteam\KakaoApi\Facade;

use Illuminate\Support\Facades\Facade;

class KakaoFacade extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'tyleteam\KakaoApi\Kakao';
    }

}
