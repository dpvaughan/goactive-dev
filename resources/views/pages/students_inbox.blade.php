@extends('layouts.authenticated_layout')

@section('content')

<div class="row">

  <div id="task"></div>

  <section id="main-content">
    <section class="wrapper">
      <!-- page start-->
      <div class="row mt">
        <div class="col-sm-3">
          <section class="panel">
            <div class="panel-body">
              <a href="mail_compose.html" class="btn btn-compose"><i class="glyphicon glyphicon-pencil"></i><b>Compose Message</b></a>
              <ul class="nav nav-pills nav-stacked mail-nav">
                <li class="active"><a href="/inbox"><i class="glyphicon glyphicon-inbox"></i> Inbox  <span class="label label-theme pull-right inbox-notification">{{ $messages }}</span></a></li>
                <li><a href="#"><i class="glyphicon glyphicon-envelope"></i> Sent Messages</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-trash"></i> Deleted</a></li>
              </ul>
            </div>
          </section>
        </div>
      <div class="col-sm-9">
        <section class="panel">
          <header class="panel-heading wht-bg"><h4 class="gen-case">Inbox ({{ $messages }})</h4></header>
              <div class="panel-body minimal">
                  <div class="mail-option">
                      <div class="chk-all">
                          <div class="pull-left mail-checkbox">
                              <input type="checkbox" class="">
                          </div>

                          <div class="btn-group">
                              <a data-toggle="dropdown" href="#" class="btn mini all">
                                  All
                                  <i class="fa fa-angle-down "></i>
                              </a>
                              <ul class="dropdown-menu">
                                  <li><a href="#"> None</a></li>
                                  <li><a href="#"> Read</a></li>
                                  <li><a href="#"> Unread</a></li>
                              </ul>
                          </div>
                      </div>

                      <div class="btn-group">
                          <a data-original-title="Refresh" data-placement="top" data-toggle="dropdown" href="#" class="btn mini tooltips">
                              <i class=" fa fa-refresh"></i>
                          </a>
                      </div>
                      <div class="btn-group hidden-phone">
                          <a data-toggle="dropdown" href="#" class="btn mini blue">
                              More
                              <i class="fa fa-angle-down "></i>
                          </a>
                          <ul class="dropdown-menu">
                              <li><a href="#"><i class="fa fa-pencil"></i> Mark as Read</a></li>
                              <li><a href="#"><i class="fa fa-ban"></i> Spam</a></li>
                              <li class="divider"></li>
                              <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                          </ul>
                      </div>
                      <div class="btn-group">
                          <a data-toggle="dropdown" href="#" class="btn mini blue">
                              Move to
                              <i class="fa fa-angle-down "></i>
                          </a>
                          <ul class="dropdown-menu">
                              <li><a href="#"><i class="fa fa-pencil"></i> Mark as Read</a></li>
                              <li><a href="#"><i class="fa fa-ban"></i> Spam</a></li>
                              <li class="divider"></li>
                              <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                          </ul>
                      </div>

                      <ul class="unstyled inbox-pagination">
                          <li><span>1-50 of 99</span></li>
                          <li>
                              <a class="np-btn" href="#"><i class="fa fa-angle-left  pagination-left"></i></a>
                          </li>
                          <li>
                              <a class="np-btn" href="#"><i class="fa fa-angle-right pagination-right"></i></a>
                          </li>
                      </ul>
                  </div>
                  <div class="table-inbox-wrap ">
                      <table class="table table-inbox table-hover">
                  <tbody>

                  @foreach ($messagesAll as $data)

                    <tr @if ($data->status == 1) class="unread" @endif>
                      <td class="inbox-small-cells"><input type="checkbox" class="mail-checkbox"></td>
                      <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                      <td class="view-message"><a href="/inbox/ {{ $data->id }}">{{ $data->from }}</a></td>
                      <td class="view-message "><a href="/inbox/ {{ $data->id }}">{{ $data->subject }}</a></td>
                      <td class="view-message  inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                      <td class="view-message  text-right">{{ $data->created_at }}</td>
                    </tr>

                    <button class="btn btn-warning btn-xs btn-detail open-modal" value="{{$data->id}}">Edit</button>

                  @endforeach


                <!--  <tr class="unread">
                      <td class="inbox-small-cells">
                          <input type="checkbox" class="mail-checkbox">
                      </td>
                      <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                      <td class="view-message  dont-show"><a href="mail_view.html">Google Inc.</a></td>
                      <td class="view-message "><a href="mail_view.html">Your new account is ready.</a></td>
                      <td class="view-message  inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                      <td class="view-message  text-right">08:10 AM</td>
                  </tr> -->





                  </tbody>
                  </table>

                  </div>
              </div>
          </section>
      </div>
  </div>








  		</section><! --/wrapper -->
        </section><!-- /MAIN CONTENT -->



</div>

@stop
