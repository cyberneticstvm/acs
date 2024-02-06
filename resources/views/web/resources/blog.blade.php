@extends("web.base")
@section("content")
<div class="breadcumb-wrapper " data-bg-src="{{ asset('/web/assets/img/bg/bg6.webp') }}">
    <div class="container">
        <div class="breadcumb-content">
            <h2 class="breadcumb-title">Blog Details</h2>
            <div class="breadcumb-menu-wrapper">
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li>Resources</li>
                    <li>Blog Details</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="animation-bubble">
        <div class="bubble-1"></div>
        <div class="bubble-2"></div>
        <div class="bubble-3"></div>
        <div class="bubble-4"></div>
        <div class="bubble-5"></div>
        <div class="bubble-6"></div>
        <div class="bubble-7"></div>
        <div class="bubble-8"></div>
        <div class="bubble-9"></div>
        <div class="bubble-10"></div>
    </div>
</div>
<section class="th-blog-wrapper blog-details space-top space-extra-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="th-blog blog-single has-post-thumbnail">
                    <div class="blog-img">
                        <a href="{{ route('blogs.blog', $blog->slug) }}"><img src="{{ asset($blog->featured_image) }}" alt="Blog Image"></a>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <a href="{{ route('blogs.blog', $blog->slug) }}"><i class="fa-light fa-file"></i>{{ $blog->categoryname->name }}</a>
                            <a href="{{ route('blogs.blog', $blog->slug) }}"><i class="fa-regular fa-calendar"></i>{{ $blog->created_at->format('d, M Y') }}</a>
                            <a href="{{ route('blogs.blog', $blog->slug) }}"><i class="fa-regular fa-comments"></i>Comments({{ $blog->comments->count() }})</a>
                        </div>
                        <h2 class="blog-title"><a href="{{ route('blogs.blog', $blog->slug) }}">{{ $blog->title }}</a>
                        </h2>
                        {!! $blog->content !!}
                        <div class="share-links clearfix ">
                            <div class="row justify-content-between">
                                <div class="col-sm-auto">
                                    <span class="share-links-title">Tags:</span>
                                    <div class="tagcloud">
                                        {{ $blog->hashtags }}
                                    </div>
                                </div>
                                <div class="col-sm-auto text-xl-end">
                                    <span class="share-links-title">Share:</span>
                                    <ul class="social-links">
                                        <li><a href="https://facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="https://linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="https://instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                    </ul><!-- End Social Share -->
                                </div><!-- Share Links Area end -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Comment Form -->
                <div class="th-comment-form ">
                    <div class="form-title">
                        <h3 class="blog-inner-title mb-2"><i class="fa-solid fa-reply"></i>Leave a Comment</h3>
                        <p class="form-text">Your email address will not be published. Required fields are marked</p>
                    </div>
                    <form method="post" action="{{ route('blog.comment') }}">
                        @csrf
                        <input type="hidden" name="blog_id" value="{{ encrypt($blog->id) }}" />
                        <div class="row gy-4">
                            <div class="col-md-6 form-group">
                                <i class="fal fa-user"></i>
                                <input type="text" placeholder="Your Name*" name="name" class="form-control">
                            </div>
                            <div class="col-md-6 form-group">
                                <i class="fal fa-envelope"></i>
                                <input type="text" placeholder="Your Email*" name="email" class="form-control">
                            </div>
                            <div class="col-md-12 form-group">
                                <i class="fal fa-mobile"></i>
                                <input type="text" placeholder="Contact Number*" name="contact_number" class="form-control">
                            </div>
                            <div class="col-12 form-group">
                                <i class="fa-sharp fa-light fa-comments"></i>
                                <textarea placeholder="Write a Comment*" name="comment" class="form-control"></textarea>
                            </div>
                            <div class="col-12 form-group mb-0">
                                <button class="th-btn btn-submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4">
                <aside class="sidebar-area">
                    <div class="widget">
                        <h3 class="widget_title">Recent Posts<span class="shape"></span></h3>
                        <div class="recent-post-wrap">
                            @forelse($blogs as $key => $blog)
                            <div class="recent-post row">
                                <div class="col-12 media-img">
                                    <a href="{{ route('blogs.blog', $blog->slug) }}"><img src="{{ asset($blog->featured_image) }}" alt="Blog Image"></a>
                                </div>
                                <div class="col-12 media-body">
                                    <h4 class="post-title"><a class="text-inherit" href="{{ route('blogs.blog', $blog->slug) }}">{{ $blog->title }}</a></h4>
                                    <div class="recent-post-meta">
                                        <a href="blog.html"><i class="fas fa-calendar-days"></i>{{ $blog->created_at->format('d, M Y') }}</a>
                                    </div>
                                </div>
                            </div>
                            @empty
                            @endforelse
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>
@endsection