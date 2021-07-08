@extends('layouts.app')

@section('css')
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">首頁banner - 新增</div>

                <div class="card-body">
                    <form method="post" action="/admin/banner/store" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="img" class="col-sm-2 col-form-label">banner <br><small
                                    class="text-danger">*建議圖片尺寸1920px(寬)*730px(高)</small></label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" id="img" value="" name="img" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="alt" class="col-sm-2 col-form-label">alt</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="alt" name="alt" required>
                            </div>
                        </div>

                        <hr>

                        <div class="form-group row">
                            <label for="sort" class="col-sm-2 col-form-label">排序(sort)</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="sort" name="sort" value="1" required><br>
                                <small class="text-danger">數字越大,排序越前面</small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-12 text-center">
                                <button type="submit" class="btn btn-primary">SEND</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('js')

@endsection
