                                    <div class="col-xl-12">

                                        <div id="couponsWrap" class="">

                                        <h3>@lang('shop.title_available_coupons')</h3>
                                        @foreach ($sviKuponi as $cKey => $coupon)

                                        	<h4 class="small">{{ $coupon->name }}</h4>
                                        	<img src="{{ $coupon->image_url }}" alt="{{ $coupon->name }}" id="code_{{ $coupon->code }}">

                                        @endforeach


@php
// echo '<pre>';
// print_r($sviKuponi);
// echo '</pre>';
@endphp

                                        </div>

                                    </div>