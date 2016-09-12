@extends('templates.default')
@section('content')

    <div class="panel panel-default">
        <div class="panel-body">
        @include('templates.partials.errors')
            <form action="{{ url('task') }}" method="post" class="form-horizontal">
                <div class="form-group">
                    <label for="task" class="col-sm-3 control-label">Husk å handle:</label>
                    <div class="col-sm-6">
                        <input type="text" name="name" id="name" class="form-control" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-6">
                        <button type="submit" class="btn btn-light">Legg til</button>
                    </div>
                </div>
                {{ csrf_field() }}
            </form>
        </div>
    </div>

    @if ($tasks->count())
        <div class="panel panel-default">
            <div class="panel-heading">
                Handleliste
            </div>
            <div class="panel-body">
                <table class="table table-striped">
                    <thead>
                        <th>Hva</th>
                        <th>&nbsp;</th>
                    </thead>
                    <tbody>
                        @foreach ($tasks as $task)
                            <tr>
                                <td>{{ $task->name }}</td>
                                <td>
                                    <form action="{{ url('task/' . $task->id) }}" method="post">
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif

@stop