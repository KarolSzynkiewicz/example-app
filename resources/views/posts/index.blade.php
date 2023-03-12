
@foreach ($posts as $post)
{{  $post->title }} <br>
{{ $post->body  }}<br>
{{  $post->category  }}
@endforeach