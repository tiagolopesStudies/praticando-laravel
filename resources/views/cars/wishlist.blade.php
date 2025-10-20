@props(['cars'])

<x-app-layout title="My Favourite Cars">
    <main>
        <!-- New Cars -->
        <section>
            <div class="container">
                <h2>My Favourite Cars</h2>
                <div class="car-items-listing">
                @foreach($cars as $car)
                    <x-car-item :car="$car" />
                @endforeach
                </div>

                {{ $cars->links() }}
            </div>
        </section>
        <!--/ New Cars -->
    </main>
</x-app-layout>
