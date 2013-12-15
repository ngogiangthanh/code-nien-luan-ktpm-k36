@extends('layouts.default')
@section('content')
<div class="row-fluid">
    <div class="box span12">
        <div class="box-header"><h2>
                <i class="icon-book"></i>Thanh Toán Cho Sinh Viên Ra Trường
            </h2>
        </div>
        <div class="box-content">
            {{  Form::open(array('url' => 'uploadexcel', 'files' => true,'method'=>'post')) }}  
                            <span class="input-group-addon">URL Excel:</span>
                            <input type="file" accept="" name="txtexcel" id="txtexcelId" class="form-control"/>
                            <input type="submit" name="" value="submit">
                            </form>
            <?php
                    $stt = 0;
                    $filename=URL."public/excel/demo.xls";
	$data = new Spreadsheet_Excel_Reader($filename,true,"UTF-8");
	$rowsnum = $data->rowcount($sheet_index=0); // lay so hang cua sheet
	$colsnum =  $data->colcount($sheet_index=0); // lay so cot cua sheet
//        echo $rowsnum."<br>";
//        echo $colsnum;
//	for ($i=2;$i<=$rowsnum;$i++) {
////        for($j=1;$j<=$colsnum;$j++) {
//            foreach($dsSachMuonChuaTra as $Sach) {
//              if($Sach->ma_so_the==$data->val($i,2)) {
//                      echo "sấ";
//                       
//                 
//                        
//            }
//        }
//        }
?>
                    
        </div>
    </div>
</div>
@stop