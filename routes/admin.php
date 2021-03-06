<?php

    Route::GET('/home', 'AdminController@index')->name('admin.home');
    // Login and Logout
    Route::GET('/', 'LoginController@showLoginForm')->name('admin.login');
    Route::POST('/', 'LoginController@login');
    Route::POST('/logout', 'LoginController@logout')->name('admin.logout');

    // Password Resets
    Route::POST('/password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::GET('/password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::POST('/password/reset', 'ResetPasswordController@reset');
    Route::GET('/password/reset/{token}', 'ResetPasswordController@showResetForm')->name('admin.password.reset');
    Route::GET('/password/change', 'AdminController@showChangePasswordForm')->name('admin.password.change');
    Route::POST('/password/change', 'AdminController@changePassword');

    // Register Admins
    Route::get('/register', 'RegisterController@showRegistrationForm')->name('admin.register');
    Route::post('/register', 'RegisterController@register');
    Route::get('/{admin}/edit', 'RegisterController@edit')->name('admin.edit');
    Route::delete('/{admin}', 'RegisterController@destroy')->name('admin.delete');
    Route::patch('/{admin}', 'RegisterController@update')->name('admin.update');

    // Admin Lists
    Route::get('/show', 'AdminController@show')->name('admin.show');
    Route::get('/me', 'AdminController@me')->name('admin.me');

    // Admin Roles
    Route::post('/{admin}/role/{role}', 'AdminRoleController@attach')->name('admin.attach.roles');
    Route::delete('/{admin}/role/{role}', 'AdminRoleController@detach');

    // Roles
    Route::get('/roles', 'RoleController@index')->name('admin.roles');
    Route::get('/role/create', 'RoleController@create')->name('admin.role.create');
    Route::post('/role/store', 'RoleController@store')->name('admin.role.store');
    Route::delete('/role/{role}', 'RoleController@destroy')->name('admin.role.delete');
    Route::get('/role/{role}/edit', 'RoleController@edit')->name('admin.role.edit');
    Route::patch('/role/{role}', 'RoleController@update')->name('admin.role.update');

    // active status
    Route::post('activation/{admin}', 'ActivationController@activate')->name('admin.activation');
    Route::delete('activation/{admin}', 'ActivationController@deactivate');
    Route::resource('permission', 'PermissionController');

    //Admin Lead Routes
    Route::get('add/lead', 'LeadController@addNewLeadForm')->name('admin.addleadform');
    Route::post('add/lead', 'LeadController@addNewLead')->name('admin.addlead');
    Route::get('leadsheet', 'LeadController@leadSheet')->name('admin.leadsheet');
    Route::post('getleadsheet', 'LeadController@getLeadSheet')->name('admin.getleadsheet');
   
    Route::get('lead/profile/{id}', 'LeadController@leadProfile')->name('admin.lead.profile');
    Route::get('lead', 'LeadController@leadSheet')->name('admin.lead.sheet');
    Route::post('marrkAsPotentialClient', 'LeadController@marrkAsPotentialClient')->name('mark.potential-client');

    //tasks
    Route::post('add/task', 'LeadController@addTask')->name('admin.addtask');
    Route::get('task/detail', 'LeadController@taskDetail')->name('admin.gettask_detail');
    Route::delete('task/delete', 'LeadController@taskDelete')->name('admin.deletetask');
    Route::get('load/more', 'LeadController@loadMore')->name('admin.load_moreTasks');
    Route::get('get/tasks', 'LeadController@getTasks')->name('admin.gettasks');
    Route::get('mark/tasks', 'LeadController@markTask')->name('admin.marktask');
    Route::get('add/task', 'LeadController@addTaskForm')->name('admin.addtaskform');
    Route::post('add/task', 'LeadController@addTask')->name('admin.addtask');
    Route::get('all/task', 'LeadController@allTasks')->name('admin.alltasks');
    Route::post('all/task', 'LeadController@allTasksByAjax')->name('admin.alltasksbyajax');
    Route::fallback(function () {
        return abort(404);
    });
