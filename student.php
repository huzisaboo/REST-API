<?php
class Student
{
 
    // database connection and table name
    private $conn;
    private $table_name = "students";
 
    // object properties
    public $id;
    public $name;
    public $last_name;
    public $height;
    public $weight;
    public $batch;
    public $description;
    public $address;
    public $city;
    public $province;
    public $country;
    public $phone;
    public $email;
    public $website;
    public $MAD100;
    public $MAD105;
    public $MAD110;
    public $MAD120;
    public $MAD125;
    public $MAD200;
    public $MAD225;
    public $status;
    public $delFlag;
   // public $action;

    // constructor with $db as database connection
    public function __construct($db)
    {
        $this->conn = $db;
    }

    // used when filling up the update product form
    function readOne($string)
    {
     
switch ($string) 
{
    case 'CRE':
    {
        //Logic for Create
        break;
    }

	case 'GET':
	{
		// query to read single record
        $query = "SELECT * FROM students WHERE id = '$this->id'";
        if($result = mysqli_query($this->conn,$query))
        {
            if(mysqli_num_rows($result) > 0)
            {
                while ($row = mysqli_fetch_array($result)) 
                {
                    $this->id = $row["id"];
                     $this->name = $row["name"];
                    $this->last_name = $row["last_name"];
                    $this->height = $row["height"];
                    $this->weight = $row["weight"];
                    $this->batch = $row["batch"];
                    $this->description = $row["description"];
                    $this->address = $row["address"];
                    $this->city = $row["city"];
                    $this->province = $row["province"];
                    $this->country = $row["country"];
                    $this->phone = $row["phone"];
                    $this->email = $row["email"];
                    $this->website = $row["website"];
                    $this->MAD100 = $row["MAD100"];
                    $this->MAD105 = $row["MAD105"];
                    $this->MAD110 = $row["MAD110"];
                    $this->MAD120 = $row["MAD120"];
                    $this->MAD125 = $row["MAD125"];
                    $this->MAD200 = $row["MAD200"];
                    $this->MAD225 = $row["MAD225"];
                    $this->status = $row["status"];
                }
            }
        }
		break;	
	}
	case 'DEL':
	{
        $this->delFlag = 0;
		// query to read single record
        $query = "DELETE FROM students WHERE id = '$this->id'";
        if(mysqli_query($this->conn,$query))
        {
            if(mysqli_affected_rows($this->conn) ==1)
            {
                $this->delFlag = 1;
            }
        }
       
		break;	
	}
    case 'UPD':
    {
        //Logic for Update
        break;
    }
        

	
	default:
		printf("Please Specify a action after the ID in URL");
		break;
}    
}
}
?>