@extends('bo.layout.app')

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2><img alt="" class="m-t-xs img-responsive avatar-img" src="#"> Kreiranje novosti</h2>
        </div>
        <div class="col-lg-2">
        </div>
    </div>
    <div class="row main_view_wraper">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-content p-xl">
                    @if ($errors->has('message'))
                        <div class="alert alert-success">
                            {{ $errors->first('message') }}
                        </div>
                    @endif
                    <div class="row">
                        <form action="@if(isset($isCreate)){{ route('news.store') }} @else {{ route('news.update', $news->id) }} @endif" method="POST" >
                            <div class="col-lg-5">
                                <div class="form-group required" >
                                    <label>Title</label>
                                    <input name="title" type="text" value="{{ old('title', $news->title) }}" class="form-control" required>
                                </div>
                                <div class="form-group required">
                                    <label>Category</label>
                                    <input name="category" type="text" value="{{ old('category', $news->category) }}" class="form-control" required>
                                </div>
                                <div class="form-group required">
                                    <label>Main image url</label>
                                    <input name="main_image_url" type="text" value="{{ old('main_image_url', $news->main_image_url) }}" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-1"></div>
                            <div class="col-lg-5">
                                <div class="form-group required">
                                    <label>Text</label>
                                    <textarea name="text" rows="10" style="resize: none" class="form-control" required>{{ old('text', $news->text) }}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                @if(isset($isCreate))
                                    <form class="form-group" method="POST">
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-sm btn-primary">CREATE</button>
                                    </form>
                                @else
                                    <form class="form-group" method="POST">
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-sm btn-primary">UPDATE</button>
                                    </form>
                                @endif
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection