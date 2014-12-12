<?php

    return [

        /*
        |--------------------------------------------------------------------------
        | Where the templates for the generators are stored...
        |--------------------------------------------------------------------------
        |
        */
        'model_template_path'               => '/var/www/html/fiberhopllc/app/templates/model.txt',

        'scaffold_model_template_path'      => '/var/www/html/fiberhopllc/app/templates/scaffolding/model.txt',

        'controller_template_path'          => '/var/www/html/fiberhopllc/app/templates/controller.txt',

        'scaffold_controller_template_path' => '/var/www/html/fiberhopllc/app/templates/scaffolding/controller.txt',

        'migration_template_path'           => '/var/www/html/fiberhopllc/app/templates/migration.txt',

        'seed_template_path'                => '/var/www/html/fiberhopllc/app/templates/seed.txt',

        'view_template_path'                => '/var/www/html/fiberhopllc/app/templates/view.txt',


        /*
        |--------------------------------------------------------------------------
        | Where the generated files will be saved...
        |--------------------------------------------------------------------------
        |
        */
        'model_target_path'                 => app_path('models'),

        'controller_target_path'            => app_path('controllers'),

        'migration_target_path'             => app_path('database/migrations'),

        'seed_target_path'                  => app_path('database/seeds'),

        'view_target_path'                  => app_path('views')

    ];