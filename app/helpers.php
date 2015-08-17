<?php



/**
 * a global flash function that when called will
 * pass the string $message the flash object if set
 *
 * @param $title
 * @param $message
 * @return mixed
 */
function flash($title = null, $message = null)
{
    /** instantiating an instance of the Flash */
    $flash = app('App\Http\Flash');

    /*If we call the flash function and don't pass any
    variables through then we just want to return the flash
    instance*/
    if (func_num_args() == 0){
        return $flash;
    }

    /*Otherwise we want to immediately return a default
    flash message to the user*/
    return $flash->message($title, $message);
}