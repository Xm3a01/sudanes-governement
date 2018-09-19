@extends('layouts.mastar')

@section('content')
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
            <div class="container">
                <a class="navbar-brand" href="#">بلاغك</a>
            </div>
         </nav> 
         <section class="back-logo">
            
          <div class="front-logo">
                <div class="container">
             <center>
                <div class="card show-card"  >
                    <div class="card-header">{{$not->notice}} <br><br></div>
                    <div class="card-body">
                        <div class="row">
                     @if($not->images->count() > 0)
                        @foreach($not->images as $img)
                         <div class="col-md-4">
                            <img src="{{Storage::url($img->image)}}" class="card-img-top" height="200px" width="300px" alt="" >
                         <div class="card-text" id="hid">
                          <a href="{{route('downloads',$img->id )}}" ><i class="fa fa-arrow-circle-down"  data-toggle="tooltip" data-placement="bottom" title="تحميل"></i></a> 
                          <a href="{{Storage::url($img->image)}}" target="_blank" ><i class="fa fa-info-circle" data-toggle="tooltip" data-placement="bottom" title="عرض"></i></a>
                          <a href="{{route('deletes',$img->id)}}" onclick="hide()" > <i class="fa fa-minus-circle" data-toggle="tooltip" data-placement="bottom" title="حذف"></i></a>
                           </div>
                           </div>
                        @endforeach
                     @else
                     <center>
                     <div class="alert alert-danger" role="alert">
                       لاتوجد لهذاالبلاغ صور
                     </div>
                    </center>
                     @endif
                   </div>
              </div>

                 <div class="card-footer">
                    <small class="text-muted">{{$not->created_at}}</small>
                 </div>
             </center>
                </div>
            </div>
             
          </div>
     </section>
@stop