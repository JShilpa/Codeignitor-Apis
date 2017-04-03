<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends My_Model{

	 protected $_table= 'tbl_services';
    /**
     * The database connection object. Will be set to the default
     * connection. This allows individual models to use different DBs
     * without overwriting CI's global $this->db connection.
     */
    
    /**
     * This model's default primary key or unique identifier.
     * Used by the get(), update() and delete() functions.
     */
    protected $primary_key = 'id';
}