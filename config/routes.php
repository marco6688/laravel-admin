<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/9
 * Time: 16:10
 */
Route::get('/hello', function () {
    echo phpinfo();
//    return view('welcome');
});
Route::get('/asdsa', function () {
    if (!function_exists('admin_path')) {

        /**
         * Get admin path.
         *
         * @param string $path
         *
         * @return string
         */
        function admin_path($path = '')
        {
            return ucfirst(config('admin.directory')).($path ? DIRECTORY_SEPARATOR.$path : $path);
        }
    }
    echo admin_path();
//    return view('welcome');
});
