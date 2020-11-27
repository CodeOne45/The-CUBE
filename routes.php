<?php

// Define the routes available in the application. The keys are the patterns,
// and are regular expressions to allow matching with the request URI. The
// values are of the form `Controller@action`, which allows for a controller to
// handle multiple actions.
return [
    // créer les routes GET et POST
    '/users' => 'Controller\Users@list',
    '/register' => 'Controller\Users@register',
    '/login' => 'Controller\Users@login',
    '/forgottenpassword' => 'Controller\Users@forgottenPassword',
    '/resetPassword' =>'Controller\Users@resetPassword',
    '/upload' => 'Controller\File@upload',
    '/drive' => 'Controller\File@list',
    '/create_dir' => 'Controller\File@createDirectory',
    '/edit' => 'Controller\File_Editing@showFiles',
    '/File_Editing' => 'Controller\File_Editing@fileContent',
    '/' => 'Controller\Home@get'
];
