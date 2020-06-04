<?php



class Menu extends CI_Controller {

   


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Ubahselesai_model');
        $this->load->model('Ubahproduk_model');
        $this->load->model('Selesai_model');
        $this->load->library('form_validation');
    }

    public function index(){
        if ($this->session->userdata('status') != "login") {
            redirect("auth");
        }else{
        $data['pelanggan'] = $this->db->count_all('pelanggan');
        $data['petugas'] = $this->db->count_all('user');
        $data['trans'] = $this->db->count_all('transaksi');
       
        $data['title'] = "Home";
        $this->load->view("templates/nav",$data);
        $this->load->view("templates/side");
        $this->load->view("menu/index");
        $this->load->view("templates/foot");
        }
        
    }

    public function hapuscustomer($id_pelanggan)
    {
        if ($this->session->userdata('status') != "login") {
            redirect("auth");
        }else{
        // $this->db->where('id', $id);
        $this->session->set_flashdata('flash', 'Dihapus');
       
        $this->db->delete('pelanggan', ['id_pelanggan' => $id_pelanggan]);
        redirect('menu/customer');
        }
    }
    public function customer(){
        if ($this->session->userdata('status') != "login") {
            redirect("auth");
        }else{

        $data['pel'] = $this->db->get('pelanggan')->result_array();
        $this->form_validation->set_rules('id_pelanggan', 'Id_pelanggan', 'required');
        $this->form_validation->set_rules('nama_pelanggan', 'Nama_pelanggan', 'required');
      
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('tlp', 'Tlp', 'required');


        if ($this->form_validation->run() ==  false) {

            $data['title'] = "Home";
            $this->load->view("templates/nav",$data);
            $this->load->view("templates/side");
            $this->load->view("menu/customer");
            $this->load->view("templates/foot");
        }else{
            $data = [
                'id_pelanggan' => $this->input->post('id_pelanggan'),
                'nama_pelanggan' => $this->input->post('nama_pelanggan'),
                'tlp' => $this->input->post('tlp'),
                'alamat' => $this->input->post('alamat')
            ];
            $this->db->insert('pelanggan', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Masuk</div>');
            redirect('menu/customer');
        }
    }
    }


  

    public function editproduk(){
        $nama_produk = $this->input->post('nama_produk');
        $id_produk = $this->input->post('id_produk');
        $harga = $this->input->post('harga');

        $data = array(
            'id_produk' => $id_produk,
            'nama_produk' => $nama_produk,
            'harga' => $harga     
    
        );
    
        $where = array(
            'id_produk' => $id_produk
        );
        $this->Ubahproduk_model->ubahdata($where, $data, 'mahasiswa');
        $this->session->set_flashdata('success', 'Berhasil diubah...!');
        redirect('menu/produk');
    }

    public function produk(){

        if ($this->session->userdata('status') != "login") {
            redirect("auth");
        }else{
        $data['pro'] = $this->db->get('produk')->result_array();
        $this->form_validation->set_rules('id_produk', 'id_Produk', 'required');
        $this->form_validation->set_rules('nama_produk', 'Nama_Produk', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required');
        if ($this->form_validation->run() ==  false) {
        $data['title'] = "Home";
        $this->load->view("templates/nav",$data);
        $this->load->view("templates/side");
      
        $this->load->view("menu/produk");
        $this->load->view("templates/foot");   
    }else{
        $data = [
            'id_produk' => $this->input->post('id_produk'),
            'nama_produk' => $this->input->post('nama_produk'),
            'harga' => $this->input->post('harga')
          
        ];
        $this->db->insert('produk', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Masuk</div>');
        redirect('menu/produk');
    }
}
    }

    public function hapus($id_produk)
    {
        if ($this->session->userdata('status') != "login") {
            redirect("auth");
        }else{
        // $this->db->where('id', $id);
        $this->session->set_flashdata('flash', 'Dihapus');
       
        $this->db->delete('produk', ['id_produk' => $id_produk]);
        redirect('menu/produk');
        }
    }

    public function hapusproses($id_transaksi)
    {
        if ($this->session->userdata('status') != "login") {
            redirect("auth");
        }else{
        // $this->db->where('id', $id);
        $this->session->set_flashdata('flash', 'Dihapus');
       
        $this->db->delete('transaksi', ['id_transaksi' => $id_transaksi]);
        redirect('menu/proses');
        }
    }

    public function proses(){
        if ($this->session->userdata('status') != "login") {
            redirect("auth");
        }else{ 
           
            $data['pel'] = $this->db->query("select nama_pelanggan,id_pelanggan from pelanggan")->result_array();
            $data['pro'] = $this->db->query("select nama_produk,id_produk from produk")->result_array();
        $data['proses']=$this->db->query("select transaksi.id_transaksi, produk.id_produk, nama_pelanggan,nama_produk,berat,(berat *harga) as total,tgl_masuk,deadline,tlp,alamat from transaksi inner join pelanggan,produk where transaksi.id_pelanggan = pelanggan.id_pelanggan and transaksi.id_produk = produk.id_produk and status='Pending'")->result_array();
  
        $this->form_validation->set_rules('id_pelanggan', 'Id_pelanggan', 'required');
        $this->form_validation->set_rules('id_produk', 'id_Produk', 'required');
        $this->form_validation->set_rules('berat', 'Berat', 'required');
        $this->form_validation->set_rules('tgl_masuk', 'Tgl_masuk', 'required');
        $this->form_validation->set_rules('deadline', 'deadline', 'required');


        if ($this->form_validation->run() ==  false) {

        $data['title'] = "Home";
        $this->load->view("templates/nav",$data);
        $this->load->view("templates/side");
        $this->load->view("menu/proses",$data);
        $this->load->view("templates/foot");
    }else{
        $data = [
            'id_produk' => $this->input->post('id_produk'),
            'berat' => $this->input->post('berat'),
            'tgl_masuk' => $this->input->post('tgl_masuk'),
            'deadline' => $this->input->post('deadline'),
            'id_pelanggan' => $this->input->post('id_pelanggan'),
            'status' => "Pending",
        ];
        $this->db->insert('transaksi', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Masuk</div>');
        redirect('menu/proses');
    }
}
    }
    public function selesai(){
        if ($this->session->userdata('status') != "login") {
            redirect("auth");
        }else{
        $data['selesai']=$this->db->query("select tlp,transaksi.id_transaksi,nama_pelanggan,berat,(berat *harga) as total,deadline from transaksi inner join pelanggan,produk where transaksi.id_pelanggan = pelanggan.id_pelanggan and transaksi.id_produk = produk.id_produk and status='Pending'")->result_array();

        $data['title'] = "Home";
        $this->load->view("templates/nav",$data);
        $this->load->view("templates/side");
        $this->load->view("menu/selesai");
        $this->load->view("templates/foot");
        }
    }
    public function ubahselesai($id_transaksi){
       
        if ($this->session->userdata('status') != "login") {
            redirect("auth");
        }else{
        $status = $this->input->post('status');
        $data = array(
                     'status' => "Completed"
         );
         $where = array(
            'id_transaksi' => $id_transaksi
        );
        $this->Ubahselesai_model->ubahDataSelesai($where, $data, 'transaksi');
        $this->session->set_flashdata('success', 'Berhasil diubah...!');
        redirect('menu/selesai');
    }
    }

    public function complete(){
        if ($this->session->userdata('status') != "login") {
            redirect("auth");
        }else{
        $data['com']=$this->db->query("select transaksi.id_transaksi,nama_pelanggan,berat,(berat *harga) as total,deadline from transaksi inner join pelanggan,produk where transaksi.id_pelanggan = pelanggan.id_pelanggan and transaksi.id_produk = produk.id_produk and status='Completed'")->result_array();

        $data['title'] = "Home";
        $this->load->view("templates/nav",$data);
        $this->load->view("templates/side");
        $this->load->view("menu/complete");
        $this->load->view("templates/foot");
        }
    }

public function excel_export(){


    $data['com']=$this->db->query("select transaksi.id_transaksi,nama_pelanggan,berat,(berat *harga) as total,deadline,status from transaksi inner join pelanggan,produk where transaksi.id_pelanggan = pelanggan.id_pelanggan and transaksi.id_produk = produk.id_produk and status='Completed'")->result_array();

    require(APPPATH.'PHPExcel-1.8/Classes/PHPExcel.php');
    require(APPPATH.'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

    // $objPHPExcel = new PHPExcel();
    // $objPHPExcel->getProperties()->setCreator("Gorbyno Sitepu");
    // $objPHPExcel->getProperties()->setLastModifiedBy("Gorbyno Sitepu");
    // $objPHPExcel->getProperties()->setTitle("Data Transaksi");
    // $objPHPExcel->getProperties()->setSubject("");
    // $objPHPExcel->getProperties()->setDescription("");

    // $objPHPExcel->setActiveSheetIndex(0);

    // $objPHPExcel->getActiveSheet()->setCellValue('A1','NO');
    // $objPHPExcel->getActiveSheet()->setCellValue('B1','ID Transaksi');
    // $objPHPExcel->getActiveSheet()->setCellValue('C1','Nama Pelanggan');
    // $objPHPExcel->getActiveSheet()->setCellValue('D1','Berat');
    // $objPHPExcel->getActiveSheet()->setCellValue('E1','Total Harga');
    // $objPHPExcel->getActiveSheet()->setCellValue('F1','Deadline');
    
    
    //               $baris = 2;
    //                 $x =1;
    //             foreach ($data['com'] as $data) {
    //                $objPHPExcel->getActiveSheet()->setCellValue('A'.$baris,$x);
    //                $objPHPExcel->getActiveSheet()->setCellValue('B'.$baris,$data['id_transaksi']);
    //                $objPHPExcel->getActiveSheet()->setCellValue('C'.$baris,$data['nama_pelanggan']);
    //                $objPHPExcel->getActiveSheet()->setCellValue('D'.$baris,$data['berat']);
    //                $objPHPExcel->getActiveSheet()->setCellValue('E'.$baris,$data['total']);
    //                $objPHPExcel->getActiveSheet()->setCellValue('F'.$baris,$data['deadline']);
            
            
    //                $x++;
    //                $baris++;
    //             }

    $objPHPExcel = new PHPExcel();

    $objPHPExcel->setActiveSheetIndex(0)
                ->setCellValue('A1', 'No')
                ->setCellValue('B1', 'ID Transaksi')
                ->setCellValue('C1', 'Nama Pelanggan')
                ->setCellValue('D1', 'Berat')
                ->setCellValue('E1', 'Total Harga')
                ->setCellValue('F1', 'Deadline')
                ->setCellValue('G1', 'STATUS');
                $kolom = 2;
                $nomor = 1;
                foreach($data['com'] as $pengguna) {
      
                     $objPHPExcel->setActiveSheetIndex(0)
                                 ->setCellValue('A' . $kolom, $nomor)
                                 ->setCellValue('B' . $kolom, $pengguna['id_transaksi'])
                                 ->setCellValue('C' . $kolom, $pengguna['nama_pelanggan'])
                                 ->setCellValue('D' . $kolom, $pengguna['berat'])
                                 ->setCellValue('E' . $kolom, $pengguna['total'])
                                 ->setCellValue('F' . $kolom, $pengguna['deadline'])
                            
                                 ->setCellValue('G' . $kolom, $pengguna['status']);
      
                     $kolom++;
                     $nomor++;
      
                }
      

  

   $filename="Data-Transaksi".date("d-m-Y-H-i-s").'.csv';

    $objPHPExcel->getActiveSheet()->setTitle("Data Transaksi");
// Proses file excel
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
  header('Content-Disposition: attachment; filename=' .$filename);
  header('Cache-Control: max-age=0');

    $writer=PHPExcel_IOFactory::createWriter($objPHPExcel,'Excel2007');
    $writer->save('php://output');

    exit;
        

}

    public function informasi(){
        if ($this->session->userdata('status') != "login") {
            redirect("auth");
        }else{
        $data['title'] = "Home";
        $this->load->view("templates/nav",$data);
        $this->load->view("templates/side");
        $this->load->view("menu/informasi");
        $this->load->view("templates/foot");
        }
    }


    public function voice(){
       
        if ($this->session->userdata('status') != "login") {
            redirect("auth");
        }else{
            $data['voice'] = $this->Selesai_model->postvoice();
        $data['title'] = "Home";
        $this->load->view("templates/nav",$data);
        $this->load->view("templates/side");
        $this->load->view("menu/informasi");
        $this->load->view("templates/foot");
        }
    }


    public function tampil()
    {
        $data['tes'] = $this->Selesai_model->getAll();
        $this->load->view("menu/tampil",$data);
       
    }


    public function logout(){
        $this->session->unset_userdata('email');
        
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out!</div>');
       

         redirect('auth/');
    }
}