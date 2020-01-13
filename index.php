<?php

require_once('Git.php');



$repo = Git::open('D:\xampp\htdocs\gitTest');
$repo->add('.');
$repo->commit('Some commit message '.date('d M, Y H:i:s'));
$repo->push('lang', 'master');
print_r($repo);exit();


