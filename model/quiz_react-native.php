<?php
$l_aQuiz = array(
    'q0' => array(
        'title' => 'What is a good use case for using a function while rendering a dynamic list of items ?',
        'desc' => '',
        'answer' => array(
            'q0a' => array(
                'label' => 'If we need to compute a value based on properties of items in the loop.',
                'valid' => true
            ),
            'q0b' => array(
                'label' => 'None. Functions should not be used while rendering a dynamic list.',
                'valid' => false
            ),
            'q0c' => array(
                'label' => 'To make the code shorter',
                'valid' => false
            )
        )
    ),
    'q1' => array(
        'title' => 'What is the second argument for setState useful for ?',
        'desc' => '',
        'answer' => array(
            'q1a' => array(
                'label' => 'To invoke code after the setState operation is done',
                'valid' => true
            ),
            'q1b' => array(
                'label' => 'To replace the state completely instead of the default merge action',
                'valid' => false
            ),
            'q1c' => array(
                'label' => 'To access the previous state before the setState operation',
                'valid' => false
            )
        )
    ),
    'q2' => array(
        'title' => 'Which of the following below act as the input of a class-based component ?',
        'desc' => '',
        'answer' => array(
            'q2a' => array(
                'label' => 'class and factory',
                'valid' => false
            ),
            'q2b' => array(
                'label' => 'render and mount',
                'valid' => false
            ),
            'q2c' => array(
                'label' => 'props',
                'valid' => true
            )
        )
    ),
    'q3' => array(
        'title' => 'What can be used as a container that supports layout with flexbox in React Native ?',
        'desc' => '',
        'answer' => array(
            'q3a' => array(
                'label' => '<text>',
                'valid' => false
            ),
            'q3b' => array(
                'label' => '<view>',
                'valid' => true
            ),
            'q3c' => array(
                'label' => '<image>',
                'valid' => false
            ),
            'q3d' => array(
                'label' => '<ScrollView>',
                'valid' => false
            )
        )
    ),
    'q4' => array(
        'title' => 'Name the Hook that lets a component receive information from distant parents without passing it as props',
        'desc' => '',
        'answer' => array(
            'q4a' => array(
                'label' => 'useProps',
                'valid' => false
            ),
            'q4b' => array(
                'label' => 'useState',
                'valid' => false
            ),
            'q4c' => array(
                'label' => 'useContext',
                'valid' => true
            ),
            'q4d' => array(
                'label' => 'useReducer',
                'valid' => false
            )
        )
    ),
    'q5' => array(
        'title' => 'Which component is used for Rendering a long list of Data in React Native ?',
        'desc' => '',
        'answer' => array(
            'q5a' => array(
                'label' => 'List',
                'valid' => false
            ),
            'q5b' => array(
                'label' => 'FlatList',
                'valid' => true
            ),
            'q5c' => array(
                'label' => 'ScrollViewList',
                'valid' => false
            ),
            'q5d' => array(
                'label' => 'SectionList',
                'valid' => true
            )
        )
    ),
    'q6' => array(
        'title' => 'Which module in React Native detects the platform in which the app is running ?',
        'desc' => '',
        'answer' => array(
            'q6a' => array(
                'label' => 'PlatformDetect',
                'valid' => false
            ),
            'q6b' => array(
                'label' => 'Engine',
                'valid' => false
            ),
            'q6c' => array(
                'label' => 'Platform',
                'valid' => true
            ),
            'q6d' => array(
                'label' => 'codeDetect',
                'valid' => false
            )
        )
    ),
    'q7' => array(
        'title' => 'Which of the following way is used to add a static image to your React Native app ?',
        'desc' => '',
        'answer' => array(
            'q7a' => array(
                'label' => '<image source={require(\'./my-icon.png\')} />',
                'valid' => false
            ),
            'q7b' => array(
                'label' => '<Img source={require(\'./my-icon.png\')} />',
                'valid' => false
            ),
            'q7c' => array(
                'label' => '<Image source={require(\'./my-icon.png\')} />',
                'valid' => true
            ),
            'q7d' => array(
                'label' => '<img source={require(\'./my-icon.png\')} />',
                'valid' => false
            )
        )
    ),
    'q8' => array(
        'title' => 'Which is a component that can detect various stages of press interactions ?',
        'desc' => '',
        'answer' => array(
            'q8a' => array(
                'label' => 'PressComponent',
                'valid' => false
            ),
            'q8b' => array(
                'label' => 'Pressable',
                'valid' => true
            ),
            'q8c' => array(
                'label' => 'TouchHandle',
                'valid' => false
            ),
            'q8d' => array(
                'label' => 'Touchable',
                'valid' => false
            )
        )
    ),
    'q9' => array(
        'title' => 'Which of the following is not a property of Flex box ?',
        'desc' => '',
        'answer' => array(
            'q9a' => array(
                'label' => 'flexDirection',
                'valid' => false
            ),
            'q9b' => array(
                'label' => 'alignItems',
                'valid' => false
            ),
            'q9c' => array(
                'label' => 'justifyContent',
                'valid' => false
            ),
            'q9d' => array(
                'label' => 'justifySpacing',
                'valid' => true
            )
        )
    ),
    'q10' => array(
        'title' => 'Which of the following is used to align UI elements on the LEFT side of a container ?',
        'desc' => '',
        'answer' => array(
            'q10a' => array(
                'label' => '{Float: left;}',
                'valid' => false
            ),
            'q10b' => array(
                'label' => '{display: block; Float: left;}',
                'valid' => false
            ),
            'q10c' => array(
                'label' => '{align-content: left;}',
                'valid' => false
            ),
            'q10d' => array(
                'label' => '{justify-content: left;}',
                'valid' => true
            )
        )
    ),
    'q11' => array(
        'title' => 'Which of the following can\'t be used in stylesheet ?',
        'desc' => '',
        'answer' => array(
            'q11a' => array(
                'label' => 'box-shadow',
                'valid' => true
            ),
            'q11b' => array(
                'label' => 'Float',
                'valid' => true
            ),
            'q11c' => array(
                'label' => 'position: fixed',
                'valid' => true
            ),
            'q11d' => array(
                'label' => 'vh, vw, px',
                'valid' => true
            )
        )
    )
);