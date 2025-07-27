<h1>Home page</h1>

<p>My name is {{ $name }} and I have {{ $age }} years old.</p>
<p>We are in the year {{ $year }}</p>

{{-- This is a comment in blade --}}

{{--
Comment in
multiple lines
--}}

{!! $details !!} <!-- Interpret HTML code -->

@{{ testing }}

@verbatim
    <div>
        <p>Name: {{ $name }}</p>
        <p>Age: {{ $age }}</p>
    </div>
@endverbatim

<h2>Blade directives</h2>

@if ($age > 18)
    <p>You can drive.</p>
@else
    <p>You can't drive</p>
@endif

@auth
    <p>User is authenticated</p>
@endauth

@guest
    <p>User is not authenticated</p>
@endguest

@forelse($hobbies as $hobby)
    <span>{{ $hobby }}</span>
@empty
    <p>There is no items</p>
@endforelse
