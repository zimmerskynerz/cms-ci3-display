<style>
    .avatar {
        vertical-align: middle;
        width: 150px;
        height: 150px;
        border-radius: 50%;
    }
    .video-container { position: relative; padding-bottom: 56.25%; padding-top: 30px; height: 0; overflow: hidden; } .video-container iframe, .video-container object, .video-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }
</style>
<br>
<div class="container">
    <h3>
        <center>SELAMAT DATANG DI ILMUPARANORMAL.COM</center>
    </h3>
    <P>
        <center>
            BERIKUT ADALAH ILMU PARANORMLA PALING BANYAK DIINGINKAN</center>
    </p>
    <p>
        <center>
            KHODAM KHODAM TERSEBUT ADALAH KHODAM SINGA PUTIH, KHODAM MACAN PUTIH SILIWANGI, DAN NAGA EMAS, JIKA ANDA MENCARI KHODAM ATAU SPIRIT WUJUD LAINNYA SILAHKAN CEK KE BAWAH HALAMAN INI SAMPAI TUNTAS
        </center>
    </p>
    <div class="row">
    <?php
    foreach ($produk_laris as $Produk_laris) : ?>
        <div class="col-sm-4">
            <div class="contact-address">
                <h3><?= $Produk_laris->nm_produk ?></h3>
                <img src="<?= base_url() ?>cms/assets/produk/img/<?= $Produk_laris->foto ?>" alt="Avatar" class="avatar">
                <ul>
                    <li>Harga : Rp <?= $Produk_laris->harga ?>,-</li>
                </ul>
            </div>
        </div>
    <?php
    endforeach;
    ?>
    </div>
</div>
<section class="headding-news">
    <div class="container">
    <div class="video-container">
    <iframe width="560" height="315" src="<?= $data_depan['yt_depan'] ?>" allow='autoplay' title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    </div>
</section>

