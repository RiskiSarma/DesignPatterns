<?php
class CustomerBuilder
{
    private $id;

    /** */
    private $firstName;
    /** */
    private $lastName = "";
    /** */
    private $email = "";
    /** */
    private $phone = "";

    private $address = "";

    private $age = 0;

    private $hobi = "";
    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
    /**
     * @param string $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }
    /**
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }
    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }
    /**
     * @param string $phone
     */
    public function setPhone($phone)
    {
        $this->id = $phone;
        return $this;
    }
    /**
     * @param string $address
     */
    public function setAddres($address)
    {
        $this->address = $address;
        return $this;
    }
    /**
     * @param string $age
     */
    public function setAge($age)
    {
        $this->age = $age;
        return $this;
    }
    /**
     * @param string $hobi
     */
    public function setHobi($hobi)
    {
        $this->hobi = $hobi;
        return $this;
    }
    public function build(): Customer
    {
        return new Customer(
            $this->id,
            $this->firstName,
            $this->lastName,
            $this->email,
            $this->phone,
            $this->address,
            $this->age,
            $this->hobi
        );
    }
}
?>