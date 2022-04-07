<?php

class Flight{
    
    private $conn;
    private $table = "flights";

    //properties
    public $flight_id;
    public $airline;
    public $number;
    public $departure_airport;
    public $departure_time;
    public $arrival_airport;
    public $arrival_time;
    public $price;
    public $trip_type;

    //constructor with db connection

    public function __construct($db)
    {
        $this->conn = $db;
    }

    //get all flight details 
    public function index(){
        $query = 'SELECT 
        airline,
        number,
        departure_airport,
        departure_time,
        arrival_airport,
        arrival_time,
        price 
        FROM '.$this->table;

        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    //get flight detail
    public function show()
    {
        $query = 'SELECT 
        airline,
        number,
        departure_airport,
        departure_time,
        arrival_airport,
        arrival_time,
        price 
        FROM ' . $this->table.  ' WHERE number = ? LIMIT 1';

        $stmt = $this->conn->prepare($query);

        //binding params
        $stmt->bindParam(1, $this->number);

        //execute
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $this->airline = $row['airline'];
            $this->number = $row['number'];
            $this->departure_airport = $row['departure_airport'];
            $this->departure_time = $row['departure_time'];
            $this->arrival_airport = $row['arrival_airport'];
            $this->arrival_time = $row['arrival_time'];
            $this->price = $row['price'];
            return true;
        } else {
            return false;
        }
       
       // return $stmt;
    }

    //store flight
    public function store(){
        //create
        $query = 'INSERT INTO ' . $this->table . ' SET airline = :airline, number = :number, departure_airport = :departure_airport, departure_time = :departure_time, arrival_airport = :arrival_airport, arrival_time = :arrival_time, price = :price';

        //preparing statement
        $stmt = $this->conn->prepare($query);

        $this->airline = htmlspecialchars(strip_tags($this->airline));
        $this->number = htmlspecialchars(strip_tags($this->number));
        $this->departure_airport = htmlspecialchars(strip_tags($this->departure_airport));
        $this->departure_time = htmlspecialchars(strip_tags($this->departure_time));
        $this->arrival_airport = htmlspecialchars(strip_tags($this->arrival_airport));
        $this->arrival_time = htmlspecialchars(strip_tags($this->arrival_time));
        $this->price = htmlspecialchars(strip_tags($this->price));

        $stmt->bindParam(':airline' , $this->airline);

        $stmt->bindParam(':number' , $this->number);

        $stmt->bindParam(':departure_airport' , $this->departure_airport);

        $stmt->bindParam(':departure_time' , $this->departure_time);
        
        $stmt->bindParam(':arrival_airport' , $this->arrival_airport);

        $stmt->bindParam(':arrival_time' , $this->arrival_time);

        $stmt->bindParam(':price' , $this->price);
       
        if($stmt->execute()){
            return true;
        }
        printf("Error %s. \n", $stmt->error);
        return false;
    }

    //update flight
    public function update()
    {
        //create
        $query = 'UPDATE ' . $this->table . ' SET airline = :airline, number = :number, departure_airport = :departure_airport, departure_time = :departure_time, arrival_airport = :arrival_airport, arrival_time = :arrival_time, price = :price WHERE number = :number';

        //preparing statement
        $stmt = $this->conn->prepare($query); 

        $this->airline = htmlspecialchars(strip_tags($this->airline));
        $this->number = htmlspecialchars(strip_tags($this->number));
        $this->departure_airport = htmlspecialchars(strip_tags($this->departure_airport));
        $this->departure_time = htmlspecialchars(strip_tags($this->departure_time));
        $this->arrival_airport = htmlspecialchars(strip_tags($this->arrival_airport));
        $this->arrival_time = htmlspecialchars(strip_tags($this->arrival_time));
        $this->price = htmlspecialchars(strip_tags($this->price));

        $stmt->bindParam(':airline', $this->airline);

        $stmt->bindParam(':number', $this->number);

        $stmt->bindParam(':departure_airport', $this->departure_airport);

        $stmt->bindParam(':departure_time', $this->departure_time);

        $stmt->bindParam(':arrival_airport', $this->arrival_airport);

        $stmt->bindParam(':arrival_time', $this->arrival_time);

        $stmt->bindParam(':price', $this->price);

        if ($stmt->execute()) {
            return true;
        }
        printf("Error %s. \n", $stmt->error);
        return false;
    }

