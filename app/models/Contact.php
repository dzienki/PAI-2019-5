<?php
class Contact
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function sendMessage($data)
    {
        $this->db->query('INSERT INTO `contact` (`name`, `email`, `country`, `subject`) VALUES (:name, :email, :country, :subject)');
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':country', $data['country']);
        $this->db->bind(':subject', $data['subject']);

        return $this->db->execute();
    }
}
