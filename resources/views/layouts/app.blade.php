<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Elegant Dashboard | Dashboard</title>
    @include('layouts.partials.styles')
</head>

<body>
    <div class="layer"></div>
    <!-- ! Body -->
    <div class="page-flex">
        <!-- ! Sidebar -->
        @include('layouts.partials.sidebar')
        <div class="main-wrapper">
            <!-- ! Main nav -->
            @include('layouts.partials.navbar')
            <!-- ! Main -->
            <main class="main users chart-page" id="skip-target">
                @yield('content')
            </main>
            <!-- ! Footer -->
            @include('layouts.partials.footer')
        </div>
    </div>
   @include('layouts.partials.scripts')
</body>

</html>
