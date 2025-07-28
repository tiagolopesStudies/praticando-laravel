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
    <p @style([
        'color: green;' => $loop->odd,
        'color: blue;' => $loop->even
    ])>
        <span>{{ $loop->iteration }} - </span>
        <span>{{ $hobby }}</span>
    </p>
@empty
    <p>There is no items</p>
@endforelse

@include('shared.footer', ['text' => 'A message to footer']) {{-- Include another view --}}
@includeIf('shared.does-note-exists', ['text' => 'A message to footer']) {{-- Include another view if exists --}}
@includeWhen(false, 'shared.footer', ['text' => 'A message to footer']) {{-- Include another view by a condition --}}

@each('hobby.view', $hobbies, 'hobby', 'hobby.empty')
