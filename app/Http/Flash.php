<?php

namespace App\Http;


class Flash {


    /**
     * Master "template" for creating a flash message
     * All flash messages refer to this.
     *
     * @param string $title
     * @param string $message
     * @param string $level
     * @param string $key
     * @return
     */
    private function create($title, $message, $level, $key = 'flash_message')
    {
        return session()->flash($key, [
            'title'   => $title,
            'message' => $message,
            'level'   => $level
        ]);
    }

    /**
     * Create an information flash message
     *
     * @param string $title
     * @param string $message
     */
    public function info($title, $message)
    {
        return $this->create($title,$message, 'info');
    }

    /**
     * Create a success flash message
     *
     * @param string $title
     * @param string $message
     */
    public function success($title, $message)
    {
        return $this->create($title, $message, 'success');
    }


    /**
     * Create an error flash message
     *
     * @param string $title
     * @param string $message
     */
    public function error($title, $message)
    {
        return $this->create($title,$message, 'error');
    }

    /**
     * Create an overlay message where the user HAS to click ok for the message to disappear
     *
     * @param string $title
     * @param string $message
     * @param string $level
     */
    public function overlay($title, $message, $level = 'success')
    {
        return $this->create($title, $message, $level, 'flash_message_overlay');
    }

    /**
     * Create an overlay message where the user HAS to click ok for the message to disappear
     *
     * @param string $title
     * @param string $message
     * @param string $level
     */
    public function deleteOverlay($title, $message, $level = 'warning')
    {
        return $this->create($title, $message, $level, 'flash_message_delete_overlay');
    }



}

//How do I want this api to work.
/*$flash = App\Http\Flash;

$flash->message('Hello world'); would display by default the info alert
$flash->error('');  would display the error alert
$flash->success(''); Would display the success message.

*/
