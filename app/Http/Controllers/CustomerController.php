<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    function index()
    {
        // tạo một mảng các khách hàng
        $customers = [
            '0' => [
                'id' => 1,
                'name' => 'Lê Hoàng Đức',
                'dob' => '1998-04-12',
                'email' => 'duccoc1998@gmail.com'
            ],

            '1' => [
                'id' => 2,
                'name' => 'Nguyễn Thị Thu Uyên',
                'dob' => '2002-07-15',
                'email' => 'nuyen3024@gmail.com'
            ],
            '2' => [
                'id' => 3,
                'name' => 'Lâm Lê',
                'dob' => '1998-08-25',
                'email' => 'lam132409329@gmail.com'
            ]
        ];
        return view('customers.list', compact('customers'));
    }
}
