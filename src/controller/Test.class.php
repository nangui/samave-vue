<?php
/*==================================================
    MODELE MVC DEVELOPPE PAR Ngor SECK
    ngorsecka@gmail.com
    (+221) 77 - 433 - 97 - 16
    PERFECTIONNEZ CE MODEL ET FAITES MOI UN RETOUR
    POUR TOUTE MODIFICATION VISANT A AMELIORER
    CE MODELE.
    VOUS ETES LIBRE DE TOUTE UTILISATION.
  ===================================================*/
    use libs\system\Controller;
    use src\entities\Test as TestEntity;
    use src\model\TestDB;

    class Test extends Controller
    {
        public function __construct()
        {
            parent::__construct();
            //Appel du model grace au systeme autoloading
        }

        //A noter que toutes les views de ce controller doivent être créées dans le dossier view/test
        //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
        public function index()
        {
            return $this->view->load('test/index');
        }

        public function getID($ident)
        {
            $data['ID'] = $ident;

            return $this->view->load('test/get_id', $data);
        }

        public function get($ident)
        {
            //Instanciation du model
            $tdb = new TestDB();

            $data['test'] = $tdb->getTest($ident);

            return $this->view->load('test/get', $data);
        }

        public function liste()
        {
            //Instanciation du model
            $tdb = new TestDB();

            $data['tests'] = $tdb->listeTest();

            return $this->view->load('test/liste', $data);
        }

        public function add()
        {
            //Instanciation du model
            $tdb = new TestDB();
            //Récupération des données qui viennent du formulaire view/test/add.html (à créer)
            $filter = filter_input(INPUT_POST, 'valider');
            if (isset($filter)) {//'valider' est le name du champs submit du formulaire add.html
                $post = filter_input_array(INPUT_POST);
                extract($post);
                $data['ok'] = 0;
                if (!empty($valeur1) && !empty($valeur2)) {
                    $testObject = new TestEntity();
                    $testObject->setValeur1($valeur1);
                    $testObject->setValeur2($valeur2);

                    $okay = $tdb->addTest($testObject);
                    $data['ok'] = $okay;
                }

                return $this->view->load('test/add', $data);
            }
            return $this->view->load('test/add');
        }

        public function update()
        {
            //Instanciation du model
            $tdb = new TestDB();
            $filter = filter_input(INPUT_POST, 'modifier');
            if (isset($filter)) {
                $post = filter_input_array(INPUT_POST);
                extract($post);
                if (!empty($identity) && !empty($valeur1) && !empty($valeur2)) {
                    $testObject = new TestEntity();
                    $testObject->setId($identity);
                    $testObject->setValeur1($valeur1);
                    $testObject->setValeur2($valeur2);
                    $okay = $tdb->updateTest($testObject);
                }
            }

            return $this->liste(); //appel de la methode liste du controller
        }

        public function delete($identity)
        {
            //Instanciation du model
            $tdb = new TestDB();
            //Supression
            $tdb->deleteTest($identity);
            //Retour vers la liste
            return $this->liste();
        }

        public function edit($identity)
        {

            //Instanciation du model
            $tdb = new TestDB();
            //Supression
            $data['test'] = $tdb->getTest($identity);
            //chargement de la vue edit.html
            return $this->view->load('test/edit', $data);
        }
    }
