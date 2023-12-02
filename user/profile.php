<?php

include '../classes/pet.class.php';

class PetProfile {
    public $pet_id;
    public $petname;
    public $type;
    public $breed;
    public $age;
    public $gender;
    public $user_id; // Assuming user_id is the foreign key in the pet table

    // Constructor
    public function __construct($pet_id, $petname, $type, $breed, $age, $gender, $user_id) {
        $this->pet_id = $pet_id;
        $this->petname = $petname;
        $this->type = $type;
        $this->breed = $breed;
        $this->age = $age;
        $this->gender = $gender;
        $this->user_id = $user_id;
    }

    // Method to display pet profile
    public function displayProfile() {
        echo "Pet ID: $this->pet_id<br>";
        echo "Pet Name: $this->petname<br>";
        echo "Type: $this->type<br>";
        echo "Breed: $this->breed<br>";
        echo "Age: $this->age<br>";
        echo "Gender: $this->gender<br>";
        echo "User ID: $this->user_id<br>";
    }
}

// Assuming you have a $mysqli object representing your MySQLi connection

// Replace 'user' and 'pet' with your actual table names
$query = "SELECT pet.*, user.user_id FROM pet JOIN user ON pet.user_id = user.user_id WHERE pet.pet_id = ?";

// Assuming you have a prepared statement
$stmt = $mysqli->prepare($query);

// Assuming $petId is the ID of the pet whose profile you want to display
$petId = 1; // Replace with the actual pet ID

$stmt->bind_param("i", $petId);
$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Fetch data
    $row = $result->fetch_assoc();

    // Create a PetProfile object
    $petProfile = new PetProfile($row['pet_id'], $row['petname'], $row['type'], $row['breed'], $row['age'], $row['gender'], $row['user_id']);

    // Display the pet profile
    $petProfile->displayProfile();
} else {
    echo "Pet not found.";
}

$stmt->close();
$mysqli->close();
?>
