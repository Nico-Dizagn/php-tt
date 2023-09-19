<?php 
/**
 * 
 * 
 */
class form{
   
   
    const LEVEL_JUNIOR = 1;
    const LEVEL_SENIOR = 2;
    const LEVEL_EXPERT = 3;

    public $m_aScore = 0;
    public $m_iRight = 0;
    public $m_iWrong = 0;
    public $m_iTotal = 0;
    public $m_iTotalWrong = 0;

    protected $m_aStack = array('php', 'react-native') ;     
    protected $m_sStack ;
    protected $m_aQuestion ;

    public function __construct(){
        if( TRUE == isset($_GET['stack']) && TRUE == in_array($_GET['stack'], $this->m_aStack)){
            $this->m_sStack = (string)$_GET['stack'] ;
        }else{
            $this->m_sStack = $this->m_aStack[0] ;
        }
    }

    public function checkForm(){
        $l_aQuestion = $this->getForm();
        foreach($l_aQuestion AS $l_aAnswers){
            foreach($l_aAnswers['answer'] AS $l_sQId => $l_aAnswer){
                if(true == $l_aAnswer['valid']){
                    $this->m_iTotal++;
                    if(TRUE == in_array($l_sQId,$_POST )){
                        $this->m_iRight++ ;
                    } 
                }else{
                    $this->m_iTotalWrong++;
                    if(TRUE == in_array($l_sQId,$_POST )){
                        $this->m_iWrong++ ;
                    } 
                }
            }
        }
        return true ;
    }

    public function score($p_iLevel=1){

        if(self::LEVEL_JUNIOR == $p_iLevel){
            $l_iTmpG = round((($this->m_iRight)*20)/$this->m_iTotal,1) ;
            $l_iTmpG = ($l_iTmpG < 0) ? 0 : $l_iTmpG ;
            $l_iTmpW = round((($this->m_iRight-($this->m_iWrong/4))*20)/$this->m_iTotal,1) ;
            $l_iTmpW = ($l_iTmpW < 0) ? 0 : $l_iTmpW ;
        }

        if(self::LEVEL_SENIOR == $p_iLevel){
            $l_iTmpG = round((($this->m_iRight)*20)/$this->m_iTotal,1) ;
            $l_iTmpG = ($l_iTmpG < 0) ? 0 : $l_iTmpG ;
            $l_iTmpW = round((($this->m_iRight-($this->m_iWrong/2))*20)/$this->m_iTotal,1) ;
            $l_iTmpW = ($l_iTmpW < 0) ? 0 : $l_iTmpW ;
        }

        if(self::LEVEL_EXPERT == $p_iLevel){
            $l_iTmpG = round((($this->m_iRight)*20)/$this->m_iTotal,1) ;
            $l_iTmpG = ($l_iTmpG < 0) ? 0 : $l_iTmpG ;
            $l_iTmpW = round((($this->m_iRight-($this->m_iWrong/1))*20)/$this->m_iTotal,1) ;
            $l_iTmpW = ($l_iTmpW < 0) ? 0 : $l_iTmpW ;
        }

        $l_sP100Right = round((($this->m_iRight)*100)/$this->m_iTotal,0) ;
             
        
        return $this->m_aScore = array('global' => $l_iTmpG, 
                                       'weighted' => $l_iTmpW,
                                       'percentRight'=> $l_sP100Right) ;
    }

    /**
     * @todo : replace this hardcoded method by a API call with guzzle lib (already installed)
     * or a JSON flat file
     * ****
     * API specification 
     *
     * @url https://php-tt.siaxp.com/fakeapi/getFormContent.php 
     * @return JSON form content 
     * 
     * ****
     * Guzzle doc 
     * https://docs.guzzlephp.org/en/stable/quickstart.html
     */
    public function getForm(){

        $l_sFile = '../model/quiz_'.$this->m_sStack.'.json' ;
        $this->m_aQuestion = json_decode(file_get_contents($l_sFile),true) ;
        return $this->m_aQuestion ;
    }
}