<section class="article-post-inner">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="articale-list">
                    <h3 class="category-headding ">Life style</h3>
                    <div class="headding-border"></div>

                    <div class="post-style2 wow fadeIn" data-wow-duration="1s">
                        <a href="#"><img src="<?= base_url('themes/news_paper/') ?>images/category/category-post-11.jpg" alt=""></a>
                        <div class="post-style2-detail">
                            <h3><a href="#" title="">It uses a dictionary of over 200 Latin words, combined with</a></h3>
                            <div class="date">
                                <ul>
                                    <li><img src="<?= base_url('themes/news_paper/') ?>images/comment-01.jpg" class="img-responsive" alt=""></li>
                                    <li>By <a title="" href="#"><span>Naeem Khan</span></a> --</li>
                                    <li><a title="" href="#">Oct 6, 2016</a> --</li>
                                    <li><a title="" href="#"><span>275 Comments</span></a></li>
                                </ul>
                            </div>
                            <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh.</p>
                            <button type="button" class="btn btn-style">Reade more</button>
                        </div>
                    </div>

                    <div class="post-style2 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <a href="#"><img src="<?= base_url('themes/news_paper/') ?>images/category/category-post-12.jpg" alt=""></a>
                        <div class="post-style2-detail">
                            <h3><a href="#" title="">Lorem Ipsum is simply dummy text of the printing .</a></h3>
                            <div class="date">
                                <ul>
                                    <li><img src="<?= base_url('themes/news_paper/') ?>images/comment-02.jpg" class="img-responsive" alt=""></li>
                                    <li>By <a title="" href="#"><span>Naeem Khan</span></a> --</li>
                                    <li><a title="" href="#">Oct 6, 2016</a> --</li>
                                    <li><a title="" href="#"><span>275 Comments</span></a></li>
                                </ul>
                            </div>
                            <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh.</p>
                            <button type="button" class="btn btn-style">Reade more</button>
                        </div>
                    </div>

                    <div class="post-style2 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <a href="#"><img src="<?= base_url('themes/news_paper/') ?>images/category/category-post-13.jpg" alt=""></a>
                        <div class="post-style2-detail">
                            <h3><a href="#" title="">If you are going to use a passage of Lorem Ipsum .</a></h3>
                            <div class="date">
                                <ul>
                                    <li><img src="<?= base_url('themes/news_paper/') ?>images/comment-01.jpg" class="img-responsive" alt=""></li>
                                    <li>By <a title="" href="#"><span>Naeem Khan</span></a> --</li>
                                    <li><a title="" href="#">Oct 6, 2016</a> --</li>
                                    <li><a title="" href="#"><span>275 Comments</span></a></li>
                                </ul>
                            </div>
                            <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh.</p>
                            <button type="button" class="btn btn-style">Reade more</button>
                        </div>
                    </div>

                    <div class="post-style2 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                        <a href="#"><img src="<?= base_url('themes/news_paper/') ?>images/category/category-post-14.jpg" alt=""></a>
                        <div class="post-style2-detail">
                            <h3><a href="#" title="">Check Out the Amazing Photos of Lauren Conradâ€™s Trip</a></h3>
                            <div class="date">
                                <ul>
                                    <li><img src="<?= base_url('themes/news_paper/') ?>images/comment-02.jpg" class="img-responsive" alt=""></li>
                                    <li>By <a title="" href="#"><span>Naeem Khan</span></a> --</li>
                                    <li><a title="" href="#">Oct 6, 2016</a> --</li>
                                    <li><a title="" href="#"><span>275 Comments</span></a></li>
                                </ul>
                            </div>
                            <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh.</p>
                            <button type="button" class="btn btn-style">Reade more</button>
                        </div>
                    </div>

                    <div class="post-style2 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                        <a href="#"><img src="<?= base_url('themes/news_paper/') ?>images/category/category-post-15.jpg" alt=""></a>
                        <div class="post-style2-detail">
                            <h3><a href="#" title="">Many desktop publishing packages and web page.</a></h3>
                            <div class="date">
                                <ul>
                                    <li><img src="<?= base_url('themes/news_paper/') ?>images/comment-01.jpg" class="img-responsive" alt=""></li>
                                    <li>By <a title="" href="#"><span>Naeem Khan</span></a> --</li>
                                    <li><a title="" href="#">Oct 6, 2016</a> --</li>
                                    <li><a title="" href="#"><span>275 Comments</span></a></li>
                                </ul>
                            </div>
                            <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh.</p>
                            <button type="button" class="btn btn-style">Reade more</button>
                        </div>
                    </div>

                    <div class="post-style2 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                        <a href="#"><img src="<?= base_url('themes/news_paper/') ?>images/category/category-post-11.jpg" alt=""></a>
                        <div class="post-style2-detail">
                            <h3><a href="#" title="">Many desktop publishing packages and web page.</a></h3>
                            <div class="date">
                                <ul>
                                    <li><img src="<?= base_url('themes/news_paper/') ?>images/comment-01.jpg" class="img-responsive" alt=""></li>
                                    <li>By <a title="" href="#"><span>Naeem Khan</span></a> --</li>
                                    <li><a title="" href="#">Oct 6, 2016</a> --</li>
                                    <li><a title="" href="#"><span>275 Comments</span></a></li>
                                </ul>
                            </div>
                            <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh.</p>
                            <button type="button" class="btn btn-style">Reade more</button>
                        </div>
                    </div>

                    <div class="post-style2 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                        <a href="#"><img src="<?= base_url('themes/news_paper/') ?>images/category/category-post-12.jpg" alt=""></a>
                        <div class="post-style2-detail">
                            <h3><a href="#" title="">Many desktop publishing packages and web page.</a></h3>
                            <div class="date">
                                <ul>
                                    <li><img src="<?= base_url('themes/news_paper/') ?>images/comment-01.jpg" class="img-responsive" alt=""></li>
                                    <li>By <a title="" href="#"><span>Naeem Khan</span></a> --</li>
                                    <li><a title="" href="#">Oct 6, 2016</a> --</li>
                                    <li><a title="" href="#"><span>275 Comments</span></a></li>
                                </ul>
                            </div>
                            <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh.</p>
                            <button type="button" class="btn btn-style">Reade more</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 left-padding">
                <div class="input-group search-area">

                    <input type="text" class="form-control" placeholder="Search articles here ..." name="q">
                    <div class="input-group-btn">
                        <button class="btn btn-search" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </div>
                </div>


                <div class="online-vote">
                    <h3 class="category-headding ">ONLINE VOTE</h3>
                    <div class="headding-border"></div>
                    <div class="vote-inner">
                        <p>All the Lorem Ipsum generators the Internet tend repeat predefined chunks as necessary, making this the . </p>
                        <div class="radio-btn">
                            <label class="radio-inline">
                                <input type="radio" name="optradio">Yes</label>
                            <label class="radio-inline">
                                <input type="radio" name="optradio">No</label>
                            <label class="radio-inline">
                                <input type="radio" name="optradio">No comment</label>
                        </div>
                        <button type="button" class="btn btn-style">Success</button>
                    </div>
                </div>


                <div class="widget-slider-inner">
                    <h3 class="category-headding ">Slider Widget</h3>
                    <div class="headding-border"></div>
                    <div id="widget-slider" class="owl-carousel owl-theme">

                        <div class="item">
                            <a href="#"><img src="<?= base_url('themes/news_paper/') ?>images/slider-widget-1.jpg" alt=""></a>
                            <h4><a href="#">For good results must be make good plan</a></h4>
                            <div class="date">
                                <ul>
                                    <li>By<a title="" href="#"><span>Jone Kilna</span></a> --</li>
                                    <li><a title="" href="#">Oct 6, 2016</a></li>
                                </ul>
                            </div>
                            <p>Dhaka: Dhaka Metropolitan Sessions a Judge Court on Wednesday issued warrants for the arrest of 29 BNP leaders, including some ina senior leaders...</p>
                        </div>

                        <div class="item">
                            <a href="#"><img src="<?= base_url('themes/news_paper/') ?>images/slider-widget-2.jpg" alt=""></a>
                            <h4><a href="#">Dog invason sparks chaos at IPL match</a></h4>
                            <div class="date">
                                <ul>
                                    <li>By<a title="" href="#"><span>Jone Kilna</span></a> --</li>
                                    <li><a title="" href="#">Oct 6, 2016</a></li>
                                </ul>
                            </div>
                            <p>Dhaka: Dhaka Metropolitan Sessions a Judge Court on Wednesday issued warrants for the arrest of 29 BNP leaders, including some ina senior leaders ...</p>
                        </div>

                        <div class="item">
                            <a href="#"><img src="<?= base_url('themes/news_paper/') ?>images/slider-widget-3.jpg" alt=""></a>
                            <h4><a href="#">For good results must be make good plan</a></h4>
                            <div class="date">
                                <ul>
                                    <li>By<a title="" href="#"><span>Jone Kilna</span></a> --</li>
                                    <li><a title="" href="#">Oct 6, 2016</a></li>
                                </ul>
                            </div>
                            <p>Dhaka: Dhaka Metropolitan Sessions a Judge Court on Wednesday issued warrants for the arrest of 29 BNP leaders, including some ina senior leaders ...</p>
                        </div>
                    </div>
                </div>

                <h3 class="category-headding ">TWITTER FEED</h3>
                <div class="headding-border"></div>
                <div class="feed-inner">
                    <p>It is a long established fact that a reader will be distracted by the.</p>
                    <div class="feed-footer">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                        <cite><a href="#" class="social-feed__author">@newsagency</a></cite>
                        <span class="feed-date">2 hours ago</span>
                    </div>
                    <hr>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                    <div class="feed-footer">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                        <cite><a href="#" class="social-feed__author">@newsagency</a></cite>
                        <span class="feed-date">2 hours ago</span>
                    </div>
                    <hr>
                    <p>The standard chunk of Lorem Ipsum used since the 1500s is.</p>
                    <div class="feed-footer">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                        <cite><a href="#" class="social-feed__author">@newsagency</a></cite>
                        <span class="feed-date">2 hours ago</span>
                    </div>
                </div>


                <div class="latest-comments-inner">
                    <h3 class="category-headding ">LATEST COMMENT</h3>
                    <div class="headding-border"></div>

                    <div class="post-style2 latest-com">
                        <img src="<?= base_url('themes/news_paper/') ?>images/comment-01.jpg" alt="">
                        <div class="latest-com-detail">
                            <h5><a href="#" title="">It uses a dictionary of over</a></h5>
                            <span>Nec sagittis sem nibh dictionary...</span>
                            <p>Proin gravida nibh vel velit auctor aliquet. </p>
                        </div>
                    </div>

                    <div class="post-style2 latest-com">
                        <img src="<?= base_url('themes/news_paper/') ?>images/comment-02.jpg" alt="">
                        <div class="latest-com-detail">
                            <h5><a href="#" title="">It uses a dictionary of over</a></h5>
                            <span>Nec sagittis sem nibh dictionary...</span>
                            <p>Proin gravida nibh vel velit auctor aliquet. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-sm-8">

            <section class="recent_news_inner">
                <h3 class="category-headding ">International</h3>
                <div class="headding-border"></div>
                <div class="row">
                    <div id="content-slide" class="owl-carousel">

                        <div class="item home2-post">
                            <div class="post-wrapper wow fadeIn" data-wow-duration="1s">

                                <div class="post-thumb">
                                    <a href="#">
                                        <img class="img-responsive" src="<?= base_url('themes/news_paper/') ?>images/recent_news_01.jpg" alt="">
                                    </a>
                                </div>
                                <div class="post-info meta-info-rn">
                                    <div class="slide">
                                        <a target="_blank" href="#" class="post-badge btn_six">T</a>
                                    </div>
                                </div>
                            </div>
                            <h3><a href="#">There are many variations of passages of Lorem Ipsum available</a></h3>
                            <div class="post-title-author-details">
                                <div class="date">
                                    <ul>
                                        <li>By <a title="" href="#"><span>Naeem Khan</span></a> --</li>
                                        <li><a title="" href="#">Oct 6, 2016</a> --</li>
                                        <li><a title="" href="#"><span>275 Comments</span></a></li>
                                    </ul>
                                </div>
                                <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true <a href="#">Read more...</a></p>
                            </div>
                        </div>

                        <div class="item home2-post">
                            <div class="post-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">

                                <div class="post-thumb">
                                    <a href="#">
                                        <img class="img-responsive" src="<?= base_url('themes/news_paper/') ?>images/recent_news_02.jpg" alt="">
                                    </a>
                                </div>
                                <div class="post-info meta-info-rn">
                                    <div class="slide">
                                        <a target="_blank" href="#" class="post-badge btn_sev">I</a>
                                    </div>
                                </div>
                            </div>
                            <h3><a href="#">There are many variations of passages of Lorem Ipsum available</a></h3>
                            <div class="post-title-author-details">
                                <div class="date">
                                    <ul>
                                        <li>By <a title="" href="#"><span>Naeem Khan</span></a> --</li>
                                        <li><a title="" href="#">Oct 6, 2016</a> --</li>
                                        <li><a title="" href="#"><span>275 Comments</span></a></li>
                                    </ul>
                                </div>
                                <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true <a href="#">Read more...</a></p>
                            </div>
                        </div>

                        <div class="item home2-post">
                            <div class="post-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">

                                <div class="post-thumb">
                                    <a href="#">
                                        <img class="img-responsive" src="<?= base_url('themes/news_paper/') ?>images/recent_news_03.jpg" alt="">
                                    </a>
                                </div>
                                <div class="post-info meta-info-rn">
                                    <div class="slide">
                                        <a target="_blank" href="#" class="post-badge btn_five">B</a>
                                    </div>
                                </div>
                            </div>
                            <h3><a href="#">There are many variations of passages of Lorem Ipsum available</a></h3>
                            <div class="post-title-author-details">
                                <div class="date">
                                    <ul>
                                        <li>By <a title="" href="#"><span>Naeem Khan</span></a> --</li>
                                        <li><a title="" href="#">Oct 6, 2016</a> --</li>
                                        <li><a title="" href="#"><span>275 Comments</span></a></li>
                                    </ul>
                                </div>
                                <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true <a href="#">Read more...</a></p>
                            </div>
                        </div>

                        <div class="item home2-post">
                            <div class="post-wrapper wow fadeIn" data-wow-duration="1s">

                                <div class="post-thumb">
                                    <a href="#">
                                        <img class="img-responsive" src="<?= base_url('themes/news_paper/') ?>images/recent_news_04.jpg" alt="">
                                    </a>
                                </div>
                                <div class="post-info meta-info-rn">
                                    <div class="slide">
                                        <a target="_blank" href="#" class="post-badge btn_eight">H</a>
                                    </div>
                                </div>
                            </div>
                            <div class="post-title-author-details">
                                <h3><a href="#">World Econmy Changing and Affecting in 3rd ...</a></h3>
                                <div class="date">
                                    <ul>
                                        <li>By <a title="" href="#"><span>Naeem Khan</span></a> --</li>
                                        <li><a title="" href="#">Oct 6, 2016</a></li>
                                    </ul>
                                </div>
                                <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true <a href="#">Read more...</a></p>
                            </div>
                        </div>

                        <div class="item home2-post">
                            <div class="post-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">

                                <div class="post-thumb">
                                    <a href="#">
                                        <img class="img-responsive" src="<?= base_url('themes/news_paper/') ?>images/recent_news_05.jpg" alt="">
                                    </a>
                                </div>
                                <div class="post-info meta-info-rn">
                                    <div class="slide">
                                        <a target="_blank" href="#" class="post-badge btn_nine">p</a>
                                    </div>
                                </div>
                            </div>
                            <div class="post-title-author-details">
                                <h3><a href="#">World Econmy Changing and Affecting in 3rd ...</a></h3>
                                <div class="date">
                                    <ul>
                                        <li>By <a title="" href="#"><span>Naeem Khan</span></a> --</li>
                                        <li><a title="" href="#">Oct 6, 2016</a></li>
                                    </ul>
                                </div>
                                <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true <a href="#">Read more...</a></p>
                            </div>
                        </div>

                        <div class="item home2-post">
                            <div class="post-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">

                                <div class="post-thumb">
                                    <a href="#">
                                        <img class="img-responsive" src="<?= base_url('themes/news_paper/') ?>images/recent_news_06.jpg" alt="">
                                    </a>
                                </div>
                                <div class="post-info meta-info-rn">
                                    <div class="slide">
                                        <a target="_blank" href="#" class="post-badge btn_one">F</a>
                                    </div>
                                </div>
                            </div>
                            <div class="post-title-author-details">
                                <h3><a href="#">World Econmy Changing and Affecting in 3rd ...</a></h3>
                                <div class="date">
                                    <ul>
                                        <li>By <a title="" href="#"><span>Naeem Khan</span></a> --</li>
                                        <li><a title="" href="#">Oct 6, 2016</a></li>
                                    </ul>
                                </div>
                                <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true <a href="#">Read more...</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="politics_wrapper">
                <h3 class="category-headding ">POLITICS</h3>
                <div class="headding-border"></div>
                <div class="row">
                    <div id="content-slide-2" class="owl-carousel">

                        <div class="item">
                            <div class="row">

                                <div class="col-sm-6 col-md-6">
                                    <div class="home2-post">
                                        <div class="post-wrapper wow fadeIn" data-wow-duration="1s">

                                            <div class="post-thumb">
                                                <a href="#">
                                                    <img src="<?= base_url('themes/news_paper/') ?>images/politics_01.jpg" class="img-responsive" alt="">
                                                </a>
                                            </div>

                                            <h3><a href="#">There are many variations of passages of Lorem Ipsum available</a></h3>
                                        </div>
                                        <div class="post-title-author-details">
                                            <div class="date">
                                                <ul>
                                                    <li>By <a title="" href="#"><span>Naeem Khan</span></a> --</li>
                                                    <li><a title="" href="#">Oct 6, 2016</a> --</li>
                                                    <li><a title="" href="#"><span>275 Comments</span></a></li>
                                                </ul>
                                            </div>
                                            <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true <a href="#">Read more...</a></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-6">
                                    <div class="row rn_block">
                                        <div class="col-xs-6 col-md-6 col-sm-6 post-padding">
                                            <div class="home2-post">

                                                <div class="post-thumb wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                                                    <a href="#">
                                                        <img src="<?= base_url('themes/news_paper/') ?>images/politics_02.jpg" class="img-responsive" alt="">
                                                    </a>
                                                </div>
                                                <div class="post-title-author-details">

                                                    <h5><a href="#">Microbus runs over 2 pedestrians in Banani</a></h5>
                                                    <div class="date">
                                                        <ul>
                                                            <li><a title="" href="#"><span>Naeem Khan</span></a> --</li>
                                                            <li><a title="" href="#">Oct 6, 2016</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-md-6 col-sm-6 post-padding">
                                            <div class="home2-post">

                                                <div class="post-thumb wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                                                    <a href="#">
                                                        <img src="<?= base_url('themes/news_paper/') ?>images/politics_03.jpg" class="img-responsive" alt="">
                                                    </a>
                                                </div>
                                                <div class="post-title-author-details">

                                                    <h5><a href="#">Microbus runs over 2 pedestrians in Banani</a></h5>
                                                    <div class="date">
                                                        <ul>
                                                            <li><a title="" href="#"><span>Naeem Khan</span></a> --</li>
                                                            <li><a title="" href="#">Oct 6, 2016</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-md-6 col-sm-6 post-padding">
                                            <div class="home2-post">

                                                <div class="post-thumb wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                                                    <a href="#">
                                                        <img src="<?= base_url('themes/news_paper/') ?>images/politics_04.jpg" class="img-responsive" alt="">
                                                    </a>
                                                </div>
                                                <div class="post-title-author-details">

                                                    <h5><a href="#">Microbus runs over 2 pedestrians in Banani</a></h5>
                                                    <div class="date">
                                                        <ul>
                                                            <li><a title="" href="#"><span>Naeem Khan</span></a> --</li>
                                                            <li><a title="" href="#">Oct 6, 2016</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-md-6 col-sm-6 post-padding">
                                            <div class="home2-post">

                                                <div class="post-thumb wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                                                    <a href="#">
                                                        <img src="<?= base_url('themes/news_paper/') ?>images/politics_05.jpg" class="img-responsive" alt="">
                                                    </a>
                                                </div>
                                                <div class="post-title-author-details">

                                                    <h5><a href="#">Microbus runs over 2 pedestrians in Banani</a></h5>
                                                    <div class="date">
                                                        <ul>
                                                            <li><a title="" href="#"><span>Naeem Khan</span></a> --</li>
                                                            <li><a title="" href="#">Oct 6, 2016</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="row">

                                <div class="col-sm-6 col-md-6">
                                    <div class="home2-post">
                                        <div class="post-wrapper wow fadeIn" data-wow-duration="1s">

                                            <div class="post-thumb">
                                                <a href="#">
                                                    <img src="<?= base_url('themes/news_paper/') ?>images/politics_01.jpg" class="img-responsive" alt="">
                                                </a>
                                            </div>

                                            <h3><a href="#">There are many variations of passages of Lorem Ipsum available</a></h3>
                                        </div>
                                        <div class="post-title-author-details">
                                            <div class="date">
                                                <ul>
                                                    <li>By <a title="" href="#"><span>Naeem Khan</span></a> --</li>
                                                    <li><a title="" href="#">11 Nov 2015</a> --</li>
                                                    <li><a title="" href="#"><span>275 Comments</span></a></li>
                                                </ul>
                                            </div>
                                            <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true <a href="#">Read more...</a></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-6">
                                    <div class="row rn_block">
                                        <div class="col-xs-6 col-md-6 col-sm-6 post-padding">
                                            <div class="home2-post">

                                                <div class="post-thumb wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                                                    <a href="#">
                                                        <img src="<?= base_url('themes/news_paper/') ?>images/politics_02.jpg" class="img-responsive" alt="">
                                                    </a>
                                                </div>
                                                <div class="post-title-author-details">

                                                    <h5><a href="#">Microbus runs over 2 pedestrians in Banani</a></h5>
                                                    <div class="date">
                                                        <ul>
                                                            <li><a title="" href="#"><span>Naeem Khan</span></a> --</li>
                                                            <li><a title="" href="#">Oct 6, 2016</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-md-6 col-sm-6 post-padding">
                                            <div class="home2-post">

                                                <div class="post-thumb wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                                                    <a href="#">
                                                        <img src="<?= base_url('themes/news_paper/') ?>images/politics_03.jpg" class="img-responsive" alt="">
                                                    </a>
                                                </div>
                                                <div class="post-title-author-details">

                                                    <h5><a href="#">Microbus runs over 2 pedestrians in Banani</a></h5>
                                                    <div class="date">
                                                        <ul>
                                                            <li><a title="" href="#"><span>Naeem Khan</span></a> --</li>
                                                            <li><a title="" href="#">Oct 6, 2016</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-md-6 col-sm-6 post-padding">
                                            <div class="home2-post">

                                                <div class="post-thumb wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                                                    <a href="#">
                                                        <img src="<?= base_url('themes/news_paper/') ?>images/politics_04.jpg" class="img-responsive" alt="">
                                                    </a>
                                                </div>
                                                <div class="post-title-author-details">

                                                    <h5><a href="#">Microbus runs over 2 pedestrians in Banani</a></h5>
                                                    <div class="date">
                                                        <ul>
                                                            <li><a title="" href="#"><span>Naeem Khan</span></a> --</li>
                                                            <li><a title="" href="#">Oct 6, 2016</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-md-6 col-sm-6 post-padding">
                                            <div class="home2-post">

                                                <div class="post-thumb wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                                                    <a href="#">
                                                        <img src="<?= base_url('themes/news_paper/') ?>images/politics_05.jpg" class="img-responsive" alt="">
                                                    </a>
                                                </div>
                                                <div class="post-title-author-details">

                                                    <h5><a href="#">Microbus runs over 2 pedestrians in Banani</a></h5>
                                                    <div class="date">
                                                        <ul>
                                                            <li><a title="" href="#"><span>Naeem Khan</span></a> --</li>
                                                            <li><a title="" href="#">Oct 6, 2016</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

            <div class="ads">
                <a href="#"><img src="<?= base_url('themes/news_paper/') ?>images/top-bannner2.jpg" class="img-responsive center-block" alt=""></a>
            </div>
        </div>

        <div class="col-md-4 col-sm-4 left-padding">


            <h3 class="category-headding ">SOCIAL PIXEL</h3>
            <div class="headding-border"></div>
            <div class="social">
                <ul>
                    <li><a href="#" class="facebook"><i class="fa  fa-facebook"></i><span>3987</span> </a></li>
                    <li><a href="#" class="twitter"><i class="fa  fa-twitter"></i><span>3987</span></a></li>
                    <li><a href="#" class="google"><i class="fa  fa-google-plus"></i><span>3987</span></a></li>
                    <li><a href="#" class="flickr"><i class="fa fa-flickr"></i><span>3987</span> </a></li>
                </ul>
            </div>

            <div class="banner-add">

                <span class="add-title">- Advertisement -</span>
                <a href="#"><img src="<?= base_url('themes/news_paper/') ?>images/ad-banner.jpg" class="img-responsive center-block" alt=""></a>
            </div>
            <div class="tab-inner">
                <ul class="tabs">
                    <li><a href="#">POPULAR</a></li>
                    <li><a href="#">MOST VIEWED</a></li>
                </ul>
                <hr>

                <div class="tab_content">
                    <div class="tab-item-inner">
                        <div class="box-item wow fadeIn" data-wow-duration="1s">
                            <div class="img-thumb">
                                <a href="#" rel="bookmark"><img class="entry-thumb" src="<?= base_url('themes/news_paper/') ?>images/popular_news_01.jpg" alt="" height="80" width="90"></a>
                            </div>
                            <div class="item-details">
                                <h6 class="sub-category-title bg-color-1">
                                    <a href="#">SPORTS</a>
                                </h6>
                                <h3 class="td-module-title"><a href="#">It is a long established fact that a reader will</a></h3>
                                <div class="post-editor-date">

                                    <div class="post-date">
                                        <i class="pe-7s-clock"></i> Oct 6, 2016
                                    </div>

                                    <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                            <div class="img-thumb">
                                <a href="#" rel="bookmark"><img class="entry-thumb" src="<?= base_url('themes/news_paper/') ?>images/popular_news_02.jpg" alt="" height="80" width="90"></a>
                            </div>
                            <div class="item-details">
                                <h6 class="sub-category-title bg-color-2">
                                    <a href="#">TECHNOLOGY </a>
                                </h6>
                                <h3 class="td-module-title"><a href="#">The generated Lorem Ipsum is therefore</a></h3>
                                <div class="post-editor-date">

                                    <div class="post-date">
                                        <i class="pe-7s-clock"></i> Oct 6, 2016
                                    </div>

                                    <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                            <div class="img-thumb">
                                <a href="#" rel="bookmark"><img class="entry-thumb" src="<?= base_url('themes/news_paper/') ?>images/popular_news_03.jpg" alt="" height="80" width="90"></a>
                            </div>
                            <div class="item-details">
                                <h6 class="sub-category-title bg-color-3">
                                    <a href="#">HEALTH</a>
                                </h6>
                                <h3 class="td-module-title"><a href="#">The standard chunk of Lorem Ipsum used since</a></h3>
                                <div class="post-editor-date">

                                    <div class="post-date">
                                        <i class="pe-7s-clock"></i> Oct 6, 2016
                                    </div>

                                    <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                            <div class="img-thumb">
                                <a href="#" rel="bookmark"><img class="entry-thumb" src="<?= base_url('themes/news_paper/') ?>images/popular_news_04.jpg" alt="" height="80" width="90"></a>
                            </div>
                            <div class="item-details">
                                <h6 class="sub-category-title bg-color-4">
                                    <a href="#">FASHION</a>
                                </h6>
                                <h3 class="td-module-title"><a href="#">Lorem Ipum therefore always free from</a></h3>
                                <div class="post-editor-date">

                                    <div class="post-date">
                                        <i class="pe-7s-clock"></i> Oct 6, 2016
                                    </div>

                                    <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-item-inner">
                        <div class="box-item">
                            <div class="img-thumb">
                                <a href="#" rel="bookmark"><img class="entry-thumb" src="<?= base_url('themes/news_paper/') ?>images/popular_news_01.jpg" alt="" height="80" width="90"></a>
                            </div>
                            <div class="item-details">
                                <h6 class="sub-category-title bg-color-5">
                                    <a href="#">BUSINESS</a>
                                </h6>
                                <h3 class="td-module-title"><a href="#">It is a long established fact that a reader will</a></h3>
                                <div class="post-editor-date">

                                    <div class="post-date">
                                        <i class="pe-7s-clock"></i> Oct 6, 2016
                                    </div>

                                    <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-item">
                            <div class="img-thumb">
                                <a href="#" rel="bookmark"><img class="entry-thumb" src="<?= base_url('themes/news_paper/') ?>images/popular_news_02.jpg" alt="" height="80" width="90"></a>
                            </div>
                            <div class="item-details">
                                <h6 class="sub-category-title bg-color-2">
                                    <a href="#">TECHNOLOGY </a>
                                </h6>
                                <h3 class="td-module-title"><a href="#">The generated Lorem Ipsum is therefore</a></h3>
                                <div class="post-editor-date">

                                    <div class="post-date">
                                        <i class="pe-7s-clock"></i> Oct 6, 2016
                                    </div>

                                    <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-item">
                            <div class="img-thumb">
                                <a href="#" rel="bookmark"><img class="entry-thumb" src="<?= base_url('themes/news_paper/') ?>images/popular_news_03.jpg" alt="" height="80" width="90"></a>
                            </div>
                            <div class="item-details">
                                <h6 class="sub-category-title bg-color-3">
                                    <a href="#">HEALTH</a>
                                </h6>
                                <h3 class="td-module-title"><a href="#">The standard chunk of Lorem Ipsum used since</a></h3>
                                <div class="post-editor-date">

                                    <div class="post-date">
                                        <i class="pe-7s-clock"></i> Oct 6, 2016
                                    </div>

                                    <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-item">
                            <div class="img-thumb">
                                <a href="#" rel="bookmark"><img class="entry-thumb" src="<?= base_url('themes/news_paper/') ?>images/popular_news_04.jpg" alt="" height="80" width="90"></a>
                            </div>
                            <div class="item-details">
                                <h6 class="sub-category-title bg-color-4">
                                    <a href="#">FASHION</a>
                                </h6>
                                <h3 class="td-module-title"><a href="#">Lorem Ipum therefore always free from</a></h3>
                                <div class="post-editor-date">

                                    <div class="post-date">
                                        <i class="pe-7s-clock"></i> Oct 6, 2016
                                    </div>

                                    <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>

</div>