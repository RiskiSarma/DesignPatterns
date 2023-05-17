<?php
class Customer
{
    private $id;

    /** */
    private $firstName;
    /** */
    private $lastName;
    /** */
    private $email;
    /** */
    private $phone;

    private $address;

    private $age;

    private $hobi;
    /**  */
    /**Customer Constructor 
     * @param string $firstName
     * @param string $lastName
     * @param string $email
     * @param string $phone
     * @param string 
     */
    public function __construct($id, $firstName, $lastName, $email, $phone, $address, $age, $hobi)
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->phone = $phone;
        $this->address = $address;
        $this->age = $age;
        $this->hobi = $hobi;
    }
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
/** */

}
?>