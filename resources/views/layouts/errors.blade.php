<ul class="list-group">
    @foreach($errors->all() as $error)
        <li class="list-group-item list-group-item-warning">{{ $error }}</li>
    @endforeach
 </ul>