<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fancyhands_example extends CI_Controller {

	public function __construct() {
		parent::__construct();
		
		$this->load->library('fancyhands');
	}

	public function index() {
		die();
	}
	
	// Get all tasks
	public function getAllTasks() {
	
		print_r($this->fancyhands->get());

	}
	
	// Get all tasks with status code 20.
	public function getAllTasksStatusCode20() {
		
		print_r($this->fancyhands->get(null,20));
		
	}
	
	// Cancel a task with key foobar (will fail)
	public function cancelTaskFoobar() {
		
		print_r($this->fancyhands->cancel("foobar"));
		
	}
	
	// Create a new task with one custom field, a title of "OAuth Test", a description of "OAuth Test Desc", a bid of $1.00, and an expiration date of 2014-02-27T00:00:00Z
	public function newTask() {
		
	    $customFields = array(
	    	array(
	    		'type' => 'text',
	    		'required' => false,
	    		'label' => "Test Field",
	    		"description" => "Test Field Description",
	    		"order" => 0,
	    		"field_name" => "test_field"
	    	)
	    );	
	    
	    print_r($this->fancyhands->create("OAuth Test", "OAuth Test Desc", 1, $customFields, "2014-02-27T00:00:00Z"));
		
	}
}