@extends('layouts.app')
@section('content')
<div class="container">
 <div class="row justify-content-center">
 <div class="col-md-8">
 <div class="card">
 <div class="card-header">
 {{ __('catagory Detail') }}
 </div>
 <div class="card-body">
 id : {{ $catagory->id }}
 <br>
 <br>
 name : {{ $catagory->name }}
 <br>
 </div>
 </div>
 </div>
 </div>
</div>
<div class="container ">
 <div class="col-md-8">
 <a class="btn btnsuccess" href="{{ route('catagory/list') }}" role="button"> {{ __('Back') }}</a>
 </div>
</div>
@endsection