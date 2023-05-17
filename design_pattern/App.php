<?php

$customer1 = (new CustomerBuilder())
    ->setFirstName("Rizki")
    ->setPhone("1231")
    ->setAge(20)
    ->build();

$customer2 = (new CustomerBuilder())
    ->setFirstName("Rizki")
    ->setAddres("Aceh")
    ->setPhone("1231")
    ->setAge(20)
    ->build();

$customer3 = (new CustomerBuilder())
    ->setFirstName("Rizki")
    ->setLastName("Sarma")
    ->setPhone("1231")
    ->setAge(20)
    ->build();

$customer4 = (new CustomerBuilder())
    ->setFirstName("Rizki")
    ->setLastName("Sarma")
    ->setPhone("1231")
    ->setAge(20)
    ->setHobi("game")
    ->build()

    // $customer1 = new Customer(id:"1", firstName:"Rizki", lastName:"Sarma", email:"riski@gmail.com",phone:"123");

    // $customer2 = new Customer(id:"1", firstName:"Rizki", lastName:"Sarma", email:"riski@gmail.com",phone:"123", address:"aceh");

    // $customer3 = new Customer(id:"1", firstName:"Rizki", lastName:"Sarma", email:"riski@gmail.com",phone:"123", address:"aceh", age:"20");

    // $customer4 = new Customer(id:"1", firstName:"Rizki", lastName:"Sarma", email:"riski@gmail.com",phone:"123", address:"", age:"20");

    // $customer5 = new Customer(id:"1", firstName:"Rizki", lastName:"", email:"riski@gmail.com",phone:"123", address:"", age:"20");

    ?>