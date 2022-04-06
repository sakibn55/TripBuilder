<?php

class Airport
{

    private $conn;
    private $table = "airports";

    //properties
    public $airport_id;
    public $code;
    public $city_code;
    public $name;
    public $city;
    public $country_code;
    public $region_code;
    public $latitude;
    public $longitude;
    public $timezone;

    //constructor with db connection

    public function __construct($db)
    {
        $this->conn = $db;
    }

    //get all flight details 
    public function index()
    {
        $query = 'SELECT 
        code,
        city_code,
        name,
        city,
        country_code,
        region_code,
        latitude, 
        longitude, 
        timezone 
        FROM ' . $this->table;

        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    //get flight detail
    public function show()
    {
        $query = 'SELECT 
        code,
        city_code,
        name,
        city,
        country_code,
        region_code,
        latitude, 
        longitude, 
        timezone
        FROM ' . $this->table .  ' WHERE code = ? LIMIT 1';

        $stmt = $this->conn->prepare($query);

        //binding params
        $stmt->bindParam(1, $this->code);

        //execute
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $this->code = $row['code'];
            $this->city_code = $row['city_code'];
            $this->name = $row['name'];
            $this->city = $row['city'];
            $this->country_code = $row['country_code'];
            $this->region_code = $row['region_code'];
            $this->latitude = $row['latitude'];
            $this->longitude = $row['longitude'];
            $this->timezone = $row['timezone'];
            return true;
        } else {
            return false;
        }

        // return $stmt;
    }

    //store flight
    public function store()
    {
        //create
        $query = 'INSERT INTO ' . $this->table . ' SET code = :code, city_code = :city_code, name = :name, city = :city, country_code = :country_code, region_code = :region_code, latitude = :latitude, longitude = :longitude, timezone = :timezone';

        //preparing statement
        $stmt = $this->conn->prepare($query);

        $this->code = htmlspecialchars(strip_tags($this->code));
        $this->city_code = htmlspecialchars(strip_tags($this->city_code));
        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->city = htmlspecialchars(strip_tags($this->city));
        $this->country_code = htmlspecialchars(strip_tags($this->country_code));
        $this->region_code = htmlspecialchars(strip_tags($this->region_code));
        $this->latitude = htmlspecialchars(strip_tags($this->latitude));
        $this->longitude = htmlspecialchars(strip_tags($this->longitude));
        $this->timezone = htmlspecialchars(strip_tags($this->timezone));

        $stmt->bindParam(':code', $this->code);

        $stmt->bindParam(':city_code', $this->city_code);

        $stmt->bindParam(':name', $this->name);

        $stmt->bindParam(':city', $this->city);

        $stmt->bindParam(':country_code', $this->country_code);

        $stmt->bindParam(':region_code', $this->region_code);

        $stmt->bindParam(':latitude', $this->latitude);

        $stmt->bindParam(':longitude', $this->longitude);

        $stmt->bindParam(':timezone', $this->timezone);

        if ($stmt->execute()) {
            return true;
        }
        printf("Error %s. \n", $stmt->error);
        return false;
    }

    //update flight
    public function update()
    {
        //create
        $query = 'UPDATE ' . $this->table . ' SET code = :code, city_code = :city_code, name = :name, city = :city, country_code = :country_code, region_code = :region_code, latitude = :latitude, longitude = :longitude, timezone = :timezone WHERE code = :code';

        //preparing statement
        $stmt = $this->conn->prepare($query);

        $this->code = htmlspecialchars(strip_tags($this->code));
        $this->city_code = htmlspecialchars(strip_tags($this->city_code));
        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->city = htmlspecialchars(strip_tags($this->city));
        $this->country_code = htmlspecialchars(strip_tags($this->country_code));
        $this->region_code = htmlspecialchars(strip_tags($this->region_code));
        $this->latitude = htmlspecialchars(strip_tags($this->latitude));
        $this->longitude = htmlspecialchars(strip_tags($this->longitude));
        $this->timezone = htmlspecialchars(strip_tags($this->timezone));

        $stmt->bindParam(':code', $this->code);

        $stmt->bindParam(':city_code', $this->city_code);

        $stmt->bindParam(':name', $this->name);

        $stmt->bindParam(':city', $this->city);

        $stmt->bindParam(':country_code', $this->country_code);

        $stmt->bindParam(':region_code', $this->region_code);

        $stmt->bindParam(':latitude', $this->latitude);

        $stmt->bindParam(':longitude', $this->longitude);

        $stmt->bindParam(':timezone', $this->timezone);

        if ($stmt->execute()) {
            return true;
        }
        printf("Error %s. \n", $stmt->error);
        return false;
    }

    //delete flight

    public function delete()
    {
        $query = 'DELETE FROM ' . $this->table . ' WHERE code = :code';

        $stmt =  $this->conn->prepare($query);

        $this->code = htmlspecialchars(strip_tags($this->code));
        $stmt->bindParam(':code', $this->code);
        if ($stmt->execute()) {
            return true;
        }
        printf("Error %s. \n", $stmt->error);
        return false;
    }
}
