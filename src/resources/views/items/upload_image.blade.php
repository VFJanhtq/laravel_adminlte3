<form method="POST" id="file_form" action="{{ route('item.post.image.upload') }}" autocomplete="off"
    enctype="multipart/form-data">
    @csrf
    <input name="file_upload" type="file" accept="image/*">

    <button type="submit">Upload</button>
    <form>
