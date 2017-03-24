@if (count($errors))
  <div class="form-group">
    <div class=" alert list-group-item-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li class="h5">{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  </div>
@endif
