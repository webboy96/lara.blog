@extends('admin.layouts.layout')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Создать комментарий</h1>
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
                            <h3 class="card-title">Создание комментария</h3>
                        </div>


                        <form role="form" method="post" action="{{ route('comments.store') }}">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="content">Комментарий</label>
                                        <textarea class="form-control @error('content') is-invalid @enderror"  name="content" rows="3" placeholder="Введите текст..."></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="post_id">Выберите статью</label>
                                        <select name="post_id" id="post_id"  class="form-control @error('post_id') is-invalid @enderror">
                                            <option>Выберите статью</option>
                                            @foreach(\App\Models\Post::all() as $post)
                                                <option value="{{ $post->id }}">{{ $post->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <input type="text" hidden name="user_id"  value="{{ Auth::id() }}">
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
