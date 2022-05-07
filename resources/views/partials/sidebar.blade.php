<aside class="sidebar">
    <h1>SIDEBAR CONTENT</h1>
    <nav>
        <ul>
            @foreach($categories as $category)
            <li>
                <a href="">{{ $category->title }}</a>
            </li>
            @endforeach
        </ul>
    </nav>
</aside>