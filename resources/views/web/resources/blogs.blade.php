@extends("web.base")
@section("content")
<div class="breadcumb-wrapper " data-bg-src="{{ asset('/web/assets/img/bg/bg6.webp') }}">
    <div class="container">
        <div class="breadcumb-content">
            <h2 class="breadcumb-title">Blogs</h2>
            <div class="breadcumb-menu-wrapper">
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li>Resources</li>
                    <li>Blogs</li>
                </ul>
            </div>
        </div>
    </div>
    <ul class="circles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
</div>
<section class="th-blog-list space-top space-extra-bottom">
    <div class="container">
        <div class="row">
            @forelse($blogs as $key => $blog)
            <div class="col-xl-12">
                <div class="th-blog blog-list-single has-post-thumbnail">
                    <div class="blog-img">
                        <a href="{{ route('blogs.blog', $blog->slug) }}"><img src="{{ asset($blog->featured_image) }}" alt="Blog Image"></a>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <a href="{{ route('blogs.blog', $blog->slug) }}"><i class="fa-light fa-file"></i>{{ $blog->categoryname->name }}</a>
                            <a href="{{ route('blogs.blog', $blog->slug) }}"><i class="fa-regular fa-calendar"></i>{{ $blog->created_at->format('d, M Y') }}</a>
                            <a href="{{ route('blogs.blog', $blog->slug) }}"><i class="fa-regular fa-comments"></i>comments({{ $blog->comments->count() }})</a>
                        </div>
                        <h2 class="blog-title"><a href="{{ route('blogs.blog', $blog->slug) }}">{{ $blog->title }}</a>
                        </h2>
                        <a href="{{ route('blogs.blog', $blog->slug) }}" class="th-btn border">READ MORE</a>
                    </div>
                </div>
                {!! $blogs->links() !!}
            </div>
            @empty

            @endforelse
        </div>
    </div>
</section>
@endsection