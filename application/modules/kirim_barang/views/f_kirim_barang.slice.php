@extends('layouts.backend')

@section('title','List Data')

@section('css')
<style type="text/css">
    div.actionBar.content{
        display: none;
    }
</style>
@endsection

@section('content')
    <div class="page-title">
        <div class="title_left">
            <h3><?=($this->uri->segment(2) == 'add') ? 'Add ' : 'Edit '?>Data</h3>
        </div>
        <div class="title_right">
            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                    <button class="btn btn-default" type="button">Go!</button>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
<div class="x_panel">
                  <div class="x_title">
                    <h2>Pengiriman <small>barang</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div id="wizard" class="form_wizard wizard_horizontal">
                      <ul class="wizard_steps anchor">
                        <li>
                          <a href="#step-1" class="selected" isdone="1" rel="1">
                            <span class="step_no">1</span>
                                <span class="step_descr">
                                      Pengirim<br>
                                  <small>Data Pengirim</small>
                              </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-2" class="done" isdone="1" rel="2">
                            <span class="step_no">2</span>
                            <span class="step_descr">
                                      Penerima<br>
                                  <small>Data Penerima</small>
                              </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-3" class="done" isdone="1" rel="3">
                            <span class="step_no">3</span>
                            <span class="step_descr">
                                      Barang<br>
                                  <small>Data Barang</small>
                              </span>
                          </a>
                        </li>
                      </ul>
                    <div class="stepContainer" style="height: 281px;">
                        <form class="form-horizontal form-label-left" id="myForm">
                        <div id="step-1" class="content" style="display: block;">
                        <?php if($this->uri->segment(2) == 'update'): ?>
                             <input type="hidden" name="id" value="<?= decode($this->uri->segment(3))?> ">
                        <?php endif; ?>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12">Nama<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-9 col-xs-12">
                                    <input type="text" name="nama_pengirim" class="form-control" value="<?=isset($pengirim['nama_pengirim'])? $pengirim['nama_pengirim'] : set_value('nama_pengirim');?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12">No. Telpon<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-9 col-xs-12">
                                    <input type="text" name="telpon" class="form-control" value="<?=isset($pengirim['telpon'])? $pengirim['telpon'] : set_value('telpon');?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12">Asal<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-9 col-xs-12">
                                    <input type="text" name="asal" class="form-control" value="<?=isset($pengirim['asal'])? $pengirim['asal'] : set_value('asal');?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12">Alamat<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-9 col-xs-12">
                                    <input type="text" name="alamat" class="form-control" value="<?=isset($pengirim['alamat'])? $pengirim['alamat'] : set_value('alamat');?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12">Kode Pos<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-9 col-xs-12">
                                    <input type="text" name="kode_pos" class="form-control" value="<?=isset($pengirim['kode_pos'])? $pengirim['kode_pos'] : set_value('kode_pos');?>">
                                </div>
                            </div>
                      </div>
                      <div id="step-2" class="content" style="display: none;">
                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Nama Penerima<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-9 col-xs-12">
                                <input type="text" name="nama_pengirim" class="form-control" value="<?=isset($penerima['nama_penerima'])? $penerima['nama_penerima'] : set_value('nama_penerima');?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">No. Telpon<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-9 col-xs-12">
                                <input type="text" name="telpon_penerima" class="form-control" value="<?=isset($penerima['telpon_penerima'])? $penerima['telpon_penerima'] : set_value('telpon_penerima');?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Asal<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-9 col-xs-12">
                                <input type="text" name="asal_penerima" class="form-control" value="<?=isset($penerima['asal_penerima'])? $penerima['asal_penerima'] : set_value('asal_penerima');?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Alamat<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-9 col-xs-12">
                                <input type="text" name="alamat_penerima" class="form-control" value="<?=isset($penerima['alamat_penerima'])? $penerima['alamat_penerima'] : set_value('alamat_penerima');?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Kode Pos<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-9 col-xs-12">
                                <input type="text" name="kode_pos_penerima" class="form-control" value="<?=isset($penerima['kode_pos_penerima'])? $penerima['kode_pos_penerima'] : set_value('kode_pos_penerima');?>">
                            </div>
                        </div>
                      </div>
                      <div id="step-3" class="content" style="display: none;">
                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Nama Barang<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-9 col-xs-12">
                                <input type="text" name="nama_barang" class="form-control" value="<?=isset($barang['nama_barang'])? $barang['nama_barang'] : set_value('nama_barang');?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Keterangan<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-9 col-xs-12">
                                <input type="text" name="keterangan" class="form-control" value="<?=isset($barang['keterangan'])? $barang['keterangan'] : set_value('keterangan');?>">
                            </div>
                        </div>
                      </div>
                    </div>
                    <div class="actionBar">
                        <div class="msgBox">
                            <div class="content">                                
                            </div>
                            <a href="#" class="close">X</a>
                        </div>
                        <div class="loader">Loading</div>
                        <button type="submit" class="buttonFinish btn btn-default" id="save">Finish</button>
                        <a href="#" class="buttonNext btn btn-success">Next</a>
                        <a href="#" class="buttonPrevious btn btn-primary buttonDisabled">Previous</a>
                    </div>
                    </form>
                    </div>
                  </div>
                </div>
        </div>
    </div>
@endsection

@section('script')
<script src="<?=base_url('assets/js/add-update.js')?>"></script>
<script src="<?=base_url('assets/plugins/jquery.smartWizard.js')?>"></script>
@endsection