<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {
    function __construct(){
            parent::__construct();
            $this->load->library('ssp');
    }

    function data() {
            $table = 'tabel_siswa';
            $primaryKey = 'siswa_nim';
            $columns = array(
                array('db' => 'siswa_nim', 'dt' => 'siswa_nim'),
                array('db' => 'siswa_nama', 'dt' => 'siswa_nama'),
                array('db' => 'siswa_tpt_lahir', 'dt' => 'siswa_tpt_lahir'),
                array('db' => 'siswa_tgl_lahir', 'dt' => 'siswa_tgl_lahir'),
                array(
                    'db' => 'siswa_nim',
                    'dt' => 'aksi',
                    'formatter' => function( $d) {
                        return "<a href='edit.php?id=$d'>EDIT</a>";
                    }
                )
            );
            $sql_details = array(
                'user' => $this->db->username,
                'pass' => $this->db->password,
                'db' => $this->db->database,
                'host' => $this->db->hostname
            );
     
            echo json_encode(
                    SSP::simple($_GET, $sql_details, $table, $primaryKey, $columns)

                    //https://pastebin.com/e95fVdGU
            );
        }


        function index(){
            $this->template->load('template/template', 'siswa/list');
        }
	}


