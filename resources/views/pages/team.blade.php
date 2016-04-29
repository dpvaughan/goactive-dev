@extends('layouts.default', array('name'=> $name))
@section('content')

<div class="row">
  <div class="col-md-12 text-center"><h3>The Study Team</h3></div>
</div>

<div class="row">
  <div class="col-md-6 text-center">
    <div>
      <a target="_blank" href="http://www.cedar.iph.cam.ac.uk/people/cdfs/helen-brown/">
        {{ Html::image('img/people/hbrown.jpg', 'Dr Helen Brown', array('class' => 'img-thumbnail')) }}
    </div>
    <div>Research Fellow</div>
    <div>
        <a target="_blank" href="http://www.cedar.iph.cam.ac.uk/people/cdfs/helen-brown/">
          <h4>Dr Helen Elizabeth Brown</h4>
        </a>
    </div>
    <div>( University of Cambridge )</div>
  </div>
  <div class="col-md-6 text-center">
    <div>
      <a target="_blank" href="http://www.cedar.iph.cam.ac.uk/people/cdfs/helen-brown/">
        {{ Html::image('img/people/fwhittle.png', 'Dr Helen Brown', array('class' => 'img-thumbnail')) }}
    </div>
    <div>Study Co-ordinator</div>
    <div>
        <a target="_blank" href="http://www.cedar.iph.cam.ac.uk/people/cdfs/helen-brown/">
          <h4>Ms. Fiona Whittle</h4>
        </a>
    </div>
    <div>( University of Cambridge )</div>
  </div>
</div>

<div class="row">
  <div class="col-md-12 text-center"><h3>The Grant Holders</h3></div>
</div>

<div class="row">
  <div class="col-md-4 text-center">
    <div>
      <a target="_blank" href="http://www.cedar.iph.cam.ac.uk/people/cdfs/kirsten-corder/">
        {{ Html::image('img/people/kcorder.jpg', 'Dr Kirsten Corder', array('class' => 'img-thumbnail')) }}
      </a>
    </div>
    <div>Principal Investigator</div>
    <div>
      <a target="_blank" href="http://www.cedar.iph.cam.ac.uk/people/cdfs/kirsten-corder/">
        <h4>Dr Kirsten Corder</h4>
      </a>
    </div>
    <div>( University of Cambridge )</div>
  </div>
  <div class="col-md-4 text-center">
    <div>
      <a target="_blank" href="http://www.cedar.iph.cam.ac.uk/people/leads/esther-van-sluijs/">
        {{ Html::image('img/people/evan.jpg', 'Dr Esther van Sluijs', array('class' => 'img-thumbnail')) }}
      </a>
    </div>
    <div>Co-Investigator</div>
    <div>
      <a target="_blank" href="http://www.cedar.iph.cam.ac.uk/people/leads/esther-van-sluijs/">
        <h4>Dr Esther van Sluijs</h4>
      </a>
    </div>
    <div>( University of Cambridge )</div>
  </div>
  <div class="col-md-4 text-center">
    <div>
      <a target="_blank" href="http://www.neuroscience.cam.ac.uk/directory/profile.php?pwilkinson">
        {{ Html::image('img/people/pwilkinson.jpg', 'Dr Paul Wilkinson', array('class' => 'img-thumbnail')) }}
      </a>
    </div>
    <div>Co-Investigator</div>
    <div>
      <a target="_blank" href="http://www.neuroscience.cam.ac.uk/directory/profile.php?pwilkinson">
        <h4>Dr Paul Wilkinson</h4>
      </a>
    </div>
    <div>( University of Cambridge )</div>
  </div>
</div>

<br><br>

<div class="row">
  <div class="col-md-4 text-center">
    <div>
      <a target="_blank" href="http://www.phpc.cam.ac.uk/people/pcu-group/pcu-senior-research-staff/ed-wilson/">
        {{ Html::image('img/people/edwilson.png', 'Dr Edward Wilson', array('class' => 'img-thumbnail')) }}
      </a>
    </div>
    <div>Co-Investigator</div>
    <div>
      <a target="_blank" href="http://www.phpc.cam.ac.uk/people/pcu-group/pcu-senior-research-staff/ed-wilson/">
        <h4>Dr Edward Wilson</h4>
      </a>
    </div>
    <div>( University of Cambridge )</div>
  </div>
  <div class="col-md-4 text-center">
    <div>
      <a target="_blank" href="https://www.educ.cam.ac.uk/people/staff/vignoles/">
        {{ Html::image('img/people/avignoles.jpg', 'Professor Anna Vignoles', array('class' => 'img-thumbnail')) }}
      </a>
    </div>
    <div>Co-Investigator</div>
    <div>
      <a target="_blank" href="https://www.educ.cam.ac.uk/people/staff/vignoles/">
        <h4>Professor Anna Vignoles</h4>
      </a>
    </div>
    <div>( University of Cambridge )</div>
  </div>
  <div class="col-md-4 text-center">
    <div>
      <a target="_blank" href="http://www.phc.ox.ac.uk/team/caroline-croxson">
        {{ Html::image('img/people/cjones.png', 'Dr Caroline Jones', array('class' => 'img-thumbnail')) }}
      </a>
    </div>
    <div>Co-Investigator</div>
    <div>
      <a target="_blank" href="http://www.phc.ox.ac.uk/team/caroline-croxson">
        <h4>Dr Caroline Jones</h4>
      </a>
    </div>
    <div>( University of Oxford )</div>
  </div>
</div>

@stop
