@extends("layouts.application")

  @section("content")

  <div>

    <h1>{!! $article->title !!}</h1>

    <p>{!! $article->content !!}</p>

  </div>

  <br>

  <div>

    <div class="panel panel-primary">

      <div class="panel-heading">

        <h3 class="panel-title">Comments</h3>

      </div>

      <div class="panel-body">

        @foreach($comments as $comment)

          <div style="outline: 1px solid #fff;">

            <b><i>{!! $comment->user !!}</i></b>

            <p>{!! $comment->content !!}</p>

          </div>

        @endforeach

      </div>

    </div>

    <br>

    <h4><i><u>Give Comments</u></i></h4>

    {!! Form::open(['route' => 'comments.store', 'class' => 'form-horizontal', 'role' => 'form']) !!}

    {!! Form::hidden('article_id', $value = $article->id, array('class' => 'form-control', 'readonly')) !!}

    <div class="form-group">

      {!! Form::label('user', 'User', array('class' => 'col-lg-3 control-label')) !!}

      <div class="col-lg-9">

        {!! Form::text('user', null, array('class' => 'form-control')) !!}

      </div>

      <div class="clear"></div>

    </div>

    <div class="form-group">

      {!! Form::label('content', 'Content', array('class' => 'col-lg-3 control-label')) !!}

      <div class="col-lg-9">

      {!! Form::textarea('content', null, array('class' => 'form-control', 'rows' => 10, 'autofocus' => 'true')) !!}

        {!! $errors->first('content') !!}

      </div>

      <div class="clear"></div>

    </div>

    <div class="form-group">

      <div class="col-lg-3"></div>

      <div class="col-lg-9">

        {!! Form::submit('Send', array('class' => 'btn btn-raised btn-primary')) !!}

        {!! link_to(route('articles.index'), "Back", ['class' => 'btn btn-raised btn-info']) !!}

      </div>

      <div class="clear"></div>

    </div>

  {!! Form::close() !!}

  </div>

  @stop