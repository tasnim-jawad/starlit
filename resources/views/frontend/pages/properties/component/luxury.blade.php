<!-- PRODUCT SLIDER AREA START -->
@foreach ($property_category_list as $property_category)
    <div class="ltn__product-slider-area ltn__product-gutter pt-50 pb-50 plr--7">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2--- text-center">
                        <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">Propertie Listings</h6>
                        <h1 class="section-title">{{$property_category}} Properties</h1>
                    </div>
                </div>
            </div>
            <div class="row ltn__product-slider-item-four-active-full-width-d">
                @foreach ( $properties_data[$property_category] as $property )
                    <div class="col-lg-4">
                        <div class="ltn__product-item ltn__product-item-4 text-center---">
                            <div class="product-img">
                                <a href="{{ route('properties_details', $property->id) }}"><img src="{{ isset($property?->banner_image[0]) ? asset($property->banner_image[0]) : asset('default-image.jpg') }}" alt="#"></a>
                                <div class="product-badge">
                                    <ul>
                                        <li class="sale-badge bg-green">{{ $property?->property_status }}</li>
                                    </ul>
                                </div>
                                <div class="product-img-location-gallery">
                                    <div class="product-img-location">
                                        <ul>
                                            <li>
                                                <a href="locations.html"><i class="flaticon-pin"></i> {{ $property?->property_address }}</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-img-gallery">
                                        <ul>
                                            <li>
                                                <a href="{{ route('properties_details', $property->id) }}"><i class="fas fa-camera"></i> {{ count($property?->gallery ?? []) }}</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('properties_details', $property->id) }}"><i class="fas fa-film"></i> {{ count($property?->banner_image ?? []) }}</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="product-price">
                                    <span>৳ {{ $property?->price ?? 00 }} <label>/Month</label></span>
                                </div>
                                <h2 class="product-title"><a href="{{ route('properties_details', $property->id) }}"> {{ $property?->property_name }}</a></h2>
                                <div class="product-description">
                                    <p>{{ Str::limit(strip_tags($property?->property_description), 60) }}</p>
                                </div>
                                <ul class="ltn__list-item-2 ltn__list-item-2-before">
                                    @foreach ( array_slice($property?->facts_and_features, 0, 2) as $feature )
                                        <li><span>{{ $feature['title'] ?? '' }} <i class="{{ $feature['icon'] ?? '' }}"></i></span>
                                            {{ $feature['description'] ?? '' }}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                    
                @endforeach
            </div>
            <div>
                <ul>
                    <li class="special-link show_button">
                        <a href="{{ route('properties.category_wise', ['category' => $property_category]) }}">Show more </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endforeach
<!-- PRODUCT SLIDER AREA END -->