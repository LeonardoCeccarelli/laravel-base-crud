<form action="{{ route("comics.destroy", $comic->id) }}" method="post">
    @csrf

    @method("delete")

    <button type="submit" class="btn btn-sm btn-danger">Delete</button>

</form>