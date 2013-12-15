@extends('layouts.default')
@section('content')
<div class="row-fluid">
<div class="box span6">
         @include('quanly_quanlynguoidung.add_user')
</div>
<div class='box span6'>
         @include('quanly_quanlynguoidung.add_user_list')
</div>
</div>
@stop