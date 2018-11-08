<?php
if (! Defined ('BASEPATH')) exit ('No direct script access allowed');

Class Calculator extends CI_Controller{
    public function index(){
        $this->load->view('calculation');
    }

    public  function calculate(){
        $first = $this->input->post('firstNumber');
        $second = $this->input->post('secondNumber');
        $operator = $this->input->post('operator');

        switch ($operator) {
            case '+':
                return $first+$second;
                break;
            case '-':
                return $first-$second;
                break;
            case '*':
                return $first*$second;
                break;
            case '/':
                return $first/$second;
                break;
            default:
                return '';
                break;
        }


    }
}


?>