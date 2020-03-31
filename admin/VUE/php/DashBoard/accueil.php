<!DOCTYPE html>
<html lang="fr">
<?php
require_once ($_SERVER['DOCUMENT_ROOT'].'/admin/CONTROLER/function.php');
if ( is_session_started() === FALSE ) session_start();
	$_SESSION["page"]= 'accueil';
	$_SESSION["titre"]= 'DashBoard';
include ($_SERVER['DOCUMENT_ROOT'].'/admin/VUE/php/Starter/header.php');
?>
<body>
<?php 
include ($_SERVER['DOCUMENT_ROOT'].'/admin/VUE/php/Starter/menu.php');
?>
<div class="container">
<div class="row">
              <div class="col-sm-6 col-xl-3">

                <div class="card mb-4">
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <div class="lnr lnr-cart display-4 text-success"></div>
                      <div class="ml-3">
                        <div class="text-muted small">Monthly sales</div>
                        <div class="text-large">2362</div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              <div class="col-sm-6 col-xl-3">

                <div class="card mb-4">
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <div class="lnr lnr-earth display-4 text-info"></div>
                      <div class="ml-3">
                        <div class="text-muted small">Monthly visits</div>
                        <div class="text-large">687,123</div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              <div class="col-sm-6 col-xl-3">

                <div class="card mb-4">
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <div class="lnr lnr-gift display-4 text-danger"></div>
                      <div class="ml-3">
                        <div class="text-muted small">Products</div>
                        <div class="text-large">985</div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              <div class="col-sm-6 col-xl-3">

                <div class="card mb-4">
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <div class="lnr lnr-users display-4 text-warning"></div>
                      <div class="ml-3">
                        <div class="text-muted small">Users</div>
                        <div class="text-large">105,652</div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>

            <div class="col-xl-9">

                <div class="row">
                  <div class="col-md-6">

                    <!-- Tasks -->
                    <div class="card mb-4">
                      <h6 class="card-header with-elements">
                        <div class="card-header-title">Tasks</div>
                        <div class="card-header-elements ml-auto">
                          <button type="button" class="btn btn-default btn-xs md-btn-flat">Show more</button>
                        </div>
                      </h6>
                      <div style="height: 234px" id="tasks-inner" class="ps ps--active-y">
                        <div class="card-body">
                          <p class="text-muted small">Today</p>
                          <div class="custom-controls-stacked">
                            <label class="ui-todo-item custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input">
                              <span class="custom-control-label">Buy products</span>
                              <span class="ui-todo-badge badge badge-outline-default font-weight-normal ml-2">58 mins left</span>
                            </label>
                            <label class="ui-todo-item custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input">
                              <span class="custom-control-label">Reply to emails</span>
                            </label>
                            <label class="ui-todo-item custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input">
                              <span class="custom-control-label">Write blog post</span>
                              <span class="ui-todo-badge badge badge-outline-default font-weight-normal ml-2">20 hours left</span>
                            </label>
                            <label class="ui-todo-item custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" checked="">
                              <span class="custom-control-label">Wash my car</span>
                            </label>
                          </div>
                        </div>
                        <hr class="m-0">
                        <div class="card-body">
                          <p class="text-muted small">Tomorrow</p>
                          <div class="custom-controls-stacked">
                            <label class="ui-todo-item custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input">
                              <span class="custom-control-label">Buy antivirus</span>
                            </label>
                            <label class="ui-todo-item custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input">
                              <span class="custom-control-label">Jane's Happy Birthday</span>
                            </label>
                            <label class="ui-todo-item custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input">
                              <span class="custom-control-label">Call mom</span>
                            </label>
                          </div>
                        </div>
                      <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 234px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 149px;"></div></div></div>
                      <div class="card-footer">
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="Type your task">
                          <div class="input-group-append">
                            <button type="button" class="btn btn-primary">Add</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- / Tasks -->

                  </div>
                  <div class="col-md-6">

                    <!-- Team ToDo -->
                    <div class="card mb-4">
                      <h6 class="card-header with-elements">
                        <div class="card-header-title">Team TODO</div>
                        <div class="card-header-elements ml-auto">
                          <button type="button" class="btn btn-default btn-xs md-btn-flat">Show more</button>
                        </div>
                      </h6>
                      <div style="height: 300px" id="team-todo-inner" class="ps ps--active-y">
                        <div class="card-body">
                          <div class="rounded ui-bordered p-3 mb-3">
                            Lorem ipsum dolor sit amet, vis erat denique in, dicunt prodesset te vix.
                            <div class="media align-items-center mt-3">
                              <img src="/products/appwork/v140/assets_/img/avatars/12-small.png" class="d-block ui-w-30 rounded-circle" alt="">
                              <div class="media-body ml-2">Arthur Duncan</div>
                              <div class="text-muted small text-nowrap">02/08/2018</div>
                            </div>
                          </div>
                          <div class="rounded ui-bordered p-3 mb-3">
                            Sit meis deleniti eu, pri vidit meliore docendi ut.
                            <div class="media align-items-center mt-3">
                              <img src="/products/appwork/v140/assets_/img/avatars/11-small.png" class="d-block ui-w-30 rounded-circle" alt="">
                              <div class="media-body ml-2">Belle Ross</div>
                              <div class="text-muted small text-nowrap">02/06/2018</div>
                            </div>
                          </div>
                          <div class="rounded ui-bordered p-3">
                            Cum ea graeci tractatos.
                            <div class="media align-items-center mt-3">
                              <img src="/products/appwork/v140/assets_/img/avatars/10-small.png" class="d-block ui-w-30 rounded-circle" alt="">
                              <div class="media-body ml-2">Wayne Morgan</div>
                              <div class="text-muted small text-nowrap">02/04/2018</div>
                            </div>
                          </div>
                        </div>
                      <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 300px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 223px;"></div></div></div>
                    </div>
                    <!-- / Team ToDo -->

                  </div>
                </div>

              </div>
</div>
<?php 
include ($_SERVER['DOCUMENT_ROOT'].'/admin/VUE/php/Starter/footer.php');
include ($_SERVER['DOCUMENT_ROOT'].'/admin/VUE/php/Starter/script.php');
echo "\n";
?>
</body>
</html>