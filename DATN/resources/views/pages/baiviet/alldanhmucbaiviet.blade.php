@extends('layout')
@section('content')
<div class="features_items"><!--features_items-->
       
                        <h2 class="title text-center">Danh mục bài viết</h2>
                        
                        
                        <div class="product-image-wrapper">
                           @foreach($post as $key => $p)
                                <div class="single-products" style="margin: 10px 0;padding: 2px;">
                                        <div class="text-center">
                                                @csrf
                                                <img style="float: left;width: 30%;padding: 5px;height: 150px;" src="{{asset('public/uploads/post/'.$p->post_image)}}" alt="{{$p->post_slug}}" />
                                              
                                                <h4 style="color: #000;padding: 5px;">{{$p->post_title}}</h4>
                                                <p>{!!$p->post_desc!!}</p>

                                        </div>
                                        <div class="text-right">
                                        	<a href="{{url('bai-viet/'.$p->post_slug)}}" class="btn btn-default btn-sm">Xem bài viết</a>
                                        </div>
                                      
                                </div>
                                <div class="clearfix"></div>
                             @endforeach
                            </div>
                       
                    </div><!--features_items-->
                      
@endsection