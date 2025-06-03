 <!-- ABOUT US AREA START -->
 <div class="container">
    <div class="ltn__about-us-area pt-40 pb-90 ">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="about-us-info-wrap">
                    <div class="section-title-area ltn__section-title-2--- mb-30">
                        <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">About Us</h6>
                        <h1 class="section-title">{{$today_sells?->title}}</h1>
                        <p>{{ $today_sells?->description }}</p>
                    </div>
                    <ul class="ltn__list-item-1 ltn__list-item-1-before clearfix">
                        @foreach ($today_sells?->features ?? [] as $item)
                            <li> {{ $item['title']}}</li>
                            
                        @endforeach
                        {{-- <li>Our SecretIsland Boat Tour is Just for You</li>
                        <li>Live Music Cocerts at Luviana</li>
                        <li>Live Music Cocerts at Luviana</li> --}}
                    </ul>

                    <ul class="ltn__list-item-2 ltn__list-item-2-before ltn__flat-info">
                        @foreach ($today_sells->key_features ?? [] as $item)
                            <li><span>{{$item['number']}} <i class="{{$item['icon']}}"></i></span>
                                {{$item['title']}}
                            </li>
                        @endforeach
                        {{-- <li><span>2 <i class="flaticon-clean"></i></span>
                            Bathrooms
                        </li>
                        <li><span>2 <i class="flaticon-car"></i></span>
                            Car parking
                        </li>
                        <li><span>3450 <i class="flaticon-square-shape-design-interface-tool-symbol"></i></span>
                            square Ft
                        </li> --}}
                    </ul>
                    <ul class="ltn__list-item-2 ltn__list-item-2-before--- ltn__list-item-2-img mb-50">
                        {{-- @foreach ($today_sells?->image_gallery_left as $item)
                            <li>
                                <a href="{{ asset('assets/frontend') }}/img/img-slide/11.jpg" data-rel="lightcase:myCollection">
                                    <img src="{{ asset('assets/frontend') }}/img/img-slide/11.jpg" alt="Image">
                                </a>
                            </li>
                        @endforeach --}}
                        <li>
                            <a href="{{ asset('assets/frontend') }}/img/img-slide/11.jpg" data-rel="lightcase:myCollection">
                                <img src="{{ asset('assets/frontend') }}/img/img-slide/11.jpg" alt="Image">
                            </a>
                        </li>
                        <li>
                            <a href="{{ asset('assets/frontend') }}/img/img-slide/12.jpg" data-rel="lightcase:myCollection">
                                <img src="{{ asset('assets/frontend') }}/img/img-slide/12.jpg" alt="Image">
                            </a>
                        </li>
                        <li>
                            <a href="{{ asset('assets/frontend') }}/img/img-slide/13.jpg" data-rel="lightcase:myCollection">
                                <img src="{{ asset('assets/frontend') }}/img/img-slide/13.jpg" alt="Image">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 align-self-center">
                <div class="about-us-img-wrap about-img-right">
                    <img src="{{ asset('assets/frontend') }}/img/others/9.png" alt="About Us Image">
                </div>
            </div>
        </div>
    </div>
 </div>
<!-- ABOUT US AREA END -->