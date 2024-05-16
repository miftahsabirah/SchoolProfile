@extends('master')

@section('title')
Detail Berita
@endsection

@section('content')

<div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
    <div class="grid grid-cols-2 gap-4 mt-8 mb-10">
        <img class="w-full h-96 object-cover rounded-lg"
            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/office-long-2.png"
            alt="office content 1">
        <img class="mt-6 w-full h-96 object-cover lg:mt-12 rounded-lg"
            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/office-long-1.png"
            alt="office content 2">
    </div>

    <p class="text-2xl font-bold text-gray-900 mb-5">Pak Babin Mengunjungi SD Ciren</p>
    <p class="text-regular text-justify text-gray-500">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus maximus erat placerat, molestie tellus nec, accumsan diam. 
        Ut tempus magna a vulputate tincidunt. Pellentesque ac mattis orci, a rutrum augue. Orci varius natoque penatibus et magnis dis parturient montes, 
        nascetur ridiculus mus. Nunc leo est, venenatis eget justo at, blandit pharetra libero. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere 
        cubilia curae; Duis tortor erat, posuere sit amet elit eu, accumsan malesuada sem. Fusce ac ex laoreet libero tristique sagittis nec vitae elit. 
        Cras porta enim non orci luctus finibus. Vestibulum euismod congue neque, in rhoncus erat consectetur et. Sed feugiat arcu non ultricies posuere. 
        Curabitur scelerisque ornare diam et euismod. Nulla ut ex lacus. 
        Aliquam nibh libero, euismod non dui a, euismod volutpat ligula. Etiam lacus nisl, consectetur ac pellentesque at, malesuada ultricies turpis.
    </p>

</div>

@endsection