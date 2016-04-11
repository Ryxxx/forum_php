<?php

class index_class extends router {

    protected $registry;

    function __construct($registry) {
        $this->registry = $registry;
    }

    function index() {

        $this->registry->template->show('index');
        
    }
    function plan_site() {
        $this->registry->template->show('plan_site');
    }
    function login() {
        if (isset($_POST['comail'])) {
            $comail = ($_POST['comail']);
            $comdp = ($_POST['comdp']);

            if ($comail != '' && $comdp != '') {

                $resultat = $this->registry->db->authentification_pdo->VerifAuthentification($comail, $comdp);

                if ($resultat != '') {
                    $_SESSION['user'] = array();
                    $_SESSION['user']['user_info'] = $comail;
                    $_SESSION['user']['user_id'] = $resultat['ID_Client'];


                    if($resultat['Admin'] == 1)
                    {
                        $_SESSION['user']['user_admin'] = 1;
                        // $_SESSION['admin'] = $_SESSION['user'];

                    }
                    $this->registry->template->message = "Connecté";
                } else {
                    $this->registry->template->message = "Email ou mot de passe invalide";
                }
            } else {
                $this->registry->template->message = "Email ou mot de passe manquant";
            }
            $this->registry->template->show('message');
        }else{
            $this->registry->template->show('index');
        }
    }
}
?>
