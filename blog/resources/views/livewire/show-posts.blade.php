<div>

    @include('livewire.createpost')

    @include('livewire.update')

    @if (session()->has('message'))

        <div class="alert alert-success" style="margin-top:30px;">x

          {{ session('message') }}
        </div>
    @endif



    @foreach ($posts as $value)
    <div>{{$value->id}}  hello</div>
    @endforeach
    {{ $posts->links() }}


</div>
