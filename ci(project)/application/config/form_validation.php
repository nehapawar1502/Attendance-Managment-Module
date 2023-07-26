<?php
$config =[
         
          'admin_login' => [
                                      [
                                      'field' => 'username',
                                      'label' => 'User Name',
                                      'rules' => 'required|alpha|trim'
                                      ],
                                      [
                                      'field' => 'password',
                                      'label' => 'password',
                                      'rules' => 'required'
                                      ]
                            ]
          ];
?>