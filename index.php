<!-- definire la struttura di una tabella users che contiene i dati degli utenti di un blog -->

<!--

Tabella users

Name
Lastname
Age
Email

-->


<?php

// definire una classe User che "mappa" la tabella users

class User {

    public $name;
    public $lastname;
    public $age;
    public $email;

    function __construct($_name, $_lastname, $_age, $_email) {
        $this->name = $_name;
        $this->lastname = $_lastname;
        $this->age = $_age;
        $this->email = $_email;
    }

    public function getData() {

        return [
            'name' => $this->name,
            'lastname' => $this->lastname,
            'age' => $this->age,
            'email' => $this->email
        ];
    }


}

// creare alcune istanze della classe User per stampare i dati degli utenti

$manuel = new User('Manuel', 'De Vito', '33', 'manuel.devito@icloud.com');

    $manuel_data = $manuel->getData();

    echo '<h1>'.'User 1'.'</h1>';
    echo '<p>' .'Name: ' .$manuel_data['name']. '</p>';
    echo '<p>' .'Lastname: ' .$manuel_data['lastname']. '</p>';
    echo '<p>' .'Age: ' .$manuel_data['age']. '</p>';
    echo '<p>' .'Email: ' .$manuel_data['email']. '</p>';

$davide = new User('Davide', 'Rossi', '30', 'davide.rossi@gmail.com');

    $davide_data = $davide->getData();

    echo '<h1>'.'User 2'.'</h1>';
    echo '<p>' .'Name: ' .$davide_data['name']. '</p>';
    echo '<p>' .'Lastname: ' .$davide_data['lastname']. '</p>';
    echo '<p>' .'Age: ' .$davide_data['age']. '</p>';
    echo '<p>' .'Email: ' .$davide_data['email']. '</p>';

$sara = new User('Sara', 'Russano', '23', 'sara.russano@hotmail.com');

    $sara_data = $sara->getData();

    echo '<h1>'.'User 3'.'</h1>';
    echo '<p>' .'Name: ' .$sara_data['name']. '</p>';
    echo '<p>' .'Lastname: ' .$sara_data['lastname']. '</p>';
    echo '<p>' .'Age: ' .$sara_data['age']. '</p>';
    echo '<p>' .'Email: ' .$sara_data['email']. '</p>';

?>
