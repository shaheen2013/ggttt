<?php

require_once('Git.php');

$branch = date('d M, Y H:i:s');

$repo = Git::open('D:\xampp\htdocs\gitTest');
$repo->add('.');
$repo->commit('Some commit message '.date('d M, Y H:i:s'));
$repo->create_branch($branch);
$repo->push('lang', $branch);
print_r($repo);exit();


