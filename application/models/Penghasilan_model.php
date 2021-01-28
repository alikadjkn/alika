<?php

class Penghasilan_model extends CI_Model
{
    public function getPenghasilan($nip, $thn)
    {
        return $this->db->query("
        SELECT a.bulan,a.tahun,a.netto AS netto1,
                            b.netto AS netto2,
                            c.netto AS netto3,
                            d.netto AS netto4,
                            e.netto AS netto5,
                            f.bulan AS nama_bulan FROM 
                            view_gaji a LEFT JOIN view_kurang b ON a.nip=b.nip AND a.bulan=b.bulan AND a.tahun=b.tahun 
                                        LEFT JOIN data_makan c ON a.nip=c.nip AND a.bulan=c.bulan AND a.tahun=c.tahun 
                                        LEFT JOIN data_lembur d ON a.nip=d.nip AND a.bulan=d.bulan AND a.tahun=d.tahun 
                                        LEFT JOIN view_tukin e ON a.nip=e.nip AND a.bulan=e.bulan AND a.tahun=e.tahun 
                                        LEFT JOIN ref_bulan f ON a.bulan=f.kode WHERE a.nip='$nip' AND a.tahun='$thn'")->result_array();
    }

    public function getTahun($nip)
    {
        return $this->db->query("SELECT DISTINCT tahun FROM view_gaji WHERE nip='$nip' ORDER BY tahun DESC")->result_array();
    }

    public function getPenghasilanTahunan($nip, $tahun)
    {
        return $this->db->query("
        SELECT a.bulan,a.tahun,a.bruto AS bruto1,a.potongan AS potongan1,a.netto AS netto1,
                            b.bruto AS bruto2,b.potongan AS potongan2,b.netto AS netto2,
                            c.bruto AS bruto3,c.pph AS potongan3,c.netto AS netto3,
                            d.bruto AS bruto4,d.pph AS potongan4,d.netto AS netto4,
                            e.bruto AS bruto5,e.potongan AS potongan5,e.netto AS netto5,
                            f.bulan AS nama_bulan FROM 
                            view_gaji a LEFT JOIN view_kurang b ON a.nip=b.nip AND a.bulan=b.bulan AND a.tahun=b.tahun 
                                        LEFT JOIN data_makan c ON a.nip=c.nip AND a.bulan=c.bulan AND a.tahun=c.tahun 
                                        LEFT JOIN data_lembur d ON a.nip=d.nip AND a.bulan=d.bulan AND a.tahun=d.tahun 
                                        LEFT JOIN view_tukin e ON a.nip=e.nip AND a.bulan=e.bulan AND a.tahun=e.tahun 
                                        LEFT JOIN ref_bulan f ON a.bulan=f.kode WHERE a.nip='$nip' AND a.tahun='$tahun'")->result_array();
    }
}
