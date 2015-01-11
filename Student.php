<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Student
 *
 * @author Ru Station
 */
class Student {
    
    /* Constructor */
    function __construct()
    {
        $this->surname = '';
        $this->first_name = '';
        $this->email = array();
        $this->grades = array();
    }
    
    /* Add to array of emails */
    function add_email($which, $address) {
        $this->emails[$which] = $address;
    }
    
    /* Add to array of grades */
    function add_grade($grade) {
        $this->grades[] = $grade;
    }
    
    /* Calculate grades average */
    function average()
    {
        $total = 0;
        foreach ($this->grades as $value)
        {
            $total += $value;
        }
        return $total / count ($this->grades);
    }
    
    /* Represent as text */
    function toString()
    {
        $result = $this->first_name . ''.
        $this->surname;
        $result .= ' ('.$this->average().")\n";
        foreach($this->emails as $which=>$what)
        {
            $result .= $which . ': '. $what. "\n";   
        }
               
        $result .= "\n";
        return '<pre>'.$result.'</pre>';
    }
}
