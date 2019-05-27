@extends('layouts.base')

@section('content')
<section id="content">

    <div class="content-wrap">

        <div class="container clearfix">

            <!-- Post Content
                        ============================================= -->
            <div class="postcontent nobottommargin clearfix">

                <div class="single-post nobottommargin">

                    <!-- Single Post
                                ============================================= -->
                    <div class="entry clearfix">

                        <!-- Entry Title
                                    ============================================= -->
                        <div class="entry-title">
                            <h2>{{$data->judul}}</h2>
                        </div><!-- .entry-title end -->

                        <!-- Entry Meta
                                    ============================================= -->
                        <ul class="entry-meta clearfix">
                            <li><i class="icon-calendar3"></i>{{date_format($data->updated_at, "d F Y")}}</li>
                            <li><a href="#"><i class="icon-user"></i> admin</a></li>
                            <!-- <li><i class="icon-folder-open"></i> <a href="#">General</a>, <a href="#">Media</a></li> -->
                            @if($data->type == "berita")
                            <li><span class="badge badge-secondary">Berita</span></li>
                            @else
                            <li><span class="badge badge-info">Promo</span></li>
                            @endif
                            <!-- <li><a href="#"><i class="icon-camera-retro"></i></a></li> -->
                        </ul><!-- .entry-meta end -->

                        <!-- Entry Image
                                    ============================================= -->
                        <div class="entry-image">
                            <a href="#"><img src="{{asset('img/berita/'.$data->gambar)}}" alt="Blog Single"></a>
                        </div><!-- .entry-image end -->

                        <!-- Entry Content
                                    ============================================= -->
                        <div class="entry-content notopmargin">

                            <p>{{$data->deskripsi}}</p>

                            <blockquote>
                                <p>Vestibulum id ligula porta felis euismod semper. Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper.</p>
                            </blockquote>

                            <!-- Post Single - Content End -->


                            <div class="clear"></div>

                            <!-- Post Single - Share
                                        ============================================= -->
                            <div class="si-share noborder clearfix">
                                <span>Share this Post:</span>
                                <div>
                                    <a href="#" class="social-icon si-borderless si-facebook">
                                        <i class="icon-facebook"></i>
                                        <i class="icon-facebook"></i>
                                    </a>
                                    <a href="#" class="social-icon si-borderless si-twitter">
                                        <i class="icon-twitter"></i>
                                        <i class="icon-twitter"></i>
                                    </a>
                                    <a href="#" class="social-icon si-borderless si-pinterest">
                                        <i class="icon-pinterest"></i>
                                        <i class="icon-pinterest"></i>
                                    </a>
                                    <a href="#" class="social-icon si-borderless si-gplus">
                                        <i class="icon-gplus"></i>
                                        <i class="icon-gplus"></i>
                                    </a>
                                    <a href="#" class="social-icon si-borderless si-rss">
                                        <i class="icon-rss"></i>
                                        <i class="icon-rss"></i>
                                    </a>
                                    <a href="#" class="social-icon si-borderless si-email3">
                                        <i class="icon-email3"></i>
                                        <i class="icon-email3"></i>
                                    </a>
                                </div>
                            </div><!-- Post Single - Share End -->

                        </div>
                    </div><!-- .entry end -->


                    <!-- Comments
                                ============================================= -->
                    <div id="comments" class="clearfix">

                        <h3 id="comments-title"><span>3</span> Comments</h3>

                        <!-- Comments List
                                    ============================================= -->
                        <ol class="commentlist clearfix">

                            <li class="comment even thread-even depth-1" id="li-comment-1">

                                <div id="comment-1" class="comment-wrap clearfix">

                                    <div class="comment-meta">

                                        <div class="comment-author vcard">

                                            <span class="comment-avatar clearfix">
                                                <img alt='' src='http://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=60' class='avatar avatar-60 photo avatar-default' height='60' width='60' /></span>

                                        </div>

                                    </div>

                                    <div class="comment-content clearfix">

                                        <div class="comment-author">John Doe<span><a href="#" title="Permalink to this comment">April 24, 2012 at 10:46 am</a></span></div>

                                        <p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>

                                        <a class='comment-reply-link' href='#'><i class="icon-reply"></i></a>

                                    </div>

                                    <div class="clear"></div>

                                </div>


                                <ul class='children'>

                                    <li class="comment byuser comment-author-_smcl_admin odd alt depth-2" id="li-comment-3">

                                        <div id="comment-3" class="comment-wrap clearfix">

                                            <div class="comment-meta">

                                                <div class="comment-author vcard">

                                                    <span class="comment-avatar clearfix">
                                                        <img alt='' src='http://1.gravatar.com/avatar/30110f1f3a4238c619bcceb10f4c4484?s=40&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D40&amp;r=G' class='avatar avatar-40 photo' height='40' width='40' /></span>

                                                </div>

                                            </div>

                                            <div class="comment-content clearfix">

                                                <div class="comment-author"><a href='#' rel='external nofollow' class='url'>SemiColon</a><span><a href="#" title="Permalink to this comment">April 25, 2012 at 1:03 am</a></span></div>

                                                <p>Nullam id dolor id nibh ultricies vehicula ut id elit.</p>

                                                <a class='comment-reply-link' href='#'><i class="icon-reply"></i></a>

                                            </div>

                                            <div class="clear"></div>

                                        </div>

                                    </li>

                                </ul>

                            </li>

                            <li class="comment byuser comment-author-_smcl_admin even thread-odd thread-alt depth-1" id="li-comment-2">

                                <div id="comment-2" class="comment-wrap clearfix">

                                    <div class="comment-meta">

                                        <div class="comment-author vcard">

                                            <span class="comment-avatar clearfix">
                                                <img alt='' src='http://1.gravatar.com/avatar/30110f1f3a4238c619bcceb10f4c4484?s=60&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D60&amp;r=G' class='avatar avatar-60 photo' height='60' width='60' /></span>

                                        </div>

                                    </div>

                                    <div class="comment-content clearfix">

                                        <div class="comment-author"><a href='http://themeforest.net/user/semicolonweb' rel='external nofollow' class='url'>SemiColon</a><span><a href="#" title="Permalink to this comment">April 25, 2012 at 1:03 am</a></span></div>

                                        <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>

                                        <a class='comment-reply-link' href='#'><i class="icon-reply"></i></a>

                                    </div>

                                    <div class="clear"></div>

                                </div>

                            </li>

                        </ol><!-- .commentlist end -->

                        <div class="clear"></div>

                    </div><!-- #comments end -->

                </div>

            </div><!-- .postcontent end -->

        </div>

    </div>

</section><!-- #content end -->
@endsection