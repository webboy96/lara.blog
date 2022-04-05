@extends('admin.layouts.layout')

@section('content')

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Главная</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Blank Page</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <section class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Новая статья</h3>
                </div>


                <form role="form" method="post" action="{{ route('posts.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Название</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" placeholder="Введите название">
                        </div>
                        <div class="form-group">
                            <label for="description">Цитата</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="5" placeholder="Введите цитату..."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="content">Контент</label>
                            <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" rows="7" placeholder="Введите текст..."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="category_id">Выберите категорию</label>
                            <select name="category_id" id="category_id"  class="form-control @error('category_id') is-invalid @enderror">
                                <option>Выбрать категорию</option>
                                @foreach($categories as $k => $v)
                                <option value="{{ $k }}">{{ $v }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tags">Теги</label>
                            <div class="select2-purple">
                                <select name="tags[]" id="tags" class="select2" multiple="multiple" data-placeholder="Выберите теги" data-dropdown-css-class="select2-purple" style="width: 100%;">
                                    @foreach($tags as $k => $v)
                                        <option value="{{ $k }}">{{ $v }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="thumbnail">Изображение</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="thumbnail" class="custom-file-input @error('thumbnail') is-invalid @enderror" id="thumbnail">
                                    <label class="custom-file-label" for="thumbnail">Выберите изображение</label>
                                </div>
                            </div>
                        </div>
                                               <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Сохранить</button>
                    </div>
                    </div>
                </form>
            </div>
                    </div>
                </div>
            </section>
        </section>
        <!-- /.content -->

@endsection
