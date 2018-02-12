<?php
namespace Openclassroom\Blog\Model;

class Manager{
    protected function dbConnect(){
        $db = new \PDO('mysql:host=ec2-54-247-101-202.eu-west-1.compute.amazonaws.com;dbname=d5qef9ckbdct2t;charset=utf8', 'tnagorymyvbuuu', 'a01f31996db8ef0a61459d37f5e66fd7a39cd1f6e8df5a8f718e4fbec30f5e46');
        
        return $db;
    }
}
