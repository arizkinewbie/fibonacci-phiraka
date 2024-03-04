<?php

namespace App\Controllers;

class Fibonacci extends BaseController
{
    public function index()
    {
        return view('fibonacci');
    }

    public function generate()
    {
        $rows = $this->request->getPost('rows');
        $columns = $this->request->getPost('columns');

        $sequence = $this->getFibonacciSequence($rows * $columns);

        return view('fibonacci_table', [
            'rows' => $rows,
            'columns' => $columns,
            'sequence' => $sequence
        ]);
    }

    private function getFibonacciSequence($count)
    {
        $sequence = [0, 1];

        for ($i = 2; $i < $count; $i++) {
            $sequence[$i] = $sequence[$i - 1] + $sequence[$i - 2];
        }

        return array_slice($sequence, 0, $count);
    }
}
