<?php
    // author_  누가
    // date_    2020.05.25
    // file_    getList_soo.php
    // program_ 수영로 설교 리스트 파싱
    // param_   lcode: 카테고리 / mcode : 설교구분 / writerType : 설교자구분 / targetNum : 리스트출력순서

    try {
        $lcode = $_POST['lcode'];
        $mcode = $_POST['mcode'];
        $writerType = $_POST['writerType'];
        $targetNum = $_POST['targetNum'];
        
        // Web Json 읽어오기
        $url = 'https://www.sooyoungro.org/new-layout/syrtv/HomWorshipTextServiceList.jsp?lcode='.$lcode.'&mcode='.$mcode.'&writerType='.$writerType.'&targetnum='.$targetNum;
        $json_string = file_get_contents($url);
        $R = json_decode($json_string, true);
        $listData = $R['company']['member'];

        $result['data'] = $listData;
    }
    catch(exception $e) {
		$result['msg']		= $e->getMessage();
		$result['code']		= $e->getCode();
    }
    finally {
        echo json_encode($result,JSON_PRETTY_PRINT);
    }
    /* 배열 foreach
    foreach ($listData as $rowKey => $rowData) {
        echo '<tr>';
        echo '    <td>'.$rowData['regdateFm'].'</td>';
        echo '    <td>'.$rowData['writer'].'</td>';
        echo '    <td>'.$rowData['wortitle'].'</td>';
        echo '    <td>'.$rowData['bible'].'</td>';
        echo '    <td>'.$rowData['seq'].'</td>';
        echo '<tr>';
    }
    */
?>