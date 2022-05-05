@extends('admin.layouts.layout')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Комментарии</h1>
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

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Title</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fas fa-times"></i></button>
                </div>
            </div>
            <div class="card-body">
                <form role="form"">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <div class="form-group">
                                <label for="content">Комментарий</label>
                                <textarea class="form-control @error('content') is-invalid @enderror" id="content-comment"  name="content" rows="3" placeholder="Введите текст..."></textarea>
                                <span id="titleError" class="alert-message"></span>
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

                            <input type="text" hidden name="user_id" id="user_id" value="{{ Auth::id() }}">
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary" onclick="createPost()">Сохранить</button>
                        </div>
                    </div>
                </form>
{{--                <a href="{{ route('comments.create') }}" class="btn btn-primary mb-3">Добавить комментарий</a>--}}
                @if ($comments->count())
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover texte-nowrap">
                            <thead>
                            <tr>

                                <th>Название статьи</th>
                                <th>Текст комментария</th>
                                <th>Имя пользователя</th>
                                <th>Редактирование</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($comments as $comment)
                                <tr>
                                    <td>{{ $comment->posts->title }}</td>
                                    <td>{{ $comment->content }}</td>
                                    <td>{{ $comment->users->name }}</td>
                                    <td>
                                        <a href="{{ route('comments.edit', ['comment' => $comment->id]) }}" class="btn btn-info btn-sm float-left mr-1">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <form action="{{ route('comments.destroy', ['comment' => $comment->id]) }}" method="post" class="float-left">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Подтвердить удаление')">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <p>Категорий пока нет!</p>
                @endif
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
                {{ $comments->links() }}

            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->

    <script>

        function createPost() {
            var user_id = $('#user_id').val();
            var content = $('#content-comment').val();
            var post_id = $('#post_id').val();

            let _url     = `/comments.store`;
            let _token   = $('meta[name="csrf-token"]').attr('content');

            $.ajax({
                url: _url,
                type: "POST",
                data: {
                    user_id: user_id,
                    content: content,
                    post_id: post_id,
                    _token: _token
                },
                success: function(response) {
                    if(response.code == 200) {
                        if(id != ""){
                            $("#row_"+id+" td:nth-child(2)").html(response.data.title);
                            $("#row_"+id+" td:nth-child(3)").html(response.data.description);
                        } else {
                            $('table tbody').prepend('<tr id="row_'+response.data.id+'"><td>'+response.data.id+'</td><td>'+response.data.title+'</td><td>'+response.data.description+'</td><td><a href="javascript:void(0)" data-id="'+response.data.id+'" onclick="editPost(event.target)" class="btn btn-info">Edit</a></td><td><a href="javascript:void(0)" data-id="'+response.data.id+'" class="btn btn-danger" onclick="deletePost(event.target)">Delete</a></td></tr>');
                        }
                        $('#title').val('');
                        $('#description').val('');

                        $('#post-modal').modal('hide');
                    }
                },
                error: function(response) {
                    $('#titleError').text(response.responseJSON.errors.title);
                    $('#descriptionError').text(response.responseJSON.errors.description);
                }
            });
        }
    </script>
@endsection
