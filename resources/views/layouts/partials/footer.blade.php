<footer class="bg-white pt-5">
  <div class="container-fluid">
    <div class="row">

      {{-- Logo and Social Links --}}
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="footer-menu">
          {{-- Logo --}}
          <img src="{{ asset('images/logo.png') }}" alt="logo" class="mb-3">

          {{-- Social Media Links --}}
          <div class="social-links mt-4">
            <ul class="d-flex list-unstyled gap-2">
              @php
        $socials = [
          [
          'name' => 'Facebook',
          'href' => '#',
          'icon' => 'M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.86 7.94 9.8v-6.93H7.08V12h2.86v-2.11c0-2.82 1.68-4.39 4.25-4.39 1.23 0 2.52.22 2.52.22v2.77h-1.42c-1.4 0-1.84.87-1.84 1.76V12h3.13l-.5 2.87h-2.63V21.8C18.56 20.86 22 16.84 22 12Z'
          ],
          [
          'name' => 'Twitter',
          'href' => '#',
          'icon' => 'M22.46 6c-.77.35-1.6.58-2.46.69a4.29 4.29 0 0 0 1.88-2.37 8.59 8.59 0 0 1-2.72 1.04 4.28 4.28 0 0 0-7.29 3.9A12.15 12.15 0 0 1 3.15 4.6a4.28 4.28 0 0 0 1.33 5.7 4.27 4.27 0 0 1-1.94-.54v.06a4.28 4.28 0 0 0 3.43 4.19 4.3 4.3 0 0 1-1.94.07 4.28 4.28 0 0 0 3.99 2.96A8.6 8.6 0 0 1 2 19.54 12.13 12.13 0 0 0 8.29 21c7.55 0 11.68-6.26 11.68-11.68 0-.18-.01-.35-.02-.53A8.36 8.36 0 0 0 22.46 6Z'
          ],
          [
          'name' => 'YouTube',
          'href' => '#',
          'icon' => 'M10 15l5.19-3L10 9v6Zm12-3c0 2.21-.18 3.54-.64 4.43a2.93 2.93 0 0 1-1.28 1.28c-.89.46-2.22.64-4.43.64H7.36c-2.21 0-3.54-.18-4.43-.64a2.93 2.93 0 0 1-1.28-1.28C1.18 15.54 1 14.21 1 12s.18-3.54.64-4.43a2.93 2.93 0 0 1 1.28-1.28C3.82 5.82 5.15 5.64 7.36 5.64h8.72c2.21 0 3.54.18 4.43.64a2.93 2.93 0 0 1 1.28 1.28c.46.89.64 2.22.64 4.43Z'
          ],
          [
          'name' => 'Instagram',
          'href' => '#',
          'icon' => 'M7 2C4.8 2 3 3.8 3 6v12c0 2.2 1.8 4 4 4h10c2.2 0 4-1.8 4-4V6c0-2.2-1.8-4-4-4H7Zm10 2c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H7c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2h10Zm-5 3a5 5 0 1 0 0 10 5 5 0 0 0 0-10Zm0 2a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm4.5-2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3Z'
          ],
          [
          'name' => 'TikTok',
          'href' => '#',
          'icon' => 'M9 3a6 6 0 0 0-6 6v6a6 6 0 0 0 9.43 5a4.5 4.5 0 0 1-3.43-4.38V9.57a1.5 1.5 0 0 1 3 0v.06c.01.71.6 1.29 1.32 1.29H15a6 6 0 0 1-6 6v-6a1.5 1.5 0 0 1 3 0v.07c.01.71.6 1.28 1.32 1.28H15a6 6 0 0 1-6 6V9a1.5 1.5 0 0 1 3 0v.06c0 .71.59 1.28 1.3 1.28H15a6 6 0 0 1-6 6V9Z'
          ]
        ];
      @endphp

              @foreach ($socials as $social)
          <li>
          <a href="{{ $social['href'] }}" class="btn btn-outline-dark rounded-circle"
            title="{{ $social['name'] }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
            <path fill="currentColor" d="{{ $social['icon'] }}" />
            </svg>
          </a>
          </li>
        @endforeach
            </ul>
          </div>
        </div>
      </div>


      {{-- Footer Menus --}}
      @php
    $menus = [
      'Ultras' => ['About us', 'Conditions', 'Our Journals', 'Careers', 'Affiliate Programme', 'Ultras Press'],
      'Customer Service' => ['FAQ', 'Contact', 'Privacy Policy', 'Returns & Refunds', 'Cookie Guidelines', 'Delivery Information']
    ];
    @endphp

      @foreach ($menus as $title => $items)
      <div class="col-md-2 col-sm-6">
      <div class="footer-menu">
        <h5 class="widget-title">{{ $title }}</h5>
        <ul class="menu-list list-unstyled">
        @foreach ($items as $item)
      <li><a href="#" class="nav-link">{{ $item }}</a></li>
      @endforeach
        </ul>
      </div>
      </div>
    @endforeach

      {{-- Newsletter Subscription --}}
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="footer-menu">
          <h5 class="widget-title">Subscribe Us</h5>
          <p>Subscribe to our newsletter to get updates about our grand offers.</p>
          <form class="d-flex mt-3" role="newsletter">
            <input class="form-control rounded-start rounded-0 bg-light" type="email" placeholder="Email Address">
            <button class="btn btn-dark rounded-end rounded-0" type="submit">Subscribe</button>
          </form>
        </div>
      </div>

    </div>
  </div>

  {{-- Bottom Copyright --}}
  <div class="border-top text-center py-4 mt-5 bg-light">
    <p class="mb-1 fw-semibold text-dark">&copy; {{ date('Y') }} <span class="text-primary">FoodMart</span>. All Rights
      Reserved.</p>
    <p class="text-muted small mb-0">
      Designed by <strong>Rajesh</strong> • Powered by <a href="https://laravel.com"
        class="text-decoration-none text-dark fw-medium" target="_blank">Laravel</a>
    </p>
  </div>
</footer>