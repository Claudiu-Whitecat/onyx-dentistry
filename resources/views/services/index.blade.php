<x-layout>
    @foreach($services as $service)
        <a href="/servicii/{{$service->slug}}">
            {{$service->title}}
        </a>

    @endforeach

</x-layout>
