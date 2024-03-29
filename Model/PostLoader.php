<?php
declare(strict_types=1);
class PostLoader
{
    private $guestbook= [];
    public function __construct()
    {
        $json = json_decode(file_get_contents('json/guestbook.json'), true);
        foreach ($json AS $customerJson) {
            $this->customers[$customerJson['id']] = new Customer($customerJson['id'], $customerJson['name'], $customerJson['group_id']);
        }
    }
    public function loadById(int $customerId) : Customer {
        return $this->customers[$customerId];
    }
    public function loadCustomers() : array
    {
        return $this->customers;
    }
}