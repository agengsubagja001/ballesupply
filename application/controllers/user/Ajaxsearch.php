<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajaxsearch extends CI_Controller {

 function index()
 {
  $this->load->view('user/landing_page');
 }

 function fetch()
 {
  $output = '';
  $query = '';
  $this->load->model('ajaxsearch_model');
  if($this->input->post('query'))
  {
   $query = $this->input->post('query');
  }
  $data = $this->ajaxsearch_model->fetch_data($query);
  $output .= '
    <div class="col-6 col-md-2 p-1">
        <a href="" class="" data-toggle="modal" data-target="#mdl_produk">
            <div class="card" style="height:336px; background: #FAFAFA; box-shadow: 0px -7px 80px rgba(0, 0, 0, 0.07), 0px -2.92443px 33.4221px rgba(0, 0, 0, 0.0503198), 0px -1.56354px 17.869px rgba(0, 0, 0, 0.0417275), 0px -0.876509px 10.0172px rgba(0, 0, 0, 0.035), 0px -0.465507px 5.32008px rgba(0, 0, 0, 0.0282725), 0px -0.193708px 2.21381px rgba(0, 0, 0, 0.0196802);">
                <img src="'.<?php echo base_url().'assets/gambar_utama/' ?>.'" class="img-fluid" alt="...">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <p class="card-text" style="height: 34px; left: 70px; top: 2285px; font-family: Inter; font-style: normal; font-weight: 300; font-size: 14px; line-height: 18px; display: flex; align-items: center; color: #222222;">nama produk</p>
                        </div>
                            <div class="col-md-12 d-flex justify-content-start" style="bottom: 0;position: absolute;">
                                <p class="card-text" style="height: 34px; left: 70px; top: 2351px; font-family: Inter; font-style: normal; font-weight: 500; font-size: 16px; line-height: 24px; display: flex; align-items: center; color: #222222;">Rp. 500.000</p>
                            </div>
                        <div class="col-md-12 d-flex justify-content-end " style="bottom: 0;position: absolute;">
                            <button type="button" class="btn btn-warning" style="width:40px; height:40px; border-radius: 100%; right: 123px; top: 1288px; background: #FDD922; border: 2px solid #FAFAFA; box-shadow: 0px 134px 195px rgba(0, 0, 0, 0.07), 0px 48.9122px 71.1782px rgba(0, 0, 0, 0.0482987), 0px 23.746px 34.5557px rgba(0, 0, 0, 0.0389404), 0px 11.6407px 16.9398px rgba(0, 0, 0, 0.0310596), 0px 4.60276px 6.69804px rgba(0, 0, 0, 0.0217013);"><i class="fa fa-shopping-cart" aria-hidden="true"></i></button>   
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
  ';
  if($data->num_rows() > 0)
  {
   foreach($data->result() as $row)
   {
    $output .= '
    <div class="col-6 col-md-2 p-1">
      <a href="" class="" data-toggle="modal" data-target="#mdl_produk<?php echo $pdk->id_produk ?>">
          <div class="card" style="height:336px; background: #FAFAFA; box-shadow: 0px -7px 80px rgba(0, 0, 0, 0.07), 0px -2.92443px 33.4221px rgba(0, 0, 0, 0.0503198), 0px -1.56354px 17.869px rgba(0, 0, 0, 0.0417275), 0px -0.876509px 10.0172px rgba(0, 0, 0, 0.035), 0px -0.465507px 5.32008px rgba(0, 0, 0, 0.0282725), 0px -0.193708px 2.21381px rgba(0, 0, 0, 0.0196802);">
              <img src="'.<?php echo base_url().'assets/gambar_utama/' .$pdk->foto_utama ?>.'" class="img-fluid" alt="...">
              <div class="card-body">
                  <div class="row">
                      <div class="col-md-12">
                          <p class="card-text" style="height: 34px; left: 70px; top: 2285px; font-family: Inter; font-style: normal; font-weight: 300; font-size: 14px; line-height: 18px; display: flex; align-items: center; color: #222222;">'.<?php echo $pdk->nama_produk ?>.'</p>
                      </div>
                          <div class="col-md-12 d-flex justify-content-start" style="bottom: 0;position: absolute;">
                              <p class="card-text" style="height: 34px; left: 70px; top: 2351px; font-family: Inter; font-style: normal; font-weight: 500; font-size: 16px; line-height: 24px; display: flex; align-items: center; color: #222222;">'Rp .<?php echo $pdk->berat ?>.' ></p>
                          </div>
                      <div class="col-md-12 d-flex justify-content-end " style="bottom: 0;position: absolute;">
                          <button type="button" class="btn btn-warning" style="width:40px; height:40px; border-radius: 100%; right: 123px; top: 1288px; background: #FDD922; border: 2px solid #FAFAFA; box-shadow: 0px 134px 195px rgba(0, 0, 0, 0.07), 0px 48.9122px 71.1782px rgba(0, 0, 0, 0.0482987), 0px 23.746px 34.5557px rgba(0, 0, 0, 0.0389404), 0px 11.6407px 16.9398px rgba(0, 0, 0, 0.0310596), 0px 4.60276px 6.69804px rgba(0, 0, 0, 0.0217013);"><i class="fa fa-shopping-cart" aria-hidden="true"></i></button>   
                      </div>
                  </div>
              </div>
          </div>
      </a>
  </div>
    ';
   }
  }
  else
  {
   $output .= '<tr>
       <td colspan="5">No Data Found</td>
      </tr>';
  }
  $output .= '</table>';
  echo $output;
 }
 
}
