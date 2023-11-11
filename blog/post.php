<?php

require 'src/model.php';
 
$post = getPostsById($id);
 
require('templates/post.php');