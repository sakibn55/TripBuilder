<?php

class Airline
{

    private $conn;
    private $table = "airlines";

    //properties
    public $airline_id;
    public $code;
    public $name;

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
        name
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
        name
        FROM ' . $this->table .  ' WHERE code = ? LIMIT 1';

        $stmt = $this->conn->prepare($query);

        //binding params
        $stmt->bindParam(1, $this->code);

        //execute
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $this->code = $row['code'];
            $this->name = $row['name'];
            return true;
        } else {
            return false;
        }
    }

    //store flight
    public function store()
    {
        //create
        $query = 'INSERT INTO ' . $this->table . ' SET code = :code, name = :name';

        //preparing statement
        $stmt = $this->conn->prepare($query);

        $this->code = htmlspecialchars(strip_tags($this->code));
        $this->name = htmlspecialchars(strip_tags($this->name));

        $stmt->bindParam(':code', $this->code);

        $stmt->bindParam(':name', $this->name);

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
        $query = 'UPDATE ' . $this->table . ' SET code = :code, name = :name WHERE code = :code';

        //preparing statement
        $stmt = $this->conn->prepare($query);

        $this->code = htmlspecialchars(strip_tags($this->code));
        $this->name = htmlspecialchars(strip_tags($this->name));

        $stmt->bindParam(':code', $this->code);

        $stmt->bindParam(':name', $this->name);

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
