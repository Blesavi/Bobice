<a href="{{ route('news.edit', $newsId) }}">
    <button type="button" class="btn btn-sm btn-primary">EDIT</button>
</a>
<form class="form-group" action="{{ route('news.delete', $newsId) }}" method="POST">
    {{ method_field('DELETE') }}
    {{ csrf_field() }}
    <button type="submit" class="btn btn-sm btn-danger">DELETE NEWS</button>
</form>