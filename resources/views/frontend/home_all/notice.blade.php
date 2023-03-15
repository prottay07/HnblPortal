<section class="portfolio">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section__title text-center">
                            <span class="sub-title">Notice Board</span>
                            <h2 class="title">All Notices</h2>
                        </div>
                    </div>
                </div>

              
                <div class="row justify-content-center">
                    <div class="col-xl-10 col-lg-12">
                        <ul class="nav nav-tabs portfolio__nav" id="portfolioTab" role="tablist">
                 
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-content" id="portfolioTabContent">

            <?php
                $allNotice = App\Models\NoticeBoard::latest()->get();
                ?>

                
                <div class="tab-pane show active" id="all" role="tabpanel" aria-labelledby="all-t">
                    <div class="container">
                        <div class="row gx-0 justify-content-center">
                            <div class="col">
                                <div class="portfolio__active">

                                @foreach($allNotice as $notice)
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{asset($notice->notice_img)}}" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>{{$notice->notice_title}}</span>
                                            <h4 class="title"><a href="{{route('notice.details',$notice->id)}}">{{$notice->notice_name}}</a></h4>
                                            <span>Date: {{$notice->notice_time_end}}</span>
                                        </div>
                                    </div>
                                @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="tab-pane " id="website" role="tabpanel" aria-labelledby="website-tab">
                    <div class="container">
                        <div class="row gx-0 justify-content-center">
                            <div class="col">
                                <div class="portfolio__active">

                                @foreach($allNotice as $notice)

                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="{{asset($notice->notice_img)}}" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>{{$notice->notice_title}}</span>
                                            <h4 class="title"><a href="portfolio-details.html">{{$notice->notice_desc}}</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                          
                                @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

            </div>
        </section>