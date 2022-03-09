<ul class="nav justify-content-center">
    @foreach($categories as $category)
        <li class="nav-item">
            <a class="nav-link active" href="/category/{{$category->id}}/{{$category->slug}}">{{$category->name}}</a>
        </li>
    @endforeach
</ul>