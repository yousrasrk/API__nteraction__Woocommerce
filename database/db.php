<?php
require __DIR__ . '/../vendor/autoload.php';
use Automattic\WooCommerce\Client;
class DB{
     public function connect($ck, $cs,$site)
    {

        $woocommerce = new Client(
            $site,
            $ck,
            $cs,
            
            [
                'wp_api' => true,
                'version' => 'wc/v3',
                'query_string_auth' => true // Force Basic Authentication as query string true and using under HTTPS
            ]
        );
       
      //  echo json_encode($woocommerce->get('products'));
        return  $woocommerce ;
    }
}

/*



Consumer key	
ck_50ada774e68493673906fa8ce1ad2dba1a9176c8
 
Consumer secret

cs_1fdf9f22880b22a8aef2d0603f87be349b3fec4c

'http://localhost/wordpress'
*/
?>

