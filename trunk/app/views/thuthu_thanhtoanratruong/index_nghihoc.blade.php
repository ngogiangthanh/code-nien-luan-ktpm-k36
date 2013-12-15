@extends('layouts.default')
@section('content')
<div class="row-fluid">
    <div class="box span12">
        <div class="box-header"><h2>
                <i class="icon-book"></i>Thanh Toán Cho Sinh Viên Nghỉ Học
            </h2>
        </div>
        <div class="box-content">
            {{  Form::open(array('url' => 'uploadexcel', 'files' => true,'method'=>'post')) }}  
                            <span class="input-group-addon">URL Excel:</span>
                            <input type="file" accept="" name="txtexcel" id="txtexcelId" class="form-control"/>
                            <input type="submit" name="" value="submit">
            </form>
        </div>
    </div>
</div>
@stop