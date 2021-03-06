@extends('layouts.admin')

@section('content')
  <div class="panel panel-primary">
    <div class="panel-heading">
      All Article
    </div>

    <div class="panel-body">

      <table class="table table-data">
          <thead>
            @if ($articles)
              @foreach ($articles as $article)
              <tr>
                  <td><b>Title</b></td>
                  <td>{{ ucwords($article->title) }}</td>
              </tr>
              <tr>
                  <td><b>Description</b></td>
                  <td>{!! $article->des !!}</td>
              </tr>
              <tr>
                  <td>
                      <form class="" action="{{ route('article.destroy', $article->id) }}" method="post">
                          {{ csrf_field() }} {{ method_field('delete') }}
                          <input class="btn btn-sm btn-danger pull-left" type="submit" name="" value="Delete">
                      </form>
                  </td>
                  <td><a class="btn btn-sm btn-info pull-right" href="{{ route('article.edit', $article->id) }}">Edit</a></td>
              </tr>
            @endforeach
          @endif
          </thead>
        {{-- <thead>
          <th>Title</th>
          <th>Description</th>
          <th>Action</th>
        </thead>
        <tbody>
          @if ($articles)
            @foreach ($articles as $article)
              <tr>
                <td>{{ ucwords($article->title) }}</td>
                <td>{!! $article->des !!}</td>
                <td>
                  <form class="" action="{{ route('article.destroy', $article->id) }}" method="post">
                    {{ csrf_field() }} {{ method_field('delete') }}
                    <a class="btn btn-xs btn-info" href="{{ route('article.edit', $article->id) }}">Edit</a>
                    <input class="btn btn-xs btn-danger" type="submit" name="" value="Delete">
                  </form>
                </td>
              </tr>
            @endforeach
          @endif
        </tbody> --}}
      </table>

    </div>
  </div>
@endsection
