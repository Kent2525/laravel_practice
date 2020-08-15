@extends('layouts.front')

@section('content')
  <div class="container">
    <hr color="#c0c0c0">
    <div class="row">
      <div class="posts col-md-8 mx-auto mt-3">
        @foreach($posts as $post)
          <div class="post">
            <div class="row">
              <div class="text col-md-6">
                <div class="date">
                  {{ $post->updated_at->format('Y年m月d日') }}
                </div>
                <div class="name">
                  {{ str_limit($post->name, 70) }}
                </div>
                <div class="body mt-3">
                  {{ str_limit($post->gender, 20) }}
                </div>
                <div class="body mt-3">
                  {{ str_limit($post->hobby, 70) }}
                </div>
                <div class="body mt-3">
                  {{ str_limit($post->introduction, 140) }}
                </div>                
              </div>
            </div>
          </div>
          <hr color="#c0c0c0">
        @endforeach 
      </div>
    </div>
  </div>
  </div>
@endsection