
@extends('back.layouts.master')
@section('title','Yeni Alt Metin')
@section('content')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
        </div>
        <div class="card-body">
            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </div>
            @endif
            <form method="post" action="{{route('admin.altmetin.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Yazı Başlığı</label>
                    <input type="text" name="subtext" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Katagori</label>
                    <select name="title" class="form-control" required>
                        <option value="">Seçim Yapın</option>
                        @foreach($titles as $title)
                            <option value="{{$title->id}}">{{$title->hood}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Görsel</label>
                    <input type="file" name="image" class="form-control-file">
                </div>
                <div class="form-group">
                    <label>İçerik</label>
                    <textarea id="editor" name="conten" class="form-control" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Kaydet</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('cs')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#editor').summernote(
                {
                    'height':400
                }
            );
        });
    </script>
@endsection
