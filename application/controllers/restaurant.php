<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Restaurant extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function check_login()
	{
		if(!UID)
			redirect("login");
	} 

	public function add()
	{
		
		if($this->input->post("restaurantName"))
		{
			$restaurantName = $this->input->post("restaurantName");
			$restaurantOpenTime = $this->input->post("restaurantOpenTime");
			$restaurantCloseTime = $this->input->post("restaurantCloseTime");

			
			$this->restaurant_m->addRestaurant($restaurantName, $restaurantOpenTime, $restaurantCloseTime);
			redirect("/restaurant");
		}

		$data = array('title' => 'Add Restaurant - DB Hotel Management System', 'page' => 'restaurant');
		$this->load->view('header', $data);
		$this->load->view('restaurant/add');
		$this->load->view('footer');
	}

	function delete($Room_ID)
	{
		$Room_ID = urldecode($Room_ID);
		$this->restaurant_m->deleteRestaurant($Room_ID);
		redirect("/restaurant");
	}

	public function edit($Room_ID)
	{
		$Room_ID = urldecode($Room_ID);
		if($this->input->post("restaurantName"))
		{
			$Room_ID = $this->input->post("restaurantName");
			$Room_No = $this->input->post("restaurantOpenTime");
			$Room_status = $this->input->post("restaurantCloseTime");
			
			$this->restaurant_m->editRestaurant($Room_ID, $Room_No, $Room_status);
			redirect("/restaurant");
		}
		$data = array('title' => 'Edit Restaurant - DB Hotel Management System', 'page' => 'restaurant');
		$this->load->view('header', $data);
		$restaurant = $this->restaurant_m->getRestaurant($Room_ID);
		$viewdata = array('restaurant'  => $restaurant[0]);
		$this->load->view('restaurant/edit',$viewdata);

		$this->load->view('footer'); 
	}

	public function index()
	{
		$restaurants = $this->restaurant_m->get_restaurants();
		$customers = $this->customer_m->get_active_customers();

		$viewdata = array('restaurants' => $restaurants, 'customers' => $customers);

		$data = array('title' => 'Restaurants - DB Hotel Management System', 'page' => 'restaurant');
		$this->load->view('header', $data);
		$this->load->view('restaurant/list',$viewdata);
		$this->load->view('footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */