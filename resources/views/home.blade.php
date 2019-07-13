@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="margin-bottom: 20px">
                <div class="card-header">Neue Datei hinzufügen</div>
                <div class="card-body">
                    <form action="/store" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="file" required>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Beschreibung:</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="..." name="description" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Upload</button>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-header">Übersicht:</div>
                <div class="progress">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25% belegt</div>
                </div>

                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
