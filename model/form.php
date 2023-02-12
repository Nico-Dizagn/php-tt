<?php 
$l_aForm = array
(
    'q1' => array(
        'title' => 'Which of the following tags are an acceptable way to begin a PHP Code block ?',
        'desc' => '',
        'answer' => array(
            'q1a' => array(
                'label' => '<SCRIPT LANGUAGE="php">',
                'valid' => true
            ),
            'q1b' => array(
                'label' => '<!',
                'valid' => false
            ),
            'q1c' => array(
                'label' => '<%',
                'valid' => false
            ),
            'q1d' => array(
                'label' => '<?',
                'valid' => true
            ),
            'q1e' => array(
                'label' => '<?php',
                'valid' => true
            )
        )
    ),
    'q2' => array(
        'title' => 'What is the ouput of ',
        'desc' => '<pre>function apple($apples = 4){
    $apples = $apples / 2;
    return $apples;
}
$apples = 10;
apple($apples);
echo $apples;</pre>',
        'answer' => array(
            'q2a' => array(
                'label' => '2',
                'valid' => false
            ),
            'q2b' => array(
                'label' => '4',
                'valid' => false
            ),
            'q2c' => array(
                'label' => '5',
                'valid' => false
            ),
            'q2d' => array(
                'label' => '10',
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
        'title' => 'Which method will be called automatically when an object is represented as a string.',
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
                'label' => 'Filtering Output used in form data',
                'valid' => false
            ),
            'q6c' => array(
                'label' => 'Filtering Output used in database transactions',
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
        'title' => 'Which of the following list of potential data sources should be considered trusted ?',
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
                'label' => 'None of the above',
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
        'title' => 'Which operator is used to test if two values are identical in every way?',
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
        'title' => 'Which keyword is used to block any overriding of a class/method by a subclass',
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
    )
) ;