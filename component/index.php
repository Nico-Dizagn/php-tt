<?php 
/**
 * 
 */
 class index {

    protected $m_sStep = 1 ;

    // Controller
    public function __construct(){
        // 
        if($_SERVER['REQUEST_METHOD'] == "POST"){


            $this->m_sStep = 2 ;
        }

    }

    // Model 
    protected function model(){

    }

    // View
    public function __toString(){
        $l_sString =  
'<html>
        <head>
            <title>Test technique PHP</title>
            <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
            <script src="js/script.js"></script>
        </head>
    <body>
        <h1>Test technique '.date('Y').'</h1>
        <div>Bonjour et bienvenue sur ce test technique PHP tout niveaux.</div>
        <div>Plusieurs compétences vont etre testés dans un tronc commun PHP, puis par spécialités (CMS, Framework, Pattern, etc)</div>
        ';
        if($this->m_sStep == 1){
        $l_sString .=
        '<form action="" method="POST">
            <div class="question">
                <fieldset>
                    <legend>Question 1</legend>                    
                    <p> Dans cet exemple que signifie le "!"
                    </p>
                    <p><input type="checkbox" id="q1a" name="q1a" value="a"/><label for="q1a">Réponse A</label></p>
                    <p><input type="checkbox" id="q1b" name="q1b" value="b"/><label for="q1b">Réponse B</label></p>
                </fieldset>
            </div>
            <div class="question">
                <div>
                    Ma deuxieme question
                </div>
                <p><input type="checkbox" id="q2a" name="q2a" value="a"/><label for="q2a">Réponse A</label></p>
                <p><input type="checkbox" id="q2b" name="q2b" value="b"/><label for="q2b">Réponse B</label></p>
                <p><input type="checkbox" id="q2c" name="q2c" value="c"/><label for="q2C">Réponse C</label></p>
            </div>
            <div>
                <input type="submit" value="Valider"/>
            </div>
        </form>';
        }

        if($this->m_sStep == 2){

        }

        $l_sString .='</body>
</html>' ;

        return $l_sString;
    }

 }

