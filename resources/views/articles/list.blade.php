<?php

	$no=0;

?>

{!! link_to(route("articles.create"), "+ | New Article", ["class"=>"pull-left btn btn-raised btn-primary"]) !!}

<table class="table table-striped table-hover ">

  <thead>

    <tr>

   	  <th width="5%">No</th>

      <th width="15%">Title</th>

      <th width="35%">Content</th>

      <th width="25%">Action</th>

    </tr>

  </thead>

  <tbody>

    @foreach($articles as $article)

    <?php

  	  $no++;
    ?>

    <tr>

      <td><?php echo $no;?></td>

      <td>{!!$article->title!!}</td>

      <td>{!! str_limit($article->content, 250) !!}</td>

      <td>
      
        {!! Form::open(['route' => array('articles.destroy', $article->id),'method' => 'delete']) !!}
      
          {!! link_to(route("articles.show", $article->id), "comment", ["class"=>"material-icons btn btn-raised btn-info"]) !!}
      
          {!! link_to(route("articles.edit", $article->id), "mode_edit", ["class"=>"material-icons btn btn-raised btn-success"]) !!}
      
          {!! Form::submit('delete', array('class' => 'material-icons btn btn-raised btn-danger', "onclick" => "return confirm('are you sure?')")) !!}
      
        {!! Form::close() !!}
      
      </td>
    
    </tr>
    
    @endforeach
  
  </tbody>

</table>

<div>
  
  {!! $articles->render() !!}

</div>
