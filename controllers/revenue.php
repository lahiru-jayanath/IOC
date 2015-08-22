<?php
	/**
	* revenue module
	* controller for revenue model
	* author @Sarasi Sumathipala
	*/
	class Revenue extends Controller
	{
		
		function __construct()
		{
			# code...
			parent::__construct();
		}

		public function index()
		{
			$this->view->render('revenue/index',false);
		}

		public function income()
		{
			$this->view->render('revenue/income/index',false);

		}

		public function incomefuel()
		{
			$this->view->render('revenue/incomefuel',false);
		}

		public function expenses()
		{
			$this->view->render('revenue/expenses',false);
		}

		public function report()
		{
			$this->view->render('revenue/report',false);
		}

		public function payment()
		{
			$this->view->render('revenue/payment',false);
		}
		/**
		*	renders fuel tab in income section
		*	
		**/
		public function fuel(){
			$this->view->render('revenue/income/fuel',false);
		}
		/**
		*	renders lubricant tab in income section
		*	
		**/
		public function lubricants(){
			$this->view->render('revenue/income/lubricants',false);
		}

		/**
		*	renders overall income tab in income section
		*
		 **/

		public function overall(){
			$this->view->render('revenue/income/overall',false);
		}


		public function insertlubricantinc(){
			require 'models/Revenue_model.php';

			$name=$_POST['lubname'];
			$price=$_POST['price'];
			$qty=$_POST['qty'];
			$supplier=$_POST['supplier'];
			$sqty=$_POST['sqty'];
			$inc=$_POST['income'];
			$date=$_POST['time'];


			$sendtomodel=new Revenue_model();
			$sendtomodel->addlubinc($name, $qty, $supplier, $price, $sqty, $inc, $date);
		}
	}
  ?>