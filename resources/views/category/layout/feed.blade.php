@section('style')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
@stop
<div class="isotope-grid isodata cols-3 mb-2">
    <div class="gutter-sizer"></div>
    <div class="grid-sizer"></div>
    @if ($listings->count() > 0)
        @foreach($listings as $data)
            <div class="isoitem grid-item 
                        {{$data->slugIt($data->catty->slug)}} 
                        {{$data->slugIt($data->loca->lga)}} 
                        {{$data->slugIt($data->state->state)}}"
            >
                <div class="recent_ads_item">
                    <div class="item_image">
                        <a class="img_wrapper" href="{{route('service.detail',['username' => $data->userz->username,'slug' => $data->slug])}}">
                            {!! $data->getImages() !!}
                        </a>
                    </div>
                    <div class="item_details ">
                        <div class="ser-title">
                            <a href="{{route('service.detail',['username' => $data->userz->username,'slug' => $data->slug])}}">
                                {{ $data->serviceTitle() }}
                            </a>
                        </div>
                        <div style="font-size: 15px" class="location">
                            {{ $data->loca->lga }}
                            {{-- {{ $data->created_at }} --}}
                        </div>
                        <div class="item_price">
                            <span style="color: #2bd519" class="ser-price">
                            @if(!$data->price == 0)
                            <span> 
                                &#x20A6</span>{{  number_format($data->price) }}
                            </span>
                            @else 
                                Negotiable
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <p>No listings yet</p>
    @endif
</div>
{{-- <nav class="pagination"> --}}
        {{-- {{ $listings->render() }} --}}
{{-- </nav> --}}