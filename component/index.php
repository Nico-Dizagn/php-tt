<?php
/**
 * 
 */
 class index {

    protected $m_sStep = 1 ;
    protected $m_oForm;

    // Controller
    public function __construct(){
        require_once('../model/form.php');
        $this->m_oForm = new Form();
        
        // 
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $this->m_oForm->checkForm();
            $this->m_sStep = 2 ;
        }
    }

    // View
    public function __toString(){
        // model
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
        <div id="intro">
            <p>Welcome to this PHP technical test for developers of all levels. Several skills will be tested in a common PHP core.</p>
            <p>Each correct answer earns one point and each wrong remove one. Multiple answers allowed 
             for each question.</p>
        </div>
        ';
        if($this->m_sStep == 2){
            $l_sString .= '
        <fieldset id="result">
            <legend>Result</legend>
            Total score : <span id="score">'.$this->m_oForm->m_iScore.' / 20</span> ( Right : '.$this->m_oForm->m_iRight.' / Wrong : '.$this->m_oForm->m_iWrong.' ) 
        </fieldset>' ;
        }

        $l_sString .=
        '<form action="" method="POST">';
        foreach($this->m_oForm->getForm() AS $l_aQuestion){
            $l_sString .='
            <div class="question">
                <fieldset>
                    <legend>#'.++$l_iQNum.' - '.$l_aQuestion['title'].'</legend>                    
                    <p class="desc"> '.$l_aQuestion['desc'].'</p>';
                    foreach($l_aQuestion['answer'] AS $l_sId => $l_aAnswer){
                        $checked = (TRUE == in_array($l_sId, $_POST)) ? 'checked="checked"': '';
                        $l_sString .='
                    <label class="answer">
                        <input type="checkbox" 
                                id="'.$l_sId.'" 
                                name="'.$l_sId.'" 
                                value="'.$l_sId.'"
                                '.$checked.'/>
                        <span class="checkmark"></span>        
                        &nbsp;&nbsp;'.htmlentities($l_aAnswer['label']).'
                    </label>';
                    }
            $l_sString .='
                </fieldset>
            </div>' ;
        }
        
        $l_sString .= '
            <div id="submit">
                <button class="button">
                    <span>Evaluate my answers </span>
                </button>
            </div>
        </form>
    </div>
    </body>
</html>' ;

        return $l_sString;
    }
}