<?php
require_once 'Model.php';

class ModelPatient
{
    private $id, $lastname, $firstname, $address;

    public function __construct($id = NULL, $lastname = NULL, $firstname = NULL, $address = NULL)
    {
        if (!is_null($id)) {
            $this->id = $id;
            $this->lastname = $lastname;
            $this->firstname = $firstname;
            $this->address = $address;
        }
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed|null
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param mixed|null $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * @return mixed|null
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param mixed|null $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @return mixed|null
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed|null $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    public static function getAll()
    {
        try {
            $database = Model::getInstance();
            $query = "select * from patient";
            $statement = $database->prepare($query);
            $statement->execute();
            $results = $statement->fetchAll(PDO::FETCH_CLASS, "ModelPatient");
            return $results;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }

    public static function insert($lastname, $firstname, $address)
    {
        try {
            $database = Model::getInstance();

            // Menemukan nilai kunci = maks (id) + 1
            $query = "select max(id) from patient";
            $statement = $database->query($query);
            $tuple = $statement->fetch();
            $id = $tuple['0'];
            $id++;

            // Menambahkan tupel baru
            $query = "insert into patient value (:id, :lastname, :firstname, :address)";
            $statement = $database->prepare($query);
            $statement->execute([
                'id' => $id,
                'lastname' => $lastname,
                'firstname' => $firstname,
                'address' => $address
            ]);
            return array("lastname" => $lastname, "firstname" => $firstname);
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return -1;
        }
    }
}