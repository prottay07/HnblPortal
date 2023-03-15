@extends('frontend.main_master')
@section('main')

<?php
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Models\PhotoGallery;


?>



<section class="breadcrumb__wrap">
    <div class="container custom-container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8 col-md-10">
                <div class="breadcrumb__wrap__content">
                    <h2 class="title">HNBL Photos</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">About Me</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcrumb__wrap__icon">
        <ul>
            <li><img src="assets/img/icons/breadcrumb_icon01.png" alt=""></li>
            <li><img src="assets/img/icons/breadcrumb_icon02.png" alt=""></li>
            <li><img src="assets/img/icons/breadcrumb_icon03.png" alt=""></li>
            <li><img src="assets/img/icons/breadcrumb_icon04.png" alt=""></li>
            <li><img src="assets/img/icons/breadcrumb_icon05.png" alt=""></li>
            <li><img src="assets/img/icons/breadcrumb_icon06.png" alt=""></li>
        </ul>
    </div>
</section>


<div class="tz-gallery">
  <div class="container mt-5">


  <div class="row">

  @foreach($allImage as $item)

      <div class="col-md-3 mb-3" *ngFor="let photo of photos">

      <a class="lightbox" href="{{ asset ($item->images)}}">
          <img src="{{ asset ($item->images)}}"alt="gallery-image" class="img-fluid" style= "height:250px; width:250px">
                    
        </a>
       
        <p class="text-center mt-2">{{$item->title}}</p>

     </div>   <!-- End col -->

     @endforeach  

  </div> <!-- End row -->

  <!-- <div class="row"> -->

  </div>






    <!-- <nav aria-label="Page navigation example">
      <ul class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
          </a>
        </li>
        <li class="page-item" *ngFor="let page of pages">
          <a class="page-link" href="#">Page</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
          </a>
        </li>
      </ul>
    </nav> -->
  </div>


  {{ $allImage->links('pagination::bootstrap-4') }}

<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
  </script>
  @endsection