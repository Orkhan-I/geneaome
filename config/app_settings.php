<?php

return [

    // All the sections for the settings page
    'sections' => [
        'app' => [
            'title' => 'General Settings',
            'descriptions' => 'Application general settings.', // (optional)
            'icon' => 'fa fa-cog', // (optional)

            'inputs' => [
                [
                    'name' => 'app_name', // unique key for setting
                    'type' => 'text', // type of input can be text, number, textarea, select, boolean, checkbox etc.
                    'label' => 'App Name', // label for input
                    // optional properties
                    'placeholder' => 'Application Name', // placeholder for input
                    'class' => 'form-control', // override global input_class
                    'style' => '', // any inline styles
                    'rules' => 'required|min:2|max:20', // validation rules for this input
                    'value' => 'QCode', // any default value
                    'hint' => 'You can set the app name here' // help block text for input
                ],
                [
                    'name' => 'logo',
                    'type' => 'image',
                    'label' => 'Upload logo',
                    'hint' => 'Must be an image and cropped in desired size',
                    'rules' => 'image|max:500',
                    'disk' => 'public', // which disk you want to upload
                    'path' => 'app', // path on the disk,
                    'preview_class' => 'thumbnail',
                    'preview_style' => 'height:40px'
                ],

                [
                    'name' => 'address',
                    'type' => 'text',
                    'label' => 'Address',
                    'placeholder' => 'Your Addres ', // placeholder for input
                    'class' => 'form-control', // override global input_class
                    'style' => '', // any inline styles
                    'rules' => 'required|min:2|max:20', // validation rules for this input
                    'value' => 'Address', // any default value
                    'hint' => 'You can set the app name here' // help block text for input
                ],
                [
                    'name' => 'phone',
                    'type' => 'number',
                    'label' => 'Phone',
                    'placeholder' => 'Phone Number', // placeholder for input
                    'class' => 'form-control', // override global input_class
                    'style' => '', // any inline styles
                    'rules' => 'required|min:2|max:20', // validation rules for this input
                    'value' => '+994', // any default value
                    'hint' => 'You can set the app name here' // help block text for input
                ],
                [
                    'name' => 'email',
                    'type' => 'email',
                    'label' => 'Email',
                    'placeholder' => 'Email ', // placeholder for input
                    'class' => 'form-control', // override global input_class
                    'style' => '', // any inline styles
                    'rules' => 'email|required|min:2|max:20', // validation rules for this input
                    'value' => '@example.com', // any default value
                    'hint' => 'You can set the app name here' // help block text for input
                ],[
                    'name' => 'about',
                    'type' => 'text',
                    'label' => 'About Us',
                    'placeholder' => 'about us ', // placeholder for input
                    'class' => 'form-control', // override global input_class
                    'style' => '', // any inline styles
                    'rules' => '', // validation rules for this input
                    'value' => 'Dolor eros cubilia velit fusce. Porttitor molestie leo quisque placeat, netus bhger hryyu.', // any default value
                    'hint' => '' // help block text for input
                ]
                ,
                [
                    'name' => 'facebook',
                    'type' => 'text',
                    'label' => 'Facebook',
                    'placeholder' => 'icon ', // placeholder for input
                    'class' => 'form-control', // override global input_class
                    'style' => '', // any inline styles
                    'rules' => '', // validation rules for this input
                    'value' => '', // any default value
                    'hint' => '' // help block text for input
                ],[
                    'name' => 'linkedin',
                    'type' => 'text',
                    'label' => 'Linkedin',
                    'placeholder' => 'icon ', // placeholder for input
                    'class' => 'form-control', // override global input_class
                    'style' => '', // any inline styles
                    'rules' => '', // validation rules for this input
                    'value' => '', // any default value
                    'hint' => '' // help block text for input
                ],[
                    'name' => 'twitter',
                    'type' => 'text',
                    'label' => 'Twitter',
                    'placeholder' => 'icon ', // placeholder for input
                    'class' => 'form-control', // override global input_class
                    'style' => '', // any inline styles
                    'rules' => '', // validation rules for this input
                    'value' => '', // any default value
                    'hint' => '' // help block text for input
                ]
                ,[
                    'name' => 'instagram',
                    'type' => 'text',
                    'label' => 'Instagram',
                    'placeholder' => 'icon ', // placeholder for input
                    'class' => 'form-control', // override global input_class
                    'style' => '', // any inline styles
                    'rules' => '', // validation rules for this input
                    'value' => '', // any default value
                    'hint' => '' // help block text for input
                ]
            ]
        ],
        
    ],

    // Setting page url, will be used for get and post request
    'url' => 'settings',

    // Any middleware you want to run on above route
    'middleware' => ['auth'],

    // View settings
    'setting_page_view' => 'back.layouts.settings',
    'flash_partial' => 'app_settings::_flash',

    // Setting section class setting
    'section_class' => 'card mb-3',
    'section_heading_class' => 'card-header',
    'section_body_class' => 'card-body',

    // Input wrapper and group class setting
    'input_wrapper_class' => 'form-group',
    'input_class' => 'form-control',
    'input_error_class' => 'has-error',
    'input_invalid_class' => 'is-invalid',
    'input_hint_class' => 'form-text text-muted',
    'input_error_feedback_class' => 'text-danger',

    // Submit button
    'submit_btn_text' => 'Save Settings',
    'submit_success_message' => 'Settings has been saved.',

    // Remove any setting which declaration removed later from sections
    'remove_abandoned_settings' => false,

    // Controller to show and handle save setting
    'controller' => '\QCod\AppSettings\Controllers\AppSettingController',

    // settings group
    'setting_group' => function() {
        // return 'user_'.auth()->id();
        return 'default';
    }
];
