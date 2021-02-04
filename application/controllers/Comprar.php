<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Comprar extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();

        require(FCPATH . 'vendor/autoload.php');
    }

	public function index()
	{

        switch ($_POST['articulo']) {
            case 'camara':
                $view = 'ventacamara';
                break;
            case 'focos':
                $view = 'ventafo';
                break;
            case 'bicicleta':
                $view = 'ventabi';
                break;
            case 'chamarra':
                $view = 'ventacazadora';
                break;
            
            default:
                $view = 'ventacamara';
                break;
       
        }
        // Agrega credenciales
        MercadoPago\SDK::setAccessToken(MERCADOPAGO_TOKEN); 
        MercadoPago\SDK::SetIntegratorId(INTEGRATOR_ID);
        // Crea un objeto de preferencia
        $preference = new MercadoPago\Preference();
        // Crea un ítem en la preferencia
        $item = new MercadoPago\Item();
        $item->title = $_POST['articulo'];
        $item->id = 1234;
        $item->picture_url = base_url('public/IMG/gri.png');  // http://vintage_joca.herokuapp.com/public/IMG/bi.png
        $item->description = 'Dispositivo móvil de Tienda e-commerce';
        $item->category_id = "others";
        $item->quantity = 1;
        $item->currancy_id = "MNX";
        $item->unit_price = 1000;

        $preference->items = array($item);
       

        $payer = new MercadoPago\Payer();

        $payer-> id= 655253974;
        $payer-> name ="Lalo";
        $payer-> username ="Landa";
        $payer->date_created = "2021-01-02T12:58:41.425-04:00";
        $payer-> email ="test_user_81131286@testuser.com";
        $payer-> phone =  array(
            "area_code" => '52',
            "number" => '5549737300'
        );

        $payer->address = array(
            "street_name" => "Insurgentes Sur",
            "street_number" => '1602',
            "zip_code" => "03940" 
        );
        $preference -> payer =$payer;

        //numero de orden del pedido
        $personal_e_reference = 'naama230695@gmail.com';
        $preference -> external_reference = $personal_e_reference;
        $preference -> auto_return ='approved';
        $preference -> notification_url ='https://tiendavintage.herokuapp.com/index.php/apimp/notification';
       // $preference -> notification_url ='https://hookb.in/qBggmZE0WlSzVVJyWkNb';
        

         $preference ->payment_methods = array(
             "excluded_payment_methods" => array (
                    array("id" => "amex")
             ),
             "excluded_payment_types" => array(
                    array("id" => "atm")
             ),
             //cuotas
             "installments" => 6
         );

        

        $itemString = implode ( ',', (array) $item);

        $urls =array(
            "failure" => site_url('pago/mppays/error?item_data='. $itemString),
            // vintage.com/index.php/pago/error?url=error&item_data=item.value.item.value
            "pending" => site_url('pago/mppays/pending?item_id='. $item->id),
            "success" => site_url('pago/mppays/success?item_id='. $item->id)

        );
        

        $preference -> back_urls = $urls;

        $preference->save();

        $phone_info =$preference->payer->phone;
        

          $dataToView = array(
            'preference' => $preference,
            'payer_info' => $preference ->payer,
            'phone_info' =>$phone_info,
            'items' => $preference->items
        );


        $this->load->view($view, $dataToView);
        
       

    }
    


	//--------------------------------------------------------------------

}
