<?php
class homeController extends Controller {

	private $user;

	public function __construct() {
		parent::__construct();

		$this->user = new Users();
		if (!$this->user->checkLogin()) {
			header("Location: ".BASE_URL."login");
			exit;
		}
	}

    public function index() {
        $data = array();
        $e =new Embarque();
        $f =new Equipamentos();

        $data['list1'] = $f->getAllEquipamentos();
        $data['list'] = $e->getAllEmbarque();

        $this->loadTemplate('home', $data);
    }
}