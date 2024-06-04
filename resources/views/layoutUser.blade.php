
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Supreme Kost Website</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  @include('template.component.styleUser.style_css')
  <!-- =======================================================
  * Template Name: Selecao
  * Template URL: https://bootstrapmade.com/selecao-bootstrap-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  @include('template.templateUser.header')

  @include('template.templateUser.hero')

  <main id="main">

    @include('template.partials.partialUser.about')

    {{-- @include('template.partials.partialUser.features') --}}

    @include('template.partials.partialUser.cta')

    @include('template.partials.partialUser.services')
    {{-- @include('template.partials.partialUser.porto') --}}

    {{-- @include('template.partials.partialUser.testimoni') --}}

    {{-- @include('template.partials.partialUser.pricing') --}}

    {{-- @include('template.partials.partialUser.faq') --}}

    {{-- @include('template.partials.partialUser.team') --}}

    @include('template.partials.partialUser.contact')

  </main><!-- End #main -->

  @include('template.templateUser.footer')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  @include('template.component.styleUser.style_js')
</body>

</html>
