<form action="{{ route("comics.destroy", $comic->id) }}" 
    method="post" class="form_delete" value="userName">
    @csrf

    @method("delete")

    <input type="hidden" name="comicTitle" value="{{ $comic->title }}">

    <button type="submit" class="btn btn-sm btn-danger">Delete</button>

</form>