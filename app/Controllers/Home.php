<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Contracts_model;
use App\Models\Projects_model;

class Home extends Controller
{
	protected $helpers = [];

	public function initController(\CodeIgniter\HTTP\RequestInterface $request, 
		\CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
	{
		parent::initController($request, $response, $logger);
	}

	public function index()
	{
		$session = \Config\Services::session();
		if (! $session->isLoggedIn) { return redirect()->to('login'); }

		$contracts_model = new Contracts_model();
		$contracts = $contracts_model->findAll();
		foreach ($contracts as $key => $value) {
			$contracts[$key]['project_id'] = $this->translate_me('projects','id','title',$contracts[$key]['project_id']);
			$contracts[$key]['date_reg'] = $contracts[$key]['date_reg']/1000;
			$contracts[$key]['date_reg'] = jdate('Y/m/d',$contracts[$key]['date_reg']);
		}

		$data = [
        	'url'   => site_url(),
        	'theme'   => site_url().'assets/',
        	'error' => $session->error,
        	'menu_item' => 'index',
        	'session' => $session,
        	'data' => $contracts
		];

		echo view('header',$data);
		echo view('home_index',$data);
		echo view('footer',$data);
	}

	public function contract_add()
	{
		$session = \Config\Services::session();
		if (! $session->isLoggedIn) { return redirect()->to('login'); }
		if ($session->UserMode <> 'admin') { return $this->limited(); }

		$projects_model = new Projects_model();
		$projects = $projects_model->findAll();

		$data = [
        	'url'   => site_url(),
        	'theme'   => site_url().'assets/',
        	'error' => $session->error,
        	'menu_item' => 'index',
        	'session' => $session,
        	'projects' => $projects,
		];

		helper('form');
		echo view('header',$data);
		echo view('home_contract_add',$data);
		echo view('footer',$data);
	}

	public function contract_add_do()
	{
		$session = \Config\Services::session();
		if (! $session->isLoggedIn) { return redirect()->to('login'); }
		if ($session->UserMode <> 'admin') { return $this->limited(); }

		unset($_POST['honeypot']);
		unset($_POST['temp']);

		$contracts_model = new Contracts_model();
		$contracts = $contracts_model->insert($_POST);

		return redirect()->route('/');
	}
}
