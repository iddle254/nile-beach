<x-nilebeach-master>
    @section('title')
    <title>Nile Beach Hotel, Juba</title>
    @endsection

    @section('top-bar')
    <div id="topbar" class="d-flex align-items-center fixed-top">
        <div class="container d-flex justify-content-center justify-content-md-between">
    
          <div class="contact-info d-flex align-items-center">
            <i class="bi bi-phone d-flex align-items-center"><span>+249 955 38 44 18</span></i>
            <i class="bi bi-clock d-flex align-items-center ms-4"><span> Mon-Sat: 11AM - 11PM</span></i>
          </div>
    
          {{-- <div class="languages d-none d-md-flex align-items-center">
            <ul>
              <li>En</li>
              <li><a href="#">De</a></li>
            </ul>
          </div> --}}
        </div>
      </div>
    @endsection

    @section('nav-bar')
    <x-navbar></x-navbar>
    @endsection

    @section('hero')
        <x-hero></x-hero>
    @endsection

    @section('about')
        <x-about></x-about>
    @endsection

    @section('why-us')
        <x-why-us></x-why-us>
    @endsection

    @section('menu')
    <x-menu></x-menu>
    @endsection

    @section('specials')
        <x-specials></x-specials>
    @endsection

    @section('events')
        <x-events></x-events>
    @endsection

    @section('book-table')
        <x-book-table></x-book-table>        
    @endsection

    @section('tesimonials')
        <x-testimonials></x-testimonials>
    @endsection

    @section('gallery')
        <x-gallery></x-gallery>
    @endsection

    @section('chefs')
        <x-chefs></x-chefs>
    @endsection

    @section('contact')
        <x-contact></x-contact>
    @endsection

    @section('footer')
        <x-footer></x-footer>
    @endsection
</x-nilebeach-master>