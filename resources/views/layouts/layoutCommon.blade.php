<!DOCTYPE html>
<html lang="en">
    <x-head />

    <body class="custom-cursor">

        <div class="custom-cursor__cursor"></div>
        <div class="custom-cursor__cursor-two"></div>
        <x-preloader />
        <div class="page-wrapper">
            <x-header.headerStyleForm />
                <x-strickyHeaderOne />
            @yield('content')>
            <x-scripts />
    </body>

</html