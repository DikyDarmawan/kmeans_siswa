<?php
class ClusteringKMean {
      private $objek = array();
      private $centroidCluster = null;
      private $cekObjCluster = null;
      
      public function __construct($obj,$cnt) {
            $this->centroidCluster = $cnt; 
            for ($i=0;$i<count($obj);$i++){
                  $this->objek[$i] = new objek($obj[$i]);
				  $this->cekObjCluster[$i] = 0;
            }
      }
      
      public function setClusterObjek($itr){               
            echo "</br></br>
            <table width='1000' cellpadding=50 cellspacing=0>
                        <tr><th colspan='100'>ITERASI ".$itr."</th></tr>

						<tr><th>Objek</th>";
      //=====>Header Tabel            
                    
            for ($j=0;$j<count($this->centroidCluster);$j++){//3
                  echo "<th>Cluster ".($j+1)."</th>";
            }            
            echo "</tr>";

      //=====>Isi Tabel objek

            for ($i=0;$i<count($this->objek);$i++){//33
                  $this->objek[$i]->setCluster($this->centroidCluster);//0
				   echo "<tr><td>Siswa ".($i+1)."</td>";

      //=====>Isi Tabel Cluster           
                  for ($j=0;$j<count($this->centroidCluster);$j++){
                        if ($j == $this->objek[$i]->getCluster())
            echo "<td>V</td>";//===> jika benar akan terisi v
                        else  echo "<td>&nbsp;</td>";//===> jika salah akan kosong
                  }                  
                  echo "</tr>";
            }
            echo "</table><br><br>";
      //=====>tutup tabel 
      
      //=====>untuk mengatur banyaknya iterasi         
            $cek = TRUE;
            for ($i=0;$i<count($this->cekObjCluster);$i++){
                  if ($this->cekObjCluster[$i]!=$this->objek[$i]->getCluster()){
                        $cek = FALSE;
                        break;
                  }
            }            
           if ((!($cek))&&($itr<20)){
                  for ($i=0;$i<count($this->cekObjCluster);$i++){
                        $this->cekObjCluster[$i] = $this->objek[$i]->getCluster();
                  }
                  $this->setCentroidCluster();
                  $this->setClusterObjek($itr+1);
            }else{
                        for ($i=0;$i<count($this->centroidCluster);$i++){
                              
                              echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                              Cluster ".($i+1)." => <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                              for ($j=0;$j<count($this->centroidCluster[$i]);$j++){
                                    echo $this->centroidCluster[$i][$j]."&nbsp;&nbsp;";
                              }
                              echo "<br>";
                              
                        }
                  }         
      }
        
      private function setCentroidCluster(){
           for ($i=0;$i<count($this->centroidCluster);$i++){
            echo "<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Cluster ".($i+1)." => 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                 $countObj = 0;
                 $x = array();            
                 for ($j=0;$j<count($this->objek);$j++){
                       if ($this->objek[$j]->getCluster()==$i){                      
                             for ($k=0;$k<count($this->objek[$j]->data);$k++){
                                    $x[$k] += $this->objek[$j]->data[$k];                                    
                                           }
                             $countObj++;
                       }
                 }
                
                 for ($k=0;$k<count($this->centroidCluster[$i]);$k++){
                  echo $this->centroidCluster[$i][$k].";&nbsp;&nbsp;&nbsp;";
                                 if ($countObj>0)
                                          $this->centroidCluster[$i][$k] = $x[$k]/$countObj;
                                 else{
                                          echo "<font color='red'>Terdapat ketidaksesuaian Nilai Awal Cluster</font><br>";
                                          break;
                                 }                                
                 }

           } 
}      
}

?>
