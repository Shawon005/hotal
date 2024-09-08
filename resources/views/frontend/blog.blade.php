@extends('frontend.layout.master2')
@section('content')

        <!-- =========== PAGE TITLE ========== -->
        <div class="page_title gradient_overlay" style="background: url({{asset('')}}frontend/images/page_title_bg.jpg);">
            <div class="container">
                <div class="inner">
                    <h1>{{translate('All Blog')}}</h1>
                    <ol class="breadcrumb">
                        <li><a href="{{route('home')}}">{{translate('Home')}}</a></li>
                        <li>{{translate('All Blog')}}</li>
                    </ol>
                </div>
            </div>
        </div>

        <!-- =========== MAIN ========== -->
        <main class="blog">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <!-- ITEM -->
                        @foreach($blogs as $blog)
                        <article class="blog_list">
                            <figure>
                                <a href="{{route('blog',$blog->id)}}" class="hover_effect h_link h_blue">
                                    <img src="{{$blog->blog_image}}" class="img-responsive" alt="Image">
                                </a>
                            </figure>
                            <div class="details">
                                <h2><a href="{{route('blog',$blog->id)}}">{{translate($blog->blog_title)}}</a></h2>
                                <div class="info">
                                    <span class="meta_part"><a href="#"><i class="fa fa-user"></i>Admin</a></span>
                                    <span class="meta_part"><a href="#"><i class="fa fa-calendar"></i>{{dateFormatconverter($blog->blog_cdt)}}</a></span>
                                    <!-- <span class="meta_part"><a href="#"><i class="fa fa-comment-o"></i>68 Comments</a></span>
                                    <span class="meta_part"><i class="fa fa-folder-open-o"></i><a href="#">News</a>, <a href="#">Events</a></span> -->
                                </div>
                                <p>{{translate($blog->blog_description)}}</p>
                                <a class="button btn_blue " href="{{route('blog',$blog->id)}}"><i class="fa fa-angle-double-right"></i> {{translate('Read More')}} </a>
                            </div>
                        </article>
                        @endforeach
                      
                        <!-- <article class="blog_list">
                            <figure>
                                <a href="blog-post.html" class="hover_effect h_link h_blue">
                                    <img src="{{asset('')}}frontend/images/blog/blog_post2.jpg" class="img-responsive" alt="Image">
                                </a>
                            </figure>
                            <div class="details">
                                <h2><a href="blog-post.html">Hotel Zante in pictures</a></h2>
                                <div class="info">
                                    <span class="meta_part"><a href="#"><i class="fa fa-user"></i>John Doe</a></span>
                                    <span class="meta_part"><a href="#"><i class="fa fa-calendar"></i>February 15, 2017</a></span>
                                    <span class="meta_part"><a href="#"><i class="fa fa-comment-o"></i>68 Comments</a></span>
                                    <span class="meta_part"><i class="fa fa-folder-open-o"></i><a href="#">News</a>, <a href="#">Events</a></span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit...</p>
                                <a class="button btn_blue " href="blog-post.html"><i class="fa fa-angle-double-right"></i> Read More </a>
                            </div>
                        </article>
                       
                        <article class="blog_list">
                            <figure>
                                <a href="blog-post.html" class="hover_effect h_link h_blue">
                                    <img src="{{asset('')}}frontend/images/blog/blog_post3.jpg" class="img-responsive" alt="Image">
                                </a>
                            </figure>
                            <div class="details">
                                <h2><a href="blog-post.html">Hotel Zante family party</a></h2>
                                <div class="info">
                                    <span class="meta_part"><a href="#"><i class="fa fa-user"></i>John Doe</a></span>
                                    <span class="meta_part"><a href="#"><i class="fa fa-calendar"></i>February 15, 2017</a></span>
                                    <span class="meta_part"><a href="#"><i class="fa fa-comment-o"></i>68 Comments</a></span>
                                    <span class="meta_part"><i class="fa fa-folder-open-o"></i><a href="#">News</a>, <a href="#">Events</a></span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit...</p>
                                <a class="button btn_blue " href="blog-post.html"><i class="fa fa-angle-double-right"></i> Read More </a>
                            </div>
                        </article>
                       
                        <article class="blog_list">
                            <figure>
                                <a href="blog-post.html" class="hover_effect h_link h_blue">
                                    <img src="{{asset('')}}frontend/images/blog/blog_post4.jpg" class="img-responsive" alt="Image">
                                </a>
                            </figure>
                            <div class="details">
                                <h2><a href="blog-post.html">Hotel Zante Weddings</a></h2>
                                <div class="info">
                                    <span class="meta_part"><a href="#"><i class="fa fa-user"></i>John Doe</a></span>
                                    <span class="meta_part"><a href="#"><i class="fa fa-calendar"></i>February 15, 2017</a></span>
                                    <span class="meta_part"><a href="#"><i class="fa fa-comment-o"></i>68 Comments</a></span>
                                    <span class="meta_part"><i class="fa fa-folder-open-o"></i><a href="#">News</a>, <a href="#">Events</a></span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit...</p>
                                <a class="button btn_blue " href="blog-post.html"><i class="fa fa-angle-double-right"></i> Read More </a>
                            </div>
                        </article>
                       
                        <article class="blog_list">
                            <figure>
                                <a href="blog-post.html" class="hover_effect h_link h_blue">
                                    <img src="{{asset('')}}frontend/images/blog/blog_post5.jpg" class="img-responsive" alt="Image">
                                </a>
                            </figure>
                            <div class="details">
                                <h2><a href="blog-post.html">10 Things You Should Know</a></h2>
                                <div class="info">
                                    <span class="meta_part"><a href="#"><i class="fa fa-user"></i>John Doe</a></span>
                                    <span class="meta_part"><a href="#"><i class="fa fa-calendar"></i>February 15, 2017</a></span>
                                    <span class="meta_part"><a href="#"><i class="fa fa-comment-o"></i>68 Comments</a></span>
                                    <span class="meta_part"><i class="fa fa-folder-open-o"></i><a href="#">News</a>, <a href="#">Events</a></span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit...</p>
                                <a class="button btn_blue " href="blog-post.html"><i class="fa fa-angle-double-right"></i> Read More </a>
                            </div>
                        </article> -->
                        <nav>
                           {{$blogs->links()}}
                        </nav>
                    </div>
                    <div class="col-md-3">
                        <div class="sidebar">
                            <aside class="widget">
                                <div class="search">
                                    <form method="get" class="widget_search">
                                        <input type="search" placeholder="Start Searching...">
                                        <button class="search_btn" id="searchsubmit" type="submit">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </form>
                                </div>
                            </aside>
                            <aside class="widget">
                                <h4>{{translate('CATEGORIES')}}</h4>
                                <ul class="categories">
                                    @foreach($categorys as $category)
                                    @if(count(cat($category->id))!=0)
                                    <li><a href="{{route('blog_cat',$category->id)}}">{{translate($category->category_name)}} <span class="num_posts">{{count(cat($category->id))}}</span></a></li>
                                    @endif
                                    @endforeach
                                </ul>
                            </aside>
                            <aside class="widget">
                                <h4>{{translate('Latest Posts')}}</h4>
                                <div class="latest_posts">
                                    <!-- ITEM -->
                                    @foreach($blogs as $blog)
                                    <article class="latest_post">
                                        <figure>
                                            <a href="{{route('blog',$blog->id)}}" class="hover_effect h_link h_blue">
                                                <img src="{{$blog->blog_image}}" width="90px" alt="Image">
                                            </a>
                                        </figure>
                                        <div class="details">
                                            <h6><a href="{{route('blog',$blog->id)}}">{{translate($blog->blog_title)}}</a></h6>
                                            <span><i class="fa fa-calendar"></i>{{dateFormatconverter($blog->blog_cdt)}}</span>
                                        </div>
                                    </article>
                                    @endforeach
                                    
                                    <!-- <article class="latest_post">
                                        <figure>
                                            <a href="blog-post.html" class="hover_effect h_link h_blue">
                                                <img src="{{asset('')}}frontend/images/blog/thumb2.jpg" alt="Image">
                                            </a>
                                        </figure>
                                        <div class="details">
                                            <h6><a href="blog-post.html">Hotel Zante in pictures</a></h6>
                                            <span><i class="fa fa-calendar"></i>18/10/2017</span>
                                        </div>
                                    </article>
                                   
                                    <article class="latest_post">
                                        <figure>
                                            <a href="blog-post.html" class="hover_effect h_link h_blue">
                                                <img src="{{asset('')}}frontend/images/blog/thumb3.jpg" alt="Image">
                                            </a>
                                        </figure>
                                        <div class="details">
                                            <h6><a href="blog-post.html">Hotel Zante family party</a></h6>
                                            <span><i class="fa fa-calendar"></i>13/08/2017</span>
                                        </div>
                                    </article>
                                   
                                    <article class="latest_post">
                                        <figure>
                                            <a href="blog-post.html" class="hover_effect h_link h_blue">
                                                <img src="{{asset('')}}frontend/images/blog/thumb4.jpg" alt="Image">
                                            </a>
                                        </figure>
                                        <div class="details">
                                            <h6><a href="blog-post.html">Hotel Zante weddings</a></h6>
                                            <span><i class="fa fa-calendar"></i>13/08/2017</span>
                                        </div>
                                    </article>
                                    
                                    <article class="latest_post">
                                        <figure>
                                            <a href="blog-post.html" class="hover_effect h_link h_blue">
                                                <img src="{{asset('')}}frontend/images/blog/thumb5.jpg" alt="Image">
                                            </a>
                                        </figure>
                                        <div class="details">
                                            <h6><a href="blog-post.html">10 things you should know</a></h6>
                                            <span><i class="fa fa-calendar"></i>13/08/2017</span>
                                        </div>
                                    </article> -->
                                </div>
                            </aside>
                            <!-- <aside class="widget">
                                <h4>Tags</h4>
                                <div class="tagcloud clearfix">
                                    <a href="#"><span class="tag">Hotel Zante</span><span class="num">12</span></a>
                                    <a href="#"><span class="tag">HOLIDAYS</span><span class="num">24</span></a>
                                    <a href="#"><span class="tag">PARTY</span><span class="num">8</span></a>
                                    <a href="#"><span class="tag">GREECE</span><span class="num">4</span></a>
                                    <a href="#"><span class="tag">PARTY</span><span class="num">56</span></a>

                                    <a href="#"><span class="tag">ZAKYNTHOS</span><span class="num">12</span></a>
                                </div>
                            </aside>
                            <aside class="widget">
                                <h4>ARCHIVE</h4>
                                <ul class="archive">
                                    <li><a href="#">May 2017<span class="num_posts">21</span></a></li>
                                    <li><a href="#">June 2017<span class="num_posts">24</span></a></li>
                                    <li><a href="#">July 2017<span class="num_posts">38</span></a></li>
                                    <li><a href="#">August 2017<span class="num_posts">11</span></a></li>
                                </ul>
                            </aside> -->
                        </div>
                    </div>
                </div>
            </div>

        </main>

        <!-- ========== FOOTER ========== -->
       @endsection