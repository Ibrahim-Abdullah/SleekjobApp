<?php  
        $config = array(

        'register' => array(
                array(
                        'field' => 'First_Name',
                        'label' => 'First Name',
                        'rules' => 'trim|required|htmlspecialchars|stripcslashes|regex_match[/^[a-zA-Z][-]*[a-zA-Z]/]'
                ),
                array(
                        'field' => 'Last_Name',
                        'label' => 'Last Name',
                        'rules' => 'trim|required|htmlspecialchars|stripcslashes|regex_match[/^[a-zA-Z][-]*[a-zA-Z]/]'
                ),
                array(
                        'field' => 'Course_of_Study',
                        'label' => 'Course of Interest',
                        'rules' => 'required|in_list[Web Development(User Interface Design),Web Development(Coding and Backend),Android Development,App Mockup Design,Wordpress Development,Ecommerce,I want Sleekjob to help me choose]'
                ),
                array(
                        'field' => 'Phone_Number',
                        'label' => 'Phone Number',
                        'rules' => 'required|numeric|exact_length[10]'
                        ),
                array(
                        'field' => 'Email',
                        'label' => 'Email',
                        'rules' => 'required|regex_match[/^[a-zA-Z][\w\.\-]+[a-zA-Z0-9]@([a-zA-Z0-9][a-zA-Z0-9\-]*\.)+[a-zA-Z]{2,4}$/]'
                ),
                array(
                        'field' => 'Last_School_Attended',
                        'label' => 'School Attended',
                        'rules' => 'trim|htmlspecialchars|stripslashes|regex_match[/^[a-zA-Z][\s]*[a-zA-Z]/]'                      
                        ),
                array(
                        'field' => 'Course_Last_School',
                        'label' => 'Course of Study in Last chool',
                        'rules' => 'trim|htmlspecialchars|stripslashes|regex_match[/^[a-zA-Z][\s]*[a-zA-Z]/]'
                        )
        ),
        'update' => array(
                
                array(
                        'field' => 'First_Name',
                        'label' => 'First Name',
                        'rules' => 'trim|required|htmlspecialchars|stripslashes|regex_match[/^[a-zA-Z][-]*[a-zA-Z]/]'
                ),
                array(
                        'field' => 'Last_Name',
                        'label' => 'Last Name',
                        'rules' => 'trim|required|htmlspecialchars|stripcslashes|regex_match[/^[a-zA-Z][-]*[a-zA-Z]/]'
                ),
                array(
                        'field' => 'Course_of_Study',
                        'label' => 'Course of Interest',
                        'rules' => 'required|in_list[Web Development(User Interface Design),Web Development(Coding and Backend),Android Development,App Mockup Design,Wordpress Development,Ecommerce,I want Sleekwork to help me choose]'
                ),
                array(
                        'field' => 'Phone_Number',
                        'label' => 'Phone Number',
                        'rules' => 'required|numeric|exact_length[10]'
                        ),
                array(
                        'field' => 'Email',
                        'label' => 'Email',
                        'rules' => 'required|regex_match[/^[a-zA-Z][\w\.\-]+[a-zA-Z0-9]@([a-zA-Z0-9][a-zA-Z0-9\-]*\.)+[a-zA-Z]{2,4}$/]'
                ),
                array(
                        'field' => 'Last_School_Attended',
                        'label' => 'Last School Attended',
                        'rules' => 'trim|htmlspecialchars|stripslashes|regex_match[/^[a-zA-Z][\s]*[a-zA-Z]/]'                      
                        ),
                array(
                        'field' => 'Course_of_Study',
                        'label' => 'Course of Study at Last School Attended',
                        'rules' => 'trim|htmlspecialchars|stripslashes|regex_match[/^[a-zA-Z][\s]*[a-zA-Z]/]'
                        ),
                array(
                        'field' => 'Amount_Paid',
                        'label' => 'Amount Paid',
                        'rules' => 'required|numeric|greater_than[-1]|less_than_equal_to[1000]'
                        ),
                array(
                        'field' => 'Payment_Status',
                        'label' => 'Payment Status of Student',
                        'rules' => 'trim|required|in_list[Part Payment,Full Payment, No Payment Made]|htmlspecialchars'

                        )
                )
);
?>