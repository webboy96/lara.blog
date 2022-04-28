@extends('admin.layouts.layout')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Редактировать комментарий</h1>
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
                            <h3 class="card-title">Редактировать комментария</h3>
                        </div>


                        <form role="form" method="post" action="{{ route('comments.update',['comment'=>$comment->id]) }}">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                    <div class="form-group">
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th style="width: 10px">ID</th>
                                                <th>Имя пользователя оставившего комментарий:</th>
                                                <th>Название статьи</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>{{ $user->id }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $post->title }}</td>
                                            </tr>

                                            </tbody>
                                        </table>
                                        <label for="content">Текст комментария</label>
                                        <textarea class="form-control @error('content') is-invalid @enderror"  name="content" rows="7" >{{ $comment->content }}
                                        </textarea>
                                    </div>

                                    <label for="post_name">Имя поста</label>

                                    <button type="submit" class="btn btn-primary">Сохранить</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <!-- /.content -->

@endsection
