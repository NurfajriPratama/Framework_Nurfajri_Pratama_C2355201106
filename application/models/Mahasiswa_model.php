<?php

class Mahasiswa_model extends CI_Model {
  public function getAllMahasiswa()
  {
    return $this->db->get('mahasiswa')->result_array();
  }
  public function ubahDataMahasiswa()
  {
    $data = [
          "kode" => $this->input->post('kode', true),
          "matakuliah" => $this->input->post('matakuliah', true),
          "sks" => $this->input->post('sks', true),
          "semester" => $this->input->post('semester', true),
          "jurusan" => $this->input->post('jurusan', true),
    ];
    $this->db->where('id', $this->input->post('id'));
    $this->db->update('mahasiswa', $data);
  }
  public function hapusDataMahasiswa($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('mahasiswa');
  }
}