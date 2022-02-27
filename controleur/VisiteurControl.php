<?php
class VisiteurControl
{

    function __construct()
    {

        /**
         *
         * Le visiteur désigne une personne non connecté
         * Ses actions sont très réduite
         *
         */

        global $vues;
        try{
            $action = $_REQUEST['action'] ?? NULL;
            switch ($action) {
                case NULL:
                    $this->casNull();
                    break;

                case "Generate":
                    $this->casGenerate();
                    break;

                default:
                    $this->casDefault();
                    break;
            }
        }catch (PDOException $e)
        {
            $codeErreur = $e;
            require_once($vues['Erreur']);
        }
        catch (Exception $e2)
        {
            $codeErreur = $e2;
            require ($vues['Erreur']);
        }
    }

    /**
     * casNull() :
     *
     * Ce cas désigne le fait qu'il n'y a pas d'action de la part du visiteur
     * Ainsi, nous le redirigons vers la page de login
     */
    function casNull() {
        global $vues;
        $_SESSION['erreur'] = "";
        require_once($vues['Accueil']);
    }

    function casGenerate(){
        $entreprise = $_POST['entreprise'];

        require('modeles/fpdf/fpdf.php');
        $pdf = new FPDF();
        $pdf->setMargins(22, 15, 11.6);
        $pdf->AddPage();

        $date = new DateTime('NOW');
        setlocale(LC_TIME, "fr_FR", "French");
        $d = strftime("%d %B %G", strtotime($date->format("Y-m-d")));

        $l1 = "PERALDE François";
        $l2 = "8 allée de la petite champagne";
        $l3 = "49700, Doué-en-Anjou";
        $l4 = "07.82.58.66.51";
        $l5 = "francois.peralde@gmail.com";

        $r1 = "À l'attention du";
        $r2 = "Service Ressources Humaines";
        $r3 = $entreprise;

        $date = "À Doué-en-Anjou, le $d";

        $txt = "Objet : candidature apprentissage cybersécurité";
        $txt0 = "Madame, Monsieur,";
        $txt1 = "Actuellement étudiant en deuxième année du Diplôme Universitaire de Technologie Informatique à l'Université Clermont Auvergne, c'est avec beaucoup de détermination que je souhaite intégrer dès la rentrée prochaine un cursus d'Ingénieur en Cybersécurité. Pour être mieux préparé au métier de la Cybersécurité, j'ai choisi la voie de l'apprentissage. Je suis actuellement à la recherche d'une entreprise pouvant m'accueillir et me former pendant 3 ans, ce qui me permettrait d'allier enseignement théorique et formation pratique.";
        $txt2 = "Passionné depuis de nombreuses années par la création de sites web et d'applications, j'ai appris dans le cadre de ma curiosité personnelle à détecter et exploiter différentes failles de sécurité. Mes études actuelles m'ont permis d'acquérir de nouvelles connaissances en réseau, en sécurité, en administration de serveurs et de base de données ainsi qu'en développement orienté objet. L'informatique étant plus que présente au sein de notre société, il est indispensable de pouvoir protéger les utilisateurs d'éventuels menaces provenant de cette technologie.";
        $txt3 = "Mon sérieux, mon dynamisme et ma motivation sont des atouts supplémentaires me permettant de vous apporter une réelle valeur ajoutée. Doté d'un bon sens de la communication et d'un esprit d'équipe, je souhaite vivement pouvoir mettre mon professionnalisme au service d'une entreprise comme la vôtre.";
        $txt4 = "En vous remerciant de l'attention que vous porterez à ma demande, je vous prie d'agréer, Madame, Monsieur, l'expression de mes salutations les plus respectueuses.";

        $pdf->SetFont('Arial','',11);


        $pdf->MultiCell(163,5,utf8_decode($l1));
        $pdf->MultiCell(163,5,utf8_decode($l2));
        $pdf->MultiCell(163,5,utf8_decode($l3));
        $pdf->MultiCell(163,5,utf8_decode($l4));
        $pdf->MultiCell(163,5,utf8_decode($l5));
        $pdf->Ln();
        $pdf->MultiCell(163,5,utf8_decode($r1), 0, "R");
        $pdf->MultiCell(163,5,utf8_decode($r2), 0, "R");
        $pdf->MultiCell(163,5,utf8_decode($r3), 0, "R");
        $pdf->Ln();
        $pdf->MultiCell(163,5,utf8_decode($date), 0, "R");
        $pdf->Ln();
        $pdf->Ln();
        $pdf->MultiCell(163,5,utf8_decode($txt));
        $pdf->Ln();
        $pdf->Ln();
        $pdf->MultiCell(163,5,utf8_decode($txt0));
        $pdf->Ln();
        $pdf->MultiCell(163,5,utf8_decode($txt1));
        $pdf->Ln();
        $pdf->MultiCell(163,5,utf8_decode($txt2));
        $pdf->Ln();
        $pdf->MultiCell(163,5,utf8_decode($txt3));
        $pdf->Ln();
        $pdf->MultiCell(163,5,utf8_decode($txt4));
        $pdf->Ln();
        $pdf->Ln();
        $pdf->Ln();
        $pdf->MultiCell(163,5,utf8_decode($l1), 0 ,"R");

        $pdf->Output("lettreDeMotivation_$entreprise.pdf", "I");

    }


    /**
     * casDefault() :
     *
     * Ce cas désigne l'action par défault (quand elle ne correspond à rien).
     * Ici, un visiteur est redirigé sur la page d'erreur
     */
    function casDefault() {
        global $vues;
        $_SESSION['erreur'] = "Cet URL ne semble pas exister ! ";
        require_once($vues['Erreur']);
    }


}