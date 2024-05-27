@props(['post', 'pros', 'cons'])
   <!-- Your content here -->
   <p class="border-2 border-blue-200 mx-64 my-8 p-4">
    {{$post->content}}
</p>
<!-- <p class="border-2 border-blue-200 mx-8 w-2/5">kjdgkj dfgkdjg jgdjggj</p>
<p class="border-2 border-blue-200 mx-8 w-2/5">kjdgkj dfgkdjg jgdjggj</p> -->

<div class="flex justify-between">
  <div class="flex flex-col w-2/5 ml-4">
    @foreach($pros as $pro)
    <a href="/post/{{$pro->id}}">
    <div class=" ">
        <!-- Content of the first box -->
        <p class="border-2 border-blue-200 m-2 p-2 text-center">{{$pro->content}}</p>
    </div>
</a>
    @endforeach

</div>

<div class="flex flex-col w-2/5 mr-4">
    @foreach($cons as $con)
    <a href="/post/{{$con->id}}">
    <div class=" ">
        <!-- Content of the first box -->
        <p class="border-2 border-blue-200 m-2 p-2 text-center">{{$con->content}}</p>
    </div>
</a>
    @endforeach

</div>
</div>
