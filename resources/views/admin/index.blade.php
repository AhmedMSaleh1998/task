@extends('admin.layout.layout')
@section('content')
<section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        @foreach ($users as $user )
        <div class="col-lg-3 col-6">
          <!-- small box -->



          <div class="small-box bg-info">
            <div class="inner">
              <h3> {{ $user->tasks_count }} </h3>
              <p>  {{ $user->name }}</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>


       </div>
       @endforeach
       <!-- ./col -->
    </div>
  </div>
</div>
</section>
@endsection
