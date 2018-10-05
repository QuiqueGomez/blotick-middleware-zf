<?php
/**
 * Created by PhpStorm.
 * User: kikevillab
 * Date: 05/10/2018
 * Time: 23:05
 */

namespace Application\Model;


class Ticket
{
 /*{
    "$class": "org.example.biznet.Ticket",
    "ticketId": "string",
    "emissionDate": "2018-10-05T21:18:13.249Z",
    "expirationDate": "2018-10-05T21:18:13.249Z",
    "totalPrice": 0,
    "commerceName": "string",
    "commerceId": {},
    "numberOfProducts": 0
  }*/

    private $class = "org.example.biznet.Ticket";

    private $ticketId;

    private $emissionDate;

    private $expirationDate;

    private $totalPrice;

    private $commerceName;

    private $commmerceId;

    private $numberOfProducts;

    /**
     * @return mixed
     */
    public function getTicketId()
    {
        return $this->ticketId;
    }

    /**
     * @param mixed $ticketId
     * @return Ticket
     */
    public function setTicketId($ticketId)
    {
        $this->ticketId = $ticketId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmissionDate()
    {
        return $this->emissionDate;
    }

    /**
     * @param mixed $emissionDate
     * @return Ticket
     */
    public function setEmissionDate($emissionDate)
    {
        $this->emissionDate = $emissionDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * @param mixed $expirationDate
     * @return Ticket
     */
    public function setExpirationDate($expirationDate)
    {
        $this->expirationDate = $expirationDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTotalPrice()
    {
        return $this->totalPrice;
    }

    /**
     * @param mixed $totalPrice
     * @return Ticket
     */
    public function setTotalPrice($totalPrice)
    {
        $this->totalPrice = $totalPrice;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCommerceName()
    {
        return $this->commerceName;
    }

    /**
     * @param mixed $commerceName
     * @return Ticket
     */
    public function setCommerceName($commerceName)
    {
        $this->commerceName = $commerceName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCommmerceId()
    {
        return $this->commmerceId;
    }

    /**
     * @param mixed $commmerceId
     * @return Ticket
     */
    public function setCommmerceId($commmerceId)
    {
        $this->commmerceId = $commmerceId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNumberOfProducts()
    {
        return $this->numberOfProducts;
    }

    /**
     * @param mixed $numberOfProducts
     * @return Ticket
     */
    public function setNumberOfProducts($numberOfProducts)
    {
        $this->numberOfProducts = $numberOfProducts;
        return $this;
    }


}