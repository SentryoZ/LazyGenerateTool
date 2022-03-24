@extends('layout.master')
@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-car icon-gradient bg-mean-fruit">
                    </i>
                </div>
                <div>
                    Command Panel
                    <div class="page-title-subheading">
                        Hmm?
                    </div>
                </div>
            </div>
            <div class="page-title-actions">
                <button type="button" data-toggle="tooltip" title="Button?" data-placement="bottom"
                        class="btn-shadow mr-3 btn btn-dark">
                    <i class="fa fa-star"></i>
                </button>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-12">
            <form action="{{ route('command-panel.workbench') }}" method="post" class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        Input
                    </h5>
                    <input type="file" name="yaml_file">
                </div>
                <div class="d-block text-right card-footer">
                    <button type="submit" class="btn-wide btn btn-success">Generate</button>
                </div>
            </form>
        </div>

        <div class="col-md-6 col-12">

        </div>
    </div>
@endsection
