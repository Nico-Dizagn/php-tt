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

    // View
    public function __toString(){

        // model
        require_once('../model/form.php');
        $l_iQNum = 0;
        $l_sString =  
'<html>
        <head>
            <title>Test technique PHP</title>
            <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
            <script src="js/script.js"></script>
        </head>
    <body>
    <div id="main">
        <h1>Technical test PHP '.date('Y').'</h1>
        <div>Welcome to this PHP technical test for developers of all levels. <br/>Several skills will be tested in a common PHP core. Multiple answers allowed for each question.</div>
        ';
        if($this->m_sStep == 2){
            var_dump($_POST);
        }

        $l_sString .=
        '<form action="" method="POST">';
        foreach($l_aForm AS $l_aQuestion){
            $l_sString .='
            <div class="question">
                <fieldset>
                    <legend>#'.++$l_iQNum.' - '.$l_aQuestion['title'].'</legend>                    
                    <p class="desc"> '.$l_aQuestion['desc'].'</p>';
                    foreach($l_aQuestion['answer'] AS $l_sId => $l_aAnswer){
                        $l_sString .='
                    <label class="answer">
                        <input type="checkbox" 
                                id="'.$l_sId.'" 
                                name="'.$l_sId.'" 
                                value="'.$l_sId.'"/>
                        <span class="checkmark"></span>        
                        '.htmlentities($l_aAnswer['label']).'
                    </label>';
                    }
            $l_sString .='
                </fieldset>
            </div>' ;
        }
        
        $l_sString .= '
            <div id="submit">
                <button class="button">
                    <span>Evaluer mes réponses </span>
                </button>
            </div>
        </form>
    </div>
    </body>
</html>' ;

        return $l_sString;
    }

 }

