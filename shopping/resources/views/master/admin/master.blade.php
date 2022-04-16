
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- header -->
    @include('admin.includes.header')
    <!-- css -->
    @include('admin.includes.css')
  </head>
  <body>

    <!--  START: LEFT BAR -->
    @include('admin.includes.leftbar')

    <!--  START: TOP BAR -->
    @include('admin.includes.topbar')

    <!--  START: RIGHT BAR -->
    @include('admin.includes.rightbar')

    <!-- START: MAIN PANEL -->
    <div class="br-mainpanel">
      @yield('body')
      <!--  START: FOOTER-->
      @include('admin.includes.footer') 
    </div><!-- br-mainpanel -->

    <!--  START: SCRIPTS-->
    @include('admin.includes.scripts')

  </body>
</html>
