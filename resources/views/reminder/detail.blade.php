@extends('layouts.common')

@section('title', 'リマインダー詳細')

@section('content')
<div id="app">
  
<div class="container">
  <div class="row justify-content-center">
   
  <h2 class="col-md-9">リマインダー　詳細</h2>
  
    <div class="col-md-8">
      <div class="card">
      
      <div class="card-header">
       <div class="row">

<!--カテゴリー名-->
      <h4 class="col-md-9 mb-0">{{ $categories->name }}</h4>

<!--一覧へ戻る-->
      <div class="mb-0" style="font-size: 80%;">
        <a href="{{ action('CategoryController@remind') . '?id=' . $categories->id . '&name=' . $categories->name }}" class="text-muted">
          <i class="fas fa-backward"></i>&ensp;一覧へ戻る
        </a>
      </div>

       </div>
     </div>
 
     <div class="card-body">

<!--id(hidden)-->
      <input type="hidden" name="id" value="{{ $categories->id }}">
      <input type="hidden" name="id" value="{{ $reminds->id }}">
      <input type="hidden" name="category_id" value="{{$reminds->category_id}}">
        
<!--1.Question-->
       <h5>
        <span style="border-bottom: solid 5px powderblue;">Question</span>
       </h5>
      <p>{{ $reminds->question}}</p>
      
<!--点線-->
      <div class="col-md p-0 text-center">
        <hr class="dotline">
      </div>
        
<!--2.Answer-->
      <h5>
        <span style="border-bottom: solid 5px powderblue;">Answer</span>
      </h5>
      <p>{{ $reminds->answer}}</p>
        
<!--点線-->
      <div class="col-md p-0 text-center">
        <hr class="dotline">
      </div>
        
<!--3.Hint-->
      <h5>
        <span style="border-bottom: solid 5px powderblue;">ヒント</span>
      </h5>
      <p>{{ $reminds->hint}}</p>
        
<!--点線-->
      <div class="col-md p-0 text-center">
        <hr class="dotline">
      </div>  
        
<!--4.補足-->
      <h5>
        <span style="border-bottom: solid 5px powderblue;">補足</span>
      </h5>
      <p>{{ $reminds->comment}}</p>
      
<!--点線-->
      <div class="col-md p-0 text-center">
        <hr class="dotline">
      </div>
        
<!--5.リマインド開始日-->
      <h5>
        <span style="border-bottom: solid 5px powderblue;">リマインド開始日</span>
      </h5>
      <p>{{ $reminds->start_at}}</p>
        
<!--点線-->
      <div class="col-md p-0 text-center">
        <hr class="dotline">
      </div>
        
<!--6.リマインド回数-->
      <!--<h5 class="mt-3">リマインド回数</h5>-->
      <h5>
        <span style="border-bottom: solid 5px powderblue;">リマインド回数</span>
      </h5>
      
      <div id="demo-area" class="form-group">
        <div class="unit input-group mb-2">
          
          <div class="input-group-prepend">
            <span class="input-group-text">1回目</span>
          </div>
        
          <input type="datetime-local" class="form-control" name="" value="{{ date('Y-m-d') }}" min="{{ date('Y-m-d') }}">

          <div class="demo-minus input-group-append">
            <span class="btn btn-danger">-</span>
          </div>
          
        </div>
      </div>
      
      <div id="demo-plus" class="btn btn-primary btn-sm">+追加</div>
      
        </div>
 
     </div>
   </div>
   
  </div>
</div>

</div>

<!--datetime.js-->
<script src="{{ mix('js/datetime.js') }}"></script>
@endsection




