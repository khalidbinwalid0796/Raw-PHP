
<?php

class Epression{

    public function matchExample(){
        $statusCode = 200;

        switch ($statusCode) {
            case '200':
                return 'success';
                break;
            case '404':
                return 'error';
                break;;
            default:
                return 'unknown status code';
        }
        return match($statusCode){
            200,201 => 'success',
            404 => 'NOT FOUND',
            500 => 'server error',
            default => 'unknown status code',
        };
    }
}

?>