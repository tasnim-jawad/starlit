<!-- PAGE DETAILS AREA START (blog-details) -->
<div class="ltn__page-details-area ltn__blog-details-area pt-60 mb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="ltn__blog-details-wrap">
                    <div class="ltn__page-details-inner ltn__blog-details-inner">
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-category">
                                    <a href="{{ route('home') }}">Starlite</a>
                                </li>
                            </ul>
                        </div>
                        <h2 class="ltn__blog-title">{{ $blog->title ?? '' }}</h2>
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-author">
                                    <a href="#"><img src="{{ asset('assets/frontend') }}/img/blog/author.jpg"
                                            alt="#">By: {{ $blog->writer ?? '' }}</a>
                                </li>
                                <li class="ltn__blog-date">
                                    <i class="far fa-calendar-alt"></i>
                                    {{ \Carbon\Carbon::parse($blog->publish_date)->format('M d, Y') }}
                                </li>
                                <li>
                                    <a href="#"><i class="far fa-comments"></i>35 Comments</a>
                                </li>
                            </ul>
                        </div>
                        <img src="{{ asset($blog->thumbnail_image ?? 'assets/frontend/img/blog/31.jpg') }}" alt="Image">
                          {!! ($blog->description ?? '')!!}
                        
                    </div>
                    <hr>
                    <!-- related-post -->
                    {{-- <div class="related-post-area mb-50">
                        <h4 class="title-2">Related Post</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <!-- Blog Item -->
                                <div class="ltn__blog-item ltn__blog-item-6">
                                    <div class="ltn__blog-img">
                                        <a href="blog-details.html"><img
                                                src="{{ asset('assets/frontend') }}/img/blog/blog-details/11.jpg"
                                                alt="Image"></a>
                                    </div>
                                    <div class="ltn__blog-brief">
                                        <div class="ltn__blog-meta">
                                            <ul>
                                                <li class="ltn__blog-date ltn__secondary-color">
                                                    <i class="far fa-calendar-alt"></i>June 22, 2020
                                                </li>
                                            </ul>
                                        </div>
                                        <h3 class="ltn__blog-title"><a href="blog-details.html">A series of iOS 7
                                                inspire
                                                vector icons sense.</a></h3>
                                        <p>Lorem ipsum dolor sit amet, conse ctet ur adipisicing elit, sed doing.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- Blog Item -->
                                <div class="ltn__blog-item ltn__blog-item-6">
                                    <div class="ltn__blog-img">
                                        <a href="blog-details.html"><img
                                                src="{{ asset('assets/frontend') }}/img/blog/blog-details/12.jpg"
                                                alt="Image"></a>
                                    </div>
                                    <div class="ltn__blog-brief">
                                        <div class="ltn__blog-meta">
                                            <ul>
                                                <li class="ltn__blog-date ltn__secondary-color">
                                                    <i class="far fa-calendar-alt"></i>June 22, 2020
                                                </li>
                                            </ul>
                                        </div>
                                        <h3 class="ltn__blog-title"><a href="blog-details.html">A series of iOS 7
                                                inspire
                                                vector icons sense.</a></h3>
                                        <p>Lorem ipsum dolor sit amet, conse ctet ur adipisicing elit, sed doing.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <!-- comment-area -->
                    <div class="ltn__comment-area mb-50">
                        {{-- <div class="ltn-author-introducing clearfix">
                            <div class="author-img">
                                <img src="{{ asset('assets/frontend') }}/img/blog/author.jpg" alt="Author Image">
                            </div>
                            <div class="author-info">
                                <h6>Written by</h6>
                                <h2>Rosalina D. William</h2>
                                <p>As we continue to grow, Starlite remains steadfast in its pursuit of excellence. We
                                    are actively expanding our footprint into new markets, exploring innovative building
                                    technologies</p>
                            </div>
                        </div> --}}
                        <h4 class="title-2">03 Comments</h4>
                        <div class="ltn__comment-inner">
                            <ul>
                                <li>
                                    <div class="ltn__comment-item clearfix">
                                        <div class="ltn__commenter-img">
                                            <img src="{{ asset('assets/frontend') }}/img/testimonial/Khondker-Abul-Qasem3.png"
                                                alt="Image">
                                        </div>
                                        <div class="ltn__commenter-comment">
                                            <h6><a href="#">Adam Smit</a></h6>
                                            <span class="comment-date">20th May 2020</span>
                                            <p>As we continue to grow, Starlite remains steadfast in its pursuit of
                                                excellence. We are actively expanding our footprint into new markets.
                                            </p>
                                            <a href="#" class="ltn__comment-reply-btn"><i
                                                    class="icon-reply-1"></i>Reply</a>
                                        </div>
                                    </div>
                                    <ul>
                                        <li>
                                            <div class="ltn__comment-item clearfix">
                                                <div class="ltn__commenter-img">
                                                    <img src="{{ asset('assets/frontend') }}/img/testimonial/Kawser-Ali.png"
                                                        alt="Image">
                                                </div>
                                                <div class="ltn__commenter-comment">
                                                    <h6><a href="#">Adam Smit</a></h6>
                                                    <span class="comment-date">21th May 2020</span>
                                                    <p>As we continue to grow, Starlite remains steadfast in its pursuit
                                                        of excellence. </p>
                                                    <a href="#" class="ltn__comment-reply-btn"><i
                                                            class="icon-reply-1"></i>Reply</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="ltn__comment-item clearfix">
                                        <div class="ltn__commenter-img">
                                            <img src="{{ asset('assets/frontend') }}/img/testimonial/Abul-Kashem.png"
                                                alt="Image">
                                        </div>
                                        <div class="ltn__commenter-comment">
                                            <h6><a href="#">Adam Smit</a></h6>
                                            <span class="comment-date">25th May 2020</span>
                                            <p>As we continue to grow, Starlite remains steadfast in its pursuit of
                                                excellence. We are actively expanding our footprint into new markets,
                                                exploring innovative building technologies</p>
                                            <a href="#" class="ltn__comment-reply-btn"><i
                                                    class="icon-reply-1"></i>Reply</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <hr>
                    <!-- comment-reply -->
                    <div class="ltn__comment-reply-area ltn__form-box mb-60---">
                        <h4 class="title-2">Post Comment</h4>
                        <form action="#">
                            <div class="input-item input-item-textarea ltn__custom-icon">
                                <textarea placeholder="Type your comments...."></textarea>
                            </div>
                            <div class="input-item input-item-name ltn__custom-icon">
                                <input type="text" placeholder="Type your name....">
                            </div>
                            <div class="input-item input-item-email ltn__custom-icon">
                                <input type="email" placeholder="Type your email....">
                            </div>
                            <div class="input-item input-item-website ltn__custom-icon">
                                <input type="text" name="website" placeholder="Type your website....">
                            </div>
                            <label class="mb-0 input-info-save"><input type="checkbox" name="agree"> Save my name,
                                email, and website in this browser for the next time I comment.</label>
                            <div class="btn-wrapper">
                                <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit"><i
                                        class="far fa-comments"></i> Post Comment</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @include('frontend.pages.news.component.blogsidebar')
        </div>
    </div>
</div>
<!-- PAGE DETAILS AREA END -->