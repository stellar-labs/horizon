<?php

namespace Controller\Post;

use function Horizon\view;
use function Horizon\checkFunctionDoNotExist;

checkFunctionDoNotExist("show");

function show() {
	return view("post.show");
}
