<?php

class Restaurant_m extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function get_restaurants()
    {
        $query = $this->db->from('restaurant')->get();
        $data = array();

        foreach (@$query->result() as $row)
        {
            $data[] = $row;
        }
        if(count($data))
            return $data;
        return false;
    } 

    function addRestaurant($restaurantName, $restaurantOpenTime, $restaurantCloseTime)
    {
        $data = array('Room_ID' => $restaurantName, 'Room_No' => $restaurantOpenTime, 'Room_status' => $restaurantCloseTime);
        $this->db->insert('restaurant', $data);
        return $this->db->affected_rows();
    } 

    function deleteRestaurant($Room_ID)
    {
        $this->db->delete('restaurant', array('Room_ID' => $Room_ID));
        return $this->db->affected_rows();
    }

    function editRestaurant($Room_ID, $Room_No, $Room_status, $restaurant_details, $tableCount)
    {
        $data = array('Room_ID' => $Room_ID, 'Room_No' => $Room_No, 'Room_status' => $Room_status);

        $this->db->where('Room_ID', $Room_ID);
        $this->db->update('restaurant', $data); 
    }

    function getRestaurant($Room_ID)
    {
        $query = $this->db->get_where('restaurant', array('Room_ID' => $Room_ID));
        return $query->result();
    }

    function add_service($restaurant, $customer, $date, $table_num, $price)
    {
        $data = array(
            'Room_ID' => $restaurant,
            'customer_id' => $customer,
            'book_date' => $date,
            'table_number' => $table_num,
            'book_price' => $price
        );
        $this->db->insert('restaurant_booking', $data);
    }
}
