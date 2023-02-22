<?php 
class form{
    const LEVEL_JUNIOR = 1;
    const LEVEL_SENIOR = 2;
    const LEVEL_EXPERT = 3;

    public $m_aScore = 0;
    public $m_iRight = 0;
    public $m_iWrong = 0;
    public $m_iTotal = 0;
    public $m_iTotalWrong = 0;

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
            $l_iTmpG = round((($this->m_iRight)*20)/$this->m_iTotal,2) ;
            $l_iTmpG = ($l_iTmpG < 0) ? 0 : $l_iTmpG ;
            $l_iTmpW = round((($this->m_iRight-($this->m_iWrong/2))*20)/$this->m_iTotal,2) ;
            $l_iTmpW = ($l_iTmpW < 0) ? 0 : $l_iTmpW ;
        }

        $l_sP100Right = round((($this->m_iRight)*100)/$this->m_iTotal,0) ;
             
        
        return $this->m_aScore = array('global' => $l_iTmpG, 
                                       'weighted' => $l_iTmpW,
                                       'percentRight'=> $l_sP100Right) ;
    }

    public function getForm(){
        return array(
            'q0' => array(
                'title' => 'Which of the following tags are an acceptable way to begin a PHP Code block ?',
                'desc' => '',
                'answer' => array(
                    'q0a' => array(
                        'label' => '<script language="php">',
                        'valid' => false
                    ),
                    'q0b' => array(
                        'label' => '<!',
                        'valid' => false
                    ),
                    'q0c' => array(
                        'label' => '<%',
                        'valid' => false
                    ),
                    'q0d' => array(
                        'label' => '<?',
                        'valid' => true
                    ),
                    'q0e' => array(
                        'label' => '<?php',
                        'valid' => true
                    )
                )
            ),
            'q1' => array(
                'title' => 'What is the ouput of the PHP code below ? ',
                'desc' => '<pre>
function apple($apples = 4){
    $apples = $apples / 2;
    return $apples;
}
$apples = 10;
apple($apples);
echo $apples;</pre>',
                'answer' => array(
                    'q1a' => array(
                        'label' => '2',
                        'valid' => false
                    ),
                    'q1b' => array(
                        'label' => '4',
                        'valid' => false
                    ),
                    'q1c' => array(
                        'label' => '5',
                        'valid' => false
                    ),
                    'q1d' => array(
                        'label' => '10',
                        'valid' => true
                    )
                )
            ),
            'q2' => array(
                'title' => 'Which one line comment syntax are valid in PHP ?',
                'desc' => '',
                'answer' => array(
                    'q2a' => array(
                        'label' => '// This is a comment',
                        'valid' => true
                    ),
                    'q2b' => array(
                        'label' => '//-- this is a comment --//',
                        'valid' => true
                    ),
                    'q2c' => array(
                        'label' => '/* This is a comment',
                        'valid' => false
                    ),
                    'q2d' => array(
                        'label' => '<!-- This is a comment -->',
                        'valid' => false
                    ),
                    'q2e' => array(
                        'label' => '# This is a comment ',
                        'valid' => true
                    )
                )
            ),
            'q3' => array(
                'title' => 'When checking to see if two variables contain the same instance of an object, which of the following
                comparisons should be used ?',
                'desc' => '',
                'answer' => array(
                    'q3a' => array(
                        'label' => 'if($obj1->equals($obj2) && ($obj1 instanceof $obj2))',
                        'valid' => false
                    ),
                    'q3b' => array(
                        'label' => 'if($obj1->equals($obj2))',
                        'valid' => false
                    ),
                    'q3c' => array(
                        'label' => 'if($obj1 === $obj2)',
                        'valid' => true
                    ),
                    'q3d' => array(
                        'label' => 'if($obj1 instanceof $obj2)',
                        'valid' => false
                    ),
                    'q3e' => array(
                        'label' => 'if($obj1 == $obj2)',
                        'valid' => true
                    )
                )
            ),
            'q4' => array(
                'title' => 'Which method will be called automatically when an object is represented as a string ?',
                'desc' => '',
                'answer' => array(
                    'q4a' => array(
                        'label' => 'getString()',
                        'valid' => false
                    ),
                    'q4b' => array(
                        'label' => '__get()',
                        'valid' => false
                    ),
                    'q4c' => array(
                        'label' => '__value()',
                        'valid' => false
                    ),
                    'q4d' => array(
                        'label' => '__toString()',
                        'valid' => true
                    ),
                    'q4e' => array(
                        'label' => '__getString()',
                        'valid' => false
                    )
                )
            ),
            'q5' => array(
                'title' => 'Where should indirectly executed PHP scripts (i.e. include files) be stored in the file system ?',
                'desc' => '',
                'answer' => array(
                    'q5a' => array(
                        'label' => 'Outside of the document root',
                        'valid' => true
                    ),
                    'q5b' => array(
                        'label' => 'In the document root',
                        'valid' => false
                    ),
                    'q5c' => array(
                        'label' => 'Anywhere you want',
                        'valid' => false
                    ),
                    'q5d' => array(
                        'label' => 'In the database',
                        'valid' => false
                    )
                )
            ),
            'q6' => array(
                'title' => 'When attempting to prevent a cross-site scripting attack, which of the following is most important ?',
                'desc' => '',
                'answer' => array(
                    'q6a' => array(
                        'label' => 'Not writing Javascript on the fly using PHP',
                        'valid' => false
                    ),
                    'q6b' => array(
                        'label' => 'Filtering Output used only in form data',
                        'valid' => false
                    ),
                    'q6c' => array(
                        'label' => 'Filtering only input inserted in database transactions',
                        'valid' => false
                    ),
                    'q6d' => array(
                        'label' => 'Writing careful Javascript',
                        'valid' => false
                    ),
                    'q6e' => array(
                        'label' => 'Filtering all input',
                        'valid' => false
                    ),
                    'q6f' => array(
                        'label' => 'Filtering all output',
                        'valid' => true
                    )
        
                )
            ),
            'q7' => array(
                'title' => 'What are the three access modifiers that you can use in PHP objects ?',
                'desc' => '',
                'answer' => array(
                    'q7a' => array(
                        'label' => 'protected',
                        'valid' => true
                    ),
                    'q7b' => array(
                        'label' => 'public',
                        'valid' => true
                    ),
                    'q7c' => array(
                        'label' => 'static',
                        'valid' => false
                    ),
                    'q7d' => array(
                        'label' => 'final',
                        'valid' => false
                    ),
                    'q7e' => array(
                        'label' => 'private',
                        'valid' => true
                    )
                )
            ),
            'q8' => array(
                'title' => 'Which one in the following list of potential data sources come from the server side ?',
                'desc' => '',
                'answer' => array(
                    'q8a' => array(
                        'label' => '$_ENV',
                        'valid' => true
                    ),
                    'q8b' => array(
                        'label' => '$_GET',
                        'valid' => false
                    ),
                    'q8c' => array(
                        'label' => '$_COOKIE',
                        'valid' => false
                    ),
                    'q8d' => array(
                        'label' => '$_SERVER',
                        'valid' => true
                    ),
                    'q8e' => array(
                        'label' => '$_PHP',
                        'valid' => false
                    )
                )
            ),
            'q9' => array(
                'title' => 'Which of the following aspects of the MVC pattern is used in conjunction with the database ?',
                'desc' => '',
                'answer' => array(
                    'q9a' => array(
                        'label' => 'Model',
                        'valid' => true
                    ),
                    'q9b' => array(
                        'label' => 'Schema',
                        'valid' => false
                    ),
                    'q9c' => array(
                        'label' => 'Validation',
                        'valid' => false
                    ),
                    'q9d' => array(
                        'label' => 'Controller',
                        'valid' => false
                    ),
                    'q9e' => array(
                        'label' => 'View',
                        'valid' => false
                    ),
                    'q9f' => array(
                        'label' => 'Template',
                        'valid' => false
                    )
                )
            ),
            'q10' => array(
                'title' => 'Which operator is used to test if two values are identical in every way ?',
                'desc' => '',
                'answer' => array(
                    'q10a' => array(
                        'label' => '!==',
                        'valid' => false
                    ),
                    'q10b' => array(
                        'label' => 'InstanceOf',
                        'valid' => false
                    ),
                    'q10c' => array(
                        'label' => '=',
                        'valid' => false
                    ),
                    'q10d' => array(
                        'label' => '==',
                        'valid' => false
                    ),
                    'q10e' => array(
                        'label' => '===',
                        'valid' => true
                    )
                )
            ),
            'q11' => array(
                'title' => 'Which keyword is used to block any overriding of a class/method by a subclass ?',
                'desc' => '',
                'answer' => array(
                    'q11a' => array(
                        'label' => 'static',
                        'valid' => false
                    ),
                    'q11b' => array(
                        'label' => 'interface',
                        'valid' => false
                    ),
                    'q11c' => array(
                        'label' => 'final',
                        'valid' => true
                    ),
                    'q11d' => array(
                        'label' => 'private',
                        'valid' => false
                    ),
                    'q11e' => array(
                        'label' => 'None of the above',
                        'valid' => false
                    )
                )
            ),
            'q12' => array(
                'title' => 'Which problem "namespaces" are designed to solved ?',
                'desc' => '',
                'answer' => array(
                    'q12a' => array(
                        'label' => 'Improve performance of class/function/constants',
                        'valid' => false
                    ),
                    'q12b' => array(
                        'label' => 'Improve security of class/function/constants',
                        'valid' => false
                    ),
                    'q12c' => array(
                        'label' => 'Avoid collisions between code you create, internal or third parties code',
                        'valid' => true
                    ),
                    'q12d' => array(
                        'label' => 'Replace usage of autoload and spl_autoload functions',
                        'valid' => false
                    ),
                    'q12e' => array(
                        'label' => 'Ability to shorten long names and improve readibility',
                        'valid' => true
                    )
                )
            ) 
        );
    }
}
