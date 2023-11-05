@extends('layouts.front')

@section('title')
    {{ $blog->judul }}
@endsection

@push('meta_tag')
    <!-- Primary Meta Tags -->
    <meta name="title" content="{{ $blog->judul }}" />
    <meta name="description" content="{{ $blog->meta_deskripsi }}" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url("blog/$blog->slug") }}" />
    <meta property="og:title" content="{{ $blog->judul }}" />
    <meta property="og:description" content="{{ $blog->meta_deskripsi }}" />
    <meta property="og:image" content="{{ url("blog/$blog->slug") }}images/meta-tags.png" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="{{ url("blog/$blog->slug") }}" />
    <meta property="twitter:title" content="{{ $blog->judul }}" />
    <meta property="twitter:description" content="{{ $blog->meta_deskripsi }}" />
    <meta property="twitter:image" content="{{ asset("storage/$blog->image") }}" />

    <!-- Meta Tags Generated with https://metatags.io -->
@endpush

@section('content')
    <!-- Start Breadcrumb
                                                                    ============================================= -->
    <div class="breadcrumb-area text-center bg-dark text-light" style="background-image: url(assets/img/shape/42.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>{{ $blog->judul }}</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                            <li class="active">Blog</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Blog
                                                                    ============================================= -->
    <div class="blog-area single full-blog full-blog default-padding">
        <div class="container">
            <div class="blog-items">
                <div class="row">
                    <div class="blog-content wow fadeInUp col-lg-10 offset-lg-1 col-md-12">

                        <div class="blog-style-one item">

                            <div class="blog-item-box">

                                <div class="thumb">
                                    <a href="#"><img src="{{ asset("storage/$blog->image") }}" alt="Thumb"></a>
                                </div>
                                <div class="info">
                                    <div class="meta">
                                        <ul>
                                            <li>
                                                <i class="fas fa-user"></i> <a href="#">{{ $blog->user->name }}</a>
                                            </li>
                                            <li>
                                                <i class="fas fa-calendar-alt"></i>
                                                {{ \Carbon\Carbon::parse($blog->created_at)->format('d M, Y') }}
                                            </li>
                                        </ul>
                                    </div>

                                    <main>
                                        {!! $blog->body !!}
                                    </main>

                                </div>
                            </div>
                        </div>

                        <!-- Post Author -->
                        <div class="post-author d-none">
                            <div class="thumb">
                                <img src="https://eu.ui-avatars.com/api/?name={{ $blog->user->name }}&size=250"
                                    alt="Thumb">
                            </div>
                            <div class="info">
                                <h4><a href="#">{{ $blog->user->name }}</a></h4>
                                {{-- <p>
                                    Grursus mal suada faci lisis Lorem ipsum dolarorit more ametion consectetur elit. Vesti
                                    at bulum nec at odio aea the dumm ipsumm ipsum that dolocons rsus mal suada and
                                    fadolorit to the consectetur elit. All the Lorem Ipsum generators on the Internet tend.
                                </p> --}}
                            </div>
                        </div>
                        <!-- Post Author -->

                        <!-- Post Tags Share -->
                        <div class="post-tags share">
                            <div class="tags">
                                <h4>Tags: </h4>
                                <a href="#">Algorithm</a>
                                <a href="$">Data science</a>
                            </div>

                            <div class="social">
                                <h4>Share:</h4>
                                <ul>
                                    <li>
                                        <a class="facebook" href="#" target="_blank"><i
                                                class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a class="twitter" href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a class="pinterest" href="#" target="_blank"><i
                                                class="fab fa-pinterest-p"></i></a>
                                    </li>
                                    <li>
                                        <a class="linkedin" href="#" target="_blank"><i
                                                class="fab fa-linkedin-in"></i></a>
                                    </li>
                                </ul><!-- End Social Share -->
                            </div>
                        </div>
                        <!-- Post Tags Share -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->
@endsection
