<?php
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'adlister_db');
define('DB_USER', 'vagrant');
define('DB_PASS', 'vagrant');

// __DIR__ is a *magic constant* with the directory path containing this file.
// This allows us to correctly require_once Model.php, no matter where this file is being required from.
require_once __DIR__ . '/Model.php';

class User extends Model
{
    /** Insert a new entry into the database */
    protected function insert()
    {
        // @TODO: Use prepared statements to ensure data security
            $query = "INSERT INTO users (username, email, PASSWORD) VALUES (:username, :email, :PASSWORD)";
            $stmt = self::$dbc->prepare($query);
            $stmt->bindValue(':username', $this->username, PDO::PARAM_STR);
            $stmt->bindValue(':email', $this->email, PDO::PARAM_STR);
            $stmt->bindValue(':PASSWORD', $this->PASSWORD, PDO::PARAM_STR);
            $stmt->execute();
        // @TODO: You will need to iterate through all the attributes to build the prepared query

        // @TODO: After the insert, add the id back to the attributes array
        //        so the object properly represents a DB record
            $this->attributes['id'] = self::$dbc->lastInsertId();
    }

    /** Update existing entry in the database */
    protected function update()
    {
        // @TODO: Use prepared statements to ensure data security
        $query = "UPDATE users SET username = :username, email = :email, PASSWORD = :PASSWORD";
        $stmt = self::$dbc->prepare($query);
        $stmt->bindValue(':username', $this->username, PDO::PARAM_STR);
        $stmt->bindValue(':email', $this->email, PDO::PARAM_STR);
        $stmt->bindValue(':PASSWORD', $this->PASSWORD, PDO::PARAM_STR);
        $stmt->execute();
        // @TODO: You will need to iterate through all the attributes to build the prepared query
    }

    public function delete()
    {
        $query = "DELETE FROM users WHERE id = :id";
        $stmt = self::$dbc->prepare($query);
        $stmt->bindValue(':id', $this->id, PDO::PARAM_INT);
        $stmt->execute();
    }

    /**
     * Find a single record in the DB based on its id
     *
     * @param int $id id of the user entry in the database
     *
     * @return User An instance of the User class with attributes array set to values from the database
     */
    public static function find($id)
    {
        // Get connection to the database
        self::dbConnect();

        // @TODO: Create select statement using prepared statements
        $query = "SELECT * FROM users WHERE id = :id";
        $stmt = self::$dbc->prepare($query);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'User');
        $result = $stmt->fetch();
            // @TODO: Store the result in a variable named $result

        // The following code will set the attributes on the calling object based on the result variable's contents
        $instance = null;
        if ($result) {
            $instance = new static($result->attributes);
        }
        return $instance;
    }

    /**
     * Find all records in a table
     *
     * @return User[] Array of instances of the User class with attributes set to values from database
     */
    public static function all()
    {
        self::dbConnect();

        // @TODO: Learning from the find method, return all the matching records
        $query = "SELECT * FROM users";
        $stmt = self::$dbc->query($query);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $instance = null;
        if ($result) {
            $instance = new static($result);
        }
        return $instance;
    }
}
