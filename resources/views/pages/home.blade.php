@extends ('layouts.default', ['title' => 'Home'])

@section('content')
  <div class="col-sm-9 col-md-10 affix-content" style="overflow: auto; bac kground :#D8D8D8">
    <div class="container">
      <div class="wizard-container" style="margin:0">
        <div class="card wizard-card" data-color="red" id="wizard"  style="backgro und:#D8D8D8">

          <?php
            if(isset($_GET['param'])){  ?>
              @include('pages/'.$_GET['param'])
          <?php  } ?>

        </div>
      </div> <!-- wizard container -->

    </div>
  </div>

@stop
