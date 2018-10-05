<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Http\Client;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    const BLOCKCHAIN_API = 'http://192.168.244.129:3000/api';

    private function connectToBlockChain($url, $method = 'GET', $params = null)
    {
        $client = new Client(self::BLOCKCHAIN_API.'/'.$url);
        $client->setMethod($method);
        if(!empty($params)) {
            if ($method === 'GET')
                $client->setParameterGet($params);
            if ($method === 'POST')
                $client->setParameterPost($params);
        }

        $response = $client->send();
        if(!$response->isSuccess()) {
            return false;
        }

        return json_decode($response->getContent());
    }

    public function indexAction()
    {
        if(!$this->connectToBlockChain('Commerce/comercio1')) {
            //Generar Comercio
            $commerce = [
                '$class' => "org.example.biznet.Commerce",
                "commerceId" => "comercio1",
                "name" => "comercio1"
            ];
            $this->connectToBlockChain('Commerce', 'POST', $commerce);
        }
        if(!$this->connectToBlockChain('User/usuario1')) {
            //Generar Usuario
            $user = [
                '$class' => "org.example.biznet.User",
                "userId" => "usuario1",
                "firstName" => "usuario1",
                "age" => 5,
                "gender" => "male",
                "location" => "madrid",
                "zipcode" => 0,
                "myFavorites" => []
            ];
            $this->connectToBlockChain('User', 'POST', $user);
        }

        if(!$this->connectToBlockChain('Product/producto2')) {
             //Generar Producto
            $product = [
                '$class' => "org.example.biznet.Product",
                "productId" => "producto2",
                "price" => 50,
                "returned" => false,
                "holder" => "resource:org.example.biznet.User#usuario1",
                "ticketId" => "ticket1",
                "emissionDate" => "2018-10-05T21:29:40.950Z",
                "expirationDate" => "2018-10-05T21:29:40.950Z",
                "totalPrice" => 50,
                "commerceName" => "pepe",
                "commerceId" => "resource:org.example.biznet.Commerce#comercio1",
                "numberOfProducts" => 1
            ];
            $this->connectToBlockChain('Product', 'POST', $product);
        }

        if(!$this->connectToBlockChain('Ticket/ticket1')) {
            //Generar Producto
            $product = [
                '$class' => "org.example.biznet.Ticket",
                "ticketId" => "ticket1",
                "emissionDate" => "2018-10-05T21:29:40.950Z",
                "expirationDate" => "2018-10-05T21:29:40.950Z",
                "totalPrice" => 50,
                "commerceName" => "pepe",
                "commerceId" => "resource:org.example.biznet.Commerce#comercio1",
                "numberOfProducts" => 1
            ];
            $this->connectToBlockChain('Ticket', 'POST', $product);
        }

        echo "<h3>Comercios</h3>";
        var_dump($this->connectToBlockChain('Commerce'));
        echo "<h3>Usuarios</h3>";
        var_dump($this->connectToBlockChain('User'));
        echo "<h3>Productos</h3>";
        var_dump($this->connectToBlockChain('Product'));
        echo "<h3>Ticket</h3>";
        var_dump($this->connectToBlockChain('Ticket'));die;
    }
}
