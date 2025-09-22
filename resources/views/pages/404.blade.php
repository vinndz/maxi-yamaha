@extends('layouts.layoutCommon')
@section('title', '404 Page Not Found || zeena || Laravel  Template')


@section('content')

    <x-page-header title="Error Page" subtitle="Page Not Found" />

    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height:60vh;">
        <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" fill="none" viewBox="0 0 24 24"
            stroke="currentColor" class="mb-4 text-danger">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12c0 4.97-4.03 9-9 9s-9-4.03-9-9 4.03-9 9-9 9 4.03 9 9z" />
        </svg>
        <h1 class="display-1 fw-bold mb-3">404</h1>
        <h2 class="h3 fw-semibold mb-2">Oops! Page Not Found</h2>
        <p class="mb-4 text-secondary">The page you are looking for might have been removed, had its name changed, or is
            temporarily unavailable.</p>
        <a href="/" class="about-one__btn thm-btn">Back to Home <span class="fa fa-plus"></span></a>
    </div>

    <x-footer.footerStyleOne />
@endsection