    //delete flight

    public function delete(){
        $query = 'DELETE FROM '. $this->table . ' WHERE number = :number';

        $stmt =  $this->conn->prepare($query);

        $this->number = htmlspecialchars(strip_tags($this->number));
        $stmt->bindParam(':number', $this->number);
        if($stmt->execute()){
            return true;
        }
        printf("Error %s. \n", $stmt->error);
        return false;
    }

    //flight request
    public function search()
    {
        $data = array();

        if ($this->trip_type === "round-trip") {

            $query =
                'SELECT a.code as airline_code, flight.* 
            FROM airlines as a
            JOIN (SELECT * FROM
                ' . $this->table . '
                WHERE departure_airport = :departure_airport AND arrival_airport = :arrival_airport OR departure_airport = :arrival_airport AND arrival_airport = :departure_airport
            ) as flight
            ON a.code = flight.airline';
            $stmt = $this->conn->prepare($query);

            $stmt->bindParam(':departure_airport', $this->departure_airport);
            $stmt->bindParam(':arrival_airport', $this->arrival_airport);
            $stmt->execute();
            $rowStmt = $stmt->rowCount();

            if ($rowStmt > 0) {
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    extract($row);
                    $flight_item = array(
                        'airline' => $airline,
                        'number' => $number,
                        'departure_airport' => $departure_airport,
                        'departure_time' => $departure_time,
                        'arrival_airport' => $arrival_airport,
                        'arrival_time' => $arrival_time,
                        'price' => $price,
                    );
                    array_push($data, $flight_item);
                }
            }
            $result = $this->calculate_result($data, 'airline');
            return $result;
        } else if ($this->trip_type === "one-way") {
            $query =
                'SELECT a.code as airline_code, flight.* 
            FROM airlines as a
            JOIN (SELECT * FROM
                ' . $this->table . '
                WHERE departure_airport = :departure_airport AND arrival_airport = :arrival_airport
            ) as flight
            ON a.code = flight.airline';

            $stmt = $this->conn->prepare($query);

            $stmt->bindParam(':departure_airport', $this->departure_airport);
            $stmt->bindParam(':arrival_airport', $this->arrival_airport);
            $stmt->execute();
            $rowStmt = $stmt->rowCount();
            if ($rowStmt > 0) {
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    extract($row);
                    $flight_item = array(
                        'airline' => $airline,
                        'number' => $number,
                        'departure_airport' => $departure_airport,
                        'departure_time' => $departure_time,
                        'arrival_airport' => $arrival_airport,
                        'arrival_time' => $arrival_time,
                        'price' => $price,
                    );
                    array_push($data, $flight_item);
                }
            }
            $result = $this->calculate_result($data, 'airline');
            return $result;
        }
        $data = array('message' => "No flights found!");
        return $data;
    }

    public function calculate_result($array, $key)
    {

        $data = array();
        $temp_array = array();
        $i = 0;
        $count = 0;
        $key_array = array();

        foreach ($array as $val) {

            //make an unique array with airline name
            $value = $val[$key];
            if (!in_array($val[$key], $key_array)) {
                $key_array[$i] = $val[$key];
                $temp_array[$value][] = $val;
            } else {
                $temp_array[$value][] = $val;
            }

            $i++;
        }

        //count total prices and push to flights 
        foreach ($temp_array as $item) {
            foreach ($item as  $flight) {
                ///checking price is set 
                (isset($data['trips'][$count]['price'])) ? $data['trips'][$count]['price'] += $flight['price'] : $data['trips'][$count]['price'] = $flight['price'];

                $data['trips'][$count]['flights'][] = $flight;
            }
            $count++;
        }

        return $data;
    }
}