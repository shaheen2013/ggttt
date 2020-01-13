<?php

require_once('Git.php');

$repo = Git::open('D:\xampp\htdocs\gitTest');
$repo->add('.');
$repo->commit('Some commit message');
$repo->push('origin', 'master');
print_r($repo);exit();


