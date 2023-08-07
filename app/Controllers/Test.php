<?php

namespace App\Controllers;

class Test extends BaseController
{

    /* _remap will always execute first */
    // public function _remap($method, $param1 = null, $param2 = null)
    // {
    //     /* http://localhost/ci4/test/user */
    //     /* http://localhost/ci4/test/name/akash */
    //     /* http://localhost/ci4/test/name_age/akash/29 */

    //     /* if method exist in class - here $this is class */
    //     // if (method_exists($this, $method)) {
    //     //     return $this->$method();
    //     // } else {
    //     //     return $this->index();
    //     // }

    //     if ($method == 'user') {
    //         return $this->$method();
    //     } elseif ($method == 'name') {
    //         return $this->$method($param1);
    //     } elseif ($method == 'name_age') {
    //         return $this->$method($param1, $param2);
    //     }
    //     return $this->index();
    // }

    public function index()
    {
        $data = [
            "name" => 'Akash',
            "age" => 29,
            "languages" => ['Java', 'Php', 'JavaScript', 'HTML', 'CSS', 'Boostrap']
        ];
        return view('test', $data);
    }

    public function user()
    {
        echo 'Welcome to User Page';
    }

    public function name($name)
    {
        echo 'Name is: ' . $name;
    }

    public function name_age($name, $age)
    {
        echo 'Name is: ' . $name . 'and age is: ' . $age;
    }
}