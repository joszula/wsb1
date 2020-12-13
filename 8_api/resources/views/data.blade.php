<h3>Dane ze strony <a href="http://jsonplaceholder.typicode.com/posts">http://jsonplaceholder.typicode.com/posts</a></h3>
<ul>
    @foreach ($tab as $item)
    <li>
        UserId: {{ $item['userId'] }}
        <p> id: {{ $item['id'] }}
        <p> Title: {{ $item['title'] }}
    @endforeach
</ul>