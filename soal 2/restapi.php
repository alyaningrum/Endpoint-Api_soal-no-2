<?php

    include "koneksi.php";

    $response = array(); 
    if($connect) {
      $sql = "SELECT * FROM m_karyawan,m_jabatan,m_keluarga
      WHERE m_jabatan.KD_JABATAN = m_karyawan.KD_JABATAN AND m_karyawan.NO_BADGE = m_keluarga.NO_BADGE";
      $result = mysqli_query($connect,$sql);
         header("content-Type: JSON");
         $i=0;
         while($row = mysqli_fetch_assoc($result)){
            $response[$i]['NO_BADGE'] = $row ['NO_BADGE'];
            $response[$i]['NAMA'] = $row ['NAMA'];
            $response[$i]['SALUTATION'] = $row ['SALUTATION'];
            $response[$i]['TEMPAT_LAHIR'] = $row ['TEMPAT_LAHIR'];
            $response[$i]['DATE_OF_BIRTH'] = $row ['DATE_OF_BIRTH'];
            $response[$i]['JK'] = $row ['JK'];
            $response[$i]['STATUS_KAWIN'] = $row ['STATUS_KAWIN'];
            $response[$i]['UNIT_KERJA'] = $row ['UNIT_KERJA'];
            $response[$i]['KD_JABATAN'] = $row ['KD_JABATAN'];
            $response[$i]['STATUS'] = $row ['STATUS'];
            $response[$i]['KD_JABATAN'] = $row ['KD_JABATAN'];
            $response[$i]['DESC'] = $row ['DESC'];
            $response[$i]['RANK'] = $row ['RANK'];
            $response[$i]['FAMILY_ID'] = $row ['FAMILY_ID'];
            $response[$i]['NO_BADGE'] = $row ['NO_BADGE'];
            $response[$i]['RELATIVE_ID'] = $row ['RELATIVE_ID'];
            $response[$i]['RELATIVE'] = $row ['RELATIVE'];
            $response[$i]['NAMA'] = $row ['NAMA'];
            $response[$i]['GENDER'] = $row ['GENDER'];
            $i++;
         }
         $response = array(
            "EMP"
            => $response
         );
      }
    echo json_encode($response,JSON_PRETTY_PRINT);
?>