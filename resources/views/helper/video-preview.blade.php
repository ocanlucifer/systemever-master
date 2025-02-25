@if (!empty($url))
<video height="150" controls>
    <source src="{{$url}}" type="video/mp4">
    Your browser does not support the video tag.
</video>
@endif