<?php

use App\Models\Blog;

function recentPosts()
{
    return Blog::where('type', 'Blog')->where('status', 1)->latest()->get();
}
