<?php

require_once('Git.php');

$branch = 'branch_'.uniqid();
$branch = 'master';

$repo = Git::open('D:\xampp\htdocs\gitTest');
$repo->add('.');
$repo->commit('Some commit message '.date('d M, Y H:i:s'));
$repo->push('lang', 'master');
$repo->create_branch($branch);
$repo->push('lang', $branch);

print_r($repo);exit();


