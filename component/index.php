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
            if(TRUE == $this->m_oForm->checkForm()){
                $this->m_oForm->score($_POST['level']);
                $this->m_sStep = 2 ;
            }
        }
    }

    /**
     * Checked default or selected level
     */
    protected function getLevel(){

        $l_aLevel = array(
            1 => 'Junior (1-3Y)',
            2 => 'Confirmed(3-7Y)' ,
            3 => 'Expert (+7Y)'
        ) ;

        $l_sSelectedLevel = 1 ;
        if(TRUE == isset($_POST['level'])){
            $l_sSelectedLevel = intval($_POST['level']);
        }

        foreach($l_aLevel AS $l_iKey => $l_sLabel){
            $l_sChecked = '' ;
            if($l_iKey == $l_sSelectedLevel){
                $l_sChecked = 'checked="checked"' ;
            }
            $l_sString .= '<label class="answer level"><input type="radio" name="level" value="'.$l_iKey.'" '.$l_sChecked.'/><span class="checkmark"></span> '.$l_sLabel.'</label>' ;
        }
        return $l_sString ;         
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
            <p>Welcome to this PHP technical test for developers of all levels. Several skills will be tested about PHP core, object, server and more.</p>
            <p>Each correct answer earns point and each wrong remove. Multiple answers allowed.
             for each question.</p>
        </div>
        <form action="index.php" method="POST" id="test">
        ';

        if($this->m_sStep == 2){
            $l_sString .= '
        <div id="result">
            <h2>Result</h2>
            <p>Your score : <span id="score">'.$this->m_oForm->m_aScore['global'].' / 20</span></p>
            <p>(Adjusted score : <span id="score2">'.$this->m_oForm->m_aScore['weighted'].' / 20</span> - Right : '.$this->m_oForm->m_iRight.'/'.$this->m_oForm->m_iTotal.'('.$this->m_oForm->m_aScore['percentRight'].'%) - Wrong : '.$this->m_oForm->m_iWrong.' )            
            <p>
                <button name="reveals" class="button reveals" type="submit" form="test">
                    <span>Reveals the truth !</span>
                </button>
            </p>
        </div>' ;
        }
        $l_sString .=
        '<h2>Choose your XP level</h2>'.$this->getLevel();
        
        foreach($this->m_oForm->getForm() AS $l_aQuestion){
            $l_sString .='
            <div class="question">
                <fieldset>
                    <legend>#'.++$l_iQNum.' - '.$l_aQuestion['title'].'</legend>                    
                    <p class="desc"> '.$l_aQuestion['desc'].'</p>';
                    foreach($l_aQuestion['answer'] AS $l_sId => $l_aAnswer){
                        $classReveals='';
                        if(TRUE == isset($_POST['reveals']) && TRUE == in_array($l_sId, $_POST)){
                            $classReveals= (false == $l_aAnswer['valid']) ? 'class="wrong"' : 'class="right"' ;
                        }

                        $checked = (TRUE == in_array($l_sId, $_POST)) ? 'checked="checked"': '';
                        $l_sString .='
                    <label class="answer">
                        <input type="checkbox" 
                                id="'.$l_sId.'" 
                                name="'.$l_sId.'" 
                                value="'.$l_sId.'"
                                '.$checked.'/>
                        <span class="checkmark"></span>        
                        <span '.$classReveals.'>&nbsp;&nbsp;'.htmlentities($l_aAnswer['label']).'</span>
                    </label>';
                    }
            $l_sString .='
                </fieldset>
            </div>' ;
        }
        
        $l_sString .= '
            <div id="submit">
                <button class="button" type="submit" form="test">
                    <span>Evaluate my answers </span>
                </button>';
        if($this->m_sStep == 2){
            $l_sString .= '
                <button name="reveals" class="button reveals" type="submit" form="test">
                    <span>Reveals the truth !</span>
                </button>';
        }
        $l_sString .= '
            </div>
        </form>
    </div>
    </body>
</html>' ;

        return $l_sString;
    }
}