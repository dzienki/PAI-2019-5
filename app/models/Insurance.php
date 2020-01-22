<?php
class Insurance
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function getInsurance()
    {
        $this->db->query('SELECT * FROM insurance WHERE user_id = :user_id');
        $this->db->bind(':user_id', $_SESSION['user_id']);

        $results = $this->db->resultSet();
        return $results;
    }
}